<?php ini_set("display_errors", "1");
session_start();
include "../Model/dbConnection.php";


if (isset($_POST["book"])) {
    $seat_name = $_SESSION['seat_name'];
    $username = $_POST['username'];
    $userid = $_SESSION["userID"];
    $phone = $_POST['phone'];
    $r_date = $_POST['r_date'];
    $r_time = $_POST['r_time'];
    $person_count = $_POST["inlineRadioOptions"];

echo $seat_name;
    // print_r($seat_name) ;
    echo $username,$phone,$r_date,$r_time,$person_count;


$db = new DBConnection();
    $pdo = $db->connect();
    $sql = $pdo->prepare(
        " UPDATE m_reservation_form SET
            status = 0,
            user_id = :userid,
            user_name = :username,
            phone = :phone,
            date = :r_date,
            time = :r_time,
            person = :person_count,
            create_date = :createDate WHERE seat_name = :seat_name;"
        );

        $sql->bindValue(":seat_name", $seat_name);
        $sql->bindValue(":userid", $userid);
        $sql->bindValue(":username", $username);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":r_date", $r_date);
        $sql->bindValue(":r_time", $r_time);
        $sql->bindValue(":person_count", $person_count);
        $sql->bindValue(":createDate", date('y-m-d'));
        $sql->execute();

    header("Location: ../View/reservationForm.php");

  }else{
    header("Location: ../View/seat_selection.php");
}
















?>


