<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Sederhana</title>
  </head>
  <body>
    <?php include 'alert.php' ?>
    <h1>Biodata Mahasiswa Gunadarma</h1>
    <link rel="stylesheet" type="text/css" href="style.css">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php include 'crud.php' ?>
    <br>
    <fieldset>
        <legend><b>Mohon isi Form dibawah ini</b></legend>
        <p>
          <label>NPM : &nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" placeholder="50421535" name="npm" maxlength="16" size="25"/>
          <span class="error">* <?php echo $namaErr;?></span>
        </p>
        <p>
          <label>Nama : &nbsp;&nbsp;&nbsp;</label>
          <input type="text" placeholder="Fizri" name="nama" maxlength="35" size="25"/>
          <span class="error">* <?php echo $namaErr;?></span>
        </p>
        <p>
          <label>E-mail : &nbsp;</label>
          <input type="email" placeholder="example@gmail.com" size="25" name="email"  />
        </p>
        <p>
          <label>Tanggal Lahir :&nbsp;&nbsp;</label>
          <input type="date" name="tgllahir" min="1963-12-31" max="2023-12-31" />
        </p>
        <p>
          <label>Kelas :&nbsp;</label>
          <input type="radio" name="kelas" value="3IA01" /> 3IA01
          <input type="radio" name="kelas" value="3IA02" /> 3IA02
          <input type="radio" name="kelas" value="3IA06" /> 3IA06
          <input type="radio" name="kelas" value="3IA08" /> 3IA08

        </p>
        <p>
        <label><b>Keaktifan</b></label>
        <label>Aktif : </label>
        <input type="radio" name="aktiv" value="1" <?php echo ($aktiv == 1) ? "checked" : ""; ?> /> Ya
        <input type="radio" name="aktiv" value="0" <?php echo ($aktiv == 0) ? "checked" : ""; ?> /> Tidak

</p>
    <br /><br />
        <input type="submit" name="submit" value="Submit">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="reset" value="Reset"
        onclick="return confirm('Anda yakin ingin menghapus semua record dari database?');">
      </fieldset>
    </form>
<br>
<?php include 'result.php'; ?>
  </body>
</html>