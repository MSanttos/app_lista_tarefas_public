<?php

  require "lista_tarefas/tarefa.model.php";
  require "lista_tarefas/tarefa.services.php";
  require "lista_tarefas/conexao.php";

  /***** Debug *****/ 
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
  /*****************/ 

  $acao = isset ($_GET['acao']) ? $_GET['acao'] : $acao;

  if ($acao == 'inserir'){
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

    header('Location: nova_tarefa.php?inclusao=1');

    /***** Debug *****/
    // echo '<pre>';
    // print_r($tarefaService);
    // echo '</pre>';
    /*****************/
  } else if($acao == 'recuperar') {
    //echo 'cheguei aqui';
    $tarefa = new Tarefa();
    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->recuperar();
  } else if($acao == 'atualizar'){
    $tarefa = new Tarefa();
    $tarefa->__set('id', $_POST['id']);
    $tarefa->__Set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->atualizar();
    if($tarefaService->atualizar()){
      header('Location: todas_tarefas.php');
    }
  }
  
?>