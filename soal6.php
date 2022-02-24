<?php

class Karyawan {
  public $nama;
  public $gaji;
  public $jabatan;
  public $region;

  function __construct($nama, $gaji, $jabatan, $region) {
    $this->nama = $nama;
    $this->gaji = $gaji;
    $this->jabatan  = $jabatan;
    $this->region = $region;
  }
  function tampil_data() {

    echo $this->nama," | ", $this->gaji, " | ", $this->jabatan, " | ", $this->region;

    /*return $this->nama;
    return $this->gaji;
    return $this->jabatan;
    return $this->region;*/
  }

  function gaji_bersih() {

   if($this->gaji>15000000){
     $this->gaji=$this->gaji+(10/100*$this->gaji);
     echo $this->nama,"---",  $this->gaji;
   }
  }


 
}

$agus = new Karyawan("Agus", 8000000, "JuniorOffice", "Semarang");
$dina = new Karyawan("Dina", 15000000, "AssistantManager", "Bandung");
$joko = new Karyawan("Joko", 25000000, "Manager", "Jakarta");
$ahmad = new Karyawan("Ahmad", 13000000, "MiddleOffice", "Jakarta");
$felicia = new Karyawan("Felicia", 12500000, "MiddleOffice", "Bandung");

echo $agus->tampil_data();
echo "<br>";
echo $dina->tampil_data();
echo "<br>";
echo $joko->tampil_data();
echo "<br>";
echo $ahmad->tampil_data();
echo "<br>";
echo $felicia->tampil_data();
echo "<br>";
echo "<br>";
echo "<br>";
echo "---Total Gaji---";
echo  $agus->gaji_bersih();
echo "<br>";
echo  $dina->gaji_bersih();
?>