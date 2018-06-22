
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
                    <div class="my-1 ">
                        <h2 class="font-w700 text-black mb-10">Laboratorium</h2>
                        <h3 class="h5 text-muted mb-0">
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('level'));?>
                        </h3>

                    </div>

                    <div class="block block-fx-shadow px-4 py-4">
                      <!-- <div class="container-fluid"> -->
      <div class="body col-sm-6">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
          <h4>HEMATOLOGI</h4>
          </div>
        </div>
          <!-- action ke controller yang seharusnya untuk menginputkan data dan akan memanggil model yang bersangkutan -->
        <form action="<?php echo base_url(); ?>inputLaborat/addhemalab" method="post"class="col-lg-12" >
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
               <!-- <br> -->
            <?php echo "Hemoglobin" ?> <br>
            <input type="text" name="hemoglobin" class="tabelku"> <br>
            <?php echo "Eritrosit" ?> <br>
            <input type="text" name="Eritrosit" class="tabelku"> <br>
            <?php echo "Hematokrit" ?> <br>
            <input type="text" name="Hematokrit" class="tabelku"> <br>
            <?php echo "Lekosit" ?> <br>
            <input type="text" name="Lekosit" class="tabelku"> <br>
            <?php echo "Laju Endap Darah" ?> <br>
            <input type="text" name="LajuEndap"  class="tabelku"> <br>
            </div>

            <div class="col-lg-4">
            <?php echo "Thrombosit" ?><br>
            <input type="text" name="Thrombosit" class="tabelku"><br>
            <?php echo "MCV" ?> <br>
            <input type="text" name="MCV" class="tabelku"> <br>
            <?php echo "MCH" ?> <br>
            <input type="text" name="MCH" class="tabelku"> <br>
            <?php echo "MCHC" ?> <br>
            <input type="text" name="MCHC" class="tabelku"> <br>
            <?php echo "Basofil" ?> <br>
            <input type="text" name="Basofil" class="tabelku"> <br>
            </div>

            <div class="col-md-4">
            <?php echo "Eosinofil" ?> <br>
            <input type="text" name="Eosinofil" class="tabelku"> <br>
            <?php echo "Batang" ?> <br>
            <input type="text" name="Batang" class="tabelku"> <br>
            <?php echo "Segmen" ?> <br>
            <input type="text" name="Segmen" class="tabelku"> <br>
            <?php echo "Limposit" ?> <br>
            <input type="text" name="Limposit" class="tabelku"> <br>
            <?php echo "Monosit" ?> <br>
            <input type="text" name="Monosit" class="tabelku"> <br>
            </div>
          </div>

          <!-- <div class="col-lg-12"> -->
            <!-- <div class="col-lg-4">
            </div> -->
            <div class="col-lg-6">
              <br>
              <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
            </div>
          <!-- </div> -->
        </form>
      <!-- </div> -->
    <!-- </div> -->
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
