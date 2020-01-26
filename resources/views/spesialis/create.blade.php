@extends('template.app')

@section('content')

<!-- begin:: Content -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Spesialis
                </h2>
            </div>
            <div class="body">
                <form method="post" action="/spesialis/tambah/save" enctype="multipart/form-data">
                    @csrf
                    

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Spesialis Dokter</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="sp_dk_id" required>
                                    <option value="">-- Please select --</option>
                                    @foreach ($dokter as $t)
                                <option value="{{$t->dk_id}}">{{$t->dk_nama}}</option>
                                    @endforeach
                                    
                                    
                                    
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password_2">Pasien</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="sp_ps_id" required>
                                        <option value="">-- Please select --</option>
                                        @foreach ($pasien as $t)
                                    <option value="{{$t->ps_id}}">{{$t->ps_nama}}</option>
                                        @endforeach
                                        
                                        
                                        
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
<!-- end:: Content -->


@endsection
