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
                    <a href="<?php echo base_url();?>InputRadio/inputradthorax">Thorax</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>InputRadio/inputradtht">THT</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>op_error_400">Leher</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>InputRadio/inputradabdomen">Abdomen</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>op_error_400">Neurologis</a>
                </li>


            </ul>
        </li>
    </ul>
</div>
