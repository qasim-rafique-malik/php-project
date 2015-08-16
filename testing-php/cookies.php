<?php
/**
 * Created by PhpStorm.
 * User: Qasim
 * Date: 8/15/2015
 * Time: 12:21 AM
 */
setcookie("name", "qasim", time()+3600, "/","", 0);
setcookie("age", "24", time()+3600, "/", "",  0);
setcookie('testme','23', time()+3600, "/", "",  0);
?>

<html>
<head>
    <title>Setting Cookies with PHP</title>
</head>
<body>
<?php echo "Set Cookies"?>
</body>
</html>
