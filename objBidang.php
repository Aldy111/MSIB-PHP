<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$bl1 = new Lingkaran(8);
$bl2 = new Lingkaran(4);
$bpp1 = new PersegiPanjang(8,2);
$bpp2 = new PersegiPanjang(10,4);
$bss1 = new Segitiga(15,20);
$bss2 = new Segitiga(10,6);

$bidang2D = [$bl1,$bl2,$bpp1,$bpp2,$bss1,$bss2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Data Bidang 2 Dimensi</h3>
        <div class="table-responsive-xl">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <?php
                            $arrayJudul = ['No','Nama Bidang','Keterangan','Luas Bidang','Keliling Bidang'];
                            foreach ($arrayJudul as $judul) {?>
                                <th><?=$judul?></th>
                            <?php
                        }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                        foreach ($bidang2D as $bidang) {?>
                            <tr>
                                <td><?=$no++?></td>
                                <?=$bidang->mencetak()?>
                            </tr>

                        <?php } ?>
                </tbody>    
            </table>
        </div>
    </div>
</body>
</html>

