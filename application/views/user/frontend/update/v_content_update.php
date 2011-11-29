<div class="shadow">
<div class="content">
    <?php $this->load->view('user/frontend/v_contentLeft'); ?>
    <div class="contentRight">
    <!-- tabs -->
    <ul class="tabs">
        <a href="<?php echo base_url(); ?>index.php/c_page"><li style="background-color: rgb(0,102,51);border-top-left-radius:20px;
                        border-bottom-left-radius:20px">
                <img src="<?php echo base_url(); ?>image/homeIco.png"/>
                <p>Beranda</p>
            </li></a>
        <a href="#"><li>
                <img src="<?php echo base_url(); ?>image/profilIco.png"/>
                <p>Profil</p>
            </li></a>
        <a href="#"><li>
                <img src="<?php echo base_url(); ?>image/profilIco.png"/>
                <p>Anggota</p>
            </li></a>
        <a href="#"><li>
                <img src="<?php echo base_url(); ?>image/peluangIco.png"/>
                <p>Peluang</p>
            </li></a>
        <a href="#"><li>
                <img src="<?php echo base_url(); ?>image/kegiatanIco.png"/>
                <p>Kegiatan</p>
            </li></a>
    </ul>

    <!-- panel -->
    <div class="panel">

        <?php $this->load->view('user/frontend/scroll/v_scroll_kegiatan'); ?>
        <?php $this->load->view('user/frontend/scroll/v_scroll_peluang'); ?>
        <?php $this->load->view('user/frontend/scroll/v_scroll_anggota'); ?>
        <?php $this->load->view('user/frontend/scroll/v_scroll_profil'); ?>
        <?php $this->load->view('user/frontend/scroll/v_scroll_update'); ?>  

    </div> <!--end panel-->
    

</div>

</div>
    
</div> <!--shadow-->