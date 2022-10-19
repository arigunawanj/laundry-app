@extends('layouts.template')

@section('title', 'Pesan')

@section('content')

    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Pesan Laundry</h2>
            <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation</p>
            <div class="row">
                {{-- <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Profile</strong>
                        </div>
                        <div class="card-body">
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col --> --}}
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Layanan </strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="example-select">Pilih Outlet</label>
                                <select class="form-control mb-3" id="example-select">
                                    <option>Karisma Laundry Sukun</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>

                                <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Paket Kiloan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Paket
                                            Satuan</a>
                                    </li>
                                </ul>
                                <div class="tab-content mb-1" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab"> Anim pariatur cliche reprehenderit, enim eiusmod
                                        high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                        nulla assumenda shoreditch et. </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab"> Anim pariatur cliche reprehenderit, enim
                                        eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                        nulla assumenda shoreditch et. </div>
                                </div>
                            </div>
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
    </div> <!-- .row -->
@endsection