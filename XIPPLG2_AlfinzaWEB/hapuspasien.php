<!DOCTYPE html>
<html>
<head>
  <title>Hapus Data Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoI6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <?php
        include 'koneksi.php';
        $idPasien = $_GET['edit'];
        $panggil =  $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
        while ($row = $panggil->fetch_assoc()) 
    ?>
    <h1>Yakin Ingin Menghapus Data?</h1>
    <div class="buttons">
      <form method="POST">
        <button type="submit" class="btn btn-primary" name="hapus">Hapus</button>
      </form>
      <button type="button" class="btn btn-secondary" onclick="batal()">Batal</button>
    </div>
  </div>
  <script>
    function batal() {
      window.location.href = "pasien.php";
    }
  </script>
</body>
</html>
