import { Empleado } from "./Empleado";
export class Empresa {
    constructor(nombre) {
        this.nombre = nombre;
        this.empleados = [];
    }
    anadirEmpleado(empleado) {
        this.empleados.push(empleado);
    }
    mostrarinfo() {
        console.log(`Empresa: ${this.nombre}`);
        this.empleados.forEach(emp => emp.mostrarInfo);
    }
    calcularCoste() {
        return this.empleados.reduce((acc, emp) => acc + emp.calcularSalarioAnual(), 0);
    }
}
//# sourceMappingURL=Empresa.js.map