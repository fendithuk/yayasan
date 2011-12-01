<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon frames">GANTI LINKS</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">

        <form action="">
            <div class="field">
                <label>Select Links</label>
                <select>
                    <option>---------------</option>
                    <option>Facebook</option>
                    <option>Yahoo Messager</option>

                </select>
            </div>

            <div class="field">
                <label>Alamat Links</label>
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