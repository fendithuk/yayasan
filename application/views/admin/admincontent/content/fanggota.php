<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<!-- Box Content: Start -->
<div class="grid_24">
<?php if($msg == "gagal"){?>
    <div class="notice warning">
        <p><b>PERHATIAN:</b> Ada field yang masih kosong, silahkan lengkapi field yang ada.</p>
    </div>
    <?php }else if ($msg == "success") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil diedit.</p>
        </div>
    <?php } ?>
    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon pages">List Posting Di Anggota<span class="tip" >3</span></h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Listing</a></li>

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

                            <th class="align_left">No</th>
                            <th class="align_left center">Nama</th>
                            <th class="align_left center">Angkatan</th>
                            <th class="align_left center">Alamat</th>
                            <th class="align_left center">Email</th>
                            <th class="align_left center">Konfirmasi</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;
                        if(isset ($anggota)){
foreach ($anggota as $r) {
    $i++;?>
                        
                        <tr>

                            <td class="align_left"><?php echo $i;?></td>
                            <td class="align_left center"><?php echo $r->nama;?></td>
                            <td class="align_left center"><?php echo $r->thnangkatan;?></td>
                            <td class="align_left center"><?php echo $r->alamat;?></td>
                            <td class="align_left center"><?php echo $r->email;?></td>
                            <?php if($r->status == "ok"){ ?>
                                 <td class="align_left center">Sudah Dikonfirmasi</td>
                           

                          <?php }else{ ?>
                               <td class="align_left center"><a href="javascript:void(0);" class="confirm-anggota" idangkat="<?php echo $r->iddataangkatan;?>">Konfirmasi</a></td>
                               
                          <?php }
?>
                            
                            <td class="align_left tools center">
                                <a href="javascript:void(0);" id="setti-admin" class="edit tip edit-anggota" idangkatan="<?php echo $r->iddataangkatan;?>" nama="<?php echo $r->nama;?>" angkatan="<?php echo $r->thnangkatan;?>" alamat="<?php echo $r->alamat;?>" email="<?php echo $r->email;?>" title="edit">edit</a>

                                <a href="javascript:void(0);" class="delete tip hapus-anggota" idangka="<?php echo $r->iddataangkatan;?>" title="delete">delete</a>
                            </td>
                        </tr>
                        
                        
                        <?php
}}?>
                        

                       

                    </tbody>
                    <div class="box_content padding fanggota" title="Edit Anggota">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/edit'); ?>
                            <div class="field" >
                                <label>Nama</label>
                                <input type="hidden" name="idangkatan" id="idangkatan" class="big validate" >
                                <input type="text" name="nama" id="nama" class="big validate">

                                <label>Angkatan</label>
                                <input type="text" name="angkatan" id="angkatan" id=""class="big validate">

                                <label>Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="big validate">

                                <label>Email</label>
                                <input type="text" name="email" id="email" class="big validate">

                            </div>
                            <input type="submit" value="Simpan"/>
                        </form>

                    </div> 
                    <div class="box_content padding fconfirm" title="Konfirmasi Anggota">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/confirm'); ?>
                            <div class="field" >
                                <p>Apa anda yakin konfirmasi data anggota ini?</p>
                                <input type="hidden" name="idangkat" id="idangkat" class="big validate" >
                                
                            </div>
                            <input type="submit" value="Konfirmasi"/>
                        </form>

                    </div> 
                    <div class="box_content padding fhapus" title="Konfirmasi Anggota">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/hapus'); ?>
                            <div class="field" >
                                <p>Apa anda yakin ingin menghapus data anggota ini?</p>
                                <input type="hidden" name="idangka" id="idangka" class="big validate" >
                                
                            </div>
                            <input type="submit" value="Hapus"/>
                        </form>

                    </div> 
                </table> 

                <!-- News Sorting Table Actions: Start -->

                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table - Add News Tab: Start -->

            <!-- News Sorting Table - Add News Tab: End -->

        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".edit-anggota").click( function (){
            $('.fanggota').dialog('open');
            var id = $(this).attr("idangkatan");
            var nama = $(this).attr("nama");
            var angkatan = $(this).attr("angkatan");
            var alamat = $(this).attr("alamat");
            var email = $(this).attr("email");
            
            $('#nama').val(nama);
            $('#angkatan').val(angkatan);
            $('#alamat').val(alamat);
            $('#email').val(email);
            $('#idangkatan').val(id);
        });
        $(".fanggota").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 500,
            width :450,
            modal: true
			
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".confirm-anggota").click( function (){
            $('.fconfirm').dialog('open');
            var id = $(this).attr("idangkat");
        
           
            $('#idangkat').val(id);
        });
        $(".fconfirm").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 230,
            width :350,
            modal: true
			
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".hapus-anggota").click( function (){
            $('.fhapus').dialog('open');
            var id = $(this).attr("idangka");
        
           
            $('#idangka').val(id);
        });
        $(".fhapus").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 230,
            width :350,
            modal: true
			
        });
    });
</script>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>