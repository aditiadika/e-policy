@extends('layout')

@section('content')


<table class="table table-bordered">
    <a href="{{ route('client.create') }}"class="btn btn-primary btn-xs pull-right">Create</a>
    <thead>
    <tr>
        <th>#</th>
        <th>Nomor Polis</th>
        <th>Nama Pemegang Polis</th>
        <th>Nama Tertanggung</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      @foreach($clients as $client)
    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->nomor_polis }}</td>
        <td>{{ $client->nama_pemegang }}</td>
        <td>{{ $client->nama_tertanggung }}</td>
        <td>{{ $client->kirim }}</td>
        <td>
            <a href="" class="btn btn-default">show</a>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
          @endforeach
    </tbody>

</table>

@endsection

