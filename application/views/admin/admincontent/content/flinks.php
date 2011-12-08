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

        <h2 class="icon pages">Manage Social</span></h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Yahoo Messager</a></li>
            <li><a href="#addnews">Facebook</a></li>
        </ul>
        <!-- Tab Select: End -->

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- News Table Tabs: Start -->
        <div class="tabs">

            <!-- News Sorting Table: Start -->
            <div id="listing">

                <table class="sorting">
                    <thead>
                        <tr>

                            <th class="align_left">No.</th>
                            <th class="align_left center">Nama</th>
                            <th class="align_left center">Alamat YM</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        if (isset($ym)) {
                            foreach ($ym as $r) {
                                $i++; ?>
                                <tr>
                                    <td class="align_left"><?php echo $i; ?></td>
                                    <td class="align_left center"><?php echo $r->nama; ?></td>
                                    <td class="align_left center"><?php echo $r->links; ?></td>
                                    <td class="align_left tools center">
                                        <a href="#" class="edit tip tambah-linksym" title="Tambah">edit</a>
                                        <a href="#" class="edit tip edit-linksym" idy="<?php echo $r->idlinks; ?>" namay="<?php echo $r->nama; ?>" title="Edit">view</a>
                                        <a href="#" class="delete tip hapus-ym" idang="<?php echo $r->idlinks; ?>" title="delete">delete</a>
                                    </td>
                                </tr>
    <?php }
} else { ?>
                            <tr>
                                <td class="align_left">1</td>
                                <td class="align_left center">Data kosong</td>
                                <td class="align_left center">Klik Menu samping untuk tambah YM ==></td>
                                <td class="align_left tools center">
                                    <a href="#" class="edit tip tambah-linksym" title="Tambah">edit</a>
                                    <a href="#" class="edit tip edit-linksym" title="Edit">view</a>
                                    <a href="#" class="delete tip hapus-ym" title="delete">delete</a>
                                </td>
                            </tr>
<?php } ?>




                    </tbody>
                </table> 

            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
            <div id="addnews" class="padding">



                <table class="sorting">
                    <thead>
                        <tr>

                            <th class="align_left center">View Facebook</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($fb)) {
                            foreach ($fb as $r) { ?>
                                <tr>

                                    <td class="align_left center"><?php echo $r->links; ?></td>

                                    <td class="align_left tools center">
                                        <a href="#" class="edit tip edit-linksfb" idli="<?php echo $r->idlinks ?>" title="edit">edit</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>




                    </tbody>
                </table> 
                <div class="box_content padding ffb" title="Edit Facebook">
<?php echo form_open(base_url() . 'index.php/adm/c_links/editFbSimpan'); ?>
                    <div class="field" >
                        <label>Code Facebook</label>
                        <input type="hidden" name="idfb" id="idfb" class="big validate" >
                        <textarea rows="4" name="code" id="code"></textarea>

                    </div>
                    <input type="submit" value="Simpan"/>
                    </form>

                </div> 

                <div class="box_content padding fym" title="Tambah Alamat Ym">
<?php echo form_open(base_url() . 'index.php/adm/c_links/addYm'); ?>
                    <div class="field" >
                        <label>Nama</label>
                        <input type="text" name="nama" id="nama" class="big validate">

                        <label>Code YM</label>
                        <textarea rows="4" name="codeYm" id="codeYm"></textarea>


                    </div>
                    <input type="submit" value="Simpan"/>
                    </form>

                </div> 

                <div class="box_content padding feditym" title="Edit Alamat Ym">
<?php echo form_open(base_url() . 'index.php/adm/c_links/editYmSimpan'); ?>
                    <div class="field" >
                        <label>Nama</label>
                        <input type="hidden" name="idy" id="idy" class="big validate" >
                        <input type="text" name="namay" id="namay" class="big validate">

                        <label>Masukan Code Baru</label>
                         <textarea rows="4" name="codeYm" id="codeYm"></textarea>


                    </div>
                    <input type="submit" value="Simpan"/>
                    </form>

                </div> 

                <div class="box_content padding fymhapus" title="Konfirmasi Anggota">
<?php echo form_open(base_url() . 'index.php/adm/c_links/hapus'); ?>
                    <div class="field" >
                        <p>Apa anda yakin ingin menghapus data anggota ini?</p>
                        <input type="hidden" name="idang" id="idang" class="big validate" >

                    </div>
                    <input type="submit" value="Hapus"/>
                    </form>

                </div> 


            </div>

            <!-- News Sorting Table - Add News Tab: End -->

        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>

<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".edit-linksfb").click( function (){
            $('.ffb').dialog('open');
            var id = $(this).attr("idli");
           
            
            $('#idfb').val(id);
            
        });
        $(".ffb").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 300,
            width :550,
            modal: true
			
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".tambah-linksym").click( function (){
            $('.fym').dialog('open');
            var id = $(this).attr("idangkatan");
            
            $('#idangkatan').val(id);
        });
        $(".fym").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 350,
            width :550,
            modal: true
			
        });
    });
    
    
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".edit-linksym").click( function (){
            $('.feditym').dialog('open');
            var id = $(this).attr("idy");
            var nama = $(this).attr("namay");
            
            
            $('#idy').val(id);
            $('#namay').val(nama);
            
        });
        $(".feditym").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 350,
            width :550,
            modal: true
			
        });
    });
    
   
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".hapus-ym").click( function (){
            $('.fymhapus').dialog('open');
            var id = $(this).attr("idang");
        
           
            $('#idang').val(id);
        });
        $(".fymhapus").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 230,
            width :350,
            modal: true
			
        });
    });

</script>
<!-- 100% Box Grid Container: End -->
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>