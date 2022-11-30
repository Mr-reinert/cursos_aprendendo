
class Carro {
    marca;
    cor;
    gastoKm;

    constructor(marca,cor,gastoKm){
        this.marca = marca;
        this.cor = cor;
        this.gastoKm = gastoKm;
    }
    gastoViagem(distance,priceFuel){
       return (distance*this.gastoKm)*priceFuel
    }

}

const uno = new Carro('fiat','vermelho',1/12);
const distance = 100;
const priceGas = 4.50;

console.log(uno.gastoViagem(70,5));


