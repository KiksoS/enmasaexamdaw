<html>
    <head>
        <title>Evaluable 1 Docker</title>
        
    </head>
    <body>
        
            <?php
                echo "<h1>Enrique Magraner Sanchez</h1>";

                $conn = new PDO("mysql:host=db;dbname=db", "root", "root");
                $query = 'SELECT * FROM info';
                $stmt = $conn->query($query);

                echo '<table class="table table-striped">';
                while($value = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

            ?>
        
    </body>
</html>