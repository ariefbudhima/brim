
<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                         <?php $this->load->view('laman/comp/profil');?>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <?php $this->load->view('laman/comp/menulaborat');?>

                        <!-- END Side Navigation -->
                    </div>
                </div>
            </nav>
    <?php $this->load->view('laman/comp/header');?>

            <!-- Main Container -->
<!--             <main id="main-container">-->

                <!-- Page Content -->
                <div class="content">
                    <div class="my-50 ">
                        <h2 class="font-w700 text-black mb-10">Laboratorium</h2>
                        <h3 class="h5 text-muted mb-0">
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('level'));?>
                        </h3>

                    </div>

                    <div class="block block-fx-shadow px-4 py-4">
                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                              <tr>
                                  <th>Id Pasien</th>
                                  <th>Nama Pasien</th>
                                  <th>Umur</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Alamat</th>
                                  <th>Detail</th>
                              </tr>
                              </thead>
                              <tbody>
                                    <?php
                              foreach ($pasien as $obj) {
                                  echo "<tr>";
                                  echo "<td>$obj->idPasien</td>";
                                  echo "<td>$obj->nmPasien</td>";
                                  echo "<td>$obj->umur</td>";
                                  echo "<td>$obj->gender</td>";
                                  echo "<td>$obj->Alamat</td>";
                                  echo "<td><a href='getfullinfopas/$obj->idPasien'>Lihat</a></td>";
                              }
                              ?>
                              </tbody>
                          </table>
                    </div>
                </div>
                <!-- END Page Content -->
<!--             </main>-->
            <!-- END Main Container -->

            <!-- Footer -->
            <footer>
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.0</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
<script>
//    $(document).ready(function() {
//        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
//            $("#success-alert").slideUp(500);
//        });
//    });
</script>
