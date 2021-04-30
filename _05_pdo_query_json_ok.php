<?php
try {
    // chnage to  your dbname
    $dbname = "proj";
    $user = "root";
    $password ="root";
    
    $dsn = sprintf('mysql:host=localhost; port=8889; dbname=%s; charset=utf8',$dbname);
    $pdo = new PDO ( $dsn, $user, $password, array (
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ) );
    $sql = "SELECT b.bookID, b.title, b.author, b.price, b.bookNo, bc.name "
        . " FROM book b JOIN bookcompany bc on b.CompanyID = bc.id "
        . " WHERE b.price > 500";
        $pdoStmt = $pdo->query ( $sql );
        $arr2D = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($arr2D);
        
        
} catch ( PDOException $ex ) {
    echo "發生資料庫存取錯誤，訊息:" . $ex->getMessage () . "<br>";
}
?>
