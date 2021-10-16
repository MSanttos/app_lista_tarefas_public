<?php

  require "lista_tarefas/tarefa.model.php";
  require "lista_tarefas/tarefa.services.php";
  require "lista_tarefas/conexao.php";

  /***** Debug *****/ 
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
  /*****************/ 

  $tarefa = new Tarefa();
  $tarefa->__set('tarefa', $_POST['tarefa']);

  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefaService->inserir();

  /***** Debug *****/
  echo '<pre>';
  print_r($tarefaService);
  echo '</pre>';
  /*****************/
?>