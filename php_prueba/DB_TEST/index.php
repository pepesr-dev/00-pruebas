<?php



require_once __DIR__ . "/functions/dbconn.php";
require_once __DIR__ . "/functions/dao.php";


$pdo = connectDB();

$notas = getNotas($pdo);

echo "INDEX <BR>";


?>
<br>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>notas</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($notas as $nota):?>
        <tr>
            <td><?php echo $nota['id']?></td>
            <td><?php echo $nota['texto']?></td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br>

<a href="../index.php">inicio</a>