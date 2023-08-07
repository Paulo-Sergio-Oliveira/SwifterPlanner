//Marca como concluida, atualiza o BD e recarrega apágina
function marcarConcluida(id) {
    // Envia a solicitação AJAX para marcar a meta como concluída
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'marcar-concluida.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        window.location.reload(); //recarrega apágina
      }
    };
    xhr.send(`id=${id}`);
  }
  //Outra autoexplicativa
  function excluirMeta(id) {
    if (confirm("Tem certeza de que deseja excluir esta meta?")) {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'excluir-meta.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          window.location.reload();
        }
      };
      xhr.send(`id=${id}`);
    }
  }
  //A mesma coisa
  function inserirMeta() {
    const metas = document.getElementById('add').value;//meta
    const areaMeta = document.getElementById('metas').value;//area
    const mes = document.getElementById('select').value;//mes

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'inserir-meta.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Exiba uma mensagem ou feedback após a conclusão da inserção
        window.location.reload();
      }
    };
    xhr.send(`metas=${metas}&areaMeta=${areaMeta}&mes=${mes}`);
  }