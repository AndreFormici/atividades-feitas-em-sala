<?php
    if($resultado->num_rows > 0){
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['sobrenome'] . "</td>";
            echo "</tr>";
        }
    }
    else{
        echo "Nenhum resultado";
    }
?>