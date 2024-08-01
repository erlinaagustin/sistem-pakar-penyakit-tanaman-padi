<?php namespace App\Controllers;

use \Myth\Auth\Entities\User;
use \Myth\Auth\Authorization\GroupModel;
use \Myth\Auth\Config\Auth as AuthConfig;
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Password;


class UsersController extends BaseController
{
    protected $auth;
 
    protected $config;
     
    public function __construct()
    {
        $this->config = config('Auth');
        $this->auth = service('authentication');
    }

    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
 
        $data['title'] = 'Users';
        return view('users/index', $data);
    }
 
    public function activate()
    {
        $userModel = new UserModel();
 
        $data = [ 
            'activate_hash' => null,
            'active' => $this->request->getVar('active') == '0' || '' ? '1' : '0',
        ];
        $userModel->update($this->request->getVar('id'), $data);        
 
        return redirect()->to(base_url('/users/index'));
 
    }
 
    public function changePassword($id = null)
    {
        if ($id==null) 
        {
            return redirect()->to(base_url('/users/index'));
        } else
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
            ];
            return view('users/set_password', $data);            
        }
    }
 
    public function setPassword()
    {
        $id = $this->request->getVar('id');
        $rules = [
            'password'     => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];
 
        if (! $this->validate($rules))
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
                'validation' => $this->validator,
            ];
 
            return view('users/set_password', $data);
        }
        else
        {
            $userModel = new UserModel();
            $data = [            
                'password_hash' => Password::hash($this->request->getVar('password')),
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
            ];
            $userModel->update($this->request->getVar('id'), $data);  
 
            return redirect()->to(base_url('/users/index'));
        }
    }

    public function tambah()
    {        
    
        $data = [            
            'title' => 'Add Users',
            'config' => $this->config,
    
        ];
    
        return view('tambah_user', $data);            
    }

    public function simpan()
    {
        $users = model(UserModel::class);
    
        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
        ];
    
        if (! $this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    
        $rules = [
            'password'     => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];
    
        if (! $this->validate($rules))
        {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    
        // Save the user
        $allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
        $user = new User($this->request->getPost($allowedPostFields));
    
        $this->config->requireActivation === null ? $user->activate() : $user->generateActivateHash();
    
        // Ensure default group gets assigned if set
        if (! empty($this->config->defaultUserGroup)) {
            $users = $users->withGroup($this->config->defaultUserGroup);
        }
    
        if (! $users->save($user))
        {
            return redirect()->back()->withInput()->with('errors', $users->errors());
        }
    
        if ($this->config->requireActivation !== null)
        {
            $activator = service('activator');
            $sent = $activator->send($user);
    
            if (! $sent)
            {
                return redirect()->back()->withInput()->with('error', $activator->error() ?? lang('Auth.unknownError'));
            }
    
            // Success!
            return redirect()->to(base_url('kelola-akun'));
        }
    
        // Success!
        return redirect()->to(base_url('kelola-akun'));
    }
    
}