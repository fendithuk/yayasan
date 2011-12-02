<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->

<div class="grid_24">
    <?php if($msg == "gagal"){?>
    <div class="notice warning">
        <p><b>PERHATIAN:</b> Ada field yang masih kosong, silahkan lengkapi field yang ada.</p>
    </div>
    <?php }else if($msg == "success"){ ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil disimpan.</p>
    </div>
    <?php }?>
    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon frames">TAMBAH CONTENT</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content padding">


<!--        <form action="<?php //echo base_url(); ?>index.php/adm/t_content/add" method="POST">-->
         <?php $attributes = array('name' => 'con', 'id' => 'con');echo form_open_multipart(base_url().'index.php/adm/t_content/add',$attributes);?>
    
            <div class="field">
                <label>Pilih Content</label>
                <select name="select">
                    <option value="">-----Pilih-----</option>
                    <option value="" >------------------</option>
                    <option value="1" onclick="tampil(2)">Beranda</option>
                    <option value="2" onclick="tampil(1)">Profil</option>
                    <option value="3" onclick="tampil(1)">Peluang</option>
                    <option value="4" onclick="tampil(2)">Kegiatan</option>
                </select>
            </div>


            <div class="field">
                <label>Judul</label>
                <input type="text" name="judul" class="big validate">
            </div>
            <div id="toggleText" style="display: none">
                <div class="field">
                    <label class="left">Tanggal</label>
                    <input type="text" name="tanggal" class="date" >
                </div>


                <div class="field">
                    <label>Gambar</label>
                    <input type="file" name="file" id="file"/>
                </div>
            </div>
            <!-- WYSIWYG: Start -->	
            <div class="field">
                <label>Isi</label>
                <textarea class="wysiwyg" name="isi"></textarea>
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