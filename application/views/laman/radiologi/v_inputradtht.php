
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
                          // alert(document.getElementById(ket).value);
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
                          <h4>THT</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputRadio/addthtrad" method="post">
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
                            <?php echo "Daun Telinga" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="DTelinga" value="Normal"> Normal <br>
                              <input type="radio" name="DTelinga" id="telinga" value=""> Tidak Normal <input type="text" id="ket1" name="keterangan" value="" onclick="radioclick('telinga');" onchange="funct('telinga', 'ket1');">
                            </div>
                            <br>
                            <?php echo "Lubang Telinga" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="LTelinga" value="Normal"> Normal <br>
                              <input type="radio" name="LTelinga" id="LTelinga" value=""> Tidak Normal <input type="text" id="ket2" name="keterangan" value="" onclick="radioclick('LTelinga');" onchange="funct('LTelinga', 'ket2');">
                            </div>
                            <br>
                            <?php echo "Membran Tympani" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Tympani" value="Normal"> Normal <br>
                              <input type="radio" name="Tympani" id="Tympani" value=""> Tidak Normal <input type="text" id="ket3" name="keterangan" value="" onclick="radioclick('Tympani');" onchange="funct('Tympani', 'ket3');">
                            </div>
                            <br>
                            <?php echo "Hidung/Septum/Chonce" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Hidung" value="Normal"> Normal <br>
                              <input type="radio" name="Hidung" id="Hidung" value=""> Tidak Normal <input type="text" id="ket4" name="keterangan" value="" onclick="radioclick('Hidung');" onchange="funct('Hidung', 'ket4');">
                            </div>
                            <br>
                          </div>

                          <div class="col-lg-4">
                            <?php echo "Sinus" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Sinus" value="Normal"> Normal <br>
                              <input type="radio" name="Sinus" id="Sinus" value=""> Tidak Normal <input type="text" id="ket5" name="keterangan" value="" onclick="radioclick('Sinus');" onchange="funct('Sinus', 'ket5');">
                            </div>
                            <br>
                            <?php echo "Faring" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Faring" value="Normal"> Normal <br>
                              <input type="radio" name="Faring" id="Faring" value=""> Tidak Normal <input type="text" id="ket6" name="keterangan" value="" onclick="radioclick('Faring');" onchange="funct('Faring', 'ket6');">
                            </div>
                            <br>
                            <?php echo "Tensil" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Tensil" value="Normal"> Normal <br>
                              <input type="radio" name="Tensil" id="Tensil" value=""> Tidak Normal <input type="text" id="ket7" name="keterangan" value="" onclick="radioclick('Tensil');" onchange="funct('Tensil', 'ket7');">
                            </div>
                            <br>
                            <?php echo "Lidah" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Lidah" value="Normal"> Normal <br>
                              <input type="radio" name="Lidah" id="Lidah" value=""> Tidak Normal <input type="text" id="ket8" name="keterangan" value="" onclick="radioclick('Lidah');" onchange="funct('Lidah', 'ket8');">
                            </div>
                            <br>
                            <?php echo "Gusi" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Gusi" value="Normal"> Normal <br>
                              <input type="radio" name="Gusi" id="Gusi" value=""> Tidak Normal <input type="text" id="ket9" name="keterangan" value="" onclick="radioclick('Gusi');" onchange="funct('Gusi', 'ket9');">
                            </div>
                            <br>
                          </div>

                          <div class="col-lg-4">
                            <?php echo "Gigi" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Gigi" value="Normal"> Normal <br>
                              <input type="radio" name="Gigi" id="Gigi" value=""> Tidak Normal <input type="text" id="ket10" name="keterangan" value="" onclick="radioclick('Gigi');" onchange="funct('Gigi', 'ket10');">
                            </div>
                            <br>
                            <input type="checkbox" name="karang" value="Ya"> Karang Gigi <br> <br>
                            <input type="checkbox" name="Gberlubang" value="Ya"> Gigi Berlubang <br> <br>
                            <input type="checkbox" name="TGigi" value="Ya"> Tambalan Gigi <br> <br>
                            <input type="checkbox" name="GigiTanggal" value="Ya"> Gigi Tanggal <br> <br>
                            <input type="checkbox" name="GigiMiring" value="Ya"> Gigi Miring <br> <br>
                            <input type="checkbox" name="Radix" value="Ya"> Radix <br>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <br>
                          <input type="submit" value="Submit" style="text-align : center; position : absolute;" onclick="alertdatasave();"> <br>
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
