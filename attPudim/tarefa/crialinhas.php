<?php
    if($resultado->num_rows > 0){
        $numero = 5;
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $numero . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['email'] . "</td>";
                echo "<td>" . "<img class='img-fluid' src='" . $linha['imagem'] . "'></td>";
            echo "</tr>";
            $numero ++;
        }
    }
    else{
        echo "Nenhum resultado";
    }
?>