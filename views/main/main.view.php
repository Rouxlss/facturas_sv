
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>

    <!--Start Navbar -->
    <nav class="navbar">
        <div>
            <div class="bars"><i class="fas fa-bars"></i></div>
            <img src="<?=SERVER_URL?>/assets/img/logo.png" alt="" class="logo">
        </div>
        <div class="input-box">
            <input type="text" placeholder="type Your Search">
            <div class="search-icon"><i class="fas fa-search"></i></div>
        </div>
        <div>
            <div class="mode"><i class="fas fa-moon"></i></div>
            <div class="notification">
                <i class="fas fa-bell"></i>
                <span class="number">3</span>
                <div class="dropdown-menu">
                    <div class="dropmenu-content">
                        
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        <li>
                            <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                            <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto?</div>
                        </li>
                        
                    </div>
                </div>
            </div>
            <div class="avatar">
                <img src="<?=SERVER_URL?>/assets/img/user.jpg" alt="">
                <div class="dropdown-menu setting">
                    <div class="item"><span class="fas fa-user"></span> Profile</div>
                    <div class="item"><span class="fas fa-cog"></span>Setting</div>
                    <div class="item"><span class="fas fa-credit-card"></span>Payments</div>
                    <a href="./config/logout.php" class="item"><span class="fas fa-sign-out-alt"></span>Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Start Content  -->
    <div class="content">
        <!-- Side Bar -->
        <div class="sidebar">
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
                <Span>Dashboard</Span>
            </div>
            <div class="sidebar-nav active">
                <div class="icon"><i class="fas fa-chart-line"></i></div>
                <Span>Analytics</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-cog"></i></div>
                <Span>Organization</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-users"></i></div>
                <Span>Emoployees</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-calendar"></i></div>
                <Span>Calendar</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-chart-bar"></i></div>
                <Span>Reports</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-folder-open"></i></div>
                <Span>Files</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-address-card"></i></div>
                <Span>Directory</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-lightbulb"></i></div>
                <Span>Elements</Span>
            </div>
            <div class="sidebar-nav">
                <div class="icon"><i class="fas fa-ellipsis-h"></i></div>
                <Span>More</Span>
            </div>
        </div>
        <!--- Wrapper -->
        <div class="wrapper">
            <div class="row">
                <div class="box fanos">

                    <span class="fas fa-tasks"></span>
                    <span>100+</span>
                    <span>To Do</span>
                </div>
                <div class="box" >
                    <span class="fas fa-spinner"></span>
                    <span>100+</span>
                    <span>In Progress</span>
                </div> 
                <div class="box">
                    <span class="fas fa-check-circle"></span>
                    <span>100+</span>
                    <span>Completed</span>
                </div>
                <div class="box">
                    <span class="fas fa-bug"></span>
                    <span>100+</span>
                    <span>Issues</span>
                </div>
            </div>
            <div class="row">
                <div class="table">
                    <div class="table-body">
                        <div class="table-row">
                            <div>id</div>
                            <div class="avatar">Avatar</div>
                            <div>Name</div>
                            <div class="status">Status</div>
                            <div class="progress">Target Achievement</div>
                            <div class="actions">Actions</div>
                        </div>
                        <div class="table-row">
                            <div>#01</div>
                            <div class="avatar"><img src="<?=SERVER_URL?>/assets/img/user.jpg" alt=""></div>
                            <div>Producto de venta</div>
                            <div class="status">
                                <span class="cancel">Canceld</span>
                            </div>
                            <div class="progress">
                                <div class="bar"></div>
                            </div>
                            <div class="actions">
                                <button>Hire</button>
                                <button>Fire</button>
                            </div>
                        </div>
                        <div class="table-row">
                            <div>#02</div>
                            <div class="avatar"><img src="<?=SERVER_URL?>/assets/img/user.jpg" alt=""></div>
                            <div>Producto de venta</div>
                            <div class="status">
                                <span class="accepted">Accepted</span>
                            </div>
                            <div class="progress">
                                <div class="bar"></div>
                            </div>
                            <div class="actions">
                                <button>Hire</button>
                                <button>Fire</button>
                            </div>
                        </div>
                        <div class="table-row">
                            <div>#03</div>
                            <div class="avatar"><img src="<?=SERVER_URL?>/assets/img/user.jpg" alt=""></div>
                            <div>Producto de venta</div>
                            <div class="status">
                                <span class="accepted">Accepted</span>
                            </div>
                            <div class="progress">
                                <div class="bar"></div>
                            </div>
                            <div class="actions">
                                <button>Hire</button>
                                <button>Fire</button>
                            </div>
                        </div>
                        <div class="table-row">
                            <div>#04</div>
                            <div class="avatar"><img src="<?=SERVER_URL?>/assets/img/user.jpg" alt=""></div>
                            <div>Producto de venta</div>
                            <div class="status">
                                <span class="accepted">Accepted</span>
                            </div>
                            <div class="progress">
                                <div class="bar"></div>
                            </div>
                            <div class="actions">
                                <button>Hire</button>
                                <button>Fire</button>
                            </div>
                        </div>
                        <div class="table-row">
                            <div>#05</div>
                            <div class="avatar"><img src="<?=SERVER_URL?>/assets/img/user.jpg" alt=""></div>
                            <div>Producto de venta</div>
                            <div class="status">
                                <span class="accepted">Accepted</span>
                            </div>
                            <div class="progress">
                                <div class="bar"></div>
                            </div>
                            <div class="actions">
                                <button>Hire</button>
                                <button>Fire</button>
                            </div>
                        </div>
                        <div class="table-row">
                            <div>#06</div>
                            <div class="avatar"><img src="<?=SERVER_URL?>/assets/img/user.jpg" alt=""></div>
                            <div>Producto de venta</div>
                            <div class="status">
                                <span class="accepted">Accepted</span>
                            </div>
                            <div class="progress">
                                <div class="bar"></div>
                            </div>
                            <div class="actions">
                                <button>Hire</button>
                                <button>Fire</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>