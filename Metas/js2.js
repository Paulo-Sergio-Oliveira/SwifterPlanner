function carregarPagina() {
    criarOption();
}

function criarOption(){
    console.log("henrique");

    let select = document.getElementById("select");

    let dataAtual = new Date();
    let mesAtual = dataAtual.getMonth()
    let anoAtual = dataAtual.getFullYear();

    for (let i = mesAtual; i < 12; i++) {
        let option = document.createElement("option");
        
        option.value = i; // Valor do mês (0 a 11)
        option.textContent = obterNomeMes(i) + " " + anoAtual; // Texto do mês e ano
        option.value = obterNomeMes(i);
        select.appendChild(option);
    }
    document.getElementById("selectMeses").appendChild(select);
}

function obterNomeMes(mes) {
    let nomesMeses = [
      "Janeiro",
      "Fevereiro",
      "Março",
      "Abril",
      "Maio",
      "Junho",
      "Julho",
      "Agosto",
      "Setembro",
      "Outubro",
      "Novembro",
      "Dezembro",
    ];
    return nomesMeses[mes];
  }