<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon frames">TAMBAH ANGGOTA</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">

        <form action="">
            
            <div class="field">
                <label>Nama </label>
                <input type="text" class="big validate">
            </div>
            <div class="field">
                <label>Angkatan</label>
                <input type="text" class="big validate">
            </div>
            <div class="field">
                <label>Alamat</label>
                <input type="text" class="big validate">
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" class="big validate">
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