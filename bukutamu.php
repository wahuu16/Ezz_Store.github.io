<html>
<head>
    <title></title>
<body>
    <form action="bukutamuproses.php" method="POST">
        <h2> ORDER </h2> 
        <hr>
        <br>
         <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type='text' name='nama'></td>
   </tr>
   </br>
   <tr>
    <td>Alamat,</td>
    <td>:</td>
    <td><input type='text' name='email'></td>
   </tr>
   <br>
        <td>komentar </td>
                        <td> : </td>
                        <tr>
                        <td><textarea cols=”45″ rows=”7″ name="komentar" type=”textarea” id="komentar" size=”15px” placeholder="Masukan Ekpedisi" required=”required”></textarea></td></tr>
        <br>
        <button onclick="showNotification()" type="submit" value="submit"> Kirim</button>
    <input type="reset" name="reset" value="Batal"></td></tr>
    <script>
function showNotification() {
  // Periksa apakah browser mendukung notifikasi
  if ('Notification' in window) {
    // Meminta izin untuk menampilkan notifikasi
    Notification.requestPermission().then(function(permission) {
      if (permission === 'granted') {
        // Membuat objek notifikasi
        var notification = new Notification('Berhasil', {
          body: 'Berhasil.',
          icon: 'path/to/icon.png' // Ganti dengan path gambar ikon notifikasi
        });

        // Menangani klik pada notifikasi (opsional)
        notification.onclick = function() {
          console.log('Notifikasi diklik');
        };
      } else {
        console.log('Izin notifikasi ditolak');
      }
    });
  } else {
    console.log('Browser tidak mendukung notifikasi');
  }
}
</script>
    </form>
</body>
</head>
</html>