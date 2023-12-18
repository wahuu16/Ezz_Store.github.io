<html>
 <head>
  <title> Data komentar Anda </title>
  </head>
    <body>
      <h1> Data Terkirim<hr> </h1>
            <table border="5">
              <td bgcolor="pink">
              <?php
                echo"Nama : $_POST[Wahuu]<br>";
                echo"Email : $_POST[You Know Lah]<br>";
                echo"Komentar : $_POST[gojek]<br>";
              ?>
              </td>
             </table>
             <button type="submit" value="submit">
             <a href="bukutamu.php">kirim ulang data</a>
            </button>
   </body>
   </html>