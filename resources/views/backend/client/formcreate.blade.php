@extends('layout')

@section('content')

        <form action="{{ route('client.store') }}" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="">Nomor Polis</label>
            <input type="text" class="form-control" name="nomor_polis">
        </div>
        <div class="form-group">
            <label for="">Nama Pemegang Polis</label>
            <input type="text" class="form-control" name="nama_pemegang">
        </div>
        <div class="form-group">
            <label for="">Nama Tertanggung</label>
            <input type="text" class="form-control" name="nama_tertanggung">
        </div>
        <div class="form-group">
            <label for="">Kirim ke</label>
            <select class="form-control" name="kirim">
                <option value="0">--Please Select--</option>
                <option value="email">Email</option>
                <option value="rumah">Rumah</option>
                <option value="kantor">Kantor</option>
            </select>
        </div>
        <div class="Form-group">
            <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div>

    </form>

@endsection