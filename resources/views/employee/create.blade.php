@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Tambah Karyawan Baru
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age">Umur</label>
                            <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}">
                            @error('age')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control @error
                            ('address') is-invalid @enderror">{{ old('address') }}</textarea>
                            @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label for="phone_number">No. Telp</label>
                            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            </div>
                            @endsection
                            ```