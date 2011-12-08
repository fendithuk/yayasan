 <div id="scrollbar1">
        <style>
            .overview span
            {
                color:  white;
                position: static;
                margin-right: -317px
            }

            .overview span a
            {
                color: white;
                text-decoration: none;
            }

            .overview p a
            {
                color: white;
            }
        </style>

        <div class="scrollbar">
            <div class="track">
                <div class="thumb">
                    <div class="end">

                    </div>

                </div>

            </div>

        </div>

        <div class="viewport">

            <div class="overview">



                <h3>Sketsa</h3>

                <hr>

                <?php
                $i = 0;
                if (isset($sketsa)) {
                    foreach ($sketsa as $r) {
                        $i++;
                        if ($i == 1) {
                            ?>
                            <h4><?php echo $r->judulsketsa; ?></h4>

                            <p>
                                <img class="img_yayasan" src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarsketsa; ?>"/>
                                <?php echo $r->isisketsa; ?>
                            </p>

                            <span><a href="">baca selengkapnya</a></span>
                            <?php
                        }
                    }
                }
                ?>


                <ul style="margin: 25px 0px 0px 0px; padding: 0;">
                    <li style="display: inline-block"><hr style="border: 1px solid rgb(0,102,51); width: 210px; margin-left: -20px;"></li>
                    <li style="display: inline-block; margin-left: 10px; margin-right: 10px"><img src="<?php echo base_url(); ?>image/scrolIco.png" style="height: 30px; width: 30px"/></li>
                    <li style="display: inline-block"><hr style="border: 1px solid rgb(0,102,51); width: 210px;"></li>
                </ul>


                <h3>Tulisan lainnya</h3>
                <?php
                if (isset($sketsa)) {
                    foreach ($sketsa as $r) {
                        $tgl = substr($r->tanggalsketsa, 8);
                        $bln = substr($r->tanggalsketsa, 5, 2);
                        $th = substr($r->tanggalsketsa, 0, 4);
                        ?>
                        <p><a href="#" onclick="sketsa(<?php echo $r->idsketsa ?>)"><?php echo "$tgl/$bln/$th. $r->judulsketsa" ?></a></p>
                        <?php
                    }
                }
                ?>

                <hr>






            </div>
        </div>
    </div>