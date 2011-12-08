<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <?php if ($msg == "gagal") { ?>
        <div class="notice warning">
            <p><b>PERHATIAN:</b> Ada field yang masih kosong, silahkan lengkapi field yang ada.</p>
        </div>
    <?php } else if ($msg == "success") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil di ganti.</p>
        </div>
    <?php } ?>

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon pages">Ganti Gambar</h2>

        <!-- Tab Select: Start -->

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
                            <th class="align_left center">Posisi Gambar</th>

                            <th class="align_left center">Links</th>
                            <th class="align_left center">Gambar</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        if (isset($data)) {
                            foreach ($data as $r) { $i++;
                                ?>
                                <tr>

                                    <td class="align_left"><?php echo $i; ?></td>
                                    <td class="align_left center"><?php echo $r->letak; ?></td>
                                    <td class="align_left center"><?php echo $r->links; ?></td>
                                    <td class="align_left center"><a href="<?php echo base_url(); ?>uploads/<?php echo $r->nmgambar; ?>" class="popup"><?php echo $r->nmgambar; ?></a></td>

                                    <td class="align_left tools center">
                                        <a href="<?php echo base_url();?>index.php/adm/c_linksGambar/edit/<?php echo $r->idgambar ?>" class="edit tip edit-gambar" idgambar="<?php echo $r->idgambar; ?>" links="<?php echo $r->links; ?>" letak="<?php echo $r->letak; ?>" title="edit">edit</a>

                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>



                    </tbody>
                    <div class="box_content padding fgambar" title="Ganti Gambar">
                        <?php $attributes = array('name' => 'con', 'id' => 'con');
                        echo form_open_multipart(base_url() . 'index.php/adm/c_linksGambar/editSimpan', $attributes); ?>
                        <div class="field" >
                            <label>Letak gambar</label>
                            <input type="text" name="letak" id="letak" class="big validate" readonly="true">

                        </div>

                        <div class="field" >
                            <label>Links</label>
                            <input type="hidden" name="idgambar" id="idgambar" class="big validate" >
                            <input type="text" name="link" id="link" class="big validate">

                        </div>
                        <div class="field">
                            <label>Gambar</label>
                            <input type="file" name="file" id="file"/>
                        </div>
                        <input type="submit" value="Simpan"/>
                        </form>

                    </div> 
                </table> 

                <!-- News Sorting Table Actions: Start -->

                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table: End -->

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
        $(".edit-gambar").click( function (){
            $('.fgambar').dialog('open');
            var id = $(this).attr("idgambar");
            var links = $(this).attr("links");
            var letak = $(this).attr("letak");
           
            $('#idgambar').val(id);
            $('#link').val(links);
            $('#letak').val(letak);
        });
        $(".fgambar").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 500,
            width :550,
            modal: true
			
        });
    });
</script>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>