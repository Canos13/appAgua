<?php

    $csv_file = "C:/xampp/htdocs/leercsv/archivos_csv\NIVEL_RIOS_DIA.csv";
    $csvfile = fopen($csv_file,'r');

    if( $csvfile !== FALSE){
        $i = 0;

        echo '<table id="example" class="table table-striped table-bordered" style="width:100%">';

        while(!feof($csvfile)){
            $csv_data = fgetcsv($csvfile,null,",");
            $numero = count($csv_data);
            
            if($i == 0){
                echo '<thead>';
                    echo '<tr>';
                        for($j=0; $j<$numero; $j++){
                            echo '<th>'.$csv_data[$j].'</th>';
                        }
                    echo '</tr>';
                echo '</thead>';
            }
            if($i==1){
                echo '<tbody>';
            }
            if($i>0){
                    echo '<tr>';
                        for($j=0; $j<$numero; $j++){
                            echo '<td>'.$csv_data[$j].'</td>';
                        }
                    echo '</tr>';
                
            }

            $i++;
        }
        echo '</tbody>';
        echo '</table>';
        echo "total de registros = ".$i;

    }else{
        echo "Archivo vacio";

    }

    fclose($csvfile);
?>