<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root,adminSellerAccountList, nav bar , admin dashboard for seller controller,pagination,rating block -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link rel="stylesheet" href="./resources/css/adminSellerRatingDetails.css">
    <link rel="stylesheet" href="./resources/css/adminDashboardforSellerController.css">
    <link rel="stylesheet" href="./resources/css/ratingBlock.css">
    <link rel="stylesheet" href="./resources/css/reviewBox.css">


    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>Rating Details</title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar">
        <ul>
            <li><img src="./resources/img/logo.png" class="dessertHouseLogo" alt="Unable to load logo"></li>
            <li><a href="./adminSellerAccountList.php">Seller Controller</a></li>
            <li><a href="./userAccountList.php">User Controller</a></li>
            <li><a href="./adminHome.php">System Management</a></li>
            <li>
                <a href="./adminProfile.php"><img src="./resources/img/profilelogo.png" class="profileLogo" alt="Unable to load Profile Logo" srcset=""></a>
            </li>
        </ul>
    </nav>

    <!-- Dashboard for Seller Controller-->
    <div class="dashboard">
        <!-- Account Icon -->
        <div>
            <div class="icon">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                    <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                    <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                </svg>
                <p>Seller account list</p>
            </div>
        </div>

        <!-- Product Icon  -->
        <div>
            <div class="icon">
                <svg width="50" height="52" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_588_343)">
                        <path id="path1" d="M32.8125 0.294922L50 9.15031V28.8988L46.875 27.2888V12.7478L34.375 19.1881V25.6787L31.25 27.2888V19.1881L18.75 12.7478V18.4585L15.625 16.8485V9.15031L32.8125 0.294922ZM32.8125 16.3956L37.1338 14.1566L25.8301 7.48992L20.6787 10.1566L32.8125 16.3956ZM40.5029 12.4459L44.9463 10.1566L32.8125 3.89242L29.1748 5.77922L40.5029 12.4459ZM28.125 28.8988L25 30.5089V30.4837L15.625 35.3139V46.7605L25 41.9052V45.5278L14.0625 51.1631L0 43.8926V26.8862L14.0625 19.6409L28.125 26.8862V28.8988ZM12.5 46.7605V35.3139L3.125 30.4837V41.9052L12.5 46.7605ZM14.0625 32.5215L23.0713 27.8925L14.0625 23.2384L5.05371 27.8925L14.0625 32.5215ZM28.125 32.4963L39.0625 26.8611L50 32.4963V45.7542L39.0625 51.3895L28.125 45.7542V32.4963ZM37.5 46.987V39.314L31.25 36.0938V43.7668L37.5 46.987ZM46.875 43.7668V36.0938L40.625 39.314V46.987L46.875 43.7668ZM39.0625 36.5215L44.9463 33.4775L39.0625 30.4586L33.1787 33.4775L39.0625 36.5215Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_588_343">
                            <rect width="50" height="51.5222" fill="white" transform="translate(0 0.244141)" />
                        </clipPath>
                    </defs>
                </svg>
                <p>Seller Products</p>
            </div>
        </div>

        <!-- Generate Seller Icon -->
        <div>
            <div class="icon generate">
                <svg width="100" height="100" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path1" d="M7.33333 7.33398V11.0007H36.6667V7.33398M7.33333 12.834L5.5 22.0007V25.6673H7.33333V36.6673H23.8333C23.7417 36.044 23.6867 35.4023 23.6867 34.7423C23.6867 32.5057 24.3833 30.3057 25.6667 28.4723V25.6673H28.49C30.3233 24.439 32.4683 23.7607 34.6683 23.7607C35.97 23.7607 37.2717 23.999 38.5 24.4573V22.0007L36.6667 12.834M11 25.6673H22V33.0007H11M33 27.5007V33.0007H27.5V36.6673H33V42.1673H36.6667V36.6673H42.1667V33.0007H36.6667V27.5007" fill="white" />
                </svg>
                <p>Generate Seller Account</p>
            </div>
        </div>

        <!-- Rating Icon -->
        <div>
            <div class="icon">
                <svg width="50" height="52" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path1" d="M30.0623 21.6797L26.9998 11.2893C26.3956 9.24991 23.604 9.24991 23.0206 11.2893L19.9373 21.6797H10.6665C8.64565 21.6797 7.81231 24.3631 9.45815 25.5653L17.0415 31.1469L14.0623 41.0434C13.4581 43.0399 15.7081 44.65 17.3123 43.3834L24.9998 37.3725L32.6873 43.4049C34.2915 44.6715 36.5415 43.0614 35.9373 41.0649L32.9581 31.1683L40.5415 25.5868C42.1873 24.3631 41.354 21.7011 39.3331 21.7011H30.0623V21.6797Z" fill="white" />
                </svg>
                <p>Seller Rating Percentage</p>
            </div>
        </div>

        <!-- Feedback Icon -->
        <div>
            <div class="icon">
                <svg width="44" height="46" viewBox="0 0 44 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path1" d="M36.667 4.08203H7.33366C5.31699 4.08203 3.68533 5.78227 3.68533 7.86033L3.66699 41.865L11.0003 34.3084H36.667C38.6837 34.3084 40.3337 32.6082 40.3337 30.5301V7.86033C40.3337 5.78227 38.6837 4.08203 36.667 4.08203ZM23.8337 26.7518H20.167V22.9735H23.8337V26.7518ZM23.8337 19.1952H20.167V11.6386H23.8337V19.1952Z" fill="white" />
                </svg>
                <p>Feedbacks</p>
            </div>
        </div>
    </div>

    <!-- Back Bar -->
    <div class="back-bar">
        <div class="back-arrow">&lt;</div>
        <div class="back-text">Back</div>
    </div>

    <!-- Rating Block and satifactory Block -->
    <div class="ratingBlockAndSatisfactoryBlock">
        <div class="ratingBlock">
            <!-- Left Block (User rating percentage)-->
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>

        <!-- Right Block (Satifactory indicator) -->
        <div class="satisfactoryBlockContainer">

            <div class="textLine">
                <svg class="faces" width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.1875 15C27.1875 11.7677 25.9035 8.66774 23.6179 6.38214C21.3323 4.09654 18.2323 2.8125 15 2.8125C11.7677 2.8125 8.66774 4.09654 6.38214 6.38214C4.09654 8.66774 2.8125 11.7677 2.8125 15C2.8125 18.2323 4.09654 21.3323 6.38214 23.6179C8.66774 25.9035 11.7677 27.1875 15 27.1875C18.2323 27.1875 21.3323 25.9035 23.6179 23.6179C25.9035 21.3323 27.1875 18.2323 27.1875 15ZM0 15C0 11.0218 1.58035 7.20644 4.3934 4.3934C7.20644 1.58035 11.0218 0 15 0C18.9782 0 22.7936 1.58035 25.6066 4.3934C28.4196 7.20644 30 11.0218 30 15C30 18.9782 28.4196 22.7936 25.6066 25.6066C22.7936 28.4196 18.9782 30 15 30C11.0218 30 7.20644 28.4196 4.3934 25.6066C1.58035 22.7936 0 18.9782 0 15ZM10.4062 18.6387C11.2969 19.5996 12.8203 20.625 15 20.625C17.1797 20.625 18.7031 19.5996 19.5938 18.6387C20.1211 18.0703 21.0117 18.0293 21.5801 18.5566C22.1484 19.084 22.1895 19.9746 21.6621 20.543C20.373 21.9375 18.1465 23.4375 15.0059 23.4375C11.8652 23.4375 9.63281 21.9434 8.34961 20.543C7.82227 19.9746 7.85742 19.084 8.43164 18.5566C9.00586 18.0293 9.89062 18.0645 10.418 18.6387H10.4062ZM8.46094 12.1875C8.46094 11.6902 8.65848 11.2133 9.01011 10.8617C9.36174 10.51 9.83866 10.3125 10.3359 10.3125C10.8332 10.3125 11.3101 10.51 11.6618 10.8617C12.0134 11.2133 12.2109 11.6902 12.2109 12.1875C12.2109 12.6848 12.0134 13.1617 11.6618 13.5133C11.3101 13.865 10.8332 14.0625 10.3359 14.0625C9.83866 14.0625 9.36174 13.865 9.01011 13.5133C8.65848 13.1617 8.46094 12.6848 8.46094 12.1875ZM19.7109 10.3125C20.2082 10.3125 20.6851 10.51 21.0368 10.8617C21.3884 11.2133 21.5859 11.6902 21.5859 12.1875C21.5859 12.6848 21.3884 13.1617 21.0368 13.5133C20.6851 13.865 20.2082 14.0625 19.7109 14.0625C19.2137 14.0625 18.7367 13.865 18.3851 13.5133C18.0335 13.1617 17.8359 12.6848 17.8359 12.1875C17.8359 11.6902 18.0335 11.2133 18.3851 10.8617C18.7367 10.51 19.2137 10.3125 19.7109 10.3125Z" fill="#F8F8F8" />
                </svg>
                <span class="satisfactoryLevel">Customers Satisfactory 65-100%</span>
                <span>60</span>
            </div>

            <div class="textLine">
                <svg class="faces" width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.4998 2.91602C15.5847 2.91602 13.6884 3.29322 11.919 4.02611C10.1497 4.75899 8.54205 5.83319 7.18786 7.18738C4.45296 9.92228 2.9165 13.6316 2.9165 17.4993C2.9165 21.3671 4.45296 25.0764 7.18786 27.8113C8.54205 29.1655 10.1497 30.2397 11.919 30.9726C13.6884 31.7055 15.5847 32.0827 17.4998 32.0827C21.3676 32.0827 25.0769 30.5462 27.8118 27.8113C30.5467 25.0764 32.0832 21.3671 32.0832 17.4993C32.0832 15.5842 31.706 13.6879 30.9731 11.9185C30.2402 10.1492 29.166 8.54156 27.8118 7.18738C26.4576 5.83319 24.85 4.75899 23.0806 4.02611C21.3113 3.29322 19.4149 2.91602 17.4998 2.91602ZM17.4998 29.166C14.4056 29.166 11.4382 27.9369 9.25026 25.7489C7.06233 23.561 5.83317 20.5935 5.83317 17.4993C5.83317 14.4052 7.06233 11.4377 9.25026 9.24977C11.4382 7.06185 14.4056 5.83268 17.4998 5.83268C20.594 5.83268 23.5615 7.06185 25.7494 9.24977C27.9373 11.4377 29.1665 14.4052 29.1665 17.4993C29.1665 20.5935 27.9373 23.561 25.7494 25.7489C23.5615 27.9369 20.594 29.166 17.4998 29.166ZM12.3957 16.041C11.8155 16.041 11.2591 15.8105 10.8489 15.4003C10.4386 14.9901 10.2082 14.4337 10.2082 13.8535C10.2082 13.2734 10.4386 12.717 10.8489 12.3067C11.2591 11.8965 11.8155 11.666 12.3957 11.666C12.9758 11.666 13.5322 11.8965 13.9425 12.3067C14.3527 12.717 14.5832 13.2734 14.5832 13.8535C14.5832 14.4337 14.3527 14.9901 13.9425 15.4003C13.5322 15.8105 12.9758 16.041 12.3957 16.041ZM24.7915 13.8535C24.7915 14.4337 24.561 14.9901 24.1508 15.4003C23.7406 15.8105 23.1842 16.041 22.604 16.041C22.0238 16.041 21.4674 15.8105 21.0572 15.4003C20.647 14.9901 20.4165 14.4337 20.4165 13.8535C20.4165 13.2734 20.647 12.717 21.0572 12.3067C21.4674 11.8965 22.0238 11.666 22.604 11.666C23.1842 11.666 23.7406 11.8965 24.1508 12.3067C24.561 12.717 24.7915 13.2734 24.7915 13.8535ZM23.3332 20.416V23.3327H11.6665V20.416H23.3332Z" fill="#F8F8F8" />
                </svg>
                <span class="satisfactoryLevel">Customers Satisfactory 65-100%</span>
                <span>12</span>
            </div>

            <div class="textLine">
                <svg class="faces" width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.1665 17.4993C29.1665 14.4052 27.9373 11.4377 25.7494 9.24977C23.5615 7.06185 20.594 5.83268 17.4998 5.83268C14.4056 5.83268 11.4382 7.06185 9.25026 9.24977C7.06233 11.4377 5.83317 14.4052 5.83317 17.4993C5.83317 20.5935 7.06233 23.561 9.25026 25.7489C11.4382 27.9369 14.4056 29.166 17.4998 29.166C20.594 29.166 23.5615 27.9369 25.7494 25.7489C27.9373 23.561 29.1665 20.5935 29.1665 17.4993ZM32.0832 17.4993C32.0832 21.3671 30.5467 25.0764 27.8118 27.8113C25.0769 30.5462 21.3676 32.0827 17.4998 32.0827C15.5847 32.0827 13.6884 31.7055 11.919 30.9726C10.1497 30.2397 8.54205 29.1655 7.18786 27.8113C4.45296 25.0764 2.9165 21.3671 2.9165 17.4993C2.9165 13.6316 4.45296 9.92228 7.18786 7.18738C9.92277 4.45247 13.6321 2.91602 17.4998 2.91602C19.4149 2.91602 21.3113 3.29322 23.0806 4.02611C24.85 4.75899 26.4576 5.83319 27.8118 7.18738C29.166 8.54156 30.2402 10.1492 30.9731 11.9185C31.706 13.6879 32.0832 15.5842 32.0832 17.4993ZM22.604 11.666C23.7707 11.666 24.7915 12.6868 24.7915 13.8535C24.7915 15.0202 23.7707 16.041 22.604 16.041C21.4373 16.041 20.4165 15.0202 20.4165 13.8535C20.4165 12.6868 21.4373 11.666 22.604 11.666ZM14.5832 13.8535C14.5832 15.0202 13.5623 16.041 12.3957 16.041C11.229 16.041 10.2082 15.0202 10.2082 13.8535C10.2082 12.6868 11.229 11.666 12.3957 11.666C13.5623 11.666 14.5832 12.6868 14.5832 13.8535ZM17.4998 20.416C20.0519 20.416 22.2978 21.466 23.6103 23.0556L21.5394 25.1264C20.8832 24.0618 19.3228 23.3327 17.4998 23.3327C15.6769 23.3327 14.1165 24.0618 13.4603 25.1264L11.3894 23.0556C12.7019 21.466 14.9478 20.416 17.4998 20.416Z" fill="#F8F8F8" />
                </svg>
                <span class="satisfactoryLevel">Customers Satisfactory 65-100%</span>
                <span>30</span>
            </div>

        </div>
    </div>

    <!-- Review Box-->
    <div class="reviewBoxContainer">
        <!-- Left Upper user details -->
        <div class="userDetails">
            <div class="userProfile"></div>
            <div class="userNameandDate">
                <div class="userName">username</div>
                <div class="date">7 March 2023</div>
            </div>
        </div>
        <!-- Right upper face and message -->
        <div class="faceAndMessage">
            <svg class="face" width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 40C25.3043 40 30.3914 37.8929 34.1421 34.1421C37.8929 30.3914 40 25.3043 40 20C40 14.6957 37.8929 9.60859 34.1421 5.85786C30.3914 2.10714 25.3043 0 20 0C14.6957 0 9.60859 2.10714 5.85786 5.85786C2.10714 9.60859 0 14.6957 0 20C0 25.3043 2.10714 30.3914 5.85786 34.1421C9.60859 37.8929 14.6957 40 20 40ZM12.8203 25.4297C14.2188 27.0469 16.6094 28.75 20 28.75C23.3906 28.75 25.7812 27.0469 27.1797 25.4297C27.6328 24.9062 28.4219 24.8516 28.9453 25.3047C29.4688 25.7578 29.5234 26.5469 29.0703 27.0703C27.3281 29.0703 24.3047 31.25 20 31.25C15.6953 31.25 12.6719 29.0703 10.9297 27.0703C10.4766 26.5469 10.5312 25.7578 11.0547 25.3047C11.5781 24.8516 12.3672 24.9062 12.8203 25.4297ZM11.2812 16.25C11.2812 15.587 11.5446 14.9511 12.0135 14.4822C12.4823 14.0134 13.1182 13.75 13.7812 13.75C14.4443 13.75 15.0802 14.0134 15.549 14.4822C16.0179 14.9511 16.2812 15.587 16.2812 16.25C16.2812 16.913 16.0179 17.5489 15.549 18.0178C15.0802 18.4866 14.4443 18.75 13.7812 18.75C13.1182 18.75 12.4823 18.4866 12.0135 18.0178C11.5446 17.5489 11.2812 16.913 11.2812 16.25ZM26.2812 13.75C26.9443 13.75 27.5802 14.0134 28.049 14.4822C28.5179 14.9511 28.7812 15.587 28.7812 16.25C28.7812 16.913 28.5179 17.5489 28.049 18.0178C27.5802 18.4866 26.9443 18.75 26.2812 18.75C25.6182 18.75 24.9823 18.4866 24.5135 18.0178C24.0446 17.5489 23.7812 16.913 23.7812 16.25C23.7812 15.587 24.0446 14.9511 24.5135 14.4822C24.9823 14.0134 25.6182 13.75 26.2812 13.75Z" fill="#C22014" />
            </svg>
            <div class="messageAndText">
                <svg class="message" width="20" height="20" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.75 22.5003L21.3417 18.1128C22.5589 16.2433 22.9992 14.0295 22.5808 11.8829C22.1624 9.73624 20.9137 7.8029 19.0669 6.44233C17.2202 5.08176 14.901 4.38653 12.5406 4.48592C10.1802 4.5853 7.93918 5.47254 6.23427 6.98265C4.52937 8.49277 3.47656 10.523 3.27159 12.6959C3.06663 14.8688 3.72347 17.0364 5.11997 18.7958C6.51648 20.5552 8.55762 21.7866 10.8639 22.261C13.1702 22.7355 15.5846 22.4207 17.6583 21.3753L22.75 22.5003Z" stroke="#C22014" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="text">1</div>
            </div>
        </div>
        <!-- Comments -->
        <div class="comment">
            Went for the first time with friends. My wife and I shared the Calamari appetizer, Cesar Salad and the Seafood risotto. Service, atmosphere, and food were all top shelf. Manager checked on us himself. Highly recommend to any and all. Great Experience.
        </div>
    </div>

    <!-- Review Box with reply -->
    <div class="reviewBoxWithReplyContainer">
        <!-- Left Upper user details -->
        <div class="userDetails">
            <div class="userProfile"></div>
            <div class="userNameandDate">
                <div class="userName">username</div>
                <div class="date">7 March 2023</div>
            </div>
        </div>

        <!-- Right upper face and message -->
        <div class="faceAndMessage">
            <svg class="face" width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 40C25.3043 40 30.3914 37.8929 34.1421 34.1421C37.8929 30.3914 40 25.3043 40 20C40 14.6957 37.8929 9.60859 34.1421 5.85786C30.3914 2.10714 25.3043 0 20 0C14.6957 0 9.60859 2.10714 5.85786 5.85786C2.10714 9.60859 0 14.6957 0 20C0 25.3043 2.10714 30.3914 5.85786 34.1421C9.60859 37.8929 14.6957 40 20 40ZM12.8203 25.4297C14.2188 27.0469 16.6094 28.75 20 28.75C23.3906 28.75 25.7812 27.0469 27.1797 25.4297C27.6328 24.9062 28.4219 24.8516 28.9453 25.3047C29.4688 25.7578 29.5234 26.5469 29.0703 27.0703C27.3281 29.0703 24.3047 31.25 20 31.25C15.6953 31.25 12.6719 29.0703 10.9297 27.0703C10.4766 26.5469 10.5312 25.7578 11.0547 25.3047C11.5781 24.8516 12.3672 24.9062 12.8203 25.4297ZM11.2812 16.25C11.2812 15.587 11.5446 14.9511 12.0135 14.4822C12.4823 14.0134 13.1182 13.75 13.7812 13.75C14.4443 13.75 15.0802 14.0134 15.549 14.4822C16.0179 14.9511 16.2812 15.587 16.2812 16.25C16.2812 16.913 16.0179 17.5489 15.549 18.0178C15.0802 18.4866 14.4443 18.75 13.7812 18.75C13.1182 18.75 12.4823 18.4866 12.0135 18.0178C11.5446 17.5489 11.2812 16.913 11.2812 16.25ZM26.2812 13.75C26.9443 13.75 27.5802 14.0134 28.049 14.4822C28.5179 14.9511 28.7812 15.587 28.7812 16.25C28.7812 16.913 28.5179 17.5489 28.049 18.0178C27.5802 18.4866 26.9443 18.75 26.2812 18.75C25.6182 18.75 24.9823 18.4866 24.5135 18.0178C24.0446 17.5489 23.7812 16.913 23.7812 16.25C23.7812 15.587 24.0446 14.9511 24.5135 14.4822C24.9823 14.0134 25.6182 13.75 26.2812 13.75Z" fill="#C22014" />
            </svg>
            <!-- Though nothing in it, can't be deleted because other elements rely on these -->
            <div class="messageAndText">
                <div class="text"></div>
            </div>
        </div>

        <!-- Comments -->
        <div class="comment">
            Went for the first time with friends. My wife and I shared the Calamari appetizer, Cesar Salad and the Seafood risotto. Service, atmosphere, and food were all top shelf. Manager checked on us himself. Highly recommend to any and all. Great Experience.
        </div>

        <!--Separator -->
        <div class="separator"></div>

        <!-- For Seller Icons -->
        <div class="userDetails">
            <div class="userProfile"></div>
            <div class="userNameandDate">
                <div class="userName">sellername</div>
                <div class="date">8 March 2023</div>
            </div>
        </div>

        <!-- Reply -->
        <div class="reply">
            We really appreciate you taking the time to share your rating with us. We look forward to seeing you again soon.” </div>
    </div>


</body>

</html>