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

                    <a href="<?= base_url()?>index.php/peminat_lowongan/add" class="btn btn-primary">add</a>
                    
                    <a href="<?= base_url()?>index.php/login/logout" class="btn btn-primary">Logout</a>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Peminat Lowongan</h1>

                    <table class="table table-striped">
                        <thead class="bg-primary text-white ">
                            <tr>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Alasan</th>
                                <th>Prodi</th>
                                <th>Lowongan</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($peminat_lowongan->result() as $peminat_lowongan){
                                    echo '
                                    <tr>
                                        <td>'.$peminat_lowongan->nim.'</td>
                                        <td>'.$peminat_lowongan->nama.'</td>
                                        <td>'.$peminat_lowongan->alasan.'</td>
                                        <td>'.$peminat_lowongan->prodi_id.'</td>
                                        <td>'.$peminat_lowongan->lowongan_id.'</td>
                                        <td>
                                        <a class="btn btn-primary"href="'.base_url().'index.php/peminat_lowongan/view/'.$peminat_lowongan->id.'">View</a>
                                        <a href="'.base_url().'index.php/peminat_lowongan/edit/'.$peminat_lowongan->id.'" class="btn btn-success">Edit</a>
                                        <a  onclick="return confirm(‘Yakin Hapus?’)" class="btn btn-danger" href="'.base_url().'index.php/peminat_lowongan/delete/'.$peminat_lowongan->id.'">Delete</a>
                                        </td>
                                        
                                    </tr>';
                                }
                            ?>
                        </tbody>
                    
                    
                    </table>

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
                        <span aria-hidden="true">×</span>
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