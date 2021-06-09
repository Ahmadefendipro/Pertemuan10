<!DOCTYPE html>
<html>
<head>
<title>Form Login</title>
</head>
<body>
<h1>Login</h1>
<?php
if(array_key_exists('error', $_GET)){
echo "<p style='color: red'>Salah username atau password</p>";
}
?>
<table>
<form method="post" action="prosesloginUser.php">
<tr>
<td>Username:</td><td><input type="text" name="username"
size="30"></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="password"
size="30"/></td>
</tr>
<tr><td>&nbsp;</td><td><input type="submit" value="OK"></td></tr>
</form>
</table>
</body>
</html>