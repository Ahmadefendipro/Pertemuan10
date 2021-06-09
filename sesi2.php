<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo variabel sesi yang telah diset di halaman sebelumnya
echo "Username: " . $_SESSION["username"]. ".<br>";
echo "Nama: " . $_SESSION["nama"]. ".";
?>
</body>
</html>