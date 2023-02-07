var matriz = [[1,2,3],[4,5,6],[7,8,9]];
console.log(matriz);
//Primera forma de recorrer la matriz
for (var i = 0; i < matriz.length; i++) {
    for (var j = 0; j < matriz[i].length; j++){
        console.log(matriz[i][j]);
    }
}

//Segunda forma de recorrer la matriz
for(elemento of matriz){
    for(elemento2 of elemento){
        console.log(elemento2);
    }
}
//Tercera forma de recorrer la matriz
matriz.forEach(function(num){
    console.log(num[0]);
    console.log(num[1]);
    console.log(num[2]);
});