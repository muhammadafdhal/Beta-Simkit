@extends('template.app')

@section('content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Spesialis Dokter
                </h2>
            </div>
            <div class="body">
                <form method="post" action="/ruangan/edit/{{ $ruangan->rg_id }}/save" enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Nama Ruangan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="rg_nama" id="email_address_2" class="form-control"
                                        placeholder="Enter your email Nama" value="{{ $ruangan->rg_nama }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="text" hidden value="Kosong" name="rg_status">

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Gedung</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="rg_gedung" required>
                                    <option value="">-- Please select --</option>
                                    <option value="A" <?php if ($ruangan->rg_gedung=="A") {echo "selected";} ?>>Gedung A</option>
                                    <option value="B" <?php if ($ruangan->rg_gedung=="B") {echo "selected";} ?>>Gedung B</option>
                                    <option value="C" <?php if ($ruangan->rg_gedung=="C") {echo "selected";} ?>>Gedung C</option>
                                    <option value="D" <?php if ($ruangan->rg_gedung=="D") {echo "selected";} ?>>Gedung D</option>

                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
