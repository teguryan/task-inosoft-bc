<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdasController extends Controller
{
    public function final(){
        for ($i= 1; $i <= 100; $i++) { 
            if($i%3 == 0 && $i%5 == 0){
                echo number_format($luasp = $this -> luaspp($i/3,$i/5),2,".","")."<br>";
            }else if($i%5 == 0){     
                  echo number_format( $keliling = $this ->kelilinglingkaran(3.14,$i/5),2,".","")."<br>";
            }else if($i%3 == 0){
                  echo number_format($luas = $this->luaslingkaran(3.14,$i/3),2,".","").'<br>';
            }else{
              echo number_format($i,2,".","")."<br>";
            }
        }
    }

    public function luaslingkaran($pi, $jari2){
        $luasl = $pi * $jari2 * $jari2;
        return $luasl;
    }

    public function kelilinglingkaran($pi, $jari2){
        $kelilingl = 2 * $pi * $jari2;
        return $kelilingl;
    }

    public function luaspp($p,$l){
        $luaspp = $p * $l;
        return $luaspp;
    }

}
