
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
                          <h4>Abdomen</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputRadio/addabdomenrad" method="post">
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
                            <?php echo "Bentuk" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Bentuk" value="Normal"> Normal <br>
                              <input type="radio" name="Bentuk" id="Bentuk" value="Tidak Normal"> Tidak Normal <input type="text" id="ket1" name="keterangan" value="" onclick="radioclick('Bentuk');" onchange="funct('Bentuk', 'ket1');">
                            </div>
                            <br>
                            <?php echo "Palpasi/Perkusi" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Palpasi" value="Normal"> Normal <br>
                              <input type="radio" name="Palpasi" id="Palpasi" value="Tidak Normal"> Tidak Normal <input type="text" id="ket2" name="keterangan" value="" onclick="radioclick('Palpasi');" onchange="funct('Palpasi', 'ket2');">
                            </div>
                            <br>
                            <?php echo "Hati" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Hati" value="Normal"> Normal <br>
                              <input type="radio" name="Hati" id="Hati" value="Tidak Normal"> Tidak Normal <input type="text" id="ket3" name="keterangan" value="" onclick="radioclick('Hati');" onchange="funct('Hati', 'ket3');">
                            </div>
                            <br>
                          </div>

                          <div class="col-lg-4">
                            <?php echo "Limpa" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Limpa" value="Normal"> Normal <br>
                              <input type="radio" name="Limpa" id="Limpa" value="Tidak Normal"> Tidak Normal <input type="text" id="ket4" name="keterangan" value="" onclick="radioclick('Limpa');" onchange="funct('Limpa', 'ket4');">
                            </div>
                            <br>
                            <?php echo "Ginjal : Tes Ketok" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Ginjal" value="Normal"> Normal <br>
                              <input type="radio" name="Ginjal" id="Ginjal" value="Tidak Normal"> Tidak Normal <input type="text" id="ket5" name="keterangan" value="" onclick="radioclick('Ginjal');" onchange="funct('Ginjal', 'ket5');">
                            </div>
                            <br>
                            <?php echo "Rectal" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Rectal" value="Normal"> Normal <br>
                              <input type="radio" name="Rectal" id="Rectal" value="Tidak Normal"> Tidak Normal <input type="text" id="ket6" name="keterangan" value="" onclick="radioclick('Rectal');" onchange="funct('Rectal', 'ket6');">
                            </div>
                            <br>
                          </div>

                          <div class="col-lg-4">
                            <?php echo "Hernia" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Hernia" value="Normal"> Normal <br>
                              <input type="radio" name="Hernia" id="Hernia" value="Tidak Normal"> Tidak Normal <input type="text" id="ket7" name="keterangan" value="" onclick="radioclick('Hernia');" onchange="funct('Hernia', 'ket7');">
                            </div>
                            <br>
                            <?php echo "Haemoroid" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Haemoroid" value="Normal"> Normal <br>
                              <input type="radio" name="Haemoroid" id="Haemoroid" value="Tidak Normal"> Tidak Normal <input type="text" id="ket8" name="keterangan" value="" onclick="radioclick('Haemoroid');" onchange="funct('Haemoroid', 'ket8');">
                            </div>
                            <br>
                            <?php echo "Lainnya" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Lainnya" id="lainnyaN" value="Normal"> Normal <input type="text" name="keterangan" id="ket9" value="" onclick="radioclick('lainnyaN');" onchange="funct('lainnyaN', 'ket9');"><br>
                              <input type="radio" name="Lainnya" id="lainnyaT" value="Tidak Normal"> Tidak Normal <input type="text" name="keterangan" id="ket10" value="" onclick="radioclick('lainnyaT');" onchange="funct('lainnyaT', 'ket10');">
                            </div>
                            <br>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <br>
                          <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                        </div>
                      </form>
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
