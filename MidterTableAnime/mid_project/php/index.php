<?php
header("Access-Control-Allow-Origin: *");

$anime = array(
    array(
        "id" => 1,
        "title" => "Jujutsu Kaisen-Season 1",
        "author" => "Gege Akutami",
        "studio" => "MAPPA",
        "episodes" => "24 Episodes",
        "genres" => "Supernatural"
    ),
    array(
        "id" => 2,
        "title" => "Kimetsu no Yaiba-Season 1",
        "author" => "Koyoharu Gotouge",
        "studio" => "Ufotable",
        "episodes" => "26 Episodes",
        "genres" => "Adventure"
    ),
    array(
        "id" => 3,
        "title" => "The Rising of the Shield Hero-Season 1",
        "author" => "Aneko Yusagi",
        "studio" => "Kinema Citrus",
        "episodes" => "25 Episodes",
        "genres" => "Isekai"
    ),
    array(
        "id" => 4,
        "title" => "My Hero Academia-Season 1",
        "author" => "Kohei Horikoshi",
        "studio" => "Bones",
        "episodes" => "13 Episodes",
        "genres" => "Superhero"
    ),
    array(
        "id" => 5,
        "title" => "Fairy Tail-Season 1",
        "author" => "Hiro Mashima",
        "studio" => "A-1 Pictures",
        "episodes" => "48 Episodes",
        "genres" => "Action"
    )
);

echo json_encode($anime);
?>