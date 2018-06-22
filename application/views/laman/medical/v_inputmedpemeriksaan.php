
<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                         <?php $this->load->view('laman/comp/profil');?>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <?php
                        if ($this->session->userdata('akses')=='Laborat'){
                          $this->load->view('laman/comp/menulaborat');
                        }
                        elseif ($this->session->userdata('akses')=='Radio') {
                          $this->load->view('laman/comp/menuradio');
                        }
                        elseif ($this->session->userdata('akses')=='Medical') {
                          $this->load->view('laman/comp/menumedic');
                        }
                          ?>



                        <!-- END Side Navigation -->
                    </div>
                </div>
            </nav>
    <?php $this->load->view('laman/comp/header');?>

            <!-- Main Container -->
<!--             <main id="main-container">-->

                <!-- Page Content -->
                <div class="content">
                    <div class="my-1 ">
                        <h2 class="font-w700 text-black mb-10"><?php echo $this->session->userdata('jabatan');?></h2>
                        <h3 class="h5 text-muted mb-0">
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('level'));?>
                        </h3>

                    </div>

                    <div class="block block-fx-shadow px-4 py-4">
                      <div class="body col-sm-12">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                          <h4>Pemeriksaan</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputMedic/addpemeriksaanmed" method="post">
                          <div class="row">
                            <div class="col-lg-4">
                              <?php echo "Pilih Pasien" ?> <br>
                              <div class="tabelku">
                                <?php
                                  echo "<select name = 'pasien'>";
                                  foreach ($pasien as $key) {
                                    echo "<option value = '".$key->idPasien."'>".$key->idPasien."</option>>";
                                  }
                                  echo "</select>";
                                 ?>
                              </div>
                              <br>
                              <?php echo "Tinggi Badan" ?><br>
                              <input class="tabelku" type="text" name="tinggi" value="">
                              <br>
                              <?php echo "Berat Badan" ?><br>
                              <input class="tabelku" type="text" name="Berat" value="">
                              <br>
                              <?php echo "Nadi" ?><br>
                              <input class="tabelku" type="text" name="Nadi" value="">
                              <br>
                              <?php echo "Pernapasan" ?><br>
                              <input class="tabelku" type="text" name="Pernapasan" value="">
                              <br>
                            </div>

                            <div class="col-lg-4">
                              <?php echo "Tensi" ?><br>
                              <input class="tabelku" type="text" name="tensi" value="">
                              <br>
                              <!-- ini masih belom selesai, bagian form medical checkup bagian d. Pemeriksaan <br> <br> <br> -->
                              <?php echo "Mata"; ?>
                              <div class="tabelku" >
                                <?php echo "Sehari-hari"; ?> <br>
                                <div class="tabelku">
                                  <input class="" type="radio" name="Harihari" value="Kacamata"> Kacamata<br>
                                  <input class="" type="radio" name="Harihari" value="Softlens"> Softlens<br>
                                  <input class="" type="radio" name="Harihari" value="Tidak"> Tidak Menggunakan Keduanya<br>
                                </div>
                                <br>
                                <!-- <input class="tabelku" type="text" name="Harihari" value=""><br> -->
                                <?php echo "Ketika Diperiksa"; ?> <br>
                                <div class="tabelku">
                                  <input class="" type="radio" name="Periksa" value="Kacamata"> Kacamata<br>
                                  <input class="" type="radio" name="Periksa" value="Softlens"> Softlens<br>
                                  <input class="" type="radio" name="Periksa" value="Tidak"> Tidak Menggunakan Keduanya<br>
                                </div>
                              </div>
                              <br>
                            </div>

                            <div class="col-lg-4">
                              </div>
                                <div class="col-lg-6">
                                  <br>
                                  <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                              </div>
                            </div>
                        </form>

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
