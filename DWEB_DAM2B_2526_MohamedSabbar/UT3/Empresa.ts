class Empresa{
    nombre: string;
    empleados: Array<Empleado>;

    constructor(emppleados : Array<Empleado>){
        this.empleados = emppleados;
    }


    anadirEmpleado(empleado : Empleado): void{
            this.empleados.push(empleado);
    }


    mostrarinfo(): void{
        this.empleados.forEach(emp => {
            emp.mostrarInfo();
        });
    }

    calcularCoste(): number{
        let coste = Number;
        this.empleados.forEach(emp => {
            
        });

        return coste;
    }
     




}