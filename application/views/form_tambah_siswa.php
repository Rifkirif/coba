<!DOCTYPE html>
<html>

<head>
    <title>Halaman Tambah Data Siswa</title>
</head>

<body>
    <form action="<?php echo base_url('Home/simpan_data')  ?>" method="post">
        <pre>
  <label>Nama Siswa</label>    : <input type="text" name="txtnamasiswa">
  <label>Jenis Kelamin</label> : <input type="radio" name="txtjeniskelamin" value="Laki-laki">Laki-laki <input type="radio" name="txtjeniskelamin" value="Perempuan">Perempuan
  <label>Nama Ayah</label>     : <input type="text" name="txtnamaayah">  
  <label>Nama Ibu</label>      : <input type="text" name="txtnamaibu">  
  <label>Alamat</label>        : <textarea name="txtalamat"></textarea>
 <input type="submit" value="Kirim">
</pre>
    </form>
</body>

</html>