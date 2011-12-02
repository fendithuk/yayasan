
<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<div class="grid_24">

    <!-- Info Notice: Start -->
    <div class="notice info">
        <p>Selamat datang di admin Insan Harmoni</p>
    </div>
    <!-- Info Notice: End -->

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon time">Shortcut</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <p class="center">
            <!-- List of big icons for quicklinks -->
            <a href="javascript:void(0);" id="tambah-event" class="big_button add_event"><span>Tambah Kegiatan</span></a>

            <a href="javascript:void(0);" id="tambah-anggota" class="big_button add_user"><span>Tambah Anggota</span></a>
            <a href="javascript:void(0);" id="show-msg" class="big_button new_pm"><span>pesan<br/> Baru</span></a>
        </p>

    </div>
    <!-- Box Content: End -->
    <div id="tambahEvent" class="box_content padding" title="Menambah Kegiatan">
        <form>
            <div class="field" >
                <label>Judul Kegiatan</label>
                <input type="text" class="big validate">

                <label>Tanggal Kegiatan</label>
                <input type="text" class="date">

                <label>Gambar</label>
                <input type="file" />

                <label>Isi Kegiatan</label>
                <textarea class="wysiwyg"></textarea>

            </div>
            <a href="" class="button" style="float: right;margin-right: 0px;">Simpan</a>
        </form>

    </div> 
    
    <div id="tambahAnggota" class="box_content padding" title="Merubah Password Admin">
                <form>
                    <div class="field" >
                        <label>Nama</label>
                        <input type="text" value="" class="big validate">

                        <label>Angkatan</label>
                        <input type="text" value="" class="big validate">

                        <label>Alamat</label>
                        <input type="text" value="" class="big validate">

                        <label>Email</label>
                        <input type="text" value="" class="big validate">
                    </div>
                    <a href="" class="button" style="float: right;margin-right: 40px;">Ganti Password</a>
                </form>

            </div> 
    
     <div class="box_content padding hide" id="dialog" title="Pesan Baru">
                <form>	

                    <!-- Message From User: Start -->
                    <h6>
                        <span class="icon user"></span> <a href="#">Jenny</a> <span class="nobold">berkata</span>
                        <small class="right grey nobold">2 hours ago</small> 
                    </h6>
                    <p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p> 
                    <button>Setujui</button>
                    <button class="secondary" type="reset">Tolak</button>
                    <br/><br/>

                    <!-- Message From User: End -->

                    <!-- Message From User: Start -->
                    <h6>
                        <span class="icon user"></span> <a href="#">Jenny</a> <span class="nobold">berkata</span>
                        <small class="right grey nobold">15 hours ago</small> 
                    </h6>
                    <p>
						Sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <button>Setujui</button>
                    <button class="secondary" type="reset">Tolak</button>

                    <!-- Message From User: End -->

                    <!-- Quick Reply: Start -->
                    <div class="field">
                        <label>
                            <span class="icon chatbubbles"></span>
							Quick Reply
                        </label>
                        <textarea cols="50" rows="7"></textarea>
                    </div>

                    <button>Send</button>
                    <button class="secondary" type="reset">Reset</button>

                    <!-- Quick Reply: End -->

                </form>
            </div>

</div>
<!-- 100% Box Grid Container: End -->


<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon graph">Statistics</h2>

        <!-- Graphs Stats Sorting: Start -->
        <ul class="sorting">
            <li><a href="#line" class="active">Line</a></li>
            <li><a href="#area">Area</a></li>
            <li><a href="#pie">Pie</a></li>
            <li><a href="#bar">Bars</a></li>
        </ul>
        <!-- Graphs Stats Sorting: End -->

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- Graphs Stats Table: Start -->
        <table class="stats">
            <thead>
                <tr>
                    <td></td>
                    <th scope="col"> Jan </th>
                    <th scope="col"> Feb </th>
                    <th scope="col"> Mar </th>
                    <th scope="col"> Apr </th>
                    <th scope="col"> May </th>
                    <th scope="col"> Jun </th>
                    <th scope="col"> Jul </th>
                    <th scope="col"> Aug </th>
                    <th scope="col"> Sep </th>
                    <th scope="col"> Oct </th>
                    <th scope="col"> Nov </th>
                    <th scope="col"> Dec </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> Pengunjung </th>
                    <td> 45 </td>
                    <td> 65 </td>
                    <td> 56 </td>
                    <td> 133 </td>
                    <td> 124 </td>
                    <td> 63 </td>
                    <td> 56 </td>
                    <td> 94 </td>
                    <td> 76 </td>
                    <td> 106 </td>
                    <td> 45 </td>
                    <td> 77 </td>
                </tr>

            </tbody>
        </table>	
        <!-- Graphs Stats Table: End -->

    </div>
    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $("#tambah-event").click( function (){
                $('#tambahEvent').dialog('open');
            });
            $("#tambahEvent").dialog({
                bgiframe: true,
                autoOpen: false,
                height: 660,
                width :550,
                modal: true
			
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $("#tambah-anggota").click( function (){
                $('#tambahAnggota').dialog('open');
            });
            $("#tambahAnggota").dialog({
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
            $("#show-msg").click( function (){
                $('#dialog').dialog('open');
            });
            $("#dialog").dialog({
                bgiframe: true,
                autoOpen: false,
                height: 640,
                width :550,
                modal: true
			
            });
        });
    </script>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/adminmenu/menubawah'); ?>