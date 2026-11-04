<?php
namespace App\Http\Controllers;
class Hello extends Controller
{
    public function bonjour()
    {
        return view('hello');
    }
}
?>