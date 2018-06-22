
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
                      <b>DATA LABORATORIUM</b> <br>
                      <b>Hematologi</b>
                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Id Pasien</th>
                            <th>Hemoglobin</th>
                            <th>Eritrosit</th>
                            <th>Hematokrit</th>
                            <th>lekosit</th>
                            <th>Laju Endap Darah</th>
                            <th>Thrombosit</th>

                        </tr>
                        </thead>

                        <?php
                        $ada = 1;
                          foreach ($pasien as $obj) {
                          echo "<tr>";
                          echo "<td>$ada</td>";
                          echo "<td>$obj->updated_at</td>";
                          echo "<td>$obj->IdPasien</td>";
                          echo "<td>$obj->hemoglobin</td>";
                          echo "<td>$obj->eritrosit</td>";
                          echo "<td>$obj->hematokrit</td>";
                          echo "<td>$obj->lekosit</td>";
                          echo "<td>$obj->lajuendapdarah</td>";
                          echo "<td>$obj->thrombosit</td>";
                          $ada+=1;
                          }
                          ?>
                        </tbody>
                          </table>
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                              <tr>
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
                            <?php foreach ($pasien  as $obj){
                              echo "<tr>";
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


                          </table>
                          <br>
                          <b>Urinalis</b>
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Id Pasien</th>
                                <th>Warna</th>
                                <th>Kejernihan</th>
                                <th>BJ</th>
                                <th>PH</th>
                                <th>Protein</th>
                                <th>Glukosa</th>
                                <th>Keton</th>
                                <th>Bilirubin</th>

                            </tr>
                            </thead>

                            <?php
                            $ada = 1;
                              foreach ($pasien1 as $obj) {
                              echo "<tr>";
                              echo "<td>$ada</td>";
                              echo "<td>$obj->updated_at</td>";
                              echo "<td>$obj->IdPasien</td>";
                              echo "<td>$obj->Warna</td>";
                              echo "<td>$obj->Kejernihan</td>";
                              echo "<td>$obj->BJ</td>";
                              echo "<td>$obj->PH</td>";
                              echo "<td>$obj->Protein</td>";
                              echo "<td>$obj->Glukosa</td>";
                              echo "<td>$obj->Keton</td>";
                              echo "<td>$obj->Bilirubin</td>";
                              $ada+=1;
                              }
                              ?>
                            </tbody>
                              </table>

                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Urobilinogen</th>
                                    <th>Nitrit</th>
                                    <th>Darah</th>
                                    <th>Lekosit</th>
                                    <th>Sedimen Eritrosit</th>
                                    <th>Sedimen Lekosit</th>
                                    <th>Sedimen Epitel</th>
                                    <th>Kristal</th>

                                </tr>
                                </thead>

                                <?php
                                $ada = 1;
                                  foreach ($pasien1 as $obj) {
                                  echo "<tr>";
                                  echo "<td>$obj->Urobilinogen</td>";
                                  echo "<td>$obj->Nitrit</td>";
                                  echo "<td>$obj->Darah</td>";
                                  echo "<td>$obj->Lekosit</td>";
                                  echo "<td>$obj->sEritrosit</td>";
                                  echo "<td>$obj->sLekosit</td>";
                                  echo "<td>$obj->sEpitel</td>";
                                  echo "<td>$obj->Kristal</td>";
                                  $ada+=1;
                                  }
                                  ?>
                                </tbody>
                                  </table>

                                  <br>
                                  <b>Serologi</b>
                                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pemeriksaan</th>
                                        <th>Id Pasien</th>
                                        <th>VDRL/syphilis</th>
                                        <th>HbsAg</th>
                                        <th>Widal</th>

                                    </tr>
                                    </thead>

                                    <?php
                                    $ada = 1;
                                      foreach ($pasien2 as $obj) {
                                      echo "<tr>";
                                      echo "<td>$ada</td>";
                                      echo "<td>$obj->updated_at</td>";
                                      echo "<td>$obj->IdPasien</td>";
                                      echo "<td>$obj->Syphilis</td>";
                                      echo "<td>$obj->HbsAg</td>";
                                      echo "<td>$obj->Widal</td>";
                                      $ada+=1;
                                      }
                                      ?>
                                    </tbody>
                                      </table>
                                      <br><br>
                                      <b>DATA RADIOLOGI</b> <br>
                                      <b>Thorax</b>
                                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pemeriksaan</th>
                                            <th>Id Pasien</th>
                                            <th>Bentuk</th>
                                            <th>Ekspansi</th>
                                            <th>Palpasi</th>
                                            <th>Perkusi</th>
                                            <th>Auskultasi</th>
                                            <th>Lain</th>

                                        </tr>
                                        </thead>

                                        <?php
                                        $ada = 1;
                                          foreach ($pasien3 as $obj) {
                                          echo "<tr>";
                                          echo "<td>$ada</td>";
                                          echo "<td>$obj->updated_at</td>";
                                          echo "<td>$obj->IdPasien</td>";
                                          echo "<td>$obj->Bentuk</td>";
                                          echo "<td>$obj->Ekspansi</td>";
                                          echo "<td>$obj->Palpasi</td>";
                                          echo "<td>$obj->Perkusi</td>";
                                          echo "<td>$obj->Auskultasi</td>";
                                          echo "<td>$obj->Lain</td>";
                                          $ada+=1;
                                          }
                                          ?>
                                        </tbody>
                                          </table>
                                          <br>

                                          <b>Leher</b>
                                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Pemeriksaan</th>
                                                <th>Id Pasien</th>
                                                <th>Leher</th>
                                            </tr>
                                            </thead>

                                            <?php
                                            $ada = 1;
                                              foreach ($pasien4 as $obj) {
                                              echo "<tr>";
                                              echo "<td>$ada</td>";
                                              echo "<td>$obj->updated_at</td>";
                                              echo "<td>$obj->IdPasien</td>";
                                              echo "<td>$obj->leher</td>";
                                              $ada+=1;
                                              }
                                              ?>
                                            </tbody>
                                              </table>
                                              <br>

                                              <b>THT</b>
                                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Pemeriksaan</th>
                                                    <th>Id Pasien</th>
                                                    <th>Daun Telinga</th>
                                                    <th>Lubang Telinga</th>
                                                    <th>Membran Tympani</th>
                                                    <th>Hidung/ Septum/ Chonce</th>
                                                    <th>Sinus</th>
                                                    <th>Faring</th>
                                                    <th>Tensil</th>
                                                    <th>Lidah</th>

                                                </tr>
                                                </thead>

                                                <?php
                                                $ada = 1;
                                                  foreach ($pasien5 as $obj) {
                                                  echo "<tr>";
                                                  echo "<td>$ada</td>";
                                                  echo "<td>$obj->updated_at</td>";
                                                  echo "<td>$obj->IdPasien</td>";
                                                  echo "<td>$obj->dtelinga</td>";
                                                  echo "<td>$obj->ltelinga</td>";
                                                  echo "<td>$obj->tympani</td>";
                                                  echo "<td>$obj->hidung</td>";
                                                  echo "<td>$obj->sinus</td>";
                                                  echo "<td>$obj->faring</td>";
                                                  echo "<td>$obj->tensil</td>";
                                                  echo "<td>$obj->lidah</td>";
                                                  $ada+=1;
                                                  }
                                                  ?>
                                                </tbody>
                                                  </table>

                                                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                    <tr>
                                                        <th>Gusi</th>
                                                        <th>Gigi</th>
                                                        <th>Karang Gigi</th>
                                                        <th>Gigi Berlubang</th>
                                                        <th>Tambalan Gigi</th>
                                                        <th>Gigi Tanggal</th>
                                                        <th>Gigi Miring</th>
                                                        <th>Radix</th>
                                                    </tr>
                                                    </thead>

                                                    <?php
                                                    $ada = 1;
                                                      foreach ($pasien5 as $obj) {
                                                      echo "<tr>";
                                                      echo "<td>$obj->gusi</td>";
                                                      echo "<td>$obj->gigi</td>";
                                                      echo "<td>$obj->karang</td>";
                                                      echo "<td>$obj->lubanggigi</td>";
                                                      echo "<td>$obj->tambalgigi</td>";
                                                      echo "<td>$obj->gigitanggal</td>";
                                                      echo "<td>$obj->gigimiring</td>";
                                                      echo "<td>$obj->radix</td>";
                                                      $ada+=1;
                                                      }
                                                      ?>
                                                    </tbody>
                                                      </table>
                                                      <br>

                                                      <b>Abdomen</b>
                                                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal Pemeriksaan</th>
                                                            <th>Id Pasien</th>
                                                            <th>Bentuk</th>
                                                            <th>Palpasi/Perkusi</th>
                                                            <th>Hati</th>
                                                            <th>Limpa</th>
                                                            <th>Ginjal: Tes Ketok</th>
                                                            <th>Rectal</th>
                                                            <th>Hernia</th>
                                                            <th>Haemoroid</th>
                                                            <th>Lainnya</th>

                                                        </tr>
                                                        </thead>

                                                        <?php
                                                        $ada = 1;
                                                          foreach ($pasien6 as $obj) {
                                                          echo "<tr>";
                                                          echo "<td>$ada</td>";
                                                          echo "<td>$obj->updated_at</td>";
                                                          echo "<td>$obj->IdPasien</td>";
                                                          echo "<td>$obj->Bentuk</td>";
                                                          echo "<td>$obj->Palpasi</td>";
                                                          echo "<td>$obj->Hati</td>";
                                                          echo "<td>$obj->Limpa</td>";
                                                          echo "<td>$obj->Ginjal</td>";
                                                          echo "<td>$obj->Rectal</td>";
                                                          echo "<td>$obj->Hernia</td>";
                                                          echo "<td>$obj->Haemoroid</td>";
                                                          echo "<td>$obj->Lainnya</td>";
                                                          $ada+=1;
                                                          }
                                                          ?>
                                                        </tbody>
                                                          </table>
                                                          <br>

                                                          <b>Neurologi</b>
                                                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Tanggal Pemeriksaan</th>
                                                                <th>Id Pasien</th>
                                                                <th>Fisiologin</th>
                                                                <th>Patologis</th>
                                                                <th>Kekuatan Motor</th>
                                                                <th>Kelainan Syaraf Pusat</th>
                                                                <th>Kelainan Syaraf Tepi</th>
                                                                <th>Lidah</th>
                                                                <th>Lainnya</th>

                                                            </tr>
                                                            </thead>

                                                            <?php
                                                            $ada = 1;
                                                              foreach ($pasien7 as $obj) {
                                                              echo "<tr>";
                                                              echo "<td>$ada</td>";
                                                              echo "<td>$obj->updated_at</td>";
                                                              echo "<td>$obj->IdPasien</td>";
                                                              echo "<td>$obj->Fisiologi</td>";
                                                              echo "<td>$obj->Patologis</td>";
                                                              echo "<td>$obj->Motor</td>";
                                                              echo "<td>$obj->Pusat </td>";
                                                              echo "<td>$obj->Tepi</td>";
                                                              echo "<td>$obj->Lidah</td>";
                                                              echo "<td>$obj->Lainnya</td>";
                                                              $ada+=1;
                                                              }
                                                              ?>
                                                            </tbody>
                                                              </table>
                                                              <br><br>
                                                              <b>DATA Medical Check Up</b> <br>
                                                              <b>Anamnase</b>
                                                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Tanggal Pemeriksaan</th>
                                                                    <th>Id Pasien</th>
                                                                    <th>Riwayat Penyakit Hepatitis</th>
                                                                    <th>Riwayat Pengobatan TBC</th>
                                                                    <th>Hipertensi</th>
                                                                    <th>Diabetes Melitus</th>
                                                                    <th>Alergi</th>
                                                                    <th>Riwayat Rawat Operasi</th>

                                                                </tr>
                                                                </thead>

                                                                <?php
                                                                $ada = 1;
                                                                  foreach ($pasien8 as $obj) {
                                                                  echo "<tr>";
                                                                  echo "<td>$ada</td>";
                                                                  echo "<td>$obj->updated_at</td>";
                                                                  echo "<td>$obj->IdPasien</td>";
                                                                  echo "<td>$obj->Hepatitis</td>";
                                                                  echo "<td>$obj->TBC</td>";
                                                                  echo "<td>$obj->Hipertensi</td>";
                                                                  echo "<td>$obj->Diabetes</td>";
                                                                  echo "<td>$obj->Alergi</td>";
                                                                  echo "<td>$obj->Operasi</td>";
                                                                  $ada+=1;
                                                                  }
                                                                  ?>
                                                                </tbody>
                                                                  </table>

                                                                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Riwayat Penyakit Jantung</th>
                                                                        <th>Pengobatan Rawat Inap</th>
                                                                        <th>Patah Tulang</th>
                                                                        <th>Obat Yang Rutin Dikonsumsi</th>
                                                                    </tr>
                                                                    </thead>

                                                                    <?php
                                                                    $ada = 1;
                                                                      foreach ($pasien8 as $obj) {
                                                                      echo "<tr>";
                                                                      echo "<td>$obj->Jantung</td>";
                                                                      echo "<td>$obj->Inap</td>";
                                                                      echo "<td>$obj->PTulang</td>";
                                                                      echo "<td>$obj->ObatRutin</td>";
                                                                      $ada+=1;
                                                                      }
                                                                      ?>
                                                                    </tbody>
                                                                      </table>
                                                                        <br><br>
                                                                      <b>Riwayat Penyakit Keluarga</b>
                                                                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Tanggal Pemeriksaan</th>
                                                                            <th>Id Pasien</th>
                                                                            <th>Penyakit Jantung</th>
                                                                            <th>Penyakit Darah Tinggi</th>
                                                                            <th>Penyakit Kencing Manis</th>
                                                                            <th>Penyakit Stroke</th>
                                                                            <th>PEnyakit Paru/ Asma/ TBC</th>
                                                                        </tr>
                                                                        </thead>

                                                                        <?php
                                                                        $ada = 1;
                                                                          foreach ($pasien9 as $obj) {
                                                                          echo "<tr>";
                                                                          echo "<td>$ada</td>";
                                                                          echo "<td>$obj->updated_at</td>";
                                                                          echo "<td>$obj->IdPasien</td>";
                                                                          echo "<td>$obj->Jantung</td>";
                                                                          echo "<td>$obj->DTinggi</td>";
                                                                          echo "<td>$obj->Kmanis</td>";
                                                                          echo "<td>$obj->Stroke</td>";
                                                                          echo "<td>$obj->Paru</td>";
                                                                          $ada+=1;
                                                                          }
                                                                          ?>
                                                                        </tbody>
                                                                          </table>

                                                                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Penyakit Kanker</th>
                                                                                <th>Penyakit Gangguan Jiwa</th>
                                                                                <th>Penyakit Ginjal</th>
                                                                                <th>Penyakit Saluran Cerna</th>
                                                                                <th>Penyakit Lainnya</th>
                                                                            </tr>
                                                                            </thead>

                                                                            <?php
                                                                            $ada = 1;
                                                                              foreach ($pasien9 as $obj) {
                                                                              echo "<tr>";
                                                                              echo "<td>$obj->Kanker</td>";
                                                                              echo "<td>$obj->GJiwa</td>";
                                                                              echo "<td>$obj->Ginjal</td>";
                                                                              echo "<td>$obj->SCerna</td>";
                                                                              echo "<td>$obj->Lainnya</td>";
                                                                              $ada+=1;
                                                                              }
                                                                              ?>
                                                                            </tbody>
                                                                              </table>
                                                                              <br><br>
                                                                              <b>Pemeriksaan</b>
                                                                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                              <thead>
                                                                              <tr>
                                                                                  <th>No</th>
                                                                                  <th>Tanggal Pemeriksaan</th>
                                                                                  <th>Id Pasien</th>
                                                                                  <th>Tinggi Badan</th>
                                                                                  <th>Berat Badan</th>
                                                                                  <th>Nadi</th>
                                                                                  <th>Pernapasan</th>
                                                                                  <th>Tensi</th>
                                                                                  <th>Mata Sehari-hari</th>
                                                                                  <th>Mata Saat Diperiksa</th>
                                                                              </tr>
                                                                              </thead>

                                                                              <?php
                                                                              $ada = 1;
                                                                                foreach ($pasien10 as $obj) {
                                                                                echo "<tr>";
                                                                                echo "<td>$ada</td>";
                                                                                echo "<td>$obj->updated_at</td>";
                                                                                echo "<td>$obj->IdPasien</td>";
                                                                                echo "<td>$obj->Tinggi</td>";
                                                                                echo "<td>$obj->Berat</td>";
                                                                                echo "<td>$obj->Nadi</td>";
                                                                                echo "<td>$obj->Pernapasan</td>";
                                                                                echo "<td>$obj->Tensi</td>";
                                                                                echo "<td>$obj->Harihari</td>";
                                                                                echo "<td>$obj->Periksa</td>";
                                                                                $ada+=1;
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
