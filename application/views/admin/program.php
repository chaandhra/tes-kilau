<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">

    </div>
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h5 class="mb-2 text-center">
                    <strong>Data Program</strong>
                </h5>
                <button type="button" class="btn btn-primary" onclick="add_program()">Tambah Data</button>

            </div>
            <div class="card-body">

                <class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sumber Dana</th>
                                <th>Program</th>
                                <th>Keterangan</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                    </class=>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title">ADD Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">sumber dana</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="sumber_dana" name="sumber_dana"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">program</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="program" name="program"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">keterangan</label>
                            <div class="col-md-12">
                                <select class="form-control" id="keterangan" name="keterangan">
                                    <option value="">Pilih</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>




                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->