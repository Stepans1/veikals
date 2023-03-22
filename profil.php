<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main </title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form>
   <img src="<?=$_SESSION['user']['avatar'] ?>" width="100"  alt="">
     <h2><?=$_SESSION['user']['full_name']?></h2>
    <h2><?=$_SESSION['user']['email'] ?></h2>
</form>
</body>
</html>

