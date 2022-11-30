function calcImc(peso, altura) {
    return peso / (altura * altura);
}
function classificacao(imc){
    if (imc<= 18.5){
        return 'magreza';
    }else if (imc >18.5 && imc <= 24.9) {
        return 'normal';
    } else if (imc >= 25 && imc <=29.9) {
        return 'sobrepeso';
    } else {
        return 'aiai';
    }

}
function escrevaNome(nome){
    console.log( 'meu nome é ' + nome);
}
function maiorDeIdade(idade){
    if (idade>=18){
        console.log('é maior de idade');
    }else {
        console.log('é menor de idade');
    }
}

(function () {
    const peso = 80;
    const altura = 1.90;
    const imc = calcImc(peso, altura);
    maiorDeIdade(18);
    escrevaNome('tarcisio');
    console.log("o imc está " + classificacao(imc));
})();
