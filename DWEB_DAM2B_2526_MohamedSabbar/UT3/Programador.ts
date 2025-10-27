
class Programador extends Empleado{
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

    anadirBonus(): number {
       if(this.proyectos >= 10){
            this.salario *= 0.1;
        }else{
            this.salario *= 0.05;
        }
        return this.salario * 12;
        
    }
}