<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        echo "<h1>About Us</h1>";
        echo "<p>Nama : Rifki Dian Fitra</p>";
        echo "<p>NPM : G1A020023</p>";
        echo "<br>";
        return "Ini merupakan method index di dalam controller About Us";
    }
}
