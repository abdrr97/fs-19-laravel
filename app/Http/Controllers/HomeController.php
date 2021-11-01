<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id)
    {
        return $id;
    }

    public function getUser($id)
    {
        // $user = User::find(21);
        $user = User::findOrFail($id);
        dd($user);
    }
}
