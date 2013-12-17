<?php

  class Nama{
    var $namaDepan;
    var $namaBelakang;
     
    function Nama($namaDepan, $namaBelakang){
      $this->namaDepan = $namaDepan;
      $this->namaBelakang = $namaBelakang;
    }
     
    function toString() {
      return($this->namaDepan ." " .$this->namaBelakang);
    }
  }


  class NamaGelar extends Nama{
    var $gelar;
    
    function NamaGelar($namaDepan, $namaBelakang, $gelar) {
      Nama::Nama($namaDepan, $namaBelakang);
      $this->gelar = $gelar;
    }

    function toString() {
      return(Nama::toString() . ", " . $this->gelar);
    }
  }

  $ng = new NamaGelar("Budi","Budianto","M.Pd");
  echo $ng->toString();
  echo "<br>";
  $ng = new NamaGelar("Anto","Antosuroto","S.Pd");
  echo $ng->toString();

?>
