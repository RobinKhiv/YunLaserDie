<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yun Laser Die LLC</title>
</head>
<body>
    <?php include("../resources/components/header.php"); ?>
    <?php
    isset($_GET['route']) ? $route =$_GET['route'] : $route = 'home';
    switch ($route){
        case 'home':
            include('./routes/home.php');
            break;
        case 'about':
            include('./routes/about.php');
            break;
        case 'services':
            include('./routes/services.php');
            break;
        case 'contact';
            include('./routes/contact.php');
            break;
    }
    ?>
</body>
</html>