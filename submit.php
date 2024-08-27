<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hasil Form contact</h2><br><br>
    <?php
   if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['pesan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    
    echo "Nama : " . $name . "<br>". "<br>";
    echo "Email : " . $email . "<br>". "<br>";
    echo "Pesan : " . $pesan . "<br>". "<br>";
    } 
    ?>
</body>
</html>