<?php
include '../../../controller/conexao.php';

$resposta = array( ) ;

$nome = $_REQUEST["nome"];
$preco = $_REQUEST["preco"];
$id_produto = $_REQUEST["id_produto"];

$sql = "UPDATE produtos 
SET nome = '".$nome."', 
    preco = '".$preco."'
    WHERE id_produto = ".$id_produto."
";

  $retornoBanco = mysqli_query( $conn, $sql ) ;

  if( !$retornoBanco ){

    $resposta["status"] = -1 ;
    $resposta["msg"]    = "ocorreu um erro na execução do WS. cod=1002" ;

  } else {

    $resposta["status"] = 0 ;
    $resposta["msg"]    = "success" ;
    $resposta["data"]   = mysqli_fetch_all( $retornoBanco ) ;

  }

  echo json_encode( $resposta ) ;
  exit ;

?> 
