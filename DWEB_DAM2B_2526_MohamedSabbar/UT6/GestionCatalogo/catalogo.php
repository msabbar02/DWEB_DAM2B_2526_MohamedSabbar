<?php
include("./includes/cabecera.php") ;
include("./funciones_catalogo.php");
$catalogo = [
    $producto1 = [
        "id" => 1,
        "nombre" => "raton",
        "categoria" => "prefiricos",
        "precio" => 15.99,
        "stock" => 5,
    ],
    $producto2 = [
        "id" => 2,
        "nombre" => "monitor",
        "categoria" => "monitores",
        "precio" => 15.95,
        "stock" => 3,
    ],
    $producto3 = [
        "id" => 3,
        "nombre" => "teclado",
        "categoria" => "prefiricos",
        "precio" => 15.99,
        "stock" => 3,
    ],
    $producto4 = [
        "id" => 4,
        "nombre" => "laptop",
        "categoria" => "ordenadores",
        "precio" => 23.90,
        "stock" => 3,
    ],
    $producto5 = [
        "id" => 5,
        "nombre" => "telefono",
        "categoria" => "moviles",
        "precio" => 150.99,
        "stock" => 4,
    ],

];

echo"<h3>Catálogo inicial</h3>";
echo"<table>";
echo"<tr>";
foreach(array_keys($catalogo[0]) as $header){
    echo "<th>{$header}</th>";
}
echo "</tr>";

foreach ($catalogo as $producto) {
   echo "<tr>";
   foreach ($producto as $valor) {
    echo "<td>{$valor}</td>";
   }
   echo "</tr>";
};
echo"</table><br>";


echo"<h3>Precio medio de los productos</h3>";
$media = calcularPrecioMedio($catalogo);
echo "La media de los productos es : <strong><mark>{$media}€</mark></strong> <br>";



echo"<h3>Tras aplicar un porcentaje</h3>";
incrementarPrecios($catalogo,10);
echo"<table>";
echo"<tr>";
foreach(array_keys($catalogo[0]) as $header){
    echo "<th>{$header}</th>";
}
echo "</tr>";

foreach ($catalogo as $producto) {
   echo "<tr>";
   foreach ($producto as $valor) {
    echo "<td>{$valor}</td>";
   }
   echo "</tr>";
};
echo"</table><br>";



$producto6 = [
    "id" => 6,
    "nombre" => "Iphone 16",
    "categoria" => "moviles",
    "precio" => 800,
    "stock" => 15,
];
echo"<h3>Tras añadir un nuevo producto </h3>";
agregarNuevoProducto($catalogo,$producto6);
echo"<table>";
echo"<tr>";
foreach(array_keys($catalogo[0]) as $header){
    echo "<th>{$header}</th>";
}
echo "</tr>";

foreach ($catalogo as $producto) {
   echo "<tr>";
   foreach ($producto as $valor) {
    echo "<td>{$valor}</td>";
   }
   echo "</tr>";
};
echo"</table>";

echo"<h3>Tras eliminar el producto con ID 2</h3>";

eliminarProducto($catalogo,2);
echo"<table>";
echo"<tr>";
foreach(array_keys($catalogo[0]) as $header){
    echo "<th>{$header}</th>";
}
echo "</tr>";

foreach ($catalogo as $producto) {
   echo "<tr>";
   foreach ($producto as $valor) {
    echo "<td>{$valor}</td>";
   }
   echo "</tr>";
};
echo"</table>";


echo"<h3>Filtrar por categoria moviles</h3>";

$moviles = filtrarPorCategoria($catalogo,"moviles");
echo"<table>";
foreach ($moviles as $producto) {
   echo "<tr>";
   foreach ($producto as $valor) {
    echo "<td>{$valor}</td>";
   }
   echo "</tr>";
};
echo"</table>";

echo"<h3>Produtos de cantidad menos 5</h3>";

$prod = productosBajoStock($catalogo); // aqui no he metido parametro porque tiene por defecto 5 
echo"<table>";
foreach ($prod as $producto) {
   echo "<tr>";
   foreach ($producto as $valor) {
    echo "<td>{$valor}</td>";
   }
   echo "</tr>";
};
echo"</table>";

echo"<h3>Resumen final del catalogo</h3>";
$resu = generarResumen($catalogo);
echo"<table>";
foreach ($resu as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key ;
    echo "</td>";
    echo "<td>";
    echo $value ;
    echo "</td>";
    echo "</tr>";
};
echo"</table>";

include("./includes/pie.php") ;
?>