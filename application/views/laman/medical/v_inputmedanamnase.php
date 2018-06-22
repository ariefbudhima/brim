
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
                      <div class="body col-sm-6">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                          <h4>Anamnase</h4>
                          </div>
                        </div>
                    <form action="<?php echo base_url(); ?>inputMedic/addanamnasemed" method="post" class="col-lg-12" >
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
                          <?php echo "Riwayat Penyakit Hepatitis A/B/C" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Hepatitis" value="A"> A <br>
                            <input type="radio" name="Hepatitis" value="B"> B <br>
                            <input type="radio" name="Hepatitis" value="C"> C <br>
                            <input type="radio" name="Hepatitis" value="-"> Tidak <br>
                            <!-- <input type="text" name="keterangan" value=""> -->
                          </div>
                          <br>
                          <?php echo "Riwayat Pengobatan TBC" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="TBC" id="TBC" value="Ya"> Ya, Tahun <input type="text" name="keterangan" id="ket1" value="" onclick="radioclick('TBC');" onchange="funct('TBC', 'ket1');"> <br>
                            <input type="radio" name="TBC" value="Tidak"> Tidak <br>
                          </div>
                          <br>
                          <?php echo "Hipertensi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Hipertensi" value="Ya"> Ya <br>
                            <input type="radio" name="Hipertensi" value="Tidak"> Tidak
                          </div>
                          <br>
                        </div>

                        <div class="col-lg-4">
                          <?php echo "Diabetes Melitus" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Diabetes" value="Ya"> Ya <br>
                            <input type="radio" name="Diabetes" value="Tidak"> Tidak
                          </div>
                          <br>
                          <?php echo "Alergi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Alergi" value="Ya"> Ya <br>
                            <input type="radio" name="Alergi" value="Tidak"> Tidak
                          </div>
                          <br>
                          <?php echo "Riwayat Rawat Operasi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Operasi" value="Ya"> Ya <br>
                            <input type="radio" name="Operasi" value="Tidak"> Tidak
                          </div>
                          <br>
                          <?php echo "Riwayat Penyakit Jantung" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Jantung" value="Ya"> Ya <br>
                            <input type="radio" name="Jantung" value="Tidak"> Tidak
                          </div>
                          <br>
                        </div>

                        <div class="col-lg-4">
                          <?php echo "Pengobatan Rawat Inap" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Inap" value="Ya"> Ya <br>
                            <input type="radio" name="Inap" value="Tidak"> Tidak
                          </div>
                          <br>
                          <?php echo "Patah Tulang" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="ptulang" value="Ya"> Ya <br>
                            <input type="radio" name="ptulang" value="Tidak"> Tidak
                          </div>
                          <br>
                          <?php echo "Obat Yang Rutin Dikonsumsi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Obat" value="Ya"> Ya <br>
                            <input type="radio" name="Obat" value="Tidak"> Tidak
                          </div>
                          <br>
                        </div>

              </div>
              <div class="col-lg-6">
                <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
              </div>
            <!-- </div> -->
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
