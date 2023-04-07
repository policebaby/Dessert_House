<?php



// Check if data was sent using the POST method
if (isset($_POST["shopId"])) {
    session_start();

    // Get the data that was sent in the AJAX request
    $shopId = $_POST['shopId'];
    $userId=$_SESSION["userId"];

    include "../Model/dbConnection.php";
    $db= new DBConnection();
    $pdo=$db->connect();

    $sql=$pdo->prepare("SELECT T_review.user_review, m_user.user_name,m_user.user_profilepic,T_review.create_date
    FROM T_review
    INNER JOIN m_user ON T_review.user_id = m_user.user_id
    WHERE T_review.shop_id = :shopId AND T_review.user_id = :userId");
    
    $sql->bindValue(":shopId",$shopId);
    $sql->bindValue(":userId",$userId);
    $sql->execute();
    $reviewResult=$sql->fetchall(PDO::FETCH_ASSOC);

    echo json_encode($reviewResult);

    

}
