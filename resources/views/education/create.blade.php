@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.education.store') }}" method="POST">
                <form action="" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Nama Instansi</label>
                        <input type="text" name="instansi" placeholder="Masukkan Instansi Pendidikan Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Gelar</label>
                        <input type="text" name="gelar" placeholder="Masukkan Gelar Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Jurusan</label>
                        <input type="text" name="major" placeholder="Masukkan Jurusan Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">IPK/GPA</label>
                        <input type="text" name="grade" placeholder="Masukkan IPK/GPA Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tanggal Masuk</label>
                        <input type="date" name="start_date" placeholder="Masukkan Tanggal Anda Mulai Pendidikan"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tanggal Selesai</label>
                        <input type="date" name="last_date" placeholder="Masukkan Tanggal Anda Selesai Pendidikan"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
@endsection
