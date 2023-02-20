
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Daftar Karyawan
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <a href="{{ route('employee.create') }}" class="btn btn-primary mb-3">Tambah Karyawan Baru</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->phone_number }}</td>
                                <td>
                                    <a href="{{ route('employee.edit', $employee) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('employee.destroy', $employee) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data karyawan ini?')">Hapus</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data karyawan ini?')">Hapus</button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

