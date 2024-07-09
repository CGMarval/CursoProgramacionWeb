
function calculateAverage(event) {
    event.preventDefault();  // Prevenir el envío del formulario

    const store1 = parseFloat(document.getElementById('precio-tienda-1').value);
    const store2 = parseFloat(document.getElementById('precio-tienda-2').value);
    const store3 = parseFloat(document.getElementById('precio-tienda-3').value);

    if (isNaN(store1) || isNaN(store2) || isNaN(store3)) {
        alert('Por favor, introduce valores válidos.');
        return false;
    }

    const average = (store1 + store2 + store3) / 3;
    document.getElementById('result').innerHTML = "Precio medio del producto: " + average.toFixed(2);

    return false;  // Prevenir el envío del formulario
}
