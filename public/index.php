<?php

require_once '../includes/config.php';

$posts = get_all_posts();
$categories = get_all_categories();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Blog</h1>
        <div class="row">
            <?php foreach($posts as $post): ?>
                <div class="col-md-4">
                    <h2><?= $post['title'] ?></h2>
                    <p><?= $post['content'] ?></p>
                    <a href="http://localhost/iut-tp-blog-master/public/article.php?id=<?php echo $post['id'] ?>" ><input type="button" name="En savoir plus "value="En savoir plus"/> </a>
                </div>
            <?php endforeach; ?>
        </div>
         <h1 class="text-center">Categories</h1>
         <?php foreach($categories as $categorie): ?>
                <div class="col-md-4">
                    <h2><?= $categorie['nom'] ?></h2>
                </div>
            <?php endforeach; ?>
            <a href=http echo $post['id'] ?>" ><input type="button" name="Ecrire un article "value="Ecrire un article"/> </a>
    </div>
</body>
</html>
