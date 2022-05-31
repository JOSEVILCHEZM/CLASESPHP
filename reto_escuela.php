<?php 

$escuela = array(
    array(
        "Nombre" => "JoseJ",
        "Ocupación"=> "Developer",
        "Laptop" => "Asus", 
        "CursosFavoritos" => array(
            "Favoritos" => "Algebra, Estadistica",
            "NoFavoritos" => "Historia, Literatura", 

         )

    ),
    
    array(
        "Nombre" => "JoseR",
        "Ocupación"=> "Developer2",
        "Laptop" => "Lenovo", 
        "CursosFavoritos" => array(
            "Favoritos" => "Algebra2, Estadistica2",
            "NoFavoritos" => "Historia2, Literatura2", 

         )

    ),
    
    array(
        "Nombre" => "JoseV",
        "Ocupación"=> "Developer3",
        "Laptop" => "Acer", 
        "CursosFavoritos" => array(
            "Favoritos" => "Algebra3, Estadistica3",
            "NoFavoritos" => "Historia3, Literatura3", 

         )

    ),

);

//OBTENER EL curso FAVORITO DE JOSER

//$JoseJ = $escuela[0];
//echo "LOS CURSO FAVORITOS DE JOSER SON " . $JoseJ['CursosFavoritos']['Favoritos'];

$JoseV = $escuela[2];
echo "LA LAPTOP DE JOSEV ES DE LA MARCA " . $JoseV["Laptop"];

echo"\n"; 
