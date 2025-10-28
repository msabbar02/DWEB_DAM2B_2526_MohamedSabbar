import { Empleado } from "./Empleado";
export class Programador extends Empleado {
    constructor(nombre, edad, salario, lenguaje, proyectos) {
        super(nombre, edad, salario);
        this.lenguajePrincipal = lenguaje;
        this.proyectos = proyectos;
    }
    mostrarInfo() {
        super.mostrarInfo;
        console.log(`lenguaje Principal: ${this.lenguajePrincipal}, Numero de Proyectos:${this.proyectos}`);
    }
    calcularSalarioAnual() {
        // añadir bonus se su proyectos mayor igual a 5
        const base = this.salario * 12;
        const bonus = this.proyectos >= 5 ? base * 0.1 : 0;
        return base + bonus;
    }
}
//# sourceMappingURL=Programador.js.map