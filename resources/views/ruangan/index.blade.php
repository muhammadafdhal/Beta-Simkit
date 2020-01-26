@extends('template.app')
@section('status-ruangan')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Ruangan
                </h2><br>
                <a href="/ruangan/tambah"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah</span>

                    </button>
                </a>
            </div> 
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="text-align:center">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama Ruangan</th>
                                <th>Status Ruangan</th>
                                <th>Gedung</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($ruangan as $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->rg_nama}}</td>
                                <td>{{$t->rg_status}}</td>
                                <td>{{$t->rg_gedung}}</td>

                                <td class="datatable-ct">
                                    <a href="/ruangan/edit/{{ $t->rg_id }}" class="btn btn-info">Edit</a>
                                    <br><br>
                                    <form method="POST" action="/ruangan/delete/{{ $t->rg_id }}">
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
