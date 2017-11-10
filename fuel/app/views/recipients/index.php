<!-- Latest Vouchers DataTable -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-ticket"></i> Recipients List
        <a class="btn btn-success text-light pull-right" data-toggle="modal" data-target="#formModal"><i class="fa fa-file"></i> New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th width="1%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($recipients as $r): ?>
                    <tr>
                        <td><?= $r->id_recipient; ?></td>
                        <td><?= $r->name; ?></td>
                        <td><?= $r->email; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#formModal"><i
                                                class="fa fa-pencil"></i> Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recipient</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group row">
                        <label for="id" class="col-2 col-form-label">ID</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="id" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="" id="email">
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="#">OK</a>
            </div>
        </div>
    </div>
</div>