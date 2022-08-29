<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdasController extends Controller
{
    public function perulangan(){
        for($i=1;$i<=100;$i++){
           echo $i."<br>";
           }
    }
}
