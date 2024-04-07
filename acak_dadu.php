<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acak Dadu</title>
</head>
<body>
    <h1>Acak Dadu</h1>

    <?php
    // Menghasilkan angka acak antara 1 dan 6
    $dadu = rand(1, 6);
    ?>
    <img src="img/<?php echo $dadu; ?>.png" alt="Dadu <?php echo $dadu; ?>" width="100" height="100">
    <br>
    <button onclick="refreshPage()"> Refresh </button>

    <script>
        function refreshPage() {
            window.location.reload();
        }
    </script>
</body>
</html>