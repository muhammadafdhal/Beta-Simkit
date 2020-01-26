@extends('template.app')
@section('status-rawat')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Rawat Inap
                </h2><br>
                <a href="/rawat_inap/tambah"><button type="button" class="btn btn-success waves-effect">
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
                                <th>No. </th>
                                <th>Nama Pasien</th>
                                <th>Penyakit</th>
                                <th>Ruangan</th>
                                <th>gedung</th>
                                <th>Petugas</th>
                                <th>Kedatangan Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($rawat_inap as $key => $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->ps_nama}}</td>
                                <td>{{$t->ps_kt}}</td>
                                <td>{{$t->rg_nama}}</td>
                                <td>{{$t->rg_gedung}}</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->created_at->format('j F, Y')}}</td>
                                <td class="datatable-ct">
                                    @if ($t->ri_status == "ada")
                                    <a class="btn btn-success btn-sm" href="/rawat_inap/keluar/{{$t->ri_id}}"><i
                                            class="fa fa-check"></i> Out</a>
                                    @elseif($t->ri_status == "keluar")
                                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-check"></i> Menunggu
                                        Pembayaran</a>

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
