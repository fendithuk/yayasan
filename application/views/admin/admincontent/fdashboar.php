
<?php $this->load->view('admin/adminmenu/menuatas'); ?>
<div class="grid_24">
    <?php if ($msg == "gagal") { ?>
        <div class="notice warning">
            <p><b>PERHATIAN:</b> Ada field yang masih kosong, silahkan lengkapi field yang ada.</p>
        </div>
    <?php } else if ($msg == "success") { ?>
        <div class="notice success">
            <p><b>Success:</b> Data berhasil disimpan.</p>
        </div>
    <?php } else if ($msg == "gagal2") { ?>
        <div class="notice warning">
            <p><b>PERHATIAN:</b> Password lama salah atau password baru tidak sama dengan ulangi password baru.</p>
        </div>
    <?php } ?>
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

            <a href="javascript:void(0);" id="tambah-anggota" class="big_button add_user"><span>Tambah Anggota</span></a>

        </p>

    </div>
    <!-- Box Content: End -->


    <div id="tambahAnggota" class="box_content padding" title="Menambah Anggota">
        <?php echo form_open('adm/dashboar/add'); ?>
        <div class="field">
            <label>Nama </label>
            <input type="text" name="nama" id ="nama" value="<?php echo set_value('nama'); ?>" class="big validate">

        </div>
        <div class="field">
            <label>Angkatan</label>
            <input type="text" name="angkatan" id="angkatan" value="<?php echo set_value('angkatan'); ?>" class="big validate">

        </div>
        <div class="field">
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo set_value('alamat'); ?>" class="big validate">

        </div>
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" class="big validate">

        </div>

        <!-- WYSIWYG: Start -->	

        <!-- WYSIWYG: End -->

        <button>Simpan</button>
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
                    <?php
                    $i = 0;
                    foreach ($conTgl as $r):
                        $i++;
                    $tgl = substr($r->tanggal, 8);
                                $bln = substr($r->tanggal, 5, 2);
                                $th = substr($r->tanggal, 2, 2);
                        $balik[$i] = "$tgl/$bln/$th";
                    endforeach;
                    ?>
                    <th scope="col"><?php 
                       
                    echo $balik[12]; ?></th>
                    <th scope="col"><?php echo $balik[11]; ?> </th>
                    <th scope="col"> <?php echo $balik[10]; ?> </th>
                    <th scope="col"> <?php echo $balik[9]; ?> </th>
                    <th scope="col"> <?php echo $balik[8]; ?> </th>
                    <th scope="col"> <?php echo $balik[7]; ?> </th>
                    <th scope="col"> <?php echo $balik[6]; ?></th>
                    <th scope="col"> <?php echo $balik[5]; ?> </th>
                    <th scope="col"> <?php echo $balik[4]; ?> </th>
                    <th scope="col"> <?php echo $balik[3]; ?> </th>
                    <th scope="col"> <?php echo $balik[2]; ?> </th>
                    <th scope="col"> <?php echo $balik[1]; ?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> Pengunjung </th>
                    <td><?php echo $aa1; ?> </td>
                    <td> <?php echo $aa2; ?> </td>
                    <td> <?php echo $aa3; ?> </td>
                    <td> <?php echo $aa4; ?> </td>
                    <td> <?php echo $aa5; ?> </td>
                    <td> <?php echo $aa6; ?> </td>
                    <td> <?php echo $aa7; ?> </td>
                    <td> <?php echo $aa8; ?> </td>
                    <td> <?php echo $aa9; ?> </td>
                    <td> <?php echo $aa10; ?> </td>
                    <td> <?php echo $aa11; ?> </td>
                    <td> <?php echo $aa12; ?></td>
                </tr>

            </tbody>
        </table>	
        <!-- Graphs Stats Table: End -->

    </div>

    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $("#tambah-anggota").click( function (){
                $('#tambahAnggota').dialog('open');
            });
            $("#tambahAnggota").dialog({
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