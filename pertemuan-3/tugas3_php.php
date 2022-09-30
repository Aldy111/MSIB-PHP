<?php
    $m1 = ['nim'=>'001','nama'=>'rendi julianto','nilai'=>90];
    $m2 = ['nim'=>'002','nama'=>'deni kurniawan','nilai'=>80];
    $m3 = ['nim'=>'003','nama'=>'deni wantono','nilai'=>65];
    $m4 = ['nim'=>'004','nama'=>'regeng','nilai'=>40];
    $m5 = ['nim'=>'005','nama'=>'julanda kurniawan','nilai'=>77];
    $m6 = ['nim'=>'006','nama'=>'wantok','nilai'=>88];
    $m7 = ['nim'=>'007','nama'=>'michel','nilai'=>50];
    $m8 = ['nim'=>'008','nama'=>'agus prasetyo','nilai'=>60];
    $m9 = ['nim'=>'009','nama'=>'ilham saifullah','nilai'=>75];
    $m10 = ['nim'=>'010','nama'=>'ridwansyah','nilai'=>70];

    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
    $ar_judul = ['No','Nim','Nama','Nilai','Keterangan','Grade','Predikat'];

    //agregate
    $jml_mhs = count($mahasiswa);
	$ar_nilai = array_column($mahasiswa, 'nilai');
	$total_nilai = array_sum($ar_nilai);
	$max_nilai = max($ar_nilai);
	$min_nilai = min($ar_nilai);
	$rata2 = $total_nilai / $jml_mhs;

		$agregate = [
					"Nilai Tertinggi" => $max_nilai,
					"Nilai Terendah" => $min_nilai,
					"Rata-rata Nilai" => $rata2,
					"Jumlah Mahasiswa" => $jml_mhs,
				];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <?php
                        foreach ($ar_judul as $judul) {?>
                            <th><?=$judul?></th>
                        <?php }
                        ?>
                </tr>
            </thead>
            <tbody>
                <?php
				$no = 1;
				foreach ($mahasiswa as $mhs) {
					$nim = $mhs["nim"];
					$nama = $mhs["nama"];
					$nilai = $mhs["nilai"];
					$ket = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

					if ($nilai >= 90 && $nilai < 100) {
						$grade = "A";
					} elseif ($nilai >= 80 && $nilai < 90) {
						$grade = "B";
					} elseif ($nilai >= 70 && $nilai < 80) {
						$grade = "C";
					} elseif ($nilai >= 60 && $nilai < 70) {
						$grade = "D";
					} else {
						$grade = "E";
					}

					switch ($grade) {
						case 'A':
							$predikat = "Memuaskan";
							break;
						case 'B':
							$predikat = "Baik";
							break;
						case 'C':
							$predikat = "Cukup";
							break;
						case 'D':
							$predikat = "Kurang";
							break;
						default:
							$predikat = "Buruk";
							break;
					}
				?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $nim ?></td>
						<td><?= $nama ?></td>
						<td><?= $nilai ?></td>
						<td><?= $ket ?></td>
						<td><?= $grade ?></td>
						<td><?= $predikat ?></td>
					</tr>
				<?php } ?>
                
            </tbody>
            <tfoot>
				<?php
				foreach ($agregate as $key => $value) { ?>
					<tr>
						<th colspan="3"><?= $key ?></th>
						<th colspan="1"><?= $value ?></th>
					</tr>
				<?php } ?>
			</tfoot>
    </table>
</body>
</html>