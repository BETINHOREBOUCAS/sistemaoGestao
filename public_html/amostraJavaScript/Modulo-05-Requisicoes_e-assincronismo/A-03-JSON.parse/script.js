/*
| // Formato JSON -> '{"nome": "bonieky", "idade": 90}';
*/
var var1 = '{"nome": "bonieky", "idade": 90}';

// Transforma json em objeto
var pessoa = JSON.parse(var1);

console.log(pessoa);