<?php $this->load->view('admin/adminmenu/menuatas'); ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

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

                        <tr>
                             <td class="align_left">1</td>
                            <td class="align_left center">fendithuk</td>
                            <td class="align_left center">http://messenger.yahoo.com/edit/send/?.target=fendithuk</td>
                              <td class="align_left tools center">
                                <a href="#" class="edit tip tambah-linksym" title="Tambah">edit</a>
                                <a href="#" class="edit tip edit-linksym" title="Edit">view</a>
                                <a href="#" class="delete tip hapus-ym" title="delete">delete</a>
                            </td>
                        </tr>



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

                        <tr>
                            
                            <td class="align_left center"><iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe></td>
                           
                            <td class="align_left tools center">
                                <a href="#" class="edit tip edit-linksfb" title="edit">edit</a>
                                         </td>
                        </tr>



                    </tbody>
                </table> 
                <div class="box_content padding ffb" title="Edit Facebook">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/edit'); ?>
                            <div class="field" >
                                <label>Code Facebook</label>
                                <input type="hidden" name="idfb" id="idfb" class="big validate" >
                                <input type="text" name="code" id="code" class="big validate">

                                
                            </div>
                            <input type="submit" value="Simpan"/>
                        </form>

                    </div> 
                
                 <div class="box_content padding fym" title="Tambah Alamat Ym">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/edit'); ?>
                            <div class="field" >
                                <label>Nama</label>
                                <input type="hidden" name="idangkatan" id="idangkatan" class="big validate" >
                                <input type="text" name="nama" id="nama" class="big validate">

                                <label>Alamat YM</label>
                                <input type="text" name="alamatym" id="alamatym" class="big validate">

                               
                            </div>
                            <input type="submit" value="Simpan"/>
                        </form>

                    </div> 
                
                 <div class="box_content padding feditym" title="Edit Alamat Ym">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/edit'); ?>
                            <div class="field" >
                                <label>Nama</label>
                                <input type="hidden" name="idangkatan" id="idangkatan" class="big validate" >
                                <input type="text" name="nama" id="nama" class="big validate">

                                <label>Alamat YM</label>
                                <input type="text" name="alamatym" id="alamatym" class="big validate">

                               
                            </div>
                            <input type="submit" value="Simpan"/>
                        </form>

                    </div> 
                
                <div class="box_content padding fymhapus" title="Konfirmasi Anggota">
                        <?php echo form_open(base_url().'index.php/adm/c_anggota/hapus'); ?>
                            <div class="field" >
                                <p>Apa anda yakin ingin menghapus data anggota ini?</p>
                                <input type="hidden" name="idangka" id="idangka" class="big validate" >
                                
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
            var id = $(this).attr("idangkatan");
            var nama = $(this).attr("nama");
            
            $('#email').val(email);
            $('#idangkatan').val(id);
        });
        $(".ffb").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 250,
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
            var nama = $(this).attr("nama");
            
            $('#email').val(email);
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
            var id = $(this).attr("idangkatan");
            var nama = $(this).attr("nama");
            
            $('#email').val(email);
            $('#idangkatan').val(id);
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
            var id = $(this).attr("idangka");
        
           
            $('#idangka').val(id);
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