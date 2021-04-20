<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clients</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-css" action="">
                        <p class="mt-4 form-p">CLIENTS INFORMATION</p>
                        <div class="bottom-px px-md-4 px-0 mt-4">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="odyssey">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control textarea-editor" rows="3"></textarea>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="">Choose Image</label>
                                    <input type="file" name="files" required>
                                </div>
                            </div>
                        </div>
                        <button class="btn button-main btn-active mt-3 float-right">ADD CLIENTS</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4 mt-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Table Clients</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Img</th>
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
                                    <td>
                                        <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sequi culpa
                                        ratione soluta odit illum possimus dicta libero quaerat consectetur commodi
                                        eaque quia veniam beatae, eum, sint dolorem repudiandae nesciunt?
                                        </p>
                                    </td>
                                    <td>
                                        <img src="Views/assets/img/undraw_profile.svg" class="img-thumbnail" alt=""
                                            width="40px">
                                    </td>
                                    <td>
                                        <div class="f-focus d-flex">
                                            <button class="btn f-focus" data-toggle="modal" data-target="#edit-clients">
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


<!-- Clients Modal-->
<div class="modal fade" id="edit-clients" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">EDIT CLIENTS</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-css" action="">
                    <p class="mt-4 form-p">CLIENTS INFORMATION</p>
                    <div class="bottom-px px-md-4 px-0 mt-4">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="odyssey">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control textarea-editor" rows="3"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="">Choose Image</label>
                                <input type="file" name="files" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn button-main btn-close" type="button" data-dismiss="modal">CANCEL</button>
                <a class="btn button-main btn-active" href="login">EDIT CLIENTS</a>
            </div>
        </div>
    </div>
</div>