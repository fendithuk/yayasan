<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->

<div class="grid_24">
    <?php if ($msg == "gagal") { ?>
        <div class="notice warning">
            <p><b>PERHATIAN:</b> Ada field yang masih kosong, silahkan lengkapi field yang ada.</p>
        </div>
    <?php } else if ($msg == "success") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil disimpan.</p>
        </div>
    <?php } ?>
    <!-- Box Header: Start -->
    <?php foreach ($data as $r) { ?>
    <div class="box_top">

        <h2 class="icon frames">EDIT <?php echo $r->nama; ?></h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">
        



        <!--        <form action="<?php //echo base_url();   ?>index.php/adm/t_content/add" method="POST">-->
            <?php $attributes = array('name' => 'con', 'id' => 'con');
            echo form_open_multipart(base_url() . 'index.php/adm/c_profil/editSimpan', $attributes); ?>

            <div class="field">
                <label>Content</label>
                   <input type="hidden" name="idc" value="<?php echo $r->idsketsa; ?>" class="big validate" readonly="true">
         
                <input type="text" name="content" value="<?php echo $r->nama; ?>" class="big validate" readonly="true">
            </div>


            <div class="field">
                <label>Judul</label>
                <input type="text" name="judul" value="<?php echo $r->judulsketsa; ?>" class="big validate">
            </div>


           

            <!-- WYSIWYG: Start -->	
            <div class="field">
                <label>Isi</label>
                <textarea class="wysiwyg" name="isi"><?php echo $r->isisketsa ?></textarea>
            </div>
            <!-- WYSIWYG: End -->

            <button>Simpan</button>

            </form>
<?php } ?>
    </div>
    <!-- Box Content: End -->


</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>