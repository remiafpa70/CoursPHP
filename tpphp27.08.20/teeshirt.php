<?php
echo '<table border="1"><tr>';
for($i = 1; $i < 101; $i++) //ligne est à zéro
{
    if($i % 10 == 1)
    {
        echo '</tr>';
    }
    echo '<td>' . $i . '</td>';
}
echo '</table>';