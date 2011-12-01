
<div class="menu">
    <style>
        .fb
        {
            background-color: red;
            margin-left: 450px;
            height: 300px;
            width: 300px;
            position: absolute;
            z-index: 1;
            display: none;
        }
        .ym
        {
            background-color: blue;
            height: 300px;
            width: 300px;
            margin-left: 590px;
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
    <div class="fb">

    </div>
    <div class="ym">

    </div>
</div>