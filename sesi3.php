<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Mengubah variabel sesi
$_SESSION["nama"] = "Kartika Sari";
echo "Variabel sesi telah diubah.";
?>
</body>
</html>