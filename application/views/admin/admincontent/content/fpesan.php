<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">


        <h2 class="icon pages">Pesan Masuk</h2>

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
                            <th class="align_left center">Nama</th>
                            <th class="align_left center">Isi Pesan</th>

                            <th class="align_left center tools">Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        if (isset($komen)) {
                            foreach ($komen as $r) { $i++;
                                ?>
                                <tr>

                                    <td class="align_left"><?php echo $i; ?></td>

                                    <td class="align_left center"><?php echo $r->nama; ?></td>
                                    <td class="align_left center"><a href="" title="<?php echo $r->date; ?>">
                                                <?php
                                                $str = $r->isikomentar;
                                                $str = parse_smileys($str, base_url() . "/smileys/");
                                                echo $str;
                                                ?>
                                            </a></td>
                                            <td class="align_left center"><a href="#" class="confirm-pesan" idpsn="<?php echo $r->idkomentar?>">Konfirmasi</a> || 
                                            <a href="#" class="delete-pesan" idps="<?php echo $r->idkomentar?>">Delete</a></td>

                                </tr>
                                <?php
                            }
                        }
                        ?>




                    </tbody>
                     <div class="box_content padding fconpesn" title="Konfirmasi Anggota">
                        <?php echo form_open(base_url().'index.php/adm/pesan/confirm'); ?>
                            <div class="field" >
                                <p>Apa anda yakin konfirmasi pesan ini?</p>
                                <input type="hidden" name="idpsn" id="idpsn" class="big validate" >
                                
                            </div>
                            <input type="submit" value="Konfirmasi"/>
                        </form>

                    </div> 
                    <div class="box_content padding fdelpesn" title="Konfirmasi Anggota">
                        <?php echo form_open(base_url().'index.php/adm/pesan/delete'); ?>
                            <div class="field" >
                                <p>Apa anda yakin hapus pesan ini?</p>
                                <input type="hidden" name="idps" id="idps" class="big validate" >
                                
                            </div>
                            <input type="submit" value="Konfirmasi"/>
                        </form>

                    </div> 
                </table> 

                <!-- News Sorting Table Actions: Start -->

                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->



        </div>
        <!-- News Sorting Table - Add News Tab: End -->


    </div>
    <!-- News Table Tabs: End -->

</div>
<!-- Box Content: End -->
<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".confirm-pesan").click( function (){
            $('.fconpesn').dialog('open');
            var id = $(this).attr("idpsn");
        
           
            $('#idpsn').val(id);
        });
        $(".fconpesn").dialog({
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
        $(".delete-pesan").click( function (){
            $('.fdelpesn').dialog('open');
            var id = $(this).attr("idps");
        
           
            $('#idps').val(id);
        });
        $(".fdelpesn").dialog({
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