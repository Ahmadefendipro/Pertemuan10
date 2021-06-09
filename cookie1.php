<?php
$cookie_name = "namauser";
$cookie_value = "Kartika Fatmawati";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
// 86400 = 1 hari
?>
<!DOCTYPE html>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Nama Cookie '" . $cookie_name . "' tidak ada!";
} else {
echo "Cookie '" . $cookie_name . "' sudah ada!<br>";
echo "Nilanya adalah: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>