<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller  
{
    public function index()
    {
        $index = User::all();
        return view('users.index', compact('index'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);


        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $user = Auth::user();

        if ($user && $user->id == $id) {
            return redirect()->route('index')->with('error', 'You cannot delete your own account.');
        }

        $userToDelete = User::find($id);

        if ($userToDelete) {
            $userToDelete->delete();
            return redirect()->route('index')->with('success', 'User deleted successfully.');
        } else {
            return redirect()->route('index')->with('error', 'User not found.');
        }
    }
}
    
