@extends('base.base')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Pelanggan</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    @include('template.alert')
                    <form action="{{ route('mi.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label>Nama</label>
                            <input value="{{ old('nama') }}" type="text" class="form-control" name="nama">
                            @if ($errors->has('nama'))
                                <span class="help-block"><strong>{{ $errors->first('nim') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label>Jenis Kelamin</label>
                            <input value="{{ old('jenis_kelamin') }}" type="text" class="form-control" name="jenis_kelamin">
                            @if ($errors->has('jenis_kelamin'))
                                <span class="help-block"><strong>{{ $errors->first('jenis_kelamin') }}</strong></span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-flat" name="submit"><span
                                    class="glyphicon glyphicon-send"></span> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection