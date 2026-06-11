@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Admin</h2>

    <form action="{{ route('admins.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection