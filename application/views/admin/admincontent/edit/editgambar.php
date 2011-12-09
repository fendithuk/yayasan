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

    <div class="box_top">

        <h2 class="icon frames">EDIT GAMBAR</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">



        <?php foreach ($data as $r) { ?>
            <!--        <form action="<?php //echo base_url();    ?>index.php/adm/t_content/add" method="POST">-->
            <?php $attributes = array('name' => 'con', 'id' => 'con');
            echo form_open_multipart(base_url() . 'index.php/adm/c_linksGambar/editSimpan', $attributes); ?>

            <div class="field">
                <label>Content</label>
                <input type="hidden" name="idgambar" value="<?php echo $r->idgambar; ?>" class="big validate" readonly="true">

                <input type="text" name="content" value="<?php echo $r->letak; ?>" class="big validate" readonly="true">
            </div>


            <div class="field">
                <label>links</label>
                <input type="text" name="link" value="<?php echo $r->links ?>" class="big validate">
                <br/><br/><p>Alamat links gambar tidak menggunakan http://. Contoh : www.insanharmoni.com</p>
            </div>




            <div class="field">
                <label>Gambar</label>
                <input type="file" name="file" />
            </div>

            <!-- WYSIWYG: Start -->	

            <!-- WYSIWYG: End -->

            <button>Simpan</button>

            </form>
        <?php } ?>
    </div>
    <!-- Box Content: End -->


</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>