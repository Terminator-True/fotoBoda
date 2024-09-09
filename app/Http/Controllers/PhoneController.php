<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PhoneController extends Controller
{
    public function principal_view(){
        return Inertia::render('Phone');
    }
}
