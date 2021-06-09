<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// menghapus semua variabel sesi
session_unset();
// menghancurkan sesi
session_destroy();
?>
Sesi telah dihapus
</body>
</html>