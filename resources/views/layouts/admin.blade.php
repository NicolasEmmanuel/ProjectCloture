<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ************* CSS **************** -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- **********Boxicons CSS ************** -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">


    <title>Dasboard Sidebar Menu  Dark-Light Mode</title>
</head>
<body>
    <nav class="sidebar">
        <header>
           <div class="image-text">
               <span class="image">
                 <img src="images/logo.png" alt="logo">  
               </span>


              <div class="text header-text">
                   <span class="name">Visual Conception</span>
                   <span class="profession">Admin</span>
               </div>
           </div> 
           <i class="bx bx-chevron-right toggle"></i>

            <!-- <box-icon name='chevron-right' type='solid' ></box-icon> -->

        </header> 

       <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="search" placeholder="Search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon" ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('admin-blog-lister') }}">
                            <i class="bx bx-bar-chart-alt-2 icon" ></i>
                            <span class="text nav-text">Blogs</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bell icon" ></i>
                            <span class="text nav-text">Teams</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('auth-formation') }}">
                            <i class="bx bx-pie-chart-alt icon" ></i>
                            <span class="text nav-text">Formations</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('admin-user') }}">
                            <i class="bx bx-heart icon" ></i>
                            <span class="text nav-text">Utilisateurs</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-wallet icon" ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul> 
            </div>
            
            <div class="bottom-content">
                <li class="nav-link">
                    <a href="{{ route('logout')}}">
                        <i class="bx bx-log-out icon" ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon" ></i>
                        <i class="bx bx-sun icon sun" ></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>

    <section class="home">
        @yield('content')
    </section>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>

