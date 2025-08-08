<?php
//Ejercicio 1
$videojuego=[
    "Titulo"=> "The legend of Zelda",
    "Consola"=>"NES",
    "Año"=>1986,
    "Precio"=>50.00,
];
//Ejercicio 2

echo"El titulo es: ".$videojuego["Titulo"];
echo"<br>Salio en la consola: ".$videojuego["Consola"];
echo "<br>En el año: ".$videojuego["Año"];
echo "<br>Su precio es: $".$videojuego["Precio"];

//Ejercicio 3
$videojuego["Stock"]=10;
$videojuego["Estado"]='a la venta';
echo "<br>Hay un stock de: ".$videojuego["Stock"]. " Y su estado de venta es: ".$videojuego["Estado"];

//Ejercicio 4
$inventario=['The legend of Zelda'=>['Titulo'=>'The legend of Zelda', 'Consola'=>'NES','Año'=>1986, 'Precio' => 50.00, 'Stock'=> 10, 'Estado'=>'a la venta'],
'Super Mario' => ['Titulo' => 'Super Mario Bros', 'Consola' => 'NES', 'Año' => 1988, 'Precio' => 45.00, 'Stock' => 15, 'Estado' => 'a la venta'],
'Chrono' => ['Titulo' => 'Chrono Trigger', 'Consola' => 'SNES', 'Año' => 1995, 'Precio' => 80.00, 'Stock' => 5, 'Estado' => 'a la venta'],];

//Ejercicio 5
foreach($inventario as $producto => $clave){
    foreach ($clave as $dato){
        if($dato==$clave['Titulo']){
            echo "<br>El titulo del juego es :$dato";
        }elseif($dato==$clave['Consola']){
                echo "<br>Salio para la consola: $dato";
            }elseif($dato==$clave['Año']){
                echo "<br>Salio en el año: $dato";
            }elseif($dato==$clave['Precio']){
                echo "<br>Su precio es de: $dato";
            }elseif ($dato==$clave['Stock']) {
                echo "<br>Hay un stock de: $dato";
            }elseif ($dato==$clave['Estado']) {
                echo "<br>¿Esta a la venta? $dato<br>";
            }
        }
}

//Ejercicio 6
    foreach($inventario as $juego =>&$clave){
        foreach($clave as $dato){
            if($dato=='NES'){
               $Des=$clave['Precio']/10;
               $clave['Precio']-=$Des;
            }else{
                $Des=$clave['Precio'];
            }
        }
    }
   foreach($inventario as $game => $key){
    foreach ($key as $date) {
        if($date==$key['Titulo']){
            echo "<br>El titulo del juego es: $date<br>";
        }elseif($date==$key['Consola']){
            echo "Salio en la consola: $date<br>";
        }elseif($date==$key['Año']){
            echo "Se lanzo en el año: $date<br>";
        }elseif ($date==$key['Precio']) {
            echo "Su precio es de: $$date<br>";
        }elseif($date==$key['Stock']){
            echo "Hay un stock de: $date<br>";
        }elseif ($date==$key['Estado']) {
            echo "Estado: $date<br>";
        }
    }
   }

//Ejercicio 7
?>
