import { Empleado } from "./Empleado";

export class Programador extends Empleado{
    lenguajePrincipal : string;
    proyectos : number;

    constructor (nombre : string ,edad : number , salario : number,lenguaje : string, proyectos: number){
        super(nombre,edad,salario);
        this.lenguajePrincipal = lenguaje;
        this.proyectos= proyectos;
    }

    mostrarInfo(): void {
        super.mostrarInfo;
        console.log(`lenguaje Principal: ${this.lenguajePrincipal}, Numero de Proyectos:${this.proyectos}`);
    }

    calcularSalarioAnual(): number {
        // añadir bonus se su proyectos mayor igual a 5
        const base = this.salario * 12;
        const bonus = this.proyectos >= 5 ? base * 0.1 : 0;
        return base + bonus;
        }
}