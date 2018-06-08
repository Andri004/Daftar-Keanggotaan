<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran </title>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>

<body>
  <div class="box-form">
    <div class="title-form">
      <center>Pendaftaran Anggota Fotografi Teknik
    </div>
    <h5> Silakan isi data anda</h5>
    <form action="" method="post">
    <table border="0" width="100%">
      <tr>
        <td width="20%"> Nama lengkap</td>
        <td width="2%"> :</td>
        <td width="72%"> <input type="text" name="nama"> </td>
      </tr>
      <tr>
        <td> id</td>
        <td> :</td>
        <td> <input type="number" name="id"> </td>
      </tr>
      <tr>
        <td> Alamat</td>
        <td> :</td>
        <td> <input type="text" name="alamat"> </td>
      </tr>
      <tr>
        <td> Jenis Kelamin</td>
        <td> :</td>
        <td>
          <input type="radio" name="jk" value="1"> Laki-laki
          <input type="radio" name="jk" value="2"> Perempuan
        </td>
      </tr>
      <tr>
        <td> No Tlpn</td>
        <td> :</td>
        <td> <input type="phone" name="tlpn"> </td>
      </tr>
      <tr>
        <td> Tanggal Lahir</td>
        <td> :</td>
        <td> <input type="date" name="tgl"> </td>
      </tr>
      <tr>
        <td> Jurusan</td>
        <td> :</td>
        <td> <input type="text" name="jurusaan"> </td>
      </tr>
      <tr>
        <td> </td>
        <td> </td>
        <td> <input type="submit" name="Daftar" value="Daftar"> </td>
      </tr>
    </table>
  </form>
  <?php
  if (isset($_POST['Daftar'])) {
    $conn = mysqli_connect('localhost', 'root','','db_anggota');
    $insert = mysqli_query($conn, "INSERT INTO tb_anggota VALUES ('".$_POST['id']."','".$_POST['nama']."',
      '".$_POST['jk']."','".$_POST['alamat']."','".$_POST['tlpn']."','".$_POST['jurusaan']."','".$_POST['tgl']."')");
      if ($insert){
        echo "Pendaftaran Berhasil";
        }else {
          echo "coba lagi";
        }
    }
    ?>
  </div>
</body>

</html>
