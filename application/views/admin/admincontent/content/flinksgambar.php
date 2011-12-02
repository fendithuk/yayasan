<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon frames">GANTI GAMBAR</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">

        <form action="">
            <div class="field">
                <label>Position Gambar</label>
                <select>
                    <option>--Pilih Posisi--</option>
                    <option>--------------------------</option>
                    <option>Posisi 1</option>
                    <option>Posisi 2</option>
                    <option>Posisi 3</option>
                    <option>Posisi 4</option>
                    <option>Posisi 5</option>

                </select>
            </div>
            <div class="field">
                <label>Alamat Links</label>
                <input type="text" class="big validate">
            </div>

            <div class="field">
                    <label>Gambar</label>
                    <input type="file" />
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