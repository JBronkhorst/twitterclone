<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ExploresController extends Controller
{
    public function __invoke()
    {
        return view('explore', [
            'users' => User::paginate(50)
        ]);
    }
}
