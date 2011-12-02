<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<!-- Box Content: Start -->
<div class="grid_24">

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
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td class="align_left"><a href="#">Some technical issues</a></td>
                            <td class="align_left center"><a href="#messages" class="popup">Kasper</a></td>
                            <td class="align_left center">12</td>
                            <td class="align_left center">3</td>
                            <td class="align_left center">1 hour ago</td>
                            <td class="align_left tools center">
                                <a href="javascript:void(0);" id="setti-admin" class="edit tip edit-anggota" title="edit">edit</a>

                                <a href="#" class="delete tip" title="delete">delete</a>
                            </td>
                        </tr>

                        <tr>

                            <td class="align_left"><a href="#">The new ipad is out!</a></td>
                            <td class="align_left center"><a href="#messages" class="popup">Kasper</a></td>
                            <td class="align_left center">67</td>
                            <td class="align_left center">23</td>
                            <td class="align_left center">5 hours ago</td>
                            <td class="align_left center tools">
                                <a href="javascript:void(0);" id="setti-admin" class="edit tip edit-anggota" title="edit">edit</a>

                                <a href="#" class="delete tip" title="delete">delete</a>
                            </td>

                        </tr>

                        <tr>

                            <td class="align_left"><a href="#">Something just happend!</a></td>
                            <td class="align_left center"><a href="#messages" class="popup">Dannie</a></td>
                            <td class="align_left center">145</td>
                            <td class="align_left center">21</td>
                            <td class="align_left center">10 hours ago</td>
                            <td class="align_left tools center">
                                <a href="javascript:void(0);" id="setti-admin" class="edit tip edit-anggota" title="edit">edit</a>

                                <a href="#" class="delete tip" title="delete">delete</a>
                            </td>

                        </tr>



                    </tbody>
                    <div class="box_content padding fanggota" title="Edit Anggota">
                        <form>
                            <div class="field" >
                                <label>Nama</label>
                                <input type="text" class="big validate">

                                <label>Angkatan</label>
                                <input type="text" class="big validate">

                                <label>Alamat</label>
                                <input type="text" class="big validate">

                                <label>Email</label>
                                <input type="text" class="big validate">

                            </div>
                            <a href="" class="button" style="float: right;margin-right: 0px;">Simpan</a>
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
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>