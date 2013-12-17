<?php
	class Penjumlahan{
		var $text;
		//var $bil1;
		//var $bil2;
		var $hasil;
		var $pesanError;
		var $error;

		public function Penjumlahan(){
			$this->error=false;
			$this->pesanError="";
		}

		public function validasi($text,$namaVariabel){
			$this->cekKosong($text,$namaVariabel);
		}

		public function cekKosong($text,$namaVariabel){
			if(empty($text)){
				$this->error=true;
				$pesanBaru=$namaVariabel." tidak boleh kosong<br>";
				$this->pesanError=$this->pesanError."".$pesanBaru;
			}else{
				$this->cekNumeric($text,$namaVariabel);
			}
		}

		public function cekNumeric($text,$namaVariabel){
			if(!is_numeric($text)){
				$this->error=true;
				$pesanBaru=$namaVariabel." harus angka<br>";
				$this->pesanError=$this->pesanError."".$pesanBaru;	
			}
		}

		public function getError(){
			return $this->error;
		}

		public function getPesanError(){
			return $this->pesanError;
		}

		public function prosesTambah($bil1,$bil2){
			$this->hasil=$bil1+$bil2;
		}

		public function getHasil(){
			return $this->hasil;
		}
	}
	
	//deklarasi variabel
	$a=2;
	$b=4;

	//deklarasi objek
	$p = new Penjumlahan();
	$p->validasi($a,"bilangan 1");
	$p->validasi($b,"bilangan 2");

	if($p->getError()){
		echo "Error<br>";
		echo $p->getPesanError();
	}else{
		$p->prosesTambah($a,$b);
		echo $a."+".$b."=".$p->getHasil();
	}
?>