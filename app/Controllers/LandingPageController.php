<?php namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Controller;

class LandingPageController extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();

        // Load pagination library
        $pager = service('pager');

        // Define items per page
        $perPage = 5;

        // Get page number from query string
        $page = $this->request->getVar('page') ?: 1;

        // Fetch paginated results
        $data['artikel'] = $model->paginate($perPage, 'group1');
        $data['pager'] = $model->pager;

        return view('landing_page', $data);
    }
}
