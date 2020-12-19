@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'luas.store']) !!}
        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('tahun', 'Tahun'); !!}
                {!! Form::text('tahun', '', ['class' => 'form-control','placeholder' => 'Tahun']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('kecamatan_id', 'Kecamatan_ID'); !!}
                {!! Form::text('kecamatan_id', '', ['class' => 'form-control','placeholder' => 'Kecamatan_ID']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('tanaman_perkebunan_id', 'Tanaman_Perkebunan_ID'); !!}
                {!! Form::text('tanaman_perkebunan_id', '', ['class' => 'form-control','placeholder' => 'Tanaman_Perkebunan_ID']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('nilai', 'Nilai'); !!}
                {!! Form::text('nilai', '', ['class' => 'form-control','placeholder' => 'Nilai']); !!}
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{!! route('luas.index') !!}" class="btn btn-danger">Cancel</a>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection