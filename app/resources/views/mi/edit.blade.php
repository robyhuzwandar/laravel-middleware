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
                    <form action="{{ route('mi.update', $data->id) }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>name</label>
                            <input value="{{ $data->name }}" type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('nim') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label>Jenis Kelamin</label>
                            <input value="{{ $data->gender }}" type="text" class="form-control" name="gender">
                            @if ($errors->has('gender'))
                                <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
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