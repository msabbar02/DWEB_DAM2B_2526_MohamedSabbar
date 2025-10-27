class Empleado{
    nombre : string;
    edad : number;
    salario : number;


    constructor(nombre : string ,edad : number , salario : number){
        this.nombre = nombre;
        this.edad = edad;
        this.salario = salario;
    }

    mostrarInfo(): void{
        console.log(`Nombre:${this.nombre}, Edad: ${this.edad}, Salario:${this.salario}`);
    }

    calcularSalarioAnual(): number{
        return this.salario * 12;
    }
}