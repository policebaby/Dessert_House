<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link with CSS root,userAccountList, nav bar , admin dashboard for user controller-->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link rel="stylesheet" href="./resources/css/adminDashboardforUserController.css">
    <link rel="stylesheet" href="./resources/css/userAccountList.css">


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

    <!-- Dashboard for User Controller-->
    <div class="dashboard">
        <!-- User Account Icon -->
        <div>
            <div class="icon">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_826_559)">
                        <path id="path1" d="M24.7507 13.7508C24.7507 13.3862 24.8956 13.0364 25.1534 12.7786C25.4113 12.5207 25.761 12.3758 26.1257 12.3758H42.6257C42.9904 12.3758 43.3401 12.5207 43.598 12.7786C43.8558 13.0364 44.0007 13.3862 44.0007 13.7508C44.0007 14.1155 43.8558 14.4652 43.598 14.7231C43.3401 14.981 42.9904 15.1258 42.6257 15.1258H26.1257C25.761 15.1258 25.4113 14.981 25.1534 14.7231C24.8956 14.4652 24.7507 14.1155 24.7507 13.7508ZM42.6257 20.6258H26.1257C25.761 20.6258 25.4113 20.7707 25.1534 21.0286C24.8956 21.2864 24.7507 21.6362 24.7507 22.0008C24.7507 22.3655 24.8956 22.7152 25.1534 22.9731C25.4113 23.231 25.761 23.3758 26.1257 23.3758H42.6257C42.9904 23.3758 43.3401 23.231 43.598 22.9731C43.8558 22.7152 44.0007 22.3655 44.0007 22.0008C44.0007 21.6362 43.8558 21.2864 43.598 21.0286C43.3401 20.7707 42.9904 20.6258 42.6257 20.6258ZM42.6257 28.8758H30.2507C29.886 28.8758 29.5363 29.0207 29.2784 29.2786C29.0206 29.5364 28.8757 29.8862 28.8757 30.2508C28.8757 30.6155 29.0206 30.9652 29.2784 31.2231C29.5363 31.481 29.886 31.6258 30.2507 31.6258H42.6257C42.9904 31.6258 43.3401 31.481 43.598 31.2231C43.8558 30.9652 44.0007 30.6155 44.0007 30.2508C44.0007 29.8862 43.8558 29.5364 43.598 29.2786C43.3401 29.0207 42.9904 28.8758 42.6257 28.8758ZM18.7849 24.4071C20.1495 23.356 21.151 21.9041 21.6487 20.2551C22.1465 18.6061 22.1156 16.8427 21.5604 15.2121C21.0053 13.5815 19.9537 12.1656 18.5531 11.1629C17.1525 10.1602 15.4732 9.62109 13.7507 9.62109C12.0282 9.62109 10.3489 10.1602 8.94831 11.1629C7.54773 12.1656 6.49611 13.5815 5.94094 15.2121C5.38578 16.8427 5.35491 18.6061 5.85267 20.2551C6.35042 21.9041 7.35184 23.356 8.71647 24.4071C5.17241 25.9076 2.37944 28.9274 1.41866 32.6571C1.36619 32.8603 1.36094 33.0729 1.40332 33.2785C1.44571 33.4841 1.5346 33.6772 1.66318 33.8431C1.79176 34.009 1.95663 34.1433 2.14513 34.2356C2.33364 34.328 2.54079 34.3759 2.75069 34.3758H24.7507C24.9606 34.3759 25.1677 34.328 25.3563 34.2356C25.5448 34.1433 25.7096 34.009 25.8382 33.8431C25.9668 33.6772 26.0557 33.4841 26.0981 33.2785C26.1404 33.0729 26.1352 32.8603 26.0827 32.6571C25.1219 28.9257 22.329 25.9058 18.7849 24.4071Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_826_559">
                            <rect width="44" height="44" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p>User account list</p>
            </div>
        </div>

        <!-- User Review Icon  -->
        <div>
            <div class="icon">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path1" d="M19.2493 25.666H32.9993V21.9994H22.916L19.2493 25.666ZM10.9993 25.666H15.491L26.3077 14.941C26.491 14.7577 26.5827 14.5285 26.5827 14.2535C26.5827 13.9785 26.491 13.7494 26.3077 13.566L23.0993 10.3577C22.916 10.1744 22.6868 10.0827 22.4118 10.0827C22.1369 10.0827 21.9077 10.1744 21.7243 10.3577L10.9993 21.1744V25.666ZM3.66602 40.3327V7.33269C3.66602 6.32435 4.02535 5.46085 4.74402 4.74219C5.46268 4.02352 6.32557 3.6648 7.33268 3.66602H36.666C37.6744 3.66602 38.5378 4.02535 39.2565 4.74402C39.9752 5.46269 40.3339 6.32557 40.3327 7.33269V29.3327C40.3327 30.341 39.9734 31.2045 39.2547 31.9232C38.536 32.6419 37.6731 33.0006 36.666 32.9994H10.9993L3.66602 40.3327Z" fill="white" />
                </svg>
                <p>User Review</p>
            </div>
        </div>
    </div>

    <!-- Table  -->
    <div class="container">
        <h2 class="title">User Account List</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Registered Date</th>
                        <th>Reviews Given</th>
                        <th>Amt Spent</th>
                        <th>Status</th>
                        <th>Contact Info</th>
                        <th>None</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="No">1</td>
                        <td data-label="Id">001</td>
                        <td data-label="Email">davidcallaway1993@gmail.com</td>
                        <td data-label="Name">David Callaway</td>
                        <td data-label="Registered Date">2023/03/01</td>
                        <td data-label="Reviews Given"><a href="">4</a></td>
                        <td data-label="Amt Spent"><b>$ 820</b></td>
                        <td data-label="Status">Active</td>
                        <td data-label="Contact Info">+95 9333333333</td>
                        <td data-label="Buttons"><button class="btn activate">Activate</button><button class="btn disable">Disable</button></td>
                    </tr>
                    <tr>
                        <td data-label="No">1</td>
                        <td data-label="Id">001</td>
                        <td data-label="Email">davidcallaway1993@gmail.com</td>
                        <td data-label="Name">David Callaway</td>
                        <td data-label="Registered Date">2023/03/01</td>
                        <td data-label="Reviews Given"><a href="">4</a></td>
                        <td data-label="Amt Spent"><b>$ 820</b></td>
                        <td data-label="Status">Active</td>
                        <td data-label="Contact Info">+95 9333333333</td>
                        <td data-label="Buttons"><button class="btn activate">Activate</button><button class="btn disable">Disable</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>