<?php
// memulai sesi
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set variabel sesi
$_SESSION["username"] = "ika";
$_SESSION["nama"] = "Kartika Fatmawati";
echo "Variabel sesi telah diciptakan.";
?>
</body>
</html>