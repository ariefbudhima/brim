
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
                      <div class="container-fluid">
      <div class="body col-lg-12">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-6">
          <?php echo "URINALIS" ?> <br>
          </div>
          <!-- action ke controller yang seharusnya untuk menginputkan data dan akan memanggil model yang bersangkutan -->
        <form action="/action_page.php" method="get" class="col-lg-12">
            <div class="col-lg-4">
              <?php echo "Pilih Pasien" ?> <br>
              <?php
                echo "<select name = 'pasien'>";
                foreach ($pasien as $key) {
                  echo "<option value = '".$key->idPasien."'>".$key->idPasien."</option>>";
                }
                echo "</select>";
               ?>
               <br>
          <input type="radio" name="gender" value="laki"> laki <br>
          <input type="radio" name="gender" value="cewe"> cewe <br>


          <input type="radio" name="warna" value="jernih"> jernih <br>
          <input type="radio" name="warna" value="kuning"> kuning <br>
            <!-- <?php echo "Hemoglobin" ?> <br>
            <input type="text" name="hemoglobin"> <br>
            <?php echo "Eritrosit" ?> <br>
            <input type="text" name="Eritrosit"> <br>
            <?php echo "Hematokrit" ?> <br>
            <input type="text" name="Hematokrit"> <br>
            <?php echo "Lekosit" ?> <br>
            <input type="text" name="Lekosit"> <br>
            <?php echo "Laju Endap Darah" ?> <br>
            <input type="text" name="LajuEndap"> <br> -->
          </div>

          <div class="col-lg-4">
            <!-- <?php echo "Thrombosit" ?><br>
            <input type="text" name="Thrombosit"><br>
            <?php echo "MCV" ?> <br>
            <input type="text" name="MCV"> <br>
            <?php echo "MCH" ?> <br>
            <input type="text" name="MCH"> <br>
            <?php echo "MCHC" ?> <br>
            <input type="text" name="MCHC"> <br>
            <?php echo "Basofil" ?> <br>
            <input type="text" name="Basofil"> <br> -->
          </div>

          <div class="col-md-4">
            <!-- <?php echo "Eosinofil" ?> <br>
            <input type="text" name="Eosinofil"> <br>
            <?php echo "Batang" ?> <br>
            <input type="text" name="Batang"> <br>
            <?php echo "Segmen" ?> <br>
            <input type="text" name="Segmen"> <br>
            <?php echo "Limposit" ?> <br>
            <input type="text" name="Limposit"> <br>
            <?php echo "Monosit" ?> <br>
            <input type="text" name="Monosit"> <br> -->
          </div>
          <div class="col-lg-12">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-6">
              <br>
              <input type="submit" value="Submit"> <br>
            </div>
          </div>
        </form>
      </div>
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
