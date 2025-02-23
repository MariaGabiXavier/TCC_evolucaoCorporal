const form = document.getElementById('form');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    const weight = document.getElementById("weight").value;
    const height = document.getElementById("height").value;

    const bmi = (weight / (height * height)).toFixed(2);

    const value = document.getElementById('value');
    let description = '';

    document.getElementById('infos').classList.remove('hidden');

    if (bmi < 18.5) {
        description = 'Vc esta abaixo do peso :( magrelo'
    } else if (bmi >= 18.5 && bmi <= 25) {
        description = 'Vc esta no peso ideal :)'
    } else if (bmi >= 25 && bmi <= 30) {
        description = 'Vc esta um pouco acima do peso ideal :|'
    } else if (bmi >= 30 && bmi <= 35) {
        description = 'SE CUIDE - Vc esta acima do peso ideal ;|'
    } else if (bmi >= 35 && bmi <= 40) {
        description = 'SE CUIDE  MAIS- Vc esta MUITO acima do peso ideal :|'
    } else {
        description = "CUIDADO... VC ESTÁ COM OBESIDADE MORBIDA"
    }

    value.textContent = bmi.replace('.', ',');
    document.getElementById('description').textContent = description;
});