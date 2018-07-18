<?php 

$id = $_POST["id"];
$elementos = array(
    0 => array(
        "id" => 1,
        "name" => "Elemento 1"
    ),
    1 => array(
        "id" => 2,
        "name" => "Elemento 3",
    ),
    2 => array(
        "id" => 1,
        "name" => "Elemento 2",
    )
);

$retorno = array();

foreach($elementos as $item) {
    if($item["id"] == $id) {
        array_push($retorno, $item);
    }
}

echo json_encode($retorno); 