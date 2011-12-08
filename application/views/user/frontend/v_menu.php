
<div class="menu">
    <style>
        .fb
        {
            background-color: white;
            margin-left: 450px;
            height: auto;
            width: auto;
            position: absolute;
            z-index: 1;
            display: none;
        }
        .ym
        {
            
            height: auto;
            width: auto;
            margin-left: 650px;
            position: absolute;
            z-index: 1;
            display: none;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#fb").click(function(){
                $(".fb").fadeIn();
                $(".ym").css({
                    "display":"none"
                });
            });
            $("#ym").click(function(){
                $(".ym").fadeIn();
                $(".fb").css({
                    "display":"none"
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".fb").mouseout(function(){
                $(this).fadeOut();
            });
            $(".ym").mouseout(function(){
                $(this).fadeOut();
            });
        });
    </script>
    <ul>
        <li style="border-right: 1px solid rgb(215,215,62);"><a href="<?php echo base_url(); ?>index.php/c_update_anggota">Update Anggota</a></li>
        <li style="border-right: 1px solid rgb(215,215,62);"><a href="#" id="fb">Facebook</a></li>
        <li><a href="#" id="ym">Yahoo Messenger</a></li>

    </ul>
    <?php
    if (isset($fb)) {
        foreach ($fb as $r) {
            ?>
            <div class="fb">
            <?php echo $r->links; ?>
            </div>
    <?php }
} ?>


    <div class="ym">
        <?php
        if (isset($ym)) {
            foreach ($ym as $r) {
                ?>
        <?php echo $r->links; ?><br/><br/>
    <?php }
} ?>
    </div>

</div>