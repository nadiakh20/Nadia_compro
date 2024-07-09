@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.update', $edit->id) }}" method="POST">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Pekerjaan</label>
                        <input value="{{ $edit->job }}" type="text" name="job"
                            placeholder="Masukkan Pekerjaan Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Perusahaan</label>
                        <input value="{{ $edit->company }}" type="text" name="company" placeholder="Masukkan Tempat Anda Bekerja"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $edit->description }}</textarea>
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
