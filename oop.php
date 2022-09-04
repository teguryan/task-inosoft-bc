<?php

class Kalkulator
{
    //pilih salah satu,pakai atau ga staticnya
    private float $daya = 0; //atribut ( harus diisi value nya)
        // public static float $dayaLain = 0; // cara panggil kalau didalam class pakai self,kalau diluar(objek) lansung NamaClass::$dayaLain

    public function isiDaya($dayaMasuk){ //dalam oop function disebut method
        $this->daya = $this->daya + $dayaMasuk; 
            // self::$dayaLain += $dayaMasuk; // tidak memakai this dikarenakan atribut nya memakai static tapi pakai self dan $ di nama atribut 
    }

    public function tambah($angka1,$angka2){
        echo ($this->cek(10) == true ? $angka1 + $angka2.PHP_EOL: $this->pesan().PHP_EOL);
            // if($this->cek(1) == true){
            //     echo  $angka1 + $angka2;
            // }
    }

    public function kurang($angka1,$angka2){
        echo ($this->cek(10) == true ? $angka1 - $angka2.PHP_EOL: $this->pesan().PHP_EOL);
            // if($this->cek(1) == true){
            //     echo  $angka1 - $angka2;
            // }
    }   

    public function kali($angka1,$angka2){
        echo ($this->cek(10) == true ? $angka1 * $angka2.PHP_EOL: $this->pesan().PHP_EOL);
            // if($this->cek(1) == true){
            //     echo  $angka1 * $angka2;
            // }
    }

    public function bagi($angka1,$angka2){
        if($this->cek(10) == true){
            if($angka2 !== 0){
                echo  $angka1 / $angka2.PHP_EOL;
            }else{
                echo "tidak dapat di bagi 0!".PHP_EOL;
            }
        }
    }
    
    function pangkat($angka1, $angka2)
    {
        if($this->cek(10) == true){
            $bil = $angka1;
            for($i=0;$i<($angka2-1);$i++)
            {
                $bil = $bil * $angka1;
            }            
            if($bil > 1000000){
                // echo $bil;
                echo "Nilai diluar batas ditentukan!".PHP_EOL;
            }else{
                echo $bil.PHP_EOL;
            }
        }else{
            echo $this->pesan().PHP_EOL;
        }
    }

    protected function cek($konsumsiDaya){
        if($this->daya >= $konsumsiDaya){
            $this->daya -= $konsumsiDaya;
            return true;
        }
        // echo "Daya tidak cukup!";
        return false;
    }

    protected function pesan(){
        return "Daya tidak cukup!";
    }
}

class KalkulatorHemat extends Kalkulator{
    public function tambah($angka1,$angka2){
        echo ($this->cek(5) == true ? $angka1 + $angka2.PHP_EOL: $this->pesan().PHP_EOL);
            // if($this->cek(5) == true){
            //     echo  $angka1 + $angka2;
            // }
    }

    public function kurang($angka1,$angka2){
        echo ($this->cek(5) == true ? $angka1 - $angka2.PHP_EOL: $this->pesan().PHP_EOL);
            // if($this->cek(5) == true){
            //     echo  $angka1 - $angka2;
            // }
    }   

    public function kali($angka1,$angka2){
        echo ($this->cek(5) == true ? $angka1 * $angka2.PHP_EOL: $this->pesan().PHP_EOL);
            // if($this->cek(5) == true){
            //     echo  $angka1 * $angka2;
            // }
    }

    public function bagi($angka1,$angka2){
        if($this->cek(5) == true){
            if($angka2 !== 0){
                echo  $angka1 / $angka2.PHP_EOL;
            }else{
                echo "tidak dapat di bagi 0!".PHP_EOL;
            }
        }else{
            echo $this->pesan().PHP_EOL;
        }
    }

    function pangkat($angka1, $angka2)
    {
        if($this->cek(5) == true){
            $bil = $angka1;
            for($i=0;$i<($angka2-1);$i++)
            {
                $bil = $bil * $angka1;
            }
            if($bil > 1000000){
                // echo $bil;
                echo "Nilai diluar batas ditentukan!".PHP_EOL;
            }else{
                echo $bil.PHP_EOL;
            }
        }else{
            echo $this->pesan().PHP_EOL;
        }

        // if($this->cek(5) == true){
        //     $angka1 = $angka1;
        //     for($i=0;$i<($angka2-1);$i++)
        //     {
        //         $angka1 = $angka1 * $angka1;
        //     }
        //     if($angka1 > 1000000){
        //         echo $angka1;
        //         // echo "Nilai diluar batas ditentukan!".PHP_EOL;
        //     }else{
        //         echo $angka1.PHP_EOL;
        //     }
        // }else{
        //     echo $this->pesan().PHP_EOL;
        // }
        
    }
}

$kalkulator1 = new Kalkulator(); //membuat objek
$kalkulator2 = new KalkulatorHemat();

$kalkulator1->isiDaya(40);
$kalkulator2->isiDaya(30);

    // echo $kalkulator1->daya; //5 
    // echo "\n";
    // echo $kalkulator2->daya;//10
    // echo $kalkulator1::$dayaLain; //15 ( 5+10 )

    // dapat disimpulkan bahwa static akan menyimpan value untuk semua objek yang ada

    // echo Kalkulator::$dayaLain; // membuat objek dengan class yang atribut memakai static,tanpa perlu buat inisiasi new/membuat objek
    // echo Kalkulator::isiiDaya(10); //kekurangan static penggunaan terbatas,tidak dapat menentukan nilai dari objek
//

$kalkulator1->tambah(2,4);
$kalkulator1->kurang(11,4);
$kalkulator1->kali(5,3);
$kalkulator1->bagi(15,3);
$kalkulator1->pangkat(100,3);

$kalkulator2->tambah(2,2);
$kalkulator2->kurang(10,2);
$kalkulator2->kali(5,3);
$kalkulator2->bagi(10,0);
$kalkulator2->pangkat(100,4);
