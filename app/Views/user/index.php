<?= $this->extend('layout/template.php') ?>

<?= $this->section('content') ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <a class="btn btn-primary" href="<?= base_url('user/create'); ?>" role="button">Add User Login</a>
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <?php endif; ?>
                </div>
		  
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    List Data User Login
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 175px; padding:3px 0">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr style="text-align:center">
                            <th style="width: 10px">#</th>
                            <th>User Name</th>
                            <th>User Role</th>
                            <th>User Email</th>
                            <th>Last Login</th>
                            <th>Last Update</th>
                            <th style="width: 130px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $row) { ?>
                      <tr>
                        <td>1</td>
                        <td><?= $row->username;?></td>
                        <td><?= $row->name;?></td>
                        <td></td>
                        <td style="text-align:center"><?= $row->updated_at;?></td>
                        <td style="text-align:center"></td>
                        <td><a title="Edit" href="<?= base_url("user/view/$row->username"); ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            <a title="Edit" href="<?= base_url("user/edit/$row->username"); ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
                            <a title="Delete" href="<?= base_url("user/delete/$row->username") ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
       </div>

<?= $this->endSection() ?>