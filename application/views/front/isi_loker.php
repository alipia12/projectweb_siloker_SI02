<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SILOKERNF</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/siloker.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body style="background-color: lightgray;">
	<div class="container-fluid mb-2">
		<div class="py-5 my-2 col-md-offset-0 " style="background-image: url(<?php echo base_url()?>/image/img_bg_4.jpg)"  data-stellar-background-ratio="1">
		<h3 class="text-center mt-4 mb-3 text-black"><b>Sistem Informasi Lowongan Kerja NF</b></h3>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?php echo base_url()?>index.php/welcome/home" style="color: rgb(49, 6, 241);"><b> SILOKERNF</b></a>	
				 
				 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
								  <a class="nav-link"aria-current="page" href="<?php echo base_url()?>index.php/welcome/index"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/lowongan" >Lowongan Baru</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link " href="<?php echo base_url()?>index.php/welcome/loker">Isi Loker</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/mitra">Daftar Mitra</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/berita">Berita</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url()?>index.php/welcome/about">About</a>
								  </li>
							</ul>
							<form class="form-inline my-2 my-lg-0" >
                <input class="form-control mr-sm-2" style="font-size: 15px;" type="search" placeholder="Ketikan sesuatu..." aria-label="Search">
              </form>
              <li class="nav">
                <a class="nav-link" href="<?php echo base_url()?>index.php/login/login" style="color:#052473;">Login</a>
              </li>
					 
				 </div>
			 </nav>
				</div>
			</div>
		</div>
	<div class="row" style="margin-top: 50px; margin-bottom: 50px;">
		<div class="col-sm-12">
		  <div class="card shadow-sm" style="border-radius: 10px; ">
			<div class="d-flex justify-content-end mt-2">
			  <ol class="breadcrumb" style="margin-right: 50px;">
				<li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/welcome/home">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Isi Loker</li>
			  </ol>
			</div>
			<div class="card-body" style="margin-top: 10px; margin-left: 20px; margin-right: 10px;" >
			  <h3 class="card-title" style="color:rgb(10, 43, 190);">Isi Penawaran Lowongan Kerja Anda</h3> <br>
			  <form>
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Nama Perusahaan/Organisasi</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="inputPassword" placeholder="Company/Organization">
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Bidang Usaha</label>
				  <div class="col-sm-8">
					<select class="form-control" id="exampleFormControlSelect1">
					  <option>Perbankan</option>
					  <option>Desain Grafis</option>
					  <option>Startup</option>
					  <option>Web Design</option>
					  <option>Cloud Service</option>
					</select>
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Deskripsi Lowongan</label>
				  <div class="col-sm-8">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Deskripsi Kualifikasi Lowongan</label>
				  <div class="col-sm-8">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Kategori Lowongan</label>
				  <div class="col-sm-8">
					<input type="checkbox" name="kategori lowongan" id="kategori lowongan"> E Commerce 
					<input type="checkbox" name="kategori lowongan" id="kategori lowongan"> Database
					<input type="checkbox" name="kategori lowongan" id="kategori lowongan"> Costumer Service E-commerce
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Dateline</label>
				  <div class="col-sm-8">
					<input type="date" id="datepicker">
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Kontak Person</label>
				  <div class="col-sm-8">
					<input type="number" class="form-control" id="inputPassword" placeholder="Contact">
				  </div>
				</div>
  
				<div class="form-group row mb-2">
				  <label for="inputPassword" class="col-sm-4 col-form-label">Email</label>
				  <div class="col-sm-8">
					<input type="email" class="form-control" id="inputPassword" placeholder="Email">
				  </div>
				</div> <br><br>
  
				<div class="form-group row mb-2">
					<div class="col-sm-1" style="margin-right:50px;">
					  <button herf="" class="btn btn-success " type="submit">Submit</button>
					</div>
					<div class="col-sm-1" style="margin-right:50px;" >
					  <button class="btn btn-danger " type="submit">Cancel</button>
					</div>
				</div>
  
			  </form>
			</div>
		  </div>
		</div>
		
	  </div>
	  
	  <footer class="bg-light" style="text-align: center; ">
		<div class="container p-2">
		  <p>Develop By Mahasiswa STT-NF @2021</p>
		</div>
	  </footer>
	
	  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
	
  </body>
</html>