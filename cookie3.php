<?php
// set expiration date ke satu jam yang lalu
setcookie("namauser", "", time() - 3600);
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Cookie 'namauser' telah dihapus.";
?>
</body>
</html>