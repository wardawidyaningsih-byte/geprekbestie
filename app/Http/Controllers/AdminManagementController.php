<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    // Tampilkan semua admin
    public function index()
    {
        $admins = User::where('role', 'admin')->latest()->get();

        return view('superadmin.admins.index', compact('admins'));
    }

    // Form tambah admin
    public function create()
    {
        return view('superadmin.admins.create');
    }

    // Simpan admin baru
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role'     => 'admin',
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin berhasil ditambahkan');
    }

    // Form edit admin
    public function edit(User $user)
    {
        return view('superadmin.admins.edit', compact('user'));
    }

    // Update admin
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
        ]);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin berhasil diperbarui');
    }

    // Hapus admin
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admins.index')
            ->with('success', 'Admin berhasil dihapus');
    }
}