<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon frames">TAMBAH CONTENT</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">

        <form action="">
            <div class="field">
                <label>Pilih Content</label>
                <select>
                    <option>-----Pilih-----</option>
                    <option>------------------</option>
                    <option onclick="tampil(2)">Beranda</option>
                    <option onclick="tampil(1)">Profil</option>
                    <option onclick="tampil(1)">Peluang</option>
                    <option onclick="tampil(2)">Kegiatan</option>
                </select>
            </div>


            <div class="field">
                <label>Judul</label>
                <input type="text" class="big validate">
            </div>
            <div id="toggleText" style="display: none">
                <div class="field">
                    <label class="left">Tanggal</label>
                    <input type="text" class="date">
                </div>


                <div class="field">
                    <label>Gambar</label>
                    <input type="file" />
                </div>
            </div>
            <!-- WYSIWYG: Start -->	
            <div class="field">
                <label>Isi</label>
                <textarea class="wysiwyg"></textarea>
            </div>
            <!-- WYSIWYG: End -->

            <button>Simpan</button>
        </form>
    </div>
    <!-- Box Content: End -->

    <script language="javascript"> 
        function tampil(i) {
            var ele = document.getElementById("toggleText");
            var text = document.getElementById("displayText");
                        
            if(i == 1) {
                ele.style.display = "none";
                text.innerHTML = "show";
            }
            else {
                ele.style.display = "block";
                text.innerHTML = "hide";
            }
        } 
        
    
    </script>
</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>