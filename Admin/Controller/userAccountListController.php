<?php

session_start();

include "../Model/dbConnection.php";

$db = new DBConnection();
$pdo = $db->connect();

// Set up Pagination variables
$perPage = 10;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$startPage = max(1, $currentPage - 1);
$endPage = $startPage + 2;

$sql = $pdo->prepare("SELECT * FROM m_user");
$sql->execute();
$totalPages = ceil(count($sql->fetchall(PDO::FETCH_ASSOC)) / $perPage);


// Set current page to first page if not set in URL
if (!isset($_GET['page'])) {
    $currentPage = 1;
}

// Build pagination links HTML
$paginationLinks = '';
if ($currentPage > 1) {
    // < 箭头返回上一页, 如果当前页面是第一页的话 则不显示 <
    $paginationLinks .= '<li><a class="arrowToRed" href="?page=' . ($currentPage - 1) . '">&lt;</a><li>';
}
// 如果开始页面大于1的话, 则会显示1
if ($startPage > 1) {
    $paginationLinks .= '<li><a href="?page=1">1</a></li>';
    //以上代码显示1后, 开始页面大于2的话则会显示 ..., 所以是 <1...
    if ($startPage > 2) {
        $paginationLinks .= '<li><a href="">...</a></li>';
    }
}

//  This line initializes a for loop that will iterate through a range of page numbers between $startPage and $endPage, but not more than the total number of pages $totalPages.
// 这行代码生成 开始页和终止页, 开始页不是指1, 是指当前页面的前页, 终止页是指当前页面的后页 
for ($i = $startPage; $i <= $endPage && $i <= $totalPages; $i++) {
    if ($i == $currentPage) {
        $paginationLinks .= '<li><a class="current">' . $i . '</a></li>';
    } else {
        $paginationLinks .= '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
    }
}

//如果终止页小于总页的话运行下面的代码
if ($endPage < $totalPages) {
    // 如果终止页 小于总页-1 的话显示 ...
    if ($endPage < $totalPages - 1) {
        $paginationLinks .= '<li><a>...</a></li>';
    }
    //不管怎么都会显示最后那页, 以总页的号数代替
    $paginationLinks .= '<li><a href="?page=' . $totalPages . '">' . $totalPages . '</a></li>';
}

// > 显示下一页, 如果当前页小于总页则会显示 > 代表去下一页
if ($currentPage < $totalPages) {
    $paginationLinks .= '<li><a class="arrowToRed" href="?page=' . ($currentPage + 1) . '">&gt;</a></li>';
}

// Get data from MySQL database and display results
$offset = ($currentPage - 1) * $perPage;
$paginationSql=$pdo->prepare("SELECT * FROM m_user LIMIT $perPage OFFSET $offset");
$paginationSql->execute();
$userListResult=$paginationSql->fetchall(PDO::FETCH_ASSOC);


// $sql = $pdo->prepare("SELECT * FROM m_user");
// $sql->execute();

// $userListResult = $sql->fetchall(PDO::FETCH_ASSOC);
$_SESSION["userListResult"] = $userListResult;


// To get the total reviews given
$userIds = [];
$userReviews = [];

for ($i = 0; $i < count($userListResult); $i++) {
    array_push($userIds, $userListResult[$i]["user_id"]);
}

for ($i = 0; $i < count($userIds); $i++) {
    $reviewSql = $pdo->prepare("SELECT * FROM t_review WHERE user_id=:userId");
    $reviewSql->bindValue(":userId", $userIds[$i]);
    $reviewSql->execute();
    $eachUserReview = $reviewSql->fetchAll(PDO::FETCH_ASSOC);
    array_push($userReviews, $eachUserReview);
}
$_SESSION["userReviews"] = $userReviews;

// To know each user spent amount,this SQL query retrieves the total spent amount for each user from two tables: m_user and t_Order.
$amtSql = $pdo->prepare("SELECT u.user_id, IFNULL(SUM(o.grand_total),0) AS total_spent 
FROM m_user u
LEFT JOIN t_order o ON u.user_id = o.user_id
GROUP BY u.user_id");
$amtSql->execute();
$allUsersSpentTotal = $amtSql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["allUsersSpentTotal"] = $allUsersSpentTotal;
