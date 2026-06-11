@extends('layouts.app')

@section('content')
<div class="main-content">

    <!-- Header -->
    <div class="topbar mb-4">
        <div class="welcome" style="font-size:28px;font-weight:700;">
            Kelola Admin
        </div>
        <div class="text-muted mb-3">
            Tambah, edit, dan hapus akun admin.
        </div>
    </div>

    <!-- Tambah Admin Button -->
    <a href="{{ route('admins.create') }}" class="btn btn-success mb-3" style="border-radius:12px; font-weight:600; background:linear-gradient(135deg,#10b981,#34d399); color:white;">
        <i class="fas fa-plus"></i> Tambah Admin
    </a>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success rounded-4">{{ session('success') }}</div>
    @endif

    <!-- Table Admin -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle shadow-sm rounded-4">
            <thead class="table-dark text-center rounded-4">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($admins as $admin)
                <tr class="text-center">
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning btn-sm me-1" style="background:linear-gradient(135deg,#ff6b00,#ff944d); color:white; border-radius:12px;">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" style="border-radius:12px;">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="3">Belum ada admin.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<style>
    .main-content {
        margin-left: 260px;
        padding: 30px;
        background: #f5f7fb;
        min-height: 90vh;
        border-radius: 20px;
    }
    .topbar {
        background:white;
        padding:20px;
        border-radius:20px;
        box-shadow:0 10px 25px rgba(0,0,0,.05);
    }
    .table th, .table td {
        vertical-align: middle;
    }
</style>
@endsection