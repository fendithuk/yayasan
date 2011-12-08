<table border="1" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Angkatan</td>
            <td>Alamat</td>
            <td>No.Telp/Email</td>
        </tr>
    </thead>
    <tbody>
        <?php $i=0; if(isset ($anggota)){
     foreach ($anggota as $r) { $i++; ?>
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $r->nama;?></td>
            <td><?php echo $r->thnangkatan;?></td>
            <td><?php echo $r->alamat;?></td>
            <td><?php echo $r->email;?></td>
        </tr>
     <?php }
        }else{
            echo "<p align=\"center\">Data Kosong</p>";
        }
?>
       
    </tbody>
</table>