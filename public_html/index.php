<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yun Laser Die LLC</title>
    <link  rel="stylesheet" type="text/css" href="./css/header.css">
</head>
<body>
    <?php include('../resources/components/header.php'); ?>
    <?php
    isset($_GET['route']) ? $route =$_GET['route'] : $route = 'home';
    switch ($route){
        case 'home':
            include('../resources/routes/home.php');
            break;
        case 'about':
            include('../resources/routes/about.php');
            break;
        case 'services':
            include('../resources/routes/services.php');
            break;
        case 'contact';
            include('../resources/routes/contact.php');
            break;
    }
    ?>
    <?php include('../resources/components/footer.php'); ?>
</body>
</html>