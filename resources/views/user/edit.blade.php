@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">User</div>
        <div class="card-body">
            <form action="{{ route('admin.user.update', $edit->id)}}" method="post">
                <form action="" method="post">
                    @csrf
                    @method("PUT")
                    <div class="form-group mb-3">
                        <label for="">Nama</label>
                        <input value="{{$edit->name}}" type="text" name="name" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input value="{{$edit->email}}" type="text" name="email" placeholder="Masukkan Email Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password )* Boleh kosong jka tidak ingin mengganti password</label>
                        <input type="password" name="password" placeholder="Masukkan Password Anda" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
@endsection
