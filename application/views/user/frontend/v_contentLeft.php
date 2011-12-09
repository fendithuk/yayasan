<div class="contentLeft">
    <ul>

        <li style="text-align: center"><a href="<?php echo base_url() ?>">
                <img src="<?php echo base_url(); ?>image/logo.png" style="height: 90px; width: 90px"/><br/>
                <h2>Yayasan <br/>Keluarga Insan Harmoni</h2></a>
        </li>
        <?php if (isset($gbr)) {
            foreach ($gbr as $r) { ?>
                <?php if ($r->idgambar == 1) { ?>
                    <li style="margin-top: 55px"><a href="http://<?php echo $r->links ?>" ><img src="<?php echo base_url(); ?>uploads/<?php echo $r->nmgambar ?>"/></a></li>
                <?php } else { ?>
                    <li><a href="http://<?php echo $r->links ?>" target="_blank"><img src="<?php echo base_url(); ?>uploads/<?php echo $r->nmgambar ?>"/></a></li>

                    <?php
                }
            }
        }
        ?>
    </ul>
    <div class="a">
        <img src="<?php echo base_url(); ?>image/bgSamping.png"/>
    </div>

</div>