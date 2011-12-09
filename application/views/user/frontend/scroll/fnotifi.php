<div id="scrollbar2">

    <div class="scrollbar"><div class=""><div class=""><div class="end"></div></div></div></div>
    <div class="viewport">
        <div class="overview">
            <?php if ($msg == "success") { ?>
                <h3>Notifikasi Pendaftaran</h3>
                <hr>
                <p>Terima kasih anda sudah mendaftar di Yayasan Insan Harmoni.
                    Data anda akan keluar di menu anggota setelah mendapat konfirmasi dari admin.</p>

            <?php } else { ?>
                <h3>Notifikasi Pendaftaran</h3>
                <hr>
                <p>Maaf pendaftaran yang anda lakukan gagal, format pendaftaran sebagai berikut :
                <br/><br/> Nama : Nama Anda <br/>
                      Angkatan : 2001 (exm) <br/>
                      Alamat : Alamat Anda <br/>
                      Email : emailanda@emailanda.com <br/><br/>
                    Untuk mengulangi pendaftaran <a href="<?php echo base_url(); ?>index.php/c_update_anggota">klik disini </a></p>

            <?php }
            ?>





        </div>
    </div>
</div>	