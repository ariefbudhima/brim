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
          <?php echo "PARASITOLOGI" ?> <br>
        </div>
        <form action="/action_page.php" method="get" class="col-lg-12">
          <div class="col-lg-4">
            <?php echo "Hemoglobin" ?> <br>
            <input type="text" name="hemoglobin"> <br>
            <?php echo "Eritrosit" ?> <br>
            <input type="text" name="Eritrosit"> <br>
            <?php echo "Hematokrit" ?> <br>
            <input type="text" name="Hematokrit"> <br>
            <?php echo "Lekosit" ?> <br>
            <input type="text" name="Lekosit"> <br>
            <?php echo "Laju Endap Darah" ?> <br>
            <input type="text" name="LajuEndap"> <br>
          </div>
          <div class="col-lg-4">
            <?php echo "Thrombosit" ?><br>
            <input type="text" name="Thrombosit"><br>
            <?php echo "MCV" ?> <br>
            <input type="text" name="MCV"> <br>
            <?php echo "MCH" ?> <br>
            <input type="text" name="MCH"> <br>
            <?php echo "MCHC" ?> <br>
            <input type="text" name="MCHC"> <br>
            <?php echo "Basofil" ?> <br>
            <input type="text" name="Basofil"> <br>
          </div>
          <div class="col-lg-4">
            <?php echo "Eosinofil" ?> <br>
            <input type="text" name="Eosinofil"> <br>
            <?php echo "Batang" ?> <br>
            <input type="text" name="Batang"> <br>
            <?php echo "Segmen" ?> <br>
            <input type="text" name="Segmen"> <br>
            <?php echo "Limposit" ?> <br>
            <input type="text" name="Limposit"> <br>
            <?php echo "Monosit" ?> <br>
            <input type="text" name="Monosit"> <br>
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
