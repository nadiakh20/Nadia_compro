@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.education.update', $edit->id) }}" method="POST">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Nama Instansi</label>
                        <input value="{{ $edit->instansi }}" type="text" name="instansi"
                            placeholder="Masukkan Instansi Pendidikan Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Gelar</label>
                        <input value="{{ $edit->gelar }}" type="text" name="gelar" placeholder="Masukkan Gelar Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Jurusan</label>
                        <input value="{{ $edit->major }}" type="text" name="major" placeholder="Masukkan Jurusan Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">IPK/GPA</label>
                        <input value="{{ $edit->grade }}" type="text" name="grade" placeholder="Masukkan IPK/GPA Anda"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tanggal Masuk</label>
                        <input value="{{ $edit->start_date }}" type="date" name="start_date"
                            placeholder="Masukkan Tanggal Anda Mulai Bekerja" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tanggal Selesai</label>
                        <input value="{{ $edit->last_date }}" type="date" name="last_date"
                            placeholder="Masukkan Tanggal Anda Selesai Bekerja" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
@endsection
