import { Empresa } from "./Empresa";
import { Empleado } from "./Empleado";
import { Programador } from "./Programador";
class Principal {
    constructor() {
        const empresa = new Empresa("TechMoha");
        const emp1 = new Programador("moha", 23, 1000, "java", 6);
        const emp2 = new Programador("moha", 24, 1000, "java", 4);
        const emp3 = new Programador("mohamed", 25, 1000, "java", 2);
        empresa.anadirEmpleado(emp1);
        empresa.anadirEmpleado(emp2);
        empresa.anadirEmpleado(emp3);
        empresa.mostrarinfo();
        console.log(`coste total anual: ${empresa.calcularCoste}`);
    }
}
new Principal();
//# sourceMappingURL=Principal.js.map