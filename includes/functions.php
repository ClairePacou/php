<?php

function get_all_posts()
{
    global $db;
    $sth = $db->query("SELECT * FROM posts");
    return $sth->fetchAll();
}
function get_all_categories()
{
    global $db;
    $sth = $db->query("SELECT * FROM categories");
    return $sth->fetchAll();
}

function get_post($id)
{
    global $db;
    $sth = $db->prepare("SELECT * FROM posts WHERE id=:id");
    $sth->bindParam(':id', $id);
    $sth->execute();
    return $sth->fetch();
}

function get_post_formulaire($titre,$motscles,$contenu)
{
	global $db;
    $sth = $db->prepare("INSERT INTO posts(title,mots_cles,content) VALUES(:title,:mots_cles,:content)");
	$sth->bindParam(':title', $titre);
	$sth->bindParam(':content', $contenu);
    $sth->bindParam(':mots_cles', $motscles);
	$sth->execute();

}

function modif_post($titre,$contenu,$motscles,$id)
{
    global $db;
    $req = $db->prepare('UPDATE posts SET title = ?, content = ?, mots_cles = ? WHERE id = ?');
    $req->execute(array($title,$motscles,$content,$id));

}

function get_resume($resume)
{
$maximum_carac=200;
$resume = substr($resume,0,$maximum_carac);
return $resume;
}
