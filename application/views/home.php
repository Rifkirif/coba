<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>DATA SISWA</h3><br>
    <a href="<?php echo base_url('Home/tambah_siswa') ?>">Tambah Siswa</a>

    <table border="1" cellpadding="10">
        <thead align="center">
            <tr>
                <td>No</td>
                <td>Nama Siswa</td>
                <td>Jenis Kelamin</td>
                <td>Nama Ayah</td>
                <td>Nama Ibu</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($siswa as $data) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->jk; ?></td>
                    <td><?php echo $data->nama_ayah; ?></td>
                    <td><?php echo $data->nama_ibu; ?></td>
                    <td><?php echo $data->alamat; ?></td>
                    <td>
                        <a href="<?php echo base_url('home/panggil_data/') . $data->id ?>">EDIT</a> |
                        <a href="<?php echo base_url('home/hapus_data/') . $data->id ?>">HAPUS</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>