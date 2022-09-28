<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6" >
                <h1 class="text-center">Input Data Pegawai</h1>
                    <div class="my-5">
                        <form id="contactForm" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaPegawai" name="nama" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
                                <label for="namaPegawai">Nama Pegawai</label>
                                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="agamaPegawai" name="agama" aria-label="Agama Pegawai">
                                    <option value="" hidden>-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Khatolik">Kristen Khatolik</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                                <label for="agamaPegawai">Agama Pegawai</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Jabatan</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="hidden" name="jabatan" value="" />
                                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="manager" data-sb-validations="required" />
                                    <label class="form-check-label" for="manager">Manager</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="asistent" type="radio" name="jabatan" value="asistent" data-sb-validations="required" />
                                    <label class="form-check-label" for="asistent">Asistent</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="kabag" data-sb-validations="required" />
                                    <label class="form-check-label" for="kabag">Kabag</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="staff" data-sb-validations="required" />
                                    <label class="form-check-label" for="staff">Staff</label>
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="hidden" name="status" value="" />
                                    <input class="form-check-input" id="sudahMenikah" type="radio" name="status" value="Sudah Menikah" data-sb-validations="required" />
                                    <label class="form-check-label" for="sudahMenikah">Sudah Menikah</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" data-sb-validations="required" />
                                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jumlahAnak" name="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="" />
                                <label for="jumlahAnak">Jumlah Anak</label>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" name="proses" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>    
    <?php
        //tangkap request
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahAnak = $_POST['jumlahAnak'];
        $proses = $_POST['proses'];

        //tentukan

        //tentukan gapok
        switch ($jabatan) {
            case 'manager': $gapok = 20000000; break;
            case 'asistent': $gapok = 15000000; break;
            case 'kabag': $gapok = 10000000; break;
            case 'staff': $gapok = 4000000; break;
            default: $gapok = '';
        }
        $tunjangan_jabatan = $gapok * 0.2;

        if ($status =="Sudah Menikah" && $jumlahAnak <= 2) {
            $tunjangan_keluarga = $gapok * 0.05 ;
        }else if ($status == "Sudah Menikah" && $jumlahAnak >=3 && $jumlahAnak <=5){
            $tunjangan_keluarga = $gapok * 0.1 ;
        }else if ($status == "Sudah Menikah" && $jumlahAnak >5){
            $tunjangan_keluarga = $gapok * 0.15 ;
        }else if ($status == "Belum Menikah") {
            $tunjangan_keluarga = 0;
        }

        $bruto = $gapok + $tunjangan_jabatan + $tunjangan_keluarga;
        $zakat = ($agama == "Islam" && $bruto >= 6000000) ? $bruto * 0.025 : 0 ;
        $take_home_pay = $bruto - $zakat;

        if(isset($proses)){?>
        <div class="col-md-6">
            <h3 class="text-center">Tabel Gaji Pegawai</h3>
                <div class="my-5">
                    <table class="table table-hover">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">Nama Pegawai</th>
                            <td><?= $nama ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Agama</th>
                            <td><?=$agama?></td>
                            </tr>
                            <tr>
                            <th scope="row">Jabatan</th>
                            <td><?=$jabatan?></td>
                            </tr>
                            <tr>
                            <th scope="row">Status</th>
                            <td><?=$status?></td>
                            </tr>
                            <tr>
                            <th scope="row">Jumlah Anak</th>
                            <td><?=$jumlahAnak?></td>
                            </tr>
                            <tr>
                            <th scope="row">Gaji Pokok</th>
                            <td>Rp. <?= number_format($gapok, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Tunjangan Jabatan</th>
                            <td>Rp. <?= number_format($tunjangan_jabatan, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Tunjangan Keluarga</th>
                            <td>Rp. <?= number_format($tunjangan_keluarga, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Gaji Kotor</th>
                            <td>Rp. <?= number_format($bruto, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Zakat Profesi</th>
                            <td>Rp. <?= number_format($zakat, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Take Home Pay</th>
                            <td>Rp. <?= number_format($take_home_pay, 0, ',', '.'); ?></td>
                            </tr>
                        </tbody>
                        </table>
                </div>
        </div>
        <?php }

    ?>
    </div>
    </div>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>