@extends('layout.main')

@section('container')
<div class="container mt-5">
    <h1>Perbarui Biodata Mahasiswa</h1>
    <hr>
    <form method="POST" action="{{ url('user/'.$model->id) }}">
        @csrf

        <input type="hidden" name="_method" value="PUT">

        <div class="mb-3">
            <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="text" class="form-control" id="nim" placeholder="Masukkan Nomor Induk Mahasiswa" name="nim" minlength="9" maxlength="9" value="{{ $model->nim }}">
            @foreach ($errors->get('nim') as $msg)
            <div class="invalid-feed text-danger">
                {{ $msg }}
            </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Mahasiswa" name="name" value="{{ $model->name }}">
            @foreach ($errors->get('name') as $msg)
            <div class="invalid-feed text-danger">
                {{ $msg }}
            </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="prodi" class="form-label">Pilih Program Studi</label>
            <select class="form-select" id="prodi" name="prodi">
                <option selected hidden value="{{ $model->prodi }}">{{ $model->prodi }}</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
            @foreach ($errors->get('prodi') as $msg)
            <div class="invalid-feed text-danger">
                {{ $msg }}
            </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email Aktif" name="email" value="{{ $model->email }}">
            @foreach ($errors->get('email') as $msg)
            <div class="invalid-feed text-danger">
                {{ $msg }}
            </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="phone_number" placeholder="Masukkan Nomor Telepon Aktif" name="phone_number" minlength="11" maxlength="13" value="{{ $model->phone_number }}">
            @foreach ($errors->get('phone_number') as $msg)
            <div class="invalid-feed text-danger">
                {{ $msg }}
            </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat Rumah</label>
            <input type="text" class="form-control" id="address" placeholder="Masukkan Alamat Rumah" name="address" value="{{ $model->address }}">
            @foreach ($errors->get('address') as $msg)
            <div class="invalid-feed text-danger">
                {{ $msg }}
            </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-4 mb-5">Perbarui Sekarang</button>
    </form>
</div>

@endsection