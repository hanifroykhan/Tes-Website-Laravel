<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $users = User::all();
        if ($users->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No users found.',
                'data' => []
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $users
            ]);
        }
    }
}
