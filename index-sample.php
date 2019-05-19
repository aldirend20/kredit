<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Simulasi Kredit</title>
  </head>
  <body>
    <?php
function buatrp($angka){
		$jadi ="Rp. " .number_format($angka,0,',','.');
		return $jadi;
	}

?>



<div class="container">

<h2 class="section-title"><span>Simulasi Kredit</span></h2>

<form action="" method="POST">

	<b>Jumlah Pinjaman : </b>
	<input type="text" name="jumlah" class="form-control"  id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required/><br>
	<b>Tenor : </b>

	<select name="tenor" id="myPinjam" onchange="myFunction()" class="form-control" required value="">

		<option value="">-Pilih-</option>

		<option value="6">6 Bulan</option>
		<option value="12">12 Bulan</option>

		<option value="18">18 Bulan</option>

		<option value="24">24 Bulan</option>

		<option value="36">36 Bulan</option>

		<option value="48">48 Bulan</option>
	</select>
	<br>

	<b>Tujuan Pinjaman : </b>

	<select name="kebutuhan" id="myPinjam" onchange="myFunction()" class="form-control" required value="">

		<option value="">-Pilih-</option>

		<option value="Modal Kerja">Modal Kerja</option>

		<option value="Investasi">Investasi</option>

		<option value="Mikro">Mikro</option>

		<option value="Konsumtif">Konsumtif</option>
	</select><br>
	<input type="submit" name="btn-kalkulasi" class="btn btn-primary" value="Kalkulasi">
  <a href="http://bprhaneda.co.id/main/wp-content/uploads/2019/05/FORM-MULTIGUNA.pdf" class="btn btn-danger">Download Form Pengajuan</a>



</form>

<hr>


<?php

	if (isset($_POST['btn-kalkulasi'])) {

    $jumlah_pinjaman = $_POST['jumlah'];
		$lama_pinjaman = $_POST['tenor'];
		$kebutuhan = $_POST['kebutuhan'];
	//	$hasil=($jumlah_pinjaman * (0.3/12))/(1-((1 + (0.3/12))**($lama_pinjaman*-1)));
		if ($jumlah_pinjaman<=5000000) {
      $hasil=($jumlah_pinjaman * (0.36/12))/(1-((1 + (0.36/12))**($lama_pinjaman*-1)));
    }elseif ($jumlah_pinjaman<=15000000) {
		$hasil=($jumlah_pinjaman * (0.36/12))/(1-((1 + (0.36/12))**($lama_pinjaman*-1)));
		} elseif ($jumlah_pinjaman<=50000000){
		$hasil=($jumlah_pinjaman * (0.30/12))/(1-((1 + (0.30/12))**($lama_pinjaman*-1)));
		}elseif ($jumlah_pinjaman<=300000000){
		$hasil=($jumlah_pinjaman * (0.27/12))/(1-((1 + (0.27/12))**($lama_pinjaman*-1)));
		}elseif($jumlah_pinjaman<=500000000){
		$hasil=($jumlah_pinjaman * (0.24/12))/(1-((1 + (0.24/12))**($lama_pinjaman*-1)));
		}
		

        $total_bayar = $hasil*$lama_pinjaman;
        $bunga_pertahun = $total_bayar-$jumlah_pinjaman;
    		$bunga_perbulan = $bunga_pertahun/$lama_pinjaman;
        $angsuran_pokok = $hasil-$bunga_perbulan;
        $angsuran_bunga = $angsuran_pokok+$bunga_perbulan;
        
?>
<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nominal</th>
      <th scope="col">Tenor</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Angsuran</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<tbody>
<tr>
<td><?= buatrp($jumlah_pinjaman);?></td>
<td><?= $lama_pinjaman." Bulan";?></td>
<td><?= "<b>".$kebutuhan."</b>";?></td>
<td><?= buatrp($hasil);?></td>
<td><a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSeIdq5jGwjCm1OXVC5YOFaUWn5PU1vu5fyvEINwBJPiCJ1-DQ/viewform?fbzx=121297185286004078">Ajukan Sekarang</a>
<a class="btn btn-warning" href="" data-toggle="modal" data-target="#detailangsuran">Detail</a></td>
</tr>
</tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="detailangsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tabel Angsuran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-responsive-sm table-bordered">
  <thead>
    <tr class="table-active">
      <th scope="col">No.</th>
      <th scope="col">Baki Debet</th>
      <th scope="col">Pokok</th>
      <th scope="col">Margin</th>
      <th scope="col">Angsuran</th>
    </tr>
  </thead>
  <tbody>
    <tr>

<td>0</td>


<td><b><?php echo buatrp($jumlah_pinjaman);?></b></td>

<td>0</td>

<td>0</td>

<td>0</td>


</tr>
<?php $row = $lama_pinjaman; ?>
<?php while ( $row<1) { $row=$row-$angsuran_pokok; ?>



<tr>

  <td><?php echo $row;?></td>

  <td><?php echo buatrp($angsuran_pokok);?></td>

  <td><?php echo buatrp($angsuran_bunga);?></td>

  <td><?php echo buatrp($angsuran_bunga);?></td>

  <td><?php echo buatrp($row);?></td>

</tr>



<?php }

$tot_ang_pokok=$angsuran_pokok*$lama_pinjaman;

$tot_ang_bunga=$angsuran_bunga*$lama_pinjaman;

$tot_jumlah=$jumlah*$lama_pinjaman;

?>



<tr>

  <td></td>

  <td><b><?php echo buatrp($tot_ang_pokok);?></b></td>

  <td><b><?php echo buatrp($tot_ang_bunga);?></b></td>

  <td><b><?php echo buatrp($tot_jumlah);?></b></td>

  <td></td>

</tr>

</table>

</div>

<div class="container"><br></div>


  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeIdq5jGwjCm1OXVC5YOFaUWn5PU1vu5fyvEINwBJPiCJ1-DQ/viewform?fbzx=121297185286004078" class="btn btn-primary">Ajukan Sekarang</a>
      </div>
      <?php } ?>

    </div>
  </div>
</div>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>