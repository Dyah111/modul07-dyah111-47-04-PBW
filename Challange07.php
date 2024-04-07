<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nilai Mahasiswa</title>
    </head>
<body>
    <h1>Nilai Mahasiswa</h1>
    <?php
       function rata_rata($nilai) {
        return array_sum($nilai) / count($nilai);
      }
      
      function nilai_tertinggi_terendah($nilai) {
        return [max($nilai), min($nilai)];
      }
      
      function status_kelulusan($rata_rata) {
        return $rata_rata >= 60 ? "Lulus" : "Gagal";
      }
      
      $nilai_mahasiswa = [75, 80, 65, 90, 55];
      
      $rata_rata = rata_rata($nilai_mahasiswa);
      list($nilai_tertinggi, $nilai_terendah) = nilai_tertinggi_terendah($nilai_mahasiswa);
      $status_kelulusan = status_kelulusan($rata_rata);
      
      echo '<p>Nilai mahasiswa: ' . implode(", ", $nilai_mahasiswa) . '</p>' ;
      echo '<p>Rata-rata nilai mahasiswa: ' . $rata_rata . '</p>';
      echo '<p>Nilai tertinggi: ' . $nilai_tertinggi . '</p>';
      echo '<p>Nilai terendah: ' . $nilai_terendah . '</p>';
      echo '<p>Status kelulusan: ' . $status_kelulusan . '</p>';
    ?>
</body>
</html>