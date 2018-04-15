@extends('base.base')
@section('content')
    <!-- Main content -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Data Pelanggan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $d)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td id="#" width="16%">{{ $d->name }}</td>
                        <td width="16%">{{ $d->gender }}</td>
                        <td>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a href="{{ route('mi.edit', $d->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat"><i
                                                    class="glyphicon glyphicon-edit"></i></a>
                                    </div>
                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('mi.delete', $d->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button onclick="window.alert('Hapus pelanggan ?')" type="submit"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus"
                                                    name="button" class="btn btn-xs btn-danger btn-flat"><span
                                                        class="glyphicon glyphicon-trash"></span></button>
                                        </form>
                                    </div>
                                </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection