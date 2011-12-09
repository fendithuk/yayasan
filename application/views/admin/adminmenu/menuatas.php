<!--Panggil menu atas-->


<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">


    <!-- Header Grid Container: Start -->
    <div class="grid_24">

        <!-- User Panel: Start -->
        <div id="userpanel">

            <!-- User: Start -->
            <ul id="user" class="dropdown">
                <li class="topnav">
                    <!-- User Name -->
                    <a href="#" class="top icon user">Administrator</a>

                    <!-- User Dropdown Content: Start -->
                    <ul class="subnav">  
                        <li><a href="javascript:void(0);" id="setting-admin"class="icon settings">Settings</a></li>  
                        <li><a href="<?php echo base_url(); ?>index.php/adm/pesan" id="" class="icon chatbubbles">Pesan</a></li> 
                        <li><a href="<?php echo base_url(); ?>index.php/admin/logout" class="icon lock">Log out</a></li>  
                    </ul>  
                    <!-- User Dropdown Content: End -->
                </li>
            </ul>
            <!-- User: End -->

            <!-- Messages: Start -->

            <!-- Messages: End -->

            <!-- Messages Popup Content: Start -->

            <div id="settingAdmin" class="box_content padding" title="Merubah Password Admin">
                <?php echo form_open('admin/change'); ?>
                    <div class="field" >
                        <label>Username</label>
                        <input type="hidden" name="idadmin" value="<?php echo $this->session->userdata('ID');?>" class="big validate" readonly="true">

                        <input type="text" name="admin" value="<?php echo $this->session->userdata('USERNAME');?>" class="big validate">

                        <label>Password Lama</label>
                        <input type="password" name="pl"class="big validate">

                        <label>Password Baru</label>
                        <input type="password" name="pb" class="big validate">

                        <label>Ulangi Password Baru</label>
                        <input type="password" name="upb" class="big validate">
                    </div>
                    <input type="submit" value="Ganti Password" class="button"/>
                </form>

            </div> 

           


            <!-- Messages Popup Content: End -->

            <!-- Style (Themes) Switcher: Start -->

            <!-- Style Switcher: End -->

            <!-- Width Switcher: Start -->

            <!-- Width Switcher: End -->

        </div>
        <!-- User Panel: End -->

        <!-- Header: Start -->
        <div id="header">

            <!-- Logo: Start -->
            <a href="" id="logo">Admin Insan Harmoni</a>
            <!-- Logo: End -->

            <!-- Navigation: Start -->
            <ul id="navigation" class="dropdown">
                <li><a class="dashboard active" href="<?php echo base_url(); ?>index.php/adm/dashboar">Dashboard</a></li>

                <!-- Navigation Dropdown Menu Item: Start -->
                <li class="topnav">
                    <a class="frames" href="#">Master</a>

                    <!-- Navigation Dropdown Menu Item Content: Start -->
                    <ul class="subnav">
                        <li><a href="<?php echo base_url(); ?>index.php/adm/t_content" class="icon typography">Tambah Content</a></li> 
                        <li><a href="<?php echo base_url(); ?>index.php/adm/t_anggota" class="icon blocks">Tambah Anggota</a></li>

                    </ul> 
                    <!-- Navigation Dropdown Menu Item Content: End --> 
                </li>
                <!-- Navigation Dropdown Menu Item: End -->

                <!-- Navigation Dropdown Menu Item: Start -->
                <li class="topnav">
                    <a class="pages" href="#">Content</a>

                    <!-- Navigation Dropdown Menu Item Content: Start -->
                    <ul class="subnav">
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_beranda" class="icon home">Beranda</a></li>  
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_profil" class="icon pages">Profil</a></li>  
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_anggota" class="icon user">Anggota</a></li> 
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_peluang" class="icon frames">Peluang</a></li>  
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_kegiatan" class="icon pages">Kegiatan</a></li>  
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_links" class="icon list">Links</a></li>  
                        <li><a href="<?php echo base_url(); ?>index.php/adm/c_linksGambar" class="icon list">Links Gambar</a></li>  
                    </ul>  
                    <!-- Navigation Dropdown Menu Item Content: End --> 
                </li>
                <!-- Navigation Dropdown Menu Item: End -->

                <!-- Navigation Menu Item: Start -->
                
                <!-- Navigation Menu Item: End -->
            </ul>
            <!-- Navigation: End -->

        </div>
        <!-- Header: End -->

        <!-- Breadcrumb Bar: Start -->
        <div id="breadcrumb">

            <!-- Breadcrumb: Start -->
            <ul class="left">
                <?php if ($cekl != "adm") { ?>
                    <li class="icon dashboard"><a href="#">Dashboard</a></li>
                <?php }else{ ?>
                    <li class="icon dashboard"><a href="#">Dashboard</a></li>
                    <li class="icon point_right"><a href="#"><?php echo $menu; ?></a></li>
                <li class="icon point_right active"><a href="#"><?php echo $menu2; ?></a></li>
                <?php }
                ?>
            </ul>
            <!-- Breadcrumb: End -->

            <!-- Breadcrumb Icon Links: Start -->

            <!-- Breadcrumb Icon Links: End -->

        </div>
        <!-- Breadcrumb Bar: End -->

    </div>
    <!-- Header Grid Container: End -->


    <!-- 100% Box Grid Container: Start -->

    <!--Panggil menu atas-->


    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $("#show").click( function (){
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

    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $("#setting-admin").click( function (){
                $('#settingAdmin').dialog('open');
            });
            $("#settingAdmin").dialog({
                bgiframe: true,
                autoOpen: false,
                height: 500,
                width :450,
                modal: true
			
            });
        });
    </script>