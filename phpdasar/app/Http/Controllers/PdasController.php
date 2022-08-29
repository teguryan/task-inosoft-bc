<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdasController extends Controller
{
    public function perulangan(){
        for($i=1;$i<=100;$i++){
           echo $i.".00"."<br>";
           }
    }

    public function percabangan(){ 
        for ($i= 1; $i <= 100; $i++) { 
            if ( $bagi = $i % 3 == 0 ) {
                echo $luas = $this->luaslingkaran(3.14,$i).'<br>';
            }
        }
    }

    public function luaslingkaran(int $pi, int $jari2){
        $luasl = $pi * $jari2 * $jari2;
        return $luasl;
    }

    public function testing1(){
        echo $this->luaslingkaran(3.14,3).'<br>';
        echo $this->luaslingkaran(3.14,6).'<br>';
        echo $this->luaslingkaran(3.14,9);
    }
}
