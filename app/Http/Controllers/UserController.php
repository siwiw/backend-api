<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (! $user) {
            return response()->json(['message' => 'User tidak ditemukan.'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User berhasil dihapus.']);
    }
}