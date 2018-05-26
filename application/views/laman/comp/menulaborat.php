<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a href="<?php echo base_url();?>Lihatdata/lookdata"><i class="fa fa-book fa-fw"></i>Daftar Pasien</a>
        </li>

        <!-- <li>
            <a href="<?php echo base_url();?>"><i class="fa fa-plus-square"></i>Tambah Data Laborat</a>
        </li> -->
<!-- bagian tambah laborat harus bisa diedit, jadi kalo ada data pasien yang sama, fungsi yang dipanggil update, bukan add -->




        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Tambah Data Laborat</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>inputLaborat/inputlaborathema">Hematologi</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>inputLaborat/inputlaboraturin">Urinalis</a>
                </li>
                <li>
                    <a href="op_error_400.html">Parasitologi</a>
                </li>
                <li>
                    <a href="op_error_400.html">Serologi</a>
                </li>

            </ul>
        </li>
    </ul>
</div>
