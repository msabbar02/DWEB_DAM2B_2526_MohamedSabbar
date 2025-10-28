export class Empleado {
    constructor(nombre, edad, salario) {
        this.nombre = nombre;
        this.edad = edad;
        this.salario = salario;
    }
    mostrarInfo() {
        console.log(`Nombre:${this.nombre}, Edad: ${this.edad}, Salario:${this.salario}`);
    }
    calcularSalarioAnual() {
        return this.salario * 12;
    }
}
//# sourceMappingURL=Empleado.js.map