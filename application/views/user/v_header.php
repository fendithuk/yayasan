<html>
    <head>

        <title><?= $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page.css" media="all"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>scroll/css/website.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/scroll.css" type="text/css" media="all"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>scroll/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/page.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>scroll/js/jquery.tinyscrollbar.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#scrollbar1').tinyscrollbar();
                $('#scrollbar1a').tinyscrollbar();
                $('#scrollbar2').tinyscrollbar();
                $('#scrollbar3').tinyscrollbar();
                $('#scrollbar4').tinyscrollbar();
                $('#scrollbar5').tinyscrollbar();
            });
        </script>	
       
        
    </head>

    <body>
        
        <div class="page_wrap"> <!--start page wrap-->
