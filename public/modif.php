<?php

require_once '../includes/config.php';
//var_dump($_GET);
$post =get_post($_GET['id']);
//var_dump($post);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">Modifier un article</h1>
    <form action="index.php" method="POST">
  <div class="form-group">
    <label for="">Titre de l'article</label>
    <input name="title" type="text" class="form-control" id="" placeholder="Entrer le titre" value="<?php echo $post ['title'] ?> ">
     </div>
     <div class="form-group">
    <label for="">Contenu de l'article</label>
    <textarea name="content" class="form-control" id="" rows="10" > <?php echo $post ['content'] ?> </textarea>
  </div>
  <button type="submit" class="btn btn-primary">VALIDER</button>
</form>
</body>
</html>
 