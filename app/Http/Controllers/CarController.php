<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class CarController extends Controller
{
    public function __invoke()
    {
        return "__invoke method from CarController";
    }
    public function index()
    {
        return Inertia::render('Test');
    }
}
