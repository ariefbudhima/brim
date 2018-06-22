
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

                    <script>
                    // script berfungsi dengan baik
                      function funct(id, ket){
                        // document.getElementById('bentuk').value = ada;
                          document.getElementById(id).value = document.getElementById(ket).value;
                        // if (document.getElementById('ekspansi').checked) {
                          // document.getElementById('ekspansi').value = document.getElementById('ket2').value;
                          // alert(ada);
                        // }

                      }

                      function radioclick(id){
                        document.getElementById(id).checked = true;
                      }
                    </script>

                    <div class="block block-fx-shadow px-4 py-4">
                      <div class="body col-sm-12">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                          <h4>Riwayat Penyakit Keluarga</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputMedic/addkeluargamed" method="post">
                          <div class="row">
                            <div class="col-lg-4">
                              <?php echo "Pilih Pasien" ?> <br>
                              <div class="tabelku">
                                <?php
                                  echo "<select name = 'pasien'>";
                                  // echo "<option value = 'Pilih Pasien'>";
                                  foreach ($pasien as $key) {
                                    echo "<option value = '".$key->idPasien."'>".$key->idPasien."</option>>";
                                  }
                                  echo "</select>";
                                 ?>
                              </div>
                              <br>
                              <?php echo "Penyakit Jantung" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="jantung" value="Ya"> Ya <br>
                                <input type="radio" name="jantung" value="Tidak"> Tidak <br>
                                <!-- <input type="text" name="keterangan" value=""> -->
                              </div>
                              <br>
                              <?php echo "Penyakit Darah Tinggi" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="dtinggi" value="Ya"> Ya <br>
                                <input type="radio" name="dtinggi" value="Tidak"> Tidak <br>
                              </div>
                              <br>
                              <?php echo "Penyakit Kencing Manis" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="kmanis" value="Ya"> Ya <br>
                                <input type="radio" name="kmanis" value="Tidak"> Tidak
                              </div>
                              <br>
                            </div>

                            <div class="col-lg-4">
                              <?php echo "Penyakit Stroke" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Stroke" value="Ya"> Ya <br>
                                <input type="radio" name="Stroke" value="Tidak"> Tidak
                              </div>
                              <br>
                              <?php echo "Penyakit Paru/Asma/TBC" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Paru" value="Ya"> Ya <br>
                                <input type="radio" name="Paru" value="Tidak"> Tidak
                              </div>
                              <br>
                              <?php echo "Penyakit Kanker" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Kanker" value="Ya"> Ya <br>
                                <input type="radio" name="Kanker" value="Tidak"> Tidak
                              </div>
                              <br>
                              <?php echo "Penyakit Gangguan Jiwa" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="gjiwa" value="Ya"> Ya <br>
                                <input type="radio" name="gjiwa" value="Tidak"> Tidak
                              </div>
                              <br>
                            </div>

                            <div class="col-lg-4">
                              <?php echo "Penyakit Ginjal" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Ginjal" value="Ya"> Ya <br>
                                <input type="radio" name="Ginjal" value="Tidak"> Tidak
                              </div>
                              <br>
                              <?php echo "Penyakit Saluran Cerna" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="scerna" value="Ya"> Ya <br>
                                <input type="radio" name="scerna" value="Tidak"> Tidak
                              </div>
                              <br>
                              <?php echo "Penyakit Lainnya" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Lainnya" id="Lainnya" value="Ya"> Ya <input type="text" name="keterangan" id="ket" value="" onclick="radioclick('Lainnya');" onchange="funct('Lainnya','ket');"><br>
                                <input type="radio" name="Lainnya" value="Tidak"> Tidak
                              </div>
                            </div>

                          </div>
                          <div class="col-lg-6">
                            <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
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
