const librosDisponibles = [
    { titulo: "Cien años de soledad", autor: "Gabriel García Márquez", precio: 20, stock: 5 },
    { titulo: "1984", autor: "George Orwell", precio: 15, stock: 3 },
    { titulo: "El Principito", autor: "Antoine de Saint-Exupéry", precio: 10, stock: 10 }
];
const miTienda = {
    listarLibros() {
        return librosDisponibles;
    },
    venderLibro(cliente, tituloLibro) {
        const libro = librosDisponibles.find(l => l.titulo === tituloLibro);
        if (!libro) {
            return `El libro "${tituloLibro}" no se encuentra disponible.`;
        }
        if (libro.stock <= 0) {
            return `No hay stock disponible para "${libro.titulo}".`;
        }
        libro.stock--;
        cliente.carrito.push(Object.assign({}, libro));
        return `El libro "${libro.titulo}" ha sido agregado al carrito de ${cliente.nombre}.`;
    },
    mostrarCarrito(cliente) {
        console.log(`\nCarrito de ${cliente.nombre}:`);
        if (cliente.carrito.length === 0) {
            console.log("El carrito está vacío.");
            return;
        }
        let total = 0;
        cliente.carrito.forEach((libro, i) => {
            console.log(`${i + 1}. ${libro.titulo} - ${libro.precio}€`);
            total += libro.precio;
        });
        console.log(`Total a pagar: ${total}€`);
    }
};
const cliente1 = {
    nombre: "Ana López",
    email: "ana.lopez@example.com",
    carrito: []
};
// Listar libros disponibles
console.log("Libros disponibles:");
miTienda.listarLibros().forEach(libro => console.log(`- ${libro.titulo} (${libro.autor}) - ${libro.precio}€ - Stock: ${libro.stock}`));
console.log("\nVenta:");
console.log(miTienda.venderLibro(cliente1, "1984"));
miTienda.mostrarCarrito(cliente1);
