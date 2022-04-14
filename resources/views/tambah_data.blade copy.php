@extends('layouts.data_table')
@section('contenttable')



@push('csstable')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endpush



<body>
    

    <div class="container mt-5 pt-5 ">
        <div class="row justify-content-center">

                <h2>Input Laporan</h2>

                <div class="col-auto input-group mb-1 mt-3">
                    <span class="input-group-text">No. WO :</span>
                    <input type="text" class="form-control">
                </div>

                <div class="col-auto   input-group mb-1 ">
                    <span class="input-group-text">Shift/Tanggal :</span>
                    <input type="text" class="form-control" id="datepicker">
                </div>

                <div class="input-group mb-1 ">
                    <span class="input-group-text">Dilakukan Oleh :</span>
                    <select class="form-select" aria-label="Default select example">
                        <option selected> Pilih User</option>
                        <option value="Teknisi">Teknisi</option>
                        <option value="Vendor">Vendor</option>
                    </select>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="input-group ">
                            <span class="input-group-text mb-1">Mesin / Alat :</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group ">
                            <span class="input-group-text">Area :</span>
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
                                        <input type="text" class="form-control"/>
                                        
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
                                  
                                </div>
                                </tbody>
                               
                              </table>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary">Tambah Baris</button>
                                <button type="button" class="btn btn-success">Selanjutnya</button>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>


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
