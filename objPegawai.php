<?php
require 'Pegawai.php';
// membuat objek
$p1 = new Pegawai('001', 'Bagong', 'Manager', 'Islam', 'Menikah');
$p2 = new Pegawai('002', 'Wewek', 'Asisten Manager', 'Kristen Khatolik', 'Belum Menikah');
$p3 = new Pegawai('003', 'Jeber', 'Kabag', 'Kristen Protestan', 'Menikah');
$p4 = new Pegawai('004', 'Agus', 'Staff', 'Budhha', 'Belum Menikah');
$p5 = new Pegawai('005', 'Kunden', 'Kabag', 'Islam', 'Menikah');

$pegawai = [$p1,$p2,$p3,$p4,$p5];

// echo '<h3 align="center">'.Pegawai::PT.'</h3>';
// $p1->mencetak();
// $p2->mencetak();
// $p3->mencetak();
// $p4->mencetak();
// $p5->mencetak();
// echo 'Jumlah Pegawai: '.Pegawai::$jml;
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
        <h3 class="text-center">Data Gaji Pegawai</h3>
        <div class="table-responsive-xl">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <?php
                            $arrayJudul = ['No','Perusahaan','NIP','Nama','Jabatan','Agama','Status','Gaji Pokok','Tunjangan Jabatan','Tunjangan Keluarga','Zakat Profesi'];
                            foreach ($arrayJudul as $judul) {?>
                                <th><?=$judul?></th>
                            <?php
                        }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                        foreach ($pegawai as $pegawai) {?>
                            <tr>
                                <td><?=$no++?></td>
                                <?=$pegawai->mencetak()?>
                            </tr>

                        <?php } ?>
                </tbody>
                <tfoot>
                    <th colspan="3" class="text-start">Total Pegawai</th>
                    <td class="text-center"><?=Pegawai::$jml++?></td>
                </tfoot>    
            </table>
        </div>
    </div>
</body>
</html>
