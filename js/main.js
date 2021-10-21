function editar(id, txt_tarefa){
  //criar form edição
  let form = document.createElement('form')
  form.action = 'index.php?pag=index&acao=atualizar'
  form.method = 'POST'
  form.className = 'row'

  //criar um input para entrada de texto
  let inputTarefa = document.createElement('input')
  inputTarefa.type = 'text'
  inputTarefa.name = 'tarefa'
  inputTarefa.className = 'col-9 form-control'
  inputTarefa.value = txt_tarefa

  //input hidden para guardar valor da tarefa
  let inputId = document.createElement('input')
  inputId.type = 'hidden'
  inputId.name = 'id'
  inputId.value = id

  //criar um input para envio do form
  let button = document.createElement('button')
  button.type = 'submit'
  button.className = 'col-3 btn btn-info'
  button.innerHTML = '<i class="fas fa-redo-alt"></i>'

  //incluir inputTarefa no from
  form.appendChild(inputTarefa)

  //incluir input no form
  form.appendChild(inputId)

  //incluir button no form
  form.appendChild(button)

  //Debug
  // console.log(form)
  // alert(id)

  //selecionar a div tarefa
  let tarefa = document.getElementById('tarefa_'+id)

  //limpar o texto da tarefa para inclusão do form
  tarefa.innerHTML = ''
  
  //incluir form na página
  tarefa.insertBefore(form, tarefa[0])

}

function remover(id){
  location.href='todas_tarefas.php?pag=index&acao=remover&id='+id
}

function marcarRealizada(id){
  location.href='todas_tarefas.php?pag=index&acao=marcarRealizada&id='+id
}