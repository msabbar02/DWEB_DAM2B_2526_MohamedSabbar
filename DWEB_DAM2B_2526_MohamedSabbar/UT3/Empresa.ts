import {Empleado} from "./Empleado";

export class Empresa{
    nombre: string;
    empleados: Empleado[];

    constructor(nombre: string ){
        this.nombre = nombre;
        this.empleados = [];
    }

    anadirEmpleado(empleado : Empleado): void{
            this.empleados.push(empleado);
    }

    mostrarinfo(): void{
        console.log(`Empresa: ${this.nombre}`);
        this.empleados.forEach(emp => emp.mostrarInfo);
    }

    calcularCoste(): number{
        return this.empleados.reduce((acc,emp) => acc+emp.calcularSalarioAnual(),0)
    }
}