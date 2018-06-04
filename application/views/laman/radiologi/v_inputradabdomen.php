
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
                          <h4>Abdomen</h4>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <?php echo "Bentuk" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Bentuk" value="Normal"> Normal <br>
                            <input type="radio" name="Bentuk" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Palpasi/Perkusi" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Palpasi" value="Normal"> Normal <br>
                            <input type="radio" name="Palpasi" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Hati" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Hati" value="Normal"> Normal <br>
                            <input type="radio" name="Hati" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                        </div>

                        <div class="col-lg-4">
                          <?php echo "Limpa" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Limpa" value="Normal"> Normal <br>
                            <input type="radio" name="Limpa" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Ginjal : Tes Ketok" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Ginjal" value="Normal"> Normal <br>
                            <input type="radio" name="Ginjal" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                          <?php echo "Rectal" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Rectal" value="Normal"> Normal <br>
                            <input type="radio" name="Rectal" value="Tidak"> Tidak Normal <input type="text" name="keterangan" value="">
                          </div>
                          <br>
                        </div>

                        <div class="col-lg-4">
                          <?php echo "Hernia" ?><br>
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
                          <br>
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
