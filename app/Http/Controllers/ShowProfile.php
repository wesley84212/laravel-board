<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;

class ShowProfile extends Controller
{
    public function __invoke($id)
    {
        return ['user' => User::findOrFail($id)];
    }
}
