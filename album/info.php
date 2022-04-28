<pre>
<?
print("server");
print_r($_SERVER);
print_r($_GET);
print_r($_POST);
print_r($_COOKIE);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>
<pre>