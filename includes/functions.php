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

function get_post_formulaire($titre,$contenu)
{
	global $db;
    $sth = $db->prepare("INSERT INTO posts(title,content) VALUES(:title, :content)");
	$sth->bindParam(':title', $titre);
	$sth->bindParam(':content', $contenu);
	$sth->execute();

}

function modif_post($titre,$contenu,$id)
{
    global $db;
    $req = $db->prepare('UPDATE posts SET title = ?, content = ?, WHERE id = ?');
    $req->execute(array($title, $content, $id));

}