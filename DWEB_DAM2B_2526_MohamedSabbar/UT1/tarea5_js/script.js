// variables
let nombre = window.prompt("Ingrese su nombre", "*********");
let apellido = window.prompt("Ingrese su apellido", "*********");
let numero1 = window.prompt("Ingrese el primer numero", 1);
let numero2 = window.prompt("Ingrese el segundo numero", 2);

// operaciones
let suma = numero1 + numero2;
let resta = numero1 - numero2;
let producto = numero1 * numero2;
let cociente = numero1 / numero2;

// mostar resultados en el parrafo 
document.getElementById("parrafo").innerHTML = 
"Nombre: " + nombre + "<br>" + "</br>" +
"Apellido: " + apellido + "<br>" + "</br>" +
"los numero teclados han sido: " + numero1 + " y " + numero2 + "<br>" + "</br>" +
"Suma: " + suma + "<br>" + "</br>" +
"Resta: " + resta + "<br>" + "</br>" +
"Producto: " + producto + "<br>" + "</br>" +
"Cociente: " + cociente + "<br>" + "</br>";

// alert
alert("Nombre: " + nombre + "\nApellido: " + apellido + "\nlos numero teclados han sido: " + numero1 + " y " + numero2 + "\nSuma: " + suma + "\nResta: " + resta + "\nProducto: " + producto + "\nCociente: " + cociente);

