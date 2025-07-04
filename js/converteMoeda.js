var numero = 9.9;
var formatado = "R$ " + numero.toFixed(2).replace(".", ","); // "R$ 9,90"
console.log(formatado);

var texto = "R$ 120,35";
var valor = parseFloat(texto.replace("R$ ", "").replace(",", ".")); // 120.35
console.log(valor);