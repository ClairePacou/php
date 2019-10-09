<?php

require_once '../includes/config.php';
//var_dump($_GET);
$id = $_GET['id'];
$post =get_post($id);
//var_dump($post);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1> <?php echo $post['title'] ?></h1>
    <p> <?php echo $post['content'] ?></p>
</body>
</html>
