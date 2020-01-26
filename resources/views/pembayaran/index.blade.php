@extends('template.app')
@section('status-pembayaran')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Pembayaran
                </h2><br>
                <a href="/pembayaran/tambah"><button type="button" class="btn btn-success waves-effect">
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
                                <th>petugas</th>
                                <th>Pasien</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pembayaran as $t)

                            <tr>
                            <td>{{$no++}}.</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->ps_nama}}</td>
                                <td>{{$t->pb_harga}}</td>
                                <td class="datatable-ct">
                                    <a href="/pembayaran/edit/{{ $t->pb_id }}" class="btn btn-info">Edit</a>
                                    <br><br>
                                    <form method="POST" action="/pembayaran/delete/{{ $t->pb_id }}">
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
