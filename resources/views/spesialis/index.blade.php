@extends('template.app')
@section('status-spesialis')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Spesialis Dokter
                </h2><br>
                <a href="/spesialis/tambah"><button type="button" class="btn btn-success waves-effect">
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
                                <th>Nama Doker</th>
                                <th>Nama Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($spesialis as $t)

                            <tr>
                                    <td>{{$no++}}.</td>
                                <td>{{$t->dk_nama}}</td>
                                <td>{{$t->ps_nama}}</td>
                                <td class="datatable-ct">
                                    <a href="/dokter/edit/{{ $t->dk_id }}" class="btn btn-info">Edit</a>
                                    <br><br>
                                    <form method="POST" action="/dokter/delete/{{ $t->dk_id }}">
                                        {{csrf_field()}} {{method_field('DELETE')}}

                                        <button type="submit" class="btn btn-dark">Hapus</a></button>
                                    </form>
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
