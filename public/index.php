<?php

require_once '../includes/config.php';


if(isset($_POST['title'])&& isset($_POST['content'])&& isset($_POST['mots_cles'])){
    $titre = $_POST['title'];
    $motscles = $_POST['mots_cles'];
    $contenu = $_POST['content'];


    get_post_formulaire($titre,$motscles,$contenu);
}


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
                    <p><?= $post['mots_cles'] ?></p>
                    <p><?= get_resume($post['content']) ?></p>
                    <a href="http://localhost/iut-tp-blog-master/public/article.php?id=<?php echo $post['id'] ?>" ><input type="button" name="En savoir plus"value="En savoir plus"/> </a>
                     <a href="http://localhost/iut-tp-blog-master/public/supp.php?id=<?php  echo $post['id'] ?>" ><input type="button" name="Supprimer"value="Supprimer"/> </a>
                     <a href="http://localhost/iut-tp-blog-master/public/modif.php?id=<?php echo $post['id'] ?>" ><input type="button" name="Modifier"value="Modifier"/> </a>

                </div>
            <?php endforeach; ?>
             
        </div>
        <a href=http://localhost/iut-tp-blog-master/public/formulaire_article.php? <?php echo $post['id'] ?> ><input id="gg" type="button" name="Ecrire un article"value="Ecrire un article"/> </a>
         <h1 class="text-center">Categories</h1>
         <?php foreach($categories as $categorie): ?>
                <div class="col-md-4">
                    <h2><?= $categorie['nom'] ?></h2>
                </div>
            <?php endforeach; ?>
    </div>
</body>
</html>

<style type="text/css">
    #gg{
        margin-top: 20px;
        margin-left: 45%;
    }
</style>