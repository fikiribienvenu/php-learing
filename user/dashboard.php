<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miltary CCS || User || Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/hll.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- side bar-->
 <section id="sidebar">
<a href="#" class="brand"> <img src="../images/logo.png" alt="RDF logo" style="width:60px;height:55px;">Miltary CCS</a>
<ul class="side-menu">
<li><a href="#" class="active"><i class='bx bxs-dashboard icon'></i>Dashboard</a></li>
<li class="divider" data-text="main">Main</li>

<li>
    <a href="#"><i class='bx bx-task icon'></i>Mission<i class='bx bx-chevron-right icon-right' ></i></a>
    <ul class="side-dropdown">
        <li><a href="#">View All</a></li>
        
    </ul>
</li>
<li>
    <a href="#"><i class='bx bx-user icon'></i>Soldier<i class='bx bx-chevron-right icon-right' ></i></a>
    <ul class="side-dropdown">
        <li><a href="#">Select </a></li>
        <li><a href="#">View All</a></li>
        
    </ul>
</li>
<li>
    <a href="#"><i class='bx bx-cog icon'></i>Tools<i class='bx bx-chevron-right icon-right' ></i></a>
    <ul class="side-dropdown">
        <li><a href="#">Select </a></li>
        <li><a href="#">View All</a></li>
        
    </ul>
</li>

<li>
    <a href="#"><i class='bx bx-notepad icon'></i>Form<i class='bx bx-chevron-right icon-right' ></i></a>
    <ul class="side-dropdown">
        <li><a href="#">report</a></li>
        <li><a href="#">Select</a></li>
        
    </ul>
</li>
</ul>
<div class="ads">
    <div class="wrapper">
        <a href="#" class="btn-upgrade">Upgrade</a>
        
    </div>
</div>
 </section>
 <!-- End of side bar section -->

 <!-- NavBar Section -->
 <section id="content">
<nav>
<i class='bx bx-menu toggle-sidebar'></i>
<form action="#">
    <div class="form-group ">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search icon' ></i>
    </div>
</form>
<a href="" class="nav-link">
<i class='bx bxs-bell icon' ></i>
<span class="badge">5</span>
</a>
<a href="" class="nav-link">
<i class='bx bx-message-dots icon' ></i>
<span class="badge">8</span>
</a>
<span class="divider">
    <div class="profile">
        <img src="../images/profile-pic.JPG" 
        alt="">
        <ul class="profile-link">
            <li><a href="#"><i class='bx bxs-user-circle icon' ></i>Profile</a></li>
            <li><a href="#"><i class='bx bxs-cog icon'></i>Setting</a></li>
            <li><a href="logout.php"><i class='bx bx-log-out icon' ></i></i>Logout</a></li>
        </ul>
    </div>
</span>
</nav>
<!-- Main - nav -->
<main>
    <h1 class="title">Dashboard</h1>
    <ul class="breadcrumbs">
        <li><a href="#">Home</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Dashboard</a></li>
    </ul>
    <div class="info-data">
        
        <div class="card">
            <div class="head">
                <div>
                    <h2>324</h2>
                    <p>Mission</p>
                </div>
                <i class='bx bx-trending-up icon'></i>
            </div>
            <span class="progress" data-value="50%"></span>
            <span class="label">50%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>543</h2>
                    <p>Solders</p>
                </div>
                <i class='bx bx-trending-down icon upp'></i>
            </div>
            <span class="progress" data-value="40%"></span>
            <span class="label">40%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>134</h2>
                    <p>Tools</p>
                </div>
                <i class='bx bx-trending-up icon'></i>
            </div>
            <span class="progress" data-value="70%"></span>
            <span class="label">70%</span>
        </div>
    </div>
        <div class="data">
            <div class="content-data">
                <div class="head">
                <h3>Sales Report</h3>
                <div class="menu">
                <i class='bx bx-dots-horizontal-rounded icon' ></i>
                <ul class="menu-link">
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Save</a></li>
                    <li><a href="#">Remove</a></li>
                </ul>

                </div>
            </div>
                <div class="chart">
                <div id="chart"></div>
            </div>
            </div>
            
            <div class="content-data">
                <div class="head">
                <h3>Chartbox</h3>
                <div class="menu">
                <i class='bx bx-dots-horizontal-rounded icon' ></i>
                <ul class="menu-link">
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Save</a></li>
                    <li><a href="#">Remove</a></li>
                </ul>
                </div>
                </div>
                <div class="chat-box">
                    <p class="day">Today</p>
                    <div class="msg">
                        <img src="../images/profile-pic.JPG" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="username">Jenly</span>
                                <span class="tim">18:31</span>
                            </div>
                            <p>hello</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <img src="../images/profile-pic.JPG" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:01</span>
                            </div>
                            <p>jenly hello how is your day we hop you are doing well my friend.</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <img src="../images/profile-pic.JPG" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:04</span>
                            </div>
                            <p>brh how is your day we hop you are doing well my friend.</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <img src="../images/profile-pic.JPG" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:06</span>
                            </div>
                            <p>catch up soon broh .</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <img src="../images/profile-pic.JPG" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:10</span>
                            </div>
                            <p>what can i bring you abroad broh.</p>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Type...">
                        <button type="submit" class="btn-send"> <i class='bx bxs-send icon'></i></button>
                    </div>
                </form>
            </div>
        </div>
    
</main>
 <!-- End of Main -nav -->
 </section>
 <!-- End of navbar section  -->
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../js/script.js"></script>

</body>
</html>