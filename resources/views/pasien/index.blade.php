@extends('template.app')
@section('status-pasien')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Pasien
                </h2><br>
                <a href="/pasien/tambah"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah</span>

                    </button>
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pasien</th>
                                <th>Alamat Pasien</th>
                                <th>Keluhan Pasien</th>
                                <th>Ketegori Penyakit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($pasien as $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->ps_nama}}</td>
                                <td>{{$t->ps_alamat}}</td>
                                <td>{{$t->ps_keluhan}}</td>
                                <td>{{$t->ps_kt}}</td>
                                <td>{{$t->ps_status}}</td>
                                <td class="datatable-ct">
                                @if ($t->ps_status == "Belum Ada Tindakan")
                                
                                    <a href="/pasien/rawat_jalan/{{ $t->ps_id }}" class="btn btn-info">Rawat Jalan</a>
                                    <br><br>
                                    <a href="/pasien/rawat_inap/{{ $t->dk_id }}" class="btn btn-info">Rawat Inap</a>
                                
                                @elseif($t->ps_status == "Rawat Jalan")
                                <a href="/pasien/pildok/{{ $t->ps_id }}" class="btn btn-info">Tentukan Dokter</a>
                                @endif
                            </td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
