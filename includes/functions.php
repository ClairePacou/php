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
