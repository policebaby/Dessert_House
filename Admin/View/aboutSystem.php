<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root, rating coin page-->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/aboutSystem.css">

    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>About System</title>
</head>

<body>

    <!-- include nav bar and systmen management dashboard  -->
    <?php include_once "./dashBoardAndNavForSystemManagement.php" ?>

    <!-- Add New Paragraph Button -->
    <button class="addNewParagraph">
        <svg width="20" height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 23C7.4875 23 3 18.5125 3 13C3 7.4875 7.4875 3 13 3C18.5125 3 23 7.4875 23 13C23 18.5125 18.5125 23 13 23ZM13 0.5C11.3585 0.5 9.73302 0.823322 8.21645 1.45151C6.69989 2.07969 5.3219 3.00043 4.16116 4.16116C1.81696 6.50537 0.5 9.68479 0.5 13C0.5 16.3152 1.81696 19.4946 4.16116 21.8388C5.3219 22.9996 6.69989 23.9203 8.21645 24.5485C9.73302 25.1767 11.3585 25.5 13 25.5C16.3152 25.5 19.4946 24.183 21.8388 21.8388C24.183 19.4946 25.5 16.3152 25.5 13C25.5 11.3585 25.1767 9.73302 24.5485 8.21645C23.9203 6.69989 22.9996 5.3219 21.8388 4.16116C20.6781 3.00043 19.3001 2.07969 17.7835 1.45151C16.267 0.823322 14.6415 0.5 13 0.5ZM14.25 6.75H11.75V11.75H6.75V14.25H11.75V19.25H14.25V14.25H19.25V11.75H14.25V6.75Z" fill="white" />
        </svg>
        <span>Add new Paragraph</span>
    </button>

    <!-- Receiver Options -->
    <select name="" id="" class="receiverOptions">
        <option value="">Our Team</option>
        <option value="">User</option>
        <option value="">Seller</option>
    </select>

    <!-- Greeting Letter Container -->
    <div class="greetingLetterContainer">
        <div class="greetingTitle">Greeting Letter</div>
        <div>Title</div>
        <input type="text">
        <div>Description</div>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>

    <!-- Our Team Container -->
    <div class="ourTeamContainer">
        <div class="ourTeamTitle">Our Team</div>

        <!-- Want to use display flex to join left and right side -->
        <div class="leftSideAndRightSide">
            <div class="leftSide">
                <div class="profilePic"></div>
                <div class="buttons">
                    <button>Choose file</button>
                    <button>Nofile chosen</button>
                </div>
            </div>

            <div class="rightSide">
                <div>Title</div>
                <input type="text">
                <div>Description</div>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <!-- Delete Button -->
        <button class="deleteButton">
                <svg width="22" height="22" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.59375 8.59375C8.80095 8.59375 8.99966 8.67606 9.14618 8.82257C9.29269 8.96909 9.375 9.1678 9.375 9.375V18.75C9.375 18.9572 9.29269 19.1559 9.14618 19.3024C8.99966 19.4489 8.80095 19.5312 8.59375 19.5312C8.38655 19.5312 8.18784 19.4489 8.04132 19.3024C7.89481 19.1559 7.8125 18.9572 7.8125 18.75V9.375C7.8125 9.1678 7.89481 8.96909 8.04132 8.82257C8.18784 8.67606 8.38655 8.59375 8.59375 8.59375ZM12.5 8.59375C12.7072 8.59375 12.9059 8.67606 13.0524 8.82257C13.1989 8.96909 13.2812 9.1678 13.2812 9.375V18.75C13.2812 18.9572 13.1989 19.1559 13.0524 19.3024C12.9059 19.4489 12.7072 19.5312 12.5 19.5312C12.2928 19.5312 12.0941 19.4489 11.9476 19.3024C11.8011 19.1559 11.7188 18.9572 11.7188 18.75V9.375C11.7188 9.1678 11.8011 8.96909 11.9476 8.82257C12.0941 8.67606 12.2928 8.59375 12.5 8.59375ZM17.1875 9.375C17.1875 9.1678 17.1052 8.96909 16.9587 8.82257C16.8122 8.67606 16.6135 8.59375 16.4062 8.59375C16.199 8.59375 16.0003 8.67606 15.8538 8.82257C15.7073 8.96909 15.625 9.1678 15.625 9.375V18.75C15.625 18.9572 15.7073 19.1559 15.8538 19.3024C16.0003 19.4489 16.199 19.5312 16.4062 19.5312C16.6135 19.5312 16.8122 19.4489 16.9587 19.3024C17.1052 19.1559 17.1875 18.9572 17.1875 18.75V9.375Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6562 4.6875C22.6562 5.1019 22.4916 5.49933 22.1986 5.79235C21.9056 6.08538 21.5082 6.25 21.0938 6.25H20.3125V20.3125C20.3125 21.1413 19.9833 21.9362 19.3972 22.5222C18.8112 23.1083 18.0163 23.4375 17.1875 23.4375H7.8125C6.9837 23.4375 6.18884 23.1083 5.60279 22.5222C5.01674 21.9362 4.6875 21.1413 4.6875 20.3125V6.25H3.90625C3.49185 6.25 3.09442 6.08538 2.8014 5.79235C2.50837 5.49933 2.34375 5.1019 2.34375 4.6875V3.125C2.34375 2.7106 2.50837 2.31317 2.8014 2.02015C3.09442 1.72712 3.49185 1.5625 3.90625 1.5625H9.375C9.375 1.1481 9.53962 0.750671 9.83265 0.457646C10.1257 0.16462 10.5231 0 10.9375 0L14.0625 0C14.4769 0 14.8743 0.16462 15.1674 0.457646C15.4604 0.750671 15.625 1.1481 15.625 1.5625H21.0938C21.5082 1.5625 21.9056 1.72712 22.1986 2.02015C22.4916 2.31317 22.6562 2.7106 22.6562 3.125V4.6875ZM6.43437 6.25L6.25 6.34219V20.3125C6.25 20.7269 6.41462 21.1243 6.70765 21.4174C7.00067 21.7104 7.3981 21.875 7.8125 21.875H17.1875C17.6019 21.875 17.9993 21.7104 18.2924 21.4174C18.5854 21.1243 18.75 20.7269 18.75 20.3125V6.34219L18.5656 6.25H6.43437ZM3.90625 4.6875V3.125H21.0938V4.6875H3.90625Z" fill="white" />
                </svg>
                <div>Delete</div>
            </button>
    </div>

    <button class="saveButton">Save</button>





</body>

</html>