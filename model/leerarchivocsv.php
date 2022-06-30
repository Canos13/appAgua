<?php
    
    $csv_file = "C:/xampp/htdocs/leercsv/archivos_csv\NIVEL_RIOS_DIA.csv";
    $csvfile = fopen($csv_file,'r');

    if( $csvfile !== FALSE){/* Apertura para sólo lectura; coloca el puntero al fichero al principio del fichero */
        $i = 0;
        while(!feof($csvfile)){  /* Comprueba si el puntero a un archivo está al final del archivo*/
            $csv_data = fgetcsv($csvfile,null,",");
            $numero = count($csv_data);

            echo "Datos ".$i." : ";
            for($j=0; $j<$numero; $j++){
                echo $csv_data[$j];
                echo " ||||| ";
            }
            $i++;
            echo "<br> <br/>";
        }
        echo "total de registros = ".$i;
    }else{
        echo "Archivo vacio";
    }

    fclose($csvfile);

?>