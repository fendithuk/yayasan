<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<!-- Box Content: Start -->
<div class="grid_24">
    <?php if ($msg == "success") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil diedit.</p>
        </div>
    <?php } else if ($msg == "successDel") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil di hapus.</p>
        </div>
    <?php }
    ?>
    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon pages">List Posting Di Kegiatan<span class="tip" >3</span></h2>

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
                            <th class="align_left center">Judul</th>
                            <th class="align_left center">Tanggal</th>
                            <th class="align_left center">Gambar</th>
                            <th class="align_left center">Isi</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 0;
                        if(isset ($kegiatan)){
                        foreach ($kegiatan as $r) {
                            $i++;
                            ?>
                            <tr>

                                <td class="align_left"><?php echo $i ?></td>
                                <td class="align_left center"><?php echo $r->judulsketsa; ?></td>
                                <?php
                                $tgl = substr($r->tanggalsketsa, 8);
                                $bln = substr($r->tanggalsketsa, 5, 2);
                                $th = substr($r->tanggalsketsa, 0, 4);
                                ?>
                                <td class="align_left center"><?php echo "$tgl/$bln/$th" ?></td>
                                <td class="align_left center"><a href="<?php echo base_url(); ?>uploads/<?php echo $r->gambarsketsa; ?>" class="popup"><?php echo $r->gambarsketsa; ?></a></td>
                                <td class="align_left center"><?php $content = nl2br(htmlentities(strip_tags($r->isisketsa)));
                                echo word_limiter($content, 3); ?></td>
                                <td class="align_left tools center">

                                    <a href="<?php echo base_url(); ?>index.php/adm/c_kegiatan/edit/<?php echo $r->idsketsa ?>" id="setti-admin" class="edit tip" >edit</a>

                                   <a href="javascript:void(0);" class="delete tip hapus-kegiatan" idan="<?php echo $r->idsketsa;?>" title="delete">delete</a>
                              </td>
                            </tr> 

<?php } }  ?>


                    </tbody>
                    <div class="box_content padding fhapus" title="Konfirmasi Anggota">
                        <?php echo form_open(base_url().'index.php/adm/c_kegiatan/hapus'); ?>
                            <div class="field" >
                                <p>Apa anda yakin ingin menghapus data ini?</p>
                                <input type="hidden" name="idan" id="idan" class="big validate" >
                                
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
        $(".hapus-kegiatan").click( function (){
            $('.fhapus').dialog('open');
            var id = $(this).attr("idan");
        
           
            $('#idan').val(id);
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