<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
        <div class="row-fluid">
          	<div class="span3">
          		<?php include 'menu.php'; ?>
          	</div>
          	<div class="span9">
          		<?php
      				if(isset($_GET['menu'])){
						$menu=$_GET['menu'];
					}else{
						$menu=1;
					}

					$pesanheader;
					$isiinclude;
					if($menu==1){
						$pesanheader="Pemesanan Makanan";
						$isiinclude='pesan/pesan.php';
					}else if($menu==2){
						if (isset($_GET['hasil'])) {
							$pesanheader="Hasil Bintang Segitiga";
							$isiinclude="segitiga/proses-segitiga.php";
						}else{
							$pesanheader="Menyusun Bintang Segitiga";
							$isiinclude="segitiga/segitiga.php";	
						}
					}else if($menu==3){
						$pesanheader="Menyusun Bintang Persegi";
						$isiinclude="persegi/persegi.php";
					}

          		?>
          		<div class="judul-isi"><h2><?php echo $pesanheader?></h2></div>
          		<article>
          			<?php
          				include $isiinclude;
          			?>
          		</article>

          	</div>
        </div>
	</div>
	
</body>
</html>
