<?php

class Makhluk_Hidup {

    public  $nama, $gender, $warna_kulit, $jenis_makanan, $habitat;

    public function __construct( $nama = "nama", $gender = "gender", $warna_kulit = "warna_kulit", $jenis_makanan = "jenis_makanan", $habitat = "hanbitat") {

        $this->nama = $nama;
        $this->gender = $gender;
        $this->warna_kulit = $warna_kulit;
        $this->jenis_makanan = $jenis_makanan;
        $this->habitat = $habitat;


    }

    public function getlabel() {

        return "$this->gender, $this->jenis_makanan";

    }

    public function getmakhluk_hidup() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->habitat})";

        return $str;
    }

}

class kue {

    public  $nama, $rasa, $teknik, $berat, $harga;

    public function __construct( $nama = "nama", $rasa = "rasa", $teknik = "teknik", $berat = "berat", $harga = 0) {

        $this->nama = $nama;
        $this->rasa = $rasa;
        $this->teknik = $teknik;
        $this->berat = $berat;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->rasa, $this->teknik, $this->berat";

    }

    public function getkue() {

        $str = "{$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class Hewan_Darat extends Makhluk_Hidup {

    public function getInfomakhluk_hidup() {
        $str = "Hewan_Darat    = {$this->nama} , {$this->getlabel()} , {$this->gender} , {$this->jenis_makanan} , {$this->habitat} ";
        return $str; 
    }

}

class Hewan_Laut extends Makhluk_Hidup {

    public function getInfomakhluk_hidup() {
        $str = "Hewan_Laut = {$this->nama} , {$this->getlabel()} , {$this->gender} , {$this->jenis_makanan} , {$this->habitat} ";
        return $str; 
    }

}

class Kue_kering extends Kue {

    public function getInfoKue() {
        $str = "Kue_Kering = {$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Kue_Basah extends Kue {

    public function getInfoKue() {
        $str = "Kue_Basa = {$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfomakhluk_hidup {

    public function cetak(Makhluk_hidup $makhluk_hidup){
        $str = "{$makhluk_hidup->nama} {$makhluk_hidup->getlabel()} , Rp. {$makhluk_hidup->gender} ";
        return $str;
    }

}

class CetakInfokue {

    public function cetak(Kue $kue){
        $str = "{$kue->nama} {$kue->getlabel()} (Rp. {$kue->harga})";
        return $str;
    }

}

$makhluk_hidup1 = new Hewan_Darat("Kucing", "Perempuan", "Orange", "karnivora", "Darat");
$makhluk_hidup2 = new Hewan_Darat("Kelinci", "Lak-laki", "Putih", "Herbivora", "Darat");
$makhluk_hidup3 = new Hewan_Laut("kuda laut", "Perempuan", "Pink", "Herbivora", "Laut");
$makhluk_hidup4 = new Hewan_Laut("Ika Hiu", "Laki-Laki", "biru", "Karnivora", "Laut");

$Kue1 = new Kue_Kering("Nastar", "Asin", "panggang", "1 Kg", 50000);
$Kue2 = new Kue_Kering("Cookies", "Manis", "Oven", "1 Kg", 150000);
$Kue3 = new Kue_Basah("Dadar Gulung", "Manis", "Teflon", "1 kg", 35000);
$Kue4 = new Kue_Basah("Nagasari", "Gurih", "Kukus", "1 Kg", 55000);

echo $makhluk_hidup1->getInfomakhluk_hidup();
echo "<br>";
echo $makhluk_hidup2->getInfomakhluk_hidup();
echo "<br>";
echo $makhluk_hidup3->getInfomakhluk_hidup();
echo "<br>";
echo $makhluk_hidup4->getInfomakhluk_hidup();
echo "<hr>";
echo $Kue1->getInfoKue();
echo "<br>";
echo $Kue2->getInfoKue();
echo "<br>";
echo $Kue3->getInfoKue();
echo "<br>";
echo $Kue4->getInfoKue();
echo "<hr>";


?>