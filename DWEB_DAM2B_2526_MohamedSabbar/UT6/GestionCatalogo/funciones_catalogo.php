<?php
// un metodo para agregar nuevo producto en nuestro catalogo
function agregarNuevoProducto(array &$catalogo, array $producto)
{
    array_push($catalogo, $producto);
    return $catalogo;
}
// para eliminar Producto
function eliminarProducto(array &$catalogo, int $id)
{
    foreach ($catalogo as $indice => $producto) {
        if ($producto["id"] == $id) {
            unset($catalogo[$indice]);
            return array_values($catalogo);
        }
    }
    return $catalogo;
}
// para buscar productos del misma categoria
function filtrarPorCategoria(array &$catalogo, string $categoria)
{
    $resultado = array_filter($catalogo, function ($producto) use ($categoria) {
        return strcasecmp($producto["categoria"], $categoria) === 0;
    });
    return $resultado;
}
// para cacular media de precios 
function calcularPrecioMedio(array &$catalogo)
{
    $suma = 0;
    foreach ($catalogo as $indice => $producto) {
        $suma += $producto["precio"];
    }
    $mediaPrecios = $suma / count($catalogo);
    return round($mediaPrecios,2);
}
// para incrementar precios 

function incrementarPrecios(array &$catalogo, int $porcentaje)
{
    $porcentajeDecimal = $porcentaje /100;
    foreach ($catalogo as $indice => $producto) {
        $catalogo[$indice]["precio"] += $producto["precio"] * $porcentajeDecimal;
    }
    return $catalogo;

}
 // metodo para volver productos de bajo stock 
function productosBajoStock(array &$catalogo,int $umbral = 5){
    $resultado = [];
    foreach ($catalogo as $indice => $producto) {
        if ($producto["stock"] < $umbral) {
            $resultado[] = $producto;
        }
    }
    return $resultado;
}

function generarResumen(array &$catalogo){
    $totalProductos = 0;
    $categorias = [];
    $totalStockPrecio = 0;

    foreach ($catalogo as $indice => $producto) {
        $totalProductos += $producto["stock"];
        $totalStockPrecio += $producto["precio"] * $producto["stock"];
        $categorias[] = $producto["categoria"];
    }
    $nCategorias = count(array_unique($categorias));
    
    $resultado = [
        "Total Stock"=> $totalProductos,
        "Valor total del stock"=> round($totalStockPrecio,2),
        "Número de categorías" => $nCategorias
    ];
    return $resultado;
}

?>