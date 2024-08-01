<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Aktif</th>
                                            <th style="width: 90px;"></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Aktif</th>
                                            <th style="width: 90px;"></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($users as $row): ?>
                                        <tr>
                                        <td><?= $row->id; ?></td>
                                            <td><?= $row->username; ?></td>
                                            <td><?= $row->email; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-circle btn-active-users" data-id="<?= $row->id;?>" data-active="<?= $row->active == 1 ? 1 : 0 ;?>" title="Klik untuk Mengaktifkan atau Menonaktifkan">
                                                <?= $row->active == 1 ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-times-circle"></i>' ; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>/users/changePassword/<?= $row->id;?>" class="btn btn-warning btn-circle btn-sm" title="Ubah Password" >
                                                    <i class="fas fa-key"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-circle btn-sm btn-change-role" data-id="<?= $row->id;?>" title="Ubah Role">
                                                    <i class="fas fa-tasks"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>