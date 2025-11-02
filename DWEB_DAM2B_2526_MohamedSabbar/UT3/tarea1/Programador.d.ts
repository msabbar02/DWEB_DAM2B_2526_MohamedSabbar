import { Empleado } from "./Empleado";
export declare class Programador extends Empleado {
    lenguajePrincipal: string;
    proyectos: number;
    constructor(nombre: string, edad: number, salario: number, lenguaje: string, proyectos: number);
    mostrarInfo(): void;
    calcularSalarioAnual(): number;
}
//# sourceMappingURL=Programador.d.ts.map