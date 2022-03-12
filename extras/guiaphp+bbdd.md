# Guía para conectar PHP copn servidor de bbdd

1. Conexión a server + selección de base
2. Creación de mensaje SQL
3. Ejecución de mensaje SQL
4. Informes (muestreo de datos en pantalla)


## 1. Conexión a server + selección de base

        $link = mysqli_connect(  
                'localhost',  
                'root',  
                'root',  
                'catalogo2020'  
            );  

# 2. Creación de mensaje SQL

    $sql = "SELECT .....";  

# 3. Ejecución de mensaje SQL

    $resultado = mysqli_query( $link, $sql );   

# 4. Informes (muestreo de datos en pantalla)

    // función auxiliar  mysqli_fetch_assoc()

    while( $fila = mysqli_fetch_assoc( $resultado ) )  
    {  
        echo $fila['idMarca'], ' ';  
        echo $fila['mkNombre'], '<br>';  
    }  

