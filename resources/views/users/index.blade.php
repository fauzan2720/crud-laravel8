@extends('layout.main')

@section('container')

<div class="container mt-5">
    <h1>Data Mahasiswa Jurusan Teknologi Informasi</h1>
    <hr>

    @if (Session::has('success'))
    <div class="alert alert-danger">
        {{ Session::get('success') }}
    </div>
    @endif

    <a href="{{ url('user/create') }}" class="btn btn btn-primary mb-4">Create Data</a>

    <table class="table table-bordered border table-light table-striped" id="myTable">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($datas as $data)
            <tr>
                <th>{{ $data->id }}</th>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->prodi }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone_number }}</td>
                <td>{{ $data->address }}</td>
                <td class="text-center">
                    <form action="{{ url('user/' . $data->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{ url('user/' . $data->id . '/edit') }}" class="btn btn-sm btn-success">Update</a>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

@endsection