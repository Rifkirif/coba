<!DOCTYPE html>
<html>

<head>
    <title>Halaman Tambah Data Siswa</title>
</head>

<body>
    <form action="<?php echo base_url('Home/simpan_data')  ?>" method="post">
        <pre>
            <label>Nama Siswa</label>    : <input type="text" name="txtnamasiswa" value="<?php echo $tampilkan_data['nama'] ?>"> <br>
            <label>Jenis Kelamin</label> : <input type="radio" name="jnskelamin" value="Laki-laki" <?php if ($tampilkan_data['jk'] == "Laki-laki") { ?> checked <?php } ?>>Laki-laki <input type="radio" name="jnskelamin" value="Perempuan" <?php if ($tampilkan_data['jk'] == "Perempuan") { ?> checked <?php } ?>>Perempuan <br>
            <label>Nama Ayah</label>     : <input type="text" name="txtnamaayah" value="<?php echo $tampilkan_data['nama_ayah'] ?>">  <br>
            <label>Nama Ibu</label>      : <input type="text" name="txtnamaibu" value="<?php echo $tampilkan_data['nama_ibu'] ?>">  <br>
            <label>Alamat</label>        : <textarea name="txtalamat"><?php echo $tampilkan_data['alamat'] ?></textarea><br>
            <input type="submit" value="Kirim">
        </pre>
    </form>
</body>

</html>