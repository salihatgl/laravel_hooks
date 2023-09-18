<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleComponentController extends Controller
{
    public function index()
    {
        return view('livewire.simple-component');
    }
}
