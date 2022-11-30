class pessoa {
    nome;
    idade;
    altura;
    anoDeNascimento;
    constructor(nome, idade, altura) {
        this.nome = nome;
        this.idade = idade;
        this.altura = altura;
        this.anoDeNascimento = 2022 - idade;

    }
    descrever() {
        console.log(`esse é ${this.nome} e sua idade é ${this.idade} e tem ${this.altura} de altura e nasceu no ano de ${this.anoDeNascimento}`)
    }
}

function comparaPessoa(p1, p2) {
    if (p1.idade > p2.idade) {
        console.log(`${p1.nome} é mais velho`);
    } else if (p2.idade > p1.idade) {
        console.log(`${p2.nome} é mais velho`);
    } else {
        console.log(`${p1.nome} e ${p2.nome} tem a mesma idade`);
    }
}

const ciso = new pessoa('tarcisio',18,186);
const gabi = new pessoa('gabriela',18, 160);

comparaPessoa(ciso,gabi);