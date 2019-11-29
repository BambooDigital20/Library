<html>

<head>
<title>

Validacao login.

</title>
</head>

<body>

<?php require "basics.php"; ?>
<?php 

$login_validate = validate($user,$pass);


echo $login_validate;


?>



</body>


</html>