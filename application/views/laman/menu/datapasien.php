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
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                              DATA KELAS
                          </h2>
                      </div>
                      <div class="body">
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                              <tr>
                                  <th>Id Pasien</th>
                                  <th>Nama Pasien</th>
                                  <th>Umur</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Alamat</th>
                                  <th>Detail</th>
                              </tr>
                              </thead>
                              <tbody>
                                    <?php
                              foreach ($pasien as $obj) {
                                  echo "<tr>";
                                  echo "<td>$obj->idPasien</td>";
                                  echo "<td>$obj->nmPasien</td>";
                                  echo "<td>$obj->umur</td>";
                                  echo "<td>$obj->gender</td>";
                                  echo "<td>$obj->Alamat</td>";
                                  echo "<td><a href='getfullinfopas/$obj->idPasien'>Lihat</a></td>";
                              }
                              ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Basic Examples -->
      </div>
</section>
