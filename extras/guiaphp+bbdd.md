#Guía para conectar PHP copn servidor de bbdd

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

