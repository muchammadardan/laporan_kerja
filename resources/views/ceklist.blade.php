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
                                    <h3 class="card-title">Ceklist Laporan</h3>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <table class="table">
                                            <thead>
                                                <tr scope='col'></tr>
                                                <tr scope='col'></tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <div class="mx-2 mt-1 mb-2 col-11 form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Pastikan bersih dari semua potensi kontaminan termasuk:
                                                                minyak, bahan kimia,
                                                                debu, suku cadang, mur, baut ring, pisau, alat maintenance,
                                                                tape, velcro,
                                                                stiker, dll.
                                                            </label>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <div class="mx-2 col-11 form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Pastikan peralatan untuk membersihkan kontaminan ditempatkan
                                                                kembali
                                                                ditempat semula.
                                                            </label>


                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <div class="mx-2 col-11 form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Objek secara tepat dirakit kembali dan beroperasi kembali
                                                                (divalidasi).
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <div class="mx-2 col-11 form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Suku cadang yang tidak digunakan untuk pemeliharaan atau
                                                                perbaikan dihitung kembali.
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <div class="mx-2 col-11 form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Semua peralatan yang digunakan untuk pemeliharaan atau
                                                                perbaikan dihitung.
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <div class="mx-2 col-11 form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Pastikan mesin dalam kondisi bersih dan bebas dari najis
                                                                serta bebas dari
                                                                kontaminasi bahan/produk non kohser sebelum serah terima ke
                                                                user.
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <b class="mb-5">*KETERANGAN : YA (CENTANG) atau TIDAK (KOSONG)</b>

                                        <table class="table-borderless ">
                                            <thead>
                                                <tr scope='col'></tr>
                                                <tr scope='col'></tr>
                                                <tr scope='col'></tr>

                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><div class="text-center col">Dilakukan oleh : </td>
                                                    <td><div class="text-center col">Diketahui oleh : </td>
                                                    <td><div class="text-center col">Diterima oleh : </td>

                                                </tr>
                                                <tr>
                                                    <td><div class="mb-5 col text-center">Teknisi </td>
                                                    <td><div class="mb-5 col text-center">Spv. TP </td>
                                                    <td><div class="mb-5 col text-center">User </td>

                                                </tr>

                                                <tr>
                                                    <div class="row align-items-center">
                                                    <td>
                                                        <div class="ms-5 text-center mt-5 input-group col-6">
                                                        <input type="text" class="form-control"  aria-describedby="basic-addon1"> 
                                                        (...........................................................................)
                                                    </td>

                                                    <td>
                                                        <div class=" ms-5 text-center mt-5 input-group col-6">
                                                        <input type="text" class="form-control"  aria-describedby="basic-addon1">
                                                        (...........................................................................)
                                                      </div>  
                                                    </td>

                                                    <td>
                                                        <div class="ms-5 text-center mt-5 input-group col-6">
                                                        <input type="text" class="form-control"  aria-describedby="basic-addon1">
                                                        (...........................................................................)
                                                      </div>  
                                                    </td>
                                                
                                                </tr>
                                            </div>
                                            </tbody>
                                           
                                        </table>
                                       
                                       
                                        

                                    </div>
                                    <div class="mt-5 pt-5 btn-group" role="group" aria-label="Basic example">
                                        <a href="/tambah_data" type="button" class="btn btn-primary">Kembali</a>
                                        <button type="button" class="btn btn-success">Simpan</button>
                                      </div>
                                </div>
                            </div>

                        </div>





                    </div>
                </div>
               
            </div>
    </div>
    </section>
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
