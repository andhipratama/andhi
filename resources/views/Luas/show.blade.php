@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">

        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('tahun', 'Tahun'); !!}
                {!! Form::label('tahun', $luas->tahun, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('kecamatan_id', 'Kecamatan_ID'); !!}
                {!! Form::label('kecamatan_id', $luas->kecamatan_id, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('tanaman_perkebunan_id', 'Tanaman_Perkebunan_ID'); !!}
                {!! Form::label('tanaman_perkebunan_id', $luas->tanaman_perkebunan_id, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('nilai', 'Nilai'); !!}
                {!! Form::label('nilai', $luas->nilai, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('created_at', 'Waktu Tambah'); !!}
                {!! Form::label('created_at', $kecamatan->created_at,['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('update_at', 'Waktu Ubah'); !!}
                {!! Form::label('update_at', $kecamatan->update_at,['class' => 'form-control']); !!}
            </div>

            <a href="{!! route('kecamatan.index') !!}" class="btn btn-warning">Kembali</a>
        </div>
        </div>
    </div>
</div>
@endsection