<div class="contentRight">
    <!-- tabs -->
    <ul class="tabs">
        <a href="#"><li style="background-color: rgb(0,102,51);border-top-left-radius:20px;
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
        <div>
            <div align="center" style="padding-top: 80px;">
            <div class="panel2">
                <?php $this->load->view("user/frontend/scroll/v_scroll"); ?>
            </div>
            
        </div>  
        </div>
        
        
    </div> <!--end panel-->
   
</div>
