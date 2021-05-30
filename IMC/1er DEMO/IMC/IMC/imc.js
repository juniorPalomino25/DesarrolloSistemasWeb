function calcular(peso, altura) {
    var peso = document.getElementById('txtPeso').value;
    var altura = document.getElementById('txtAltura').value;
    var imc = peso / (altura * altura);
    document.getElementById('resultado').innerHTML = imc.toFixed(2);

    if (imc < 18.5) {
        document.getElementById('delgado').classList.add('destaque');
    } else if (imc <= 24.9) {
        document.getElementById('normal').classList.add('destaque');
    } else if (imc <= 29.9) {
        document.getElementById('sobrepeso').classList.add('destaque');
    } else if (imc <= 39.9) {
        document.getElementById('obesidad').classList.add('destaque');
    } else if (imc > 40) {
        document.getElementById('obesidadGrave').classList.add('destaque');
    } else {
        document.getElementById('resultado').innerHTML = 'digite um valor válido';
    }
}