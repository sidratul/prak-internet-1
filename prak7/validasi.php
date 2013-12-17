<?php
	class Validasi{
		var $text;
		var $pesan;
		var $error;

		public function Validasi(){
			$this->text="";
			$this->pesan="";
			$this->error=false;
		}

		public function cekKosong($text){
			$this->text=$text;
			if(empty($this->text)){
				//$this->error=true;
				$this->pesan=$this->pesan."nilai kosong <br>";
			}else{
				$this->pesan=$this->pesan."nilai tidak kosong <br>";
			}
		}

		public function cekNumeric($text){
			$this->text=$text;
			if(!is_numeric($this->text)){
				//$this->error=true;
				$this->pesan=$this->pesan."nilai bukan anggka<br>";
			}else{
				$this->pesan=$this->pesan."nilai angka <br>";
			}
		}

		public function getError(){
			return $this->error;
		}

		public function getPesan(){
			return $this->pesan;
		}
	}


	if(isset($_POST['in1'])){

		$in1=$_POST['in1'];
		$in2=$_POST['in2'];

		$v = new Validasi();
		$v->cekKosong($in1);
		$v->cekNumeric($in2);

		echo $v->getPesan();
	}else{
		echo "
			<form action='validasi.php' method='POST'>
				INPUTAN 1 : <input type='text' name='in1' placeholder='inputkan sesuatu'><br>
				INPUTAN 2 : <input type='text' name='in2' placeholder='inputkan sesuatu'><br>
				<input type='submit' value='proses'>
			</form>
		";
	}
?>
