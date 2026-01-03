<?php
function getNotas(PDO $pdo):array|bool{
    $sql =
    "
    SELECT id, texto
    FROM notas
    "
    ;
    try{
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
        
        echo "ERROR: " . $e->getMessage();
        
        return false;
       
        
    }
}

?>