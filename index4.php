<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
	Simulasi Kredit
    </title>

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary"> 
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-4 mt-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Simulasi Kredit</h1>
                                </div>


<form action="" method="POST">

	<b>Jumlah Pinjaman : </b>
	<input type="text" name="jumlah" class="form-control"  id="inputku" required/><br>
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

                                <hr>
                                <div class="text-center">
                                    <small>Powered by IT App @ 2019</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
