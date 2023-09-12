const cepInput = document.querySelector("#cep");
const cidInput = document.querySelector("#cidade");
const logInput = document.querySelector("#logradouro");
const numInput = document.querySelector("#numero");
const bairroInput = document.querySelector("#bairro");
const ufInput = document.querySelector("#estado");


cepInput.addEventListener("keyup", (e)=> {
    const inputValue = e.target.value;

      if(inputValue.length === 8){
        getEnd(inputValue);
      }
});

const getEnd = async (cep) => {
    cepInput.blur();

    const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

    const response = await fetch(apiUrl);
    const data = await response.json();


    logInput.value = data.logradouro;
    cidInput.value = data.localidade;
    bairroInput.value = data.bairro;
    ufInput.value = data.uf;
};