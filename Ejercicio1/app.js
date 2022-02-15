
const sectForm = document.querySelector('#form');
const cambio = document.querySelector('#cambio');
const hasColors = [0,1, 2, 3, 4, 5, 6, 7, 8, 9, "A", "B", "C", "D", "E", "F"];

// CARGAR LOS SELECT Y OPTIONS EN LA PAGINA
for (let i = 0; i < 6; i++) {
    let newDiv = document.createElement('div');
    let newLabel = document.createElement('label');
    let newSelect = document.createElement('select');

    newLabel.textContent = `CODIGO ${i}`;
    newSelect.name = `element-color${i}`;
    newSelect.id = `element-color${i}`;
    for (item of hasColors) {
        let newOption = document.createElement('option');
        newOption.value = item;
        newOption.text = item;
        newSelect.appendChild(newOption);
    }

    newDiv.appendChild(newLabel);
    newDiv.appendChild(newSelect);
    sectForm.appendChild(newDiv);
}

let newInput = document.createElement('INPUT');
newInput.setAttribute("type", "submit");
newInput.className = "btn1"
newInput.id = "btn"
newInput.name = "btnFinal"
newInput.value = 'GENERAR COLOR'
sectForm.appendChild(newInput);





