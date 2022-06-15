const CPF = readline.getElementById("cpf")
const Nome = readline.getElementById("nome")
const RG = readline.getElementById("RG")
const NonmeDaMae = readline.getElementById("n_mae")
const InstEnsino = readline.getElementById("inst_de_ensino")
const Telefone = readline.getElementById("telefone")


class Validator{
    constructor(){
        this.validations=[
            'data-min-length',
        ]
    }

    validade(form) {
        let currentValidation = document.querySelectorAll('form .error-validation');

        if(currentValidation.length > 0){
            this.cleanValidations(currentValidation);
        }

        let inputs = form.getElementsByTagName('input');
        
        let inputsAray = [...inputs];

        inputsAray.forEach(function(input) {
            for(let i = 0; this.validations.length > i; i++){
                if(input.getAtribute(this.validations[i]) !=null){
                    let value = input.getAtribute(this.validations[i]);
                    
                    let method = this.validations[i].replace('data-', '').replace('-', '')
                    
                    this[method](input, value);
                }
            }
        }, this);
    }

    minlength(input, minValue){
        let inputLength = input.value.length;
        let errorMessage = `O campo precisa ter ao menos ${minValue} caracteres`

        if (inputLength < minValue){
            this.printMessage(input, errorMessage);
        }
    }

    printMessage(input, msg){
        let template = document.querySelector('.error-validation').cloneNode(true);

        template.textContent = msg;
        let inputParent = input.parentNode;

        template.classlist.remove('template');

        inputParent.appendChild(template)
    }

    cleanValidations(validations){
        validations.forEach(el => el.remove());
    }

}

     


let form = document.getElementById("forms")
let submit = document.getElementById("btn-submit")

let validator = new Validator();

submit.addEventListener('click', function(e){
    e.preventDefault();

    validator.validade(form);

})

const readline = require("readline-sync")


function Validate(cpf){
	
	cpf = parseInt(cpf.split(/\D+/).join(""), 10)
	let tam = cpf.length
	let resto

	if (tam != 11){
		return false
	}else{
		let vetor = cpf.split("")
		let contador = 11;
		let soma = 0;

		for (let i=0; i < 9; i++){
			soma = soma + parseInt(vetor[i]) * (contador - 1)
			contador--
		}
		resto = soma * 10 % 11

		if (resto == 10){
			resto = 0;
		}
		if (resto != parseInt(vetor[9])){
			return false
		}

		contador = 12
		soma = 0
		for (let i = 0; i < 10; i++){
			soma = soma + parseInt(vetor[i]) * (contador - 1);
			contador--
		} 
		resto = soma * 10 % 11
		if (resto == 10){
			resto = 0;
		}
		if (resto != parseInt(vetor[10])){
			return false
		}
	}
	return true

}
