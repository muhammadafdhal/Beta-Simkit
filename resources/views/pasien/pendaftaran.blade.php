@extends('template/app2')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/tp/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Appointment</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Pendaftaran <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter"
    style="background-image: url('/tp/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-5 pr-md-5">
                <div class="heading-section heading-section-white ftco-animate mb-5">

                    <h3 class="mb-4">Konsulatsi Rumah Sakit Selecta</h3>

                </div>
                <form method="post" action="/pasien/konsultasi/save" class="appointment-form ftco-animate"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Pasien" name="ps_nama"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Alamat Pasien" name="ps_alamat"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="ps_kt" class="form-control">
                                        <option value="">Pilih Keluhan</option>
                                        <option value="Gigi">Sakit Gigi</option>
                                        <option value="THT">Sakit THT</option>
                                        <option value="Penyakit Dalam">Sakit Penyakit Dalam</option>
                                        <option value="Tulang">Sakit Tulang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="number" class="form-control" name="ps_no" placeholder="Phone" autocomplete="off">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" name="ps_tgl_konsul" class="form-control appointment_date"
                                    placeholder="Date" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" name="ps_waktu_konsul" class="form-control appointment_time"
                                    placeholder="Time" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="ps_keluhan" id="" cols="30" rows="2" class="form-control"
                                placeholder="Message" autocomplete="off"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Daftar" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 p-5 bg-counter aside-stretch">
                <h3 class="vr">About Dr.Care Facts</h3>
                <div class="row pt-4 mt-1">
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Years of Experienced</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="4500">0</strong>
                                <span>Happy Patients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="84">0</strong>
                                <span>Number of Doctors</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                            <div class="text">
                                <strong class="number" data-number="300">0</strong>
                                <span>Number of Staffs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
