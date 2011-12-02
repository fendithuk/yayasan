<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
    <?php if ($msg == "success") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil disimpan.</p>
        </div>
    <?php } ?>
    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon frames">TAMBAH ANGGOTA</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">


        <?php echo form_open('adm/t_anggota/add'); ?>
        <div class="field">
            <label>Nama </label>
            <input type="text" name="nama" id ="nama" value="<?php echo set_value('nama'); ?>" class="big validate">
            <?php echo form_error('nama', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

        </div>
        <div class="field">
            <label>Angkatan</label>
            <input type="text" name="angkatan" id="angkatan" value="<?php echo set_value('angkatan'); ?>" class="big validate">
            <?php echo form_error('angkatan', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

        </div>
        <div class="field">
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo set_value('alamat'); ?>" class="big validate">
            <?php echo form_error('alamat', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

        </div>
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" class="big validate">
            <?php echo form_error('email', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

        </div>

        <!-- WYSIWYG: Start -->	

        <!-- WYSIWYG: End -->

        <button>Simpan</button>
        </form>
    </div>
    <!-- Box Content: End -->


</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>