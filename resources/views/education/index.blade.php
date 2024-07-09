@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.education.create') }}" class="btn btn-primary">Tambah Pendidikan</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Instansi</th>
                            <th>Gelar</th>
                            <th>Jurusan</th>
                            <th>IPK/GPA</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->instansi }}</td>
                                <td>{{ $data->gelar }}</td>
                                <td>{{ $data->major }}</td>
                                <td>{{ $data->grade }}</td>
                                <td>{{ $data->start_date }}</td>
                                <td>{{ $data->last_date }}</td>
                                <td>
                                    <a href="{{ route('admin.education.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.education.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
