<!-- helo
<?php echo $this->session->userdata('username');?>

<?php  ?> -->
<?php $this->load->view('template/loader');?>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<?php
$this->load->view('template/navbar');

?>
<!-- #Top Bar -->
<section>
    <?php $this->load->view('template/sidebar');?>
        <!-- Menu -->
        <?php
        if($this->session->userdata('akses') == 'Laborat'){
            $this->load->view('template/dashboard/laborat_menu');
        }
        elseif ($this->session->userdata('akses') == 'Radio') {
            $this->load->view('template/dashboard/radio_menu');
        }
        else if ($this->session->userdata('akses') == 'Medical') {
            $this->load->view('template/dashboard/medical_menu');
        }
        ?>
        <!-- #Menu -->
        <!-- Footer -->
        <?php $this->load->view('template/footer');?>
        <!-- #Footer -->
    </aside>
</section>
<section class="content">
    <div class="container-fluid">
      <div class="body">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-6">
          <?php echo "<strong>URINALIS</strong>" ?> <br>
        </div>
        <form action="/action_page.php" method="get" class="col-lg-12">
          <div class="col-lg-3">
            <?php echo "Warna" ?> <br>
            <input type="text" name="Warna"> <br>
            <?php echo "Kejernihan" ?> <br>
            <input type="text" name="Kejernihan"> <br>
            <?php echo "BJ" ?> <br>
            <input type="text" name="BJ"> <br>
            <?php echo "pH" ?> <br>
            <input type="text" name="pH"> <br>
            <?php echo "Protein" ?> <br>
            <div>
                <input type="radio" name="protein" value="ada"> <label for="protein1" checked="checked">Ada</label>
            </div>
            <input type="text" name="Protein"> <br>
          </div>
          <div class="col-lg-3">
            <?php echo "Glukosa" ?><br>
            <input type="text" name="Glukosa"><br>
            <?php echo "Keton" ?> <br>
            <input type="text" name="Keton"> <br>
            <?php echo "Bilirubin" ?> <br>
            
            <input type="text" name="Bilirubin"> <br>
            <?php echo "Urobilinogen" ?> <br>
            <input type="Urobilinogen" name="MCHC"> <br>
            <?php echo "Nitrit" ?> <br>
            <input type="text" name="Nitrit"> <br>
          </div>
          <div class="col-lg-3">
            <?php echo "Darah" ?> <br>
            <input type="text" name="Darah"> <br>
            <?php echo "Lekosit" ?> <br>
            <input type="text" name="Lekosit"> <br>
          </div>
          <div class="col-lg-3">
            <?php echo "<strong>Sedimen</strong>" ?> <br> <br>
            <?php echo "Eritrosit" ?> <br>
            <input type="text" name="Eritrosit"> <br>
            <?php echo "Lekosit" ?> <br>
            <input type="text" name="Lekosit"> <br>
            <?php echo "Epitel" ?> <br>
            <input type="text" name="Epitel"> <br>
            <?php echo "Kristal" ?> <br>
            <input type="text" name="Kristal"> <br>
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
</section>
