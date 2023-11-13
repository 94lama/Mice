<?php

namespace App\Http\Controllers;

use App\Models\Mouse;
use Illuminate\Http\Request;

class MouseController extends Controller
{
    public function view()
    {
        $mice = Mouse::all();
        return view('welcome', compact('mice'));
    }

    public function delete()
    {
    }
}
