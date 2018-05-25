
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
                      <b>Data Radiologi</b>
                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
<!-- ganti jadi data yang mau dipake di database -->
                        <thead>
                        <tr>
                            <th>Id Radiologi</th>
                            <th>Jenis Pemeriksaan</th>
                            <th>Id Dokter</th>
                        </tr>
                        </thead>

                        <tbody>
                          <?php
                          if (count($pasien1)>0){
                          foreach ($pasien1 as $obj) {
                          echo "<tr>";
                          echo "<td>$obj->idRadio</td>";
                          echo "<td>$obj->jnsPemeriksaan</td>";
                          echo "<td>$obj->idDokter</td>";
                          }
                        }
                        ?>
                      </table>
                      <br>
                      <b>Data Laboratorium</b>
                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                        <tr>
                            <th>Id Pasien</th>
                            <th>Hemoglobin</th>
                            <th>Eritrosit</th>
                            <th>Hematokrit</th>
                            <th>lekosit</th>
                            <th>Laju Endap Darah</th>
                            <th>Thrombosit</th>
                            <th>MCV</th>
                            <th>MCH</th>
                            <th>MCHC</th>
                            <th>Basofil</th>
                            <th>Eosinofil</th>
                            <th>Batang</th>
                            <th>Segmen</th>
                            <th>Limposit</th>
                            <th>Monosit</th>
                        </tr>
                        </thead>

                        <?php
                          foreach ($pasien as $obj) {
                          echo "<tr>";
                          echo "<td>$obj->IdPasien</td>";
                          echo "<td>$obj->hemoglobin</td>";
                          echo "<td>$obj->eritrosit</td>";
                          echo "<td>$obj->hematokrit</td>";
                          echo "<td>$obj->lekosit</td>";
                          echo "<td>$obj->lajuendapdarah</td>";
                          echo "<td>$obj->thrombosit</td>";
                          echo "<td>$obj->MCV</td>";
                          echo "<td>$obj->MCH</td>";
                          echo "<td>$obj->MCHC</td>";
                          echo "<td>$obj->basofil</td>";
                          echo "<td>$obj->eosinofil</td>";
                          echo "<td>$obj->batang</td>";
                          echo "<td>$obj->segmen</td>";
                          echo "<td>$obj->limposit</td>";
                          echo "<td>$obj->monosit</td>";
                          }
                          ?>
                        </tbody>
                          </table>
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
<script>
//    $(document).ready(function() {
//        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
//            $("#success-alert").slideUp(500);
//        });
//    });
</script>
