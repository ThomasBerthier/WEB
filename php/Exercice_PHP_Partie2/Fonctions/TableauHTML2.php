<?php

    function Tableau($Titre1,$Titre2,$Titre3) {
        
            ?><table>
                <tr>
                <?php echo"<th>$Titre1</th>";?>
                    <td>Case 1</td>
                    <td>Case 2</td>
                </tr>
                <tr>
                <?php echo"<th>$Titre2</th>";?>
                    <td>Case 3</td>
                    <td>Case 4</td>
                </tr>
                <tr>
                <?php echo"<th>$Titre3</th>";?>
                    <td>Case 5</td>
                    <td>Case 6</td>
                </tr>
            </table><?php
    }
?>