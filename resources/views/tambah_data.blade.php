@extends('layouts.data_table')
@section('contenttable')
    @push('csstable')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
    @endpush



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Input Laporan</h3>
                                </div>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <div class="container mt-2 ">
                                        <div class="row justify-content-center">



                                            <div class="col-12 input-group mb-1 mt-3">
                                                <span class="col-2 input-group-text">No. WO :</span>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="col-12 input-group mb-1 ">
                                                <span class="col-2 input-group-text">Shift/Tanggal :</span>
                                                <input type="text" class="form-control" id="datepicker">
                                            </div>

                                            <div class="col-12 input-group mb-1 ">
                                                <span class="col-2 input-group-text">Dilakukan Oleh :</span>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected> Pilih User</option>
                                                    <option value="Teknisi">Teknisi</option>
                                                    <option value="Vendor">Vendor</option>
                                                </select>
                                            </div>
                                            {{-- <div class="card">
                                    <div class="card-body"> --}}
                                            <div class="col-12 input-group ">
                                                <span class="col-2 input-group-text mb-1">Mesin / Alat :</span>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-12 input-group ">
                                                <span class="col-2 input-group-text">Area :</span>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="container mt-3">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Sparepart</th>
                                                                <th>Masuk (pcs)</th>
                                                                <th>Digunakan (pcs)</th>
                                                                <th>Sisa (Pcs)</th>
                                                                <th>Bekas (Pcs)</th>
                                                                <th>Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    {{-- <input type="text" name="company" form="my_form" />
                                                        <button type="button" form="my_form">ok</button> --}}
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                        <div class="mt-2 mb-5 btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-primary">Tambah Baris</button>
                                                        </div>
   
                                                        {{-- table milik alat yang dibawa --}}

   
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                    
                                                     
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Alat yang dibawa</th>
                                                                <th>Jumlah Masuk</th>
                                                                <th>Jumlah Keluar</th>
                                                                <th>Masalah Kerusakan </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    {{-- <input type="text" name="company" form="my_form" />
                                                        <button type="button" form="my_form">ok</button> --}}
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />

                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" />
                                                                </td>
                                                             
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-primary">Tambah Baris</button>
                                                            <a href="/ceklist" type="button" class="btn btn-success">Selanjutnya</a>
                                                        </div>
                                                </div>
                                                        
                                            </div>

                                          


                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </div>
    </table>
    </div>
    </div>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
  

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>




    @push('scriptstable')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#datepicker").datepicker();
            });
        </script>
    @endpush
@endsection
