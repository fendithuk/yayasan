<div id="scrollbar5">

    <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
        <div class="overview">


            <h3>Kegiatan</h3>

            <hr>
            <?php
            if (isset($kegiatan)) {
                foreach ($kegiatan as $r) {
                    $tgl = substr($r->tanggalsketsa, 8);
                    $bln = substr($r->tanggalsketsa, 5, 2);
                    $th = substr($r->tanggalsketsa, 0, 4);
                    ?>
                    <h4><?php echo "$tgl/$bln/$th.$r->judulsketsa" ?></h4>
                    <p>
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarsketsa; ?>"/><?php $content = nl2br(htmlentities(strip_tags($r->isisketsa)));
            echo word_limiter($content, 100); ?></p>
                    <ul style="margin: 0; padding: 0;">
                        <li style="display: inline-block"><hr style="border: 1px solid rgb(0,102,51); width: 210px;"></li>
                        <li style="display: inline-block; margin-left: 5px; margin-right: 5px"><img src="<?php echo base_url(); ?>image/scrolIco.png" style="height: 30px; width: 30px"/></li>
                        <li style="display: inline-block"><hr style="border: 1px solid rgb(0,102,51); width: 210px;"></li>
                    </ul>
                <?php }
            } ?>









        </div>
    </div>
</div>	