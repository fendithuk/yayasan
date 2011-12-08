<div id="scrollbar4">
    
    <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
        <div class="overview">
           <?php if (isset($peluang)) {
                foreach ($peluang as $r) { ?>
                    <h3><?php echo $r->judul; ?></h3>
                    <hr>
                    <p><?php echo $r->isi; ?></p>

                <?php
                }
            }
            ?>

            
        </div>
    </div>
</div>	