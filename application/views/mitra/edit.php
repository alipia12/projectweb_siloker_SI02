<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
              <?php $this->load->view('include/navbar');?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
            
                        <?php echo form_open_multipart('mitra/update'); ?>

                        
                        <input type="hidden" name="id" placeholder="masukan id" class="form-control" value=<?=$mitra->id?>>

                        <label for="">Nama</label>
                        <input type="text" name="nama" placeholder="masukan nama anda" class="form-control"value=<?=$mitra->nama?>>
                        
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" placeholder="masukan alamat" class="form-control"value=<?=$mitra->alamat?>>

                        <label for="">Kontak</label>
                        <input type="text" name="kontak" placeholder="masukan kontak" class="form-control"value=<?=$mitra->kontak?>>

                        <label for="">Telpon</label>
                        <input type="text" name="telpon" placeholder="masukan telpon" class="form-control"value=<?=$mitra->telpon?>>

                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="masukan Email" class="form-control"value=<?=$mitra->email?>>
                        
                        <label for="">Web</label>
                        <input type="text" name="web" placeholder="masukan web" class="form-control"value=<?=$mitra->web?>>

                        <label for="">Bidang usaha</label>
                        <input type="text" name="bidang_usaha_id" placeholder="masukan Bidang usaha" class="form-control"value=<?=$mitra->bidang_usaha_id?>>

                        <label for="">Sektor Usaha</label>
                        <input type="text" name="sektor_usaha_id" placeholder="masukan Sektor usaha" class="form-control"value=<?=$mitra->sektor_usaha_id?>>
            
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <?php echo form_close() ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>