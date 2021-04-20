<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Users</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-css" action="">
                        <p class="mt-4 form-p">USERS INFORMATION</p>
                        <div class="bottom-px px-md-4 px-0 mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="odyssey">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Mail</label>
                                    <input type="email" class="form-control" placeholder="odyssey@odyssey-ks.com">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="*********">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="*********">
                                </div>
                                <div class="col-lg-12">
                                    <label class="">Choose Image</label>
                                    <input type="file" name="files" required>
                                </div>
                            </div>
                        </div>
                        <button class="btn button-main btn-active mt-3 float-right">ADD USER</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4 mt-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Table Users</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Password</th>
                                    <th>Img</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <!-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot> -->
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td><img src="Views/assets/img/undraw_profile.svg" class="img-thumbnail" alt=""
                                            width="40px"></td>
                                    <td><button class="btn ">Active</button></td>
                                    <td>
                                        <div class="f-focus d-flex">
                                            <button class="btn f-focus" data-toggle="modal" data-target="#edit-users">
                                                <img src="Views/assets/img/edit-blue.svg" width="20px" height="20px"
                                                    alt="">
                                            </button>
                                            <button class="btn f-focus">
                                                <img src="Views/assets/img/x.svg" width="23px" height="23px" alt="">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Users Modal-->
<div class="modal fade" id="edit-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">EDIT USERS</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-css" action="">
                    <p class="mt-4 form-p">USERS INFORMATION</p>
                    <div class="bottom-px px-4 mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="odyssey">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Mail</label>
                                <input type="email" class="form-control" placeholder="odyssey@odyssey-ks.com">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="*********">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="*********">
                            </div>
                            <div class="col-lg-12">
                                <label class="">Choose Image</label>
                                <input type="file" name="files" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn button-main btn-close" type="button" data-dismiss="modal">CANCEL</button>
                <a class="btn button-main btn-active" href="login">EDIT USERS</a>
            </div>
        </div>
    </div>
</div>