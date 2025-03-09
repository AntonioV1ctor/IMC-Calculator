document.getElementById("altura").addEventListener("input", function(e) {
    let valor = e.target.value;
    
    // Remover qualquer coisa que não seja número ou ponto
    valor = valor.replace(/[^0-9.]/g, "");

    // Inserir ponto automaticamente após o primeiro número
    if (valor.length > 1 && valor.indexOf('.') === -1) {
        valor = valor.slice(0, 1) + '.' + valor.slice(1);
    }
    
    // Garantir que não haja mais de um ponto
    let partes = valor.split(".");
    if (partes.length > 2) {
        partes = [partes[0], partes.slice(1).join("")];
    }
    
    // Limitar a 2 casas decimais
    if (partes[1] && partes[1].length > 2) {
        partes[1] = partes[1].substring(0, 2);
    }

    e.target.value = partes.join(".");
});
