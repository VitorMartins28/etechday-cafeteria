<?php
include '../../../controller/conexao.php';

$resposta = array( ) ;

$nome = $_REQUEST["nome"];
$preco = $_REQUEST["preco"];

  

$sql = "
    insert into produtos (nome, preco)
    values
    ('". $nome . "', '". $preco ."')";

  $retornoBanco = mysqli_query( $conn, $sql ) ;

  if( !$retornoBanco ){

    $resposta["status"] = -1 ;
    $resposta["msg"]    = "ocorreu um erro na execução do WS. cod=1002" ;

  } else {

    $resposta["status"] = 0 ;
    $resposta["msg"]    = "success" ;
    $resposta["last_id"] = mysqli_insert_id( $conn ) ;

  }

  echo json_encode( $resposta ) ;
  exit ;

?> 
