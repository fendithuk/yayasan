<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<!-- Box Content: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon pages">List Posting Di Profil<span class="tip" >3</span></h2>

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

                            <th class="align_left center">Isi</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($profil as $r) { $i++;?>
                            <tr>

                                <td class="align_left"><?php echo $i; ?></td>
                                <td class="align_left center"><?php echo $r->judul ?></td>

                                <td class="align_left center"><?php $content = nl2br(htmlentities(strip_tags($r->isi))); echo word_limiter($content , 3); ?></td>
                                <td class="align_left tools center">
                            <?php  
    echo "<a href=\"c_profil/edit/$r->id\" id=\"setti-admin\" class=\"edit tip\" >edit</a>" ?>

                                    <a href="#" class="delete tip" title="delete">delete</a>
                                </td>
                            </tr>

                            <?php } ?>

                    </tbody>
                   
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

<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>