<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 | PHP</title>
    <style>
        table{
            width: 100%;
            text-align: center;
            border: 1px solid black;
            padding: 10px;
            border-collapse: collapse;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        h1{
            text-align: center;
            background-color: #5356FF;
            padding: 10px;
            margin: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            color:whitesmoke;
        }

        tr, th, td{
            border: 1px solid black;
            padding:10px;
            margin:10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        thead{
            background-color: #378CE7;
        }
        tfoot{
            background-color: #67C6E3;
        }
    </style>
</head>

<body>
    <h1>Daftar Nilai Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Nama Data - Data Mahasiswa
            $mahasiswa = [
                ['nama' => 'Amanda Sari', 'nim' => '21220529', 'nilai' => 85],
                ['nama' => 'Mayang Puspita Sari', 'nim' => '21220540', 'nilai' => 80],
                ['nama' => 'Sarmila', 'nim' => '21220517', 'nilai' => 75],
                ['nama' => 'Nadia Oktasari', 'nim' => '21220549', 'nilai' => 70],
                ['nama' => 'Sri Wahyuni Agustin', 'nim' => '21220560', 'nilai' => 65],
                ['nama' => 'Rizky Handayani', 'nim' => '21220539', 'nilai' => 60],
                ['nama' => 'Muhammad Ikhsan', 'nim' => '21220580', 'nilai' => 55],
                ['nama' => 'Rabiul Hidayad Rambe', 'nim' => '21220576', 'nilai' => 50],
                ['nama' => 'Ayu Anggraini', 'nim' => '21220521', 'nilai' => 100],
                ['nama' => 'Widya Nur Artika', 'nim' => '21220599', 'nilai' => 30],
                ['nama' => 'Nyi Wandira Manurung', 'nim' => '21220500', 'nilai' => 45],
                ['nama' => 'Indah Wahyuda Siregar', 'nim' => '21220555', 'nilai' => 20],
                ['nama' => 'Annisa Nur Fadilla', 'nim' => '21220522', 'nilai' => 66],
                ['nama' => 'Salwa Harahap', 'nim' => '21220588', 'nilai' => 44],
                ['nama' => 'Putri Wulandari', 'nim' => '21220577', 'nilai' => 88]
            ];

            //Fungsi Agregat Di Array
            $nilai_array = [];
            $jumlah_nilai = 0;

            $no = 1; // Menambahkan No
            // Menampilkan Data Mahasiswa Menggunakan Foreach
            foreach ($mahasiswa as $key => $mhs) {
                // Code Menentukan  Nilai Lulus atau Tidak Lulus
                $keterangan = ($mhs['nilai'] >= 65) ? 'Lulus' : 'Tidak Lulus';

                // Menentukan Nilai Grade Menggunakan If Multi Kondisi
                if ($mhs['nilai'] >= 85) {
                    $grade = 'A';
                } elseif ($mhs['nilai'] >= 75) {
                    $grade = 'B';
                } elseif ($mhs['nilai'] >= 65) {
                    $grade = 'C';
                } elseif ($mhs['nilai'] >= 55) {
                    $grade = 'D';
                } else {
                    $grade = 'E';
                }

                // Menentukan Predikat Menggunakan Switch Case
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Buruk';
                        break;
                    default:
                        $predikat = '';
                        break;
                }

                $nilai_array[] = $mhs['nilai'];
                $jumlah_nilai += $mhs['nilai'];
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>

            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Nilai Tertinggi</th>
                <th colspan="4"><?=  max($nilai_array) ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Terendah</th>
                <th colspan="4"><?=  min($nilai_array) ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Rata - Rata</th>
                <th colspan="4"><?= round($jumlah_nilai / count($mahasiswa), 2) ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Mahasiswa</th>
                <th colspan="4"><?= count($mahasiswa) ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Keseluruhan Nilai</th>
                <th colspan="4"><?= array_sum($nilai_array) ?></th>
            </tr>
        </tfoot>
    </table>
</body>

</html>