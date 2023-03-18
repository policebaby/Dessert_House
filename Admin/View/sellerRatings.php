<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root,adminSellerAccountList, nav bar , admin dashboard for seller controller,rating block -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link rel="stylesheet" href="./resources/css/sellerRatings.css">
    <link rel="stylesheet" href="./resources/css/adminDashboardforSellerController.css">
    <link rel="stylesheet" href="./resources/css/ratingBlock.css">


    <!-- Import google fonts: public display & dm sen serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Public+Sans&display=swap" rel="stylesheet">

    <title>Seller Ratings</title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar">
        <ul>
            <li><img src="./resources/img/logo.png" class="dessertHouseLogo" alt="Unable to load logo"></li>
            <li><a href="">Seller Controller</a></li>
            <li><a href="">User Controller</a></li>
            <li><a href="">System Management</a></li>
            <li>
                <img src="./resources/img/profilelogo.png" class="profileLogo" alt="Unable to load Profile Logo" srcset="">
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

    <!-- Blocks Start -->
    <div class="blocks">

        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>

        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>

        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>

        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>

        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>

        <div class="ratingBlock">
            <div class="iconAndShopName">
                <!-- Account Icon -->
                <div>
                    <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M30.5615 24.0723C33.0732 25.7773 34.8332 28.0873 34.8332 31.1673V36.6673H42.1665V31.1673C42.1665 27.1706 35.6215 24.8056 30.5615 24.0723Z" fill="white" />
                            <path id="path1" d="M16.5003 22.0007C20.5504 22.0007 23.8337 18.7174 23.8337 14.6673C23.8337 10.6172 20.5504 7.33398 16.5003 7.33398C12.4502 7.33398 9.16699 10.6172 9.16699 14.6673C9.16699 18.7174 12.4502 22.0007 16.5003 22.0007Z" fill="white" />
                            <path id="path1" fill-rule="evenodd" clip-rule="evenodd" d="M27.4997 22.0007C31.5513 22.0007 34.833 18.719 34.833 14.6673C34.833 10.6157 31.5513 7.33398 27.4997 7.33398C26.638 7.33398 25.8313 7.51732 25.0613 7.77398C26.639 9.72505 27.4996 12.1582 27.4996 14.6673C27.4996 17.1764 26.639 19.6096 25.0613 21.5607C25.8313 21.8173 26.638 22.0007 27.4997 22.0007ZM16.4997 23.834C11.6047 23.834 1.83301 26.2907 1.83301 31.1673V36.6673H31.1663V31.1673C31.1663 26.2907 21.3947 23.834 16.4997 23.834Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="shopName">Frost Goddess</div>
            </div>
            <div class="percent">75%</div> <span>Rating</span>
        </div>
    </div>

    <!-- Blocks Finish -->

</body>

</html>