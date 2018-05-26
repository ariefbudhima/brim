
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
          <h4>URINALIS</h4>
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
          <!-- <input type="radio" name="gender" value="laki"> laki <br>
          <input type="radio" name="gender" value="cewe"> cewe <br>


          <input type="radio" name="warna" value="jernih"> jernih <br>
          <input type="radio" name="warna" value="kuning"> kuning <br> -->

            <?php echo "Warna Urin" ?> <br>
            <select class="" name="">
              <option value="putih">Putih</option>
              <option value="bening">Bening</option>
              <option value="kuning">Kuning Pucat</option>
              <option value="hijau">Hijau</option>
              <option value="coklat">Coklat</option>
              <option value="biru">Biru</option>
              <option value="hitam">Hitam</option>
              <option value="berbusa">Berbusa</option>
              <option value="kemerahan">Kemerahan</option>
            </select>
          <br>
            <?php echo "Kejernihan" ?> <br>
            <select class="" name="">
              <option value="jernih">Jernih</option>
              <option value="keruh">Keruh</option>
            </select>
            <br>
            <?php echo "BJ" ?> <br>
            <input type="text" name="BJ"> <br>
            <?php echo "pH" ?> <br>
            <input type="text" name="pH"> <br>
            <?php echo "Protein" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="protein" value="positif"> Positif <br>
                <input type="radio" name="protein" value="negatif"> Negatif <br>
            </div>
          </div>
          <div class="col-lg-4">
            <?php echo "Glukosa" ?><br>
            <div class="col-lg-3">
                <input type="radio" name="glukosa" value="positif"> Positif <br>
                <input type="radio" name="glukosa" value="negatif"> Negatif <br>
            </div>
            <?php echo "Keton" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="keton" value="positif"> Positif <br>
                <input type="radio" name="keton" value="negatif"> Negatif <br>
            </div>
            <?php echo "Bilirubin" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="bikirubin" value="positif"> Positif <br>
                <input type="radio" name="bilirubin" value="negatif"> Negatif <br>
            </div>
            <?php echo "Urobilinogen" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="urobilinogen" value="rendah"> Positif <br>
                <input type="radio" name="urobilinogen" value="normal"> Negatif <br>
                <input type="radio" name="urobilinogen" value="meningkat"> Meningkat <br>
            </div>
            <?php echo "Nitrit" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="nitrit" value="positif"> Positif <br>
                <input type="radio" name="nitrit" value="negatif"> Negatif <br>
            </div>
            <?php echo "Darah" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="darah" value="positif"> Positif <br>
                <input type="radio" name="darah" value="negatif"> Negatif <br>
            </div>
            <?php echo "Lekosit" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="lekosit" value="positif"> Positif <br>
                <input type="radio" name="lekosit" value="negatif"> Negatif <br>
            </div>
          </div>
          <br>
          <div class="col-lg-4">
            <?php echo "<strong>Sedimen</strong>" ?> <br>
            <?php echo "Eritrosit" ?> <br>
            <input type="text" name="Eritrosit"> <br>
            <?php echo "Lekosit" ?> <br>
            <input type="text" name="Lekosit"> <br>
            <?php echo "Epitel" ?> <br>
            <input type="text" name="Epitel"> <br>
            <?php echo "Kristal" ?> <br>
            <div class="col-lg-3">
                <input type="radio" name="kristal" value="positif"> Positif <br>
                <input type="radio" name="kristal" value="negatif"> Negatif <br>
            </div>
          </div>
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
