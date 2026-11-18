<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        abort_unless($request->user()->isAdmin(), 403);
        $values = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'unique:users,email'],
            'club_name' => ['required', 'string', 'max:120'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        User::create([...$values, 'password' => Hash::make($values['password']), 'role' => 'responsable']);
        return back()->with('success', 'Le compte responsable a été créé.');
    }
}
