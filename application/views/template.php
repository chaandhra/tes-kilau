<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home -</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <a href="<?= base_url() ?>Login/logout">
                        <p class="nav-link">logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- // end navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="<?= base_url() ?>assets/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:.8;">
                <span class="brand-text font-weight-light">TES BERBAGI</span>
            </a>

            <!-- Sidebar -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                    <li class="nav-item">
                        <a href="<?= base_url() ?>Dashboard" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url("Dashboard/program") ?>" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Data Program
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
        </aside>
        <!-- End Sidebar Container -->

        <!-- Content Wrapper  -->
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>
        <!-- End Content Wrapper -->
        <footer class="main-footer">

        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <!-- <script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <!-- <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/adminlte/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?= base_url() ?>assets/adminlte/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/adminlte/js/demo.js"></script>

    <!-- DataTables -->
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- page script -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <?php
    if ($this->uri->segment(2) == 'program') {
    ?>

        <script type="text/javascript">
            var save_method; //for save method string
            var table;

            $(document).ready(function() {

                //datatables
                table = $('#dataTable').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [1, 'asc'], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo base_url('Program/ajax_list') ?>",
                        "type": "POST"
                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [{
                        "targets": [-1], //last column
                        "orderable": false, //set not orderable
                    }, ],

                });



                //set input/textarea/select event when change value, remove class error and remove text help block 
                $("input").change(function() {
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });
                $("textarea").change(function() {
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });
                $("select").change(function() {
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });

            });



            function add_program() {
                save_method = 'add';
                $('#form')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_form').modal('show'); // show bootstrap modal
                $('.modal-title').text('Add program'); // Set Title to Bootstrap modal title
            }

            function edit_program(id) {
                save_method = 'update';
                $('#form')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string

                //Ajax Load data from ajax
                $.ajax({
                    url: "<?php echo site_url('Program/ajax_edit/') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {

                        $('[name="id"]').val(data.id);
                        $('[name="pertanyaan"]').val(data.pertanyaan);
                        $('[name="jawaban"]').val(data.jawaban);

                        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit program'); // Set title to Bootstrap modal title

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });
            }

            function reload_table() {
                table.ajax.reload(null, false); //reload datatable ajax 
            }

            function save() {
                $('#btnSave').text('saving...'); //change button text
                $('#btnSave').attr('disabled', true); //set button disable 
                var url;

                if (save_method == 'add') {
                    url = "<?php echo site_url('Program/ajax_add') ?>";
                } else {
                    url = "<?php echo site_url('Program/ajax_update') ?>";
                }

                // ajax adding data to database
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#form').serialize(),
                    dataType: "JSON",
                    success: function(data) {

                        if (data.status) //if success close modal and reload ajax table
                        {
                            $('#modal_form').modal('hide');
                            reload_table();
                        } else {
                            for (var i = 0; i < data.inputerror.length; i++) {
                                $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                                $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                            }
                        }
                        $('#btnSave').text('save'); //change button text
                        $('#btnSave').attr('disabled', false); //set button enable 


                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                        $('#btnSave').text('save'); //change button text
                        $('#btnSave').attr('disabled', false); //set button enable 

                    }
                });
            }

            function delete_program(id) {
                if (confirm('Are you sure delete this data?')) {
                    // ajax delete data to database
                    $.ajax({
                        url: "<?php echo site_url('program/ajax_delete') ?>/" + id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data) {
                            //if success reload ajax table
                            $('#modal_form').modal('hide');
                            reload_table();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Error deleting data');
                        }
                    });

                }
            }
        </script>
    <?php } ?>

</body>

</html>