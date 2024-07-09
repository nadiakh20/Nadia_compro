@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{route('admin.setting.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group mb-3">
                <label for="">Foto Profil</label>
                <input type="file" name="profile_picture" id="">
            </div>
            <div class="form-group mb-3">
                <input type="submit" value="simpan" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
@endsection
