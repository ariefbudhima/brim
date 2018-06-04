
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
                      <div class="body col-sm-6">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                          <h4>THT</h4>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <?php echo "Daun Telinga" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="DTelinga" value="Normal"> Normal <br>
                            <input type="radio" name="DTelinga" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Lubang Telinga" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="LTelinga" value="Normal"> Normal <br>
                            <input type="radio" name="LTelinga" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Membran Tympani" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Tympani" value="Normal"> Normal <br>
                            <input type="radio" name="Tympani" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Hidung/Septum/Chonce" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Hidung" value="Normal"> Normal <br>
                            <input type="radio" name="Hidung" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                            <?php echo "Sinus" ?><br>
                            <div class="tabelku">
                              <input type="radio" name="Sinus" value="Normal"> Normal <br>
                              <input type="radio" name="Sinus" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                            </div>
                            <br>
                        </div>

                        <div class="col-lg-4">
                          <?php echo "Faring" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Faring" value="Normal"> Normal <br>
                            <input type="radio" name="Faring" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Tensil" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Tensil" value="Normal"> Normal <br>
                            <input type="radio" name="Tensil" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Lidah" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Lidah" value="Normal"> Normal <br>
                            <input type="radio" name="Lidah" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Gusi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Gusi" value="Normal"> Normal <br>
                            <input type="radio" name="Gusi" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Gigi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Gigi" value="Normal"> Normal <br>
                            <input type="radio" name="Gigi" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                        </div>

                        <div class="col-lg-4">
                          <br>
                          <input type="checkbox" name="karang" value="karang"> Karang Gigi <br> <br>
                          <input type="checkbox" name="Gberlubang" value="Gberlubang"> Gigi Berlubang <br> <br>
                          <input type="checkbox" name="TGigi" value="TGigi"> Tambalan Gigi <br> <br>
                          <input type="checkbox" name="GigiTanggal" value="GigiTanggal"> Gigi Tanggal <br> <br>
                          <input type="checkbox" name="GigiMiring" value="GigiMiring"> Gigi Miring <br> <br>
                          <input type="checkbox" name="Radix" value="Radix"> Radix <br>
                          <!-- <?php echo "Hernia" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Hernia" value="Normal"> Normal <br>
                            <input type="radio" name="Hernia" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Haemoroid" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Haemoroid" value="Normal"> Normal <br>
                            <input type="radio" name="Haemoroid" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Lainnya" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Lainnya" value="Normal"> Normal <input type="text" name="keterangan" value=""><br>
                            <input type="radio" name="Lainnya" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br> -->
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <br>
                        <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                      </div>
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
