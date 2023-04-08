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

    $sql=$pdo->prepare("SELECT t_review.user_review, m_user.user_name,m_user.user_profilepic,t_review.create_date
    FROM t_review
    INNER JOIN m_user ON t_review.user_id = m_user.user_id
    WHERE t_review.shop_id = :shopId AND t_review.user_id = :userId");
    
    $sql->bindValue(":shopId",$shopId);
    $sql->bindValue(":userId",$userId);
    $sql->execute();
    $reviewResult=$sql->fetchall(PDO::FETCH_ASSOC);

    echo json_encode($reviewResult);

    

}
