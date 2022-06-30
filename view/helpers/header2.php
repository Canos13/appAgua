    <div class="container">
        <header>
            <h2>Navegacion</h2>

            <?php
                /* Optine la pagina acutual*/
                $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

                /* para la pahina de inicio */
                $pinicio = "http://localhost/leercsv/";
                if($url_actual == $pinicio){
                    echo '<a href="index.php">Home </a>';
                }else{
                    echo '<a href="http://localhost/leercsv/">Home </a>';
                }

                /* para las consultas a la base de datos */
                $paginaconsulta = "http://localhost/leercsv/view/helpers/tablasdebd_page.php";
                if($url_actual == $paginaconsulta){
                    echo '<a href="tablasdebd_page.php">Consultar DB </a>';
                }else{
                    echo '<a href="http://localhost/leercsv/view/helpers/tablasdebd_page.php">Consultar DB </a>';
                }

                /* para guardar en la base de datos*/
                $pgardarenbd = "http://localhost/leercsv/view/helpers/guardaenbd_page.php";
                if($url_actual == $pgardarenbd){
                    echo '<a href="guardaenbd_page.php">Subir datos</a>';
                }else{
                    echo '<a href="http://localhost/leercsv/view/helpers/guardaenbd_page.php">Subir datos</a>';
                }

                /* informacion de la pagina acerva de nosotros */
                $pacerdade = "http://localhost/leercsv/view/helpers/acerdade_page.php";
                if($url_actual == $pacerdade){
                    echo '<a href="acercade_page.php">Acerca de </a>';
                }else{
                    echo '<a href="http://localhost/leercsv/view/helpers/acercade_page.php">Acerca de </a>';
                }
            ?>
        </header>
    </div>