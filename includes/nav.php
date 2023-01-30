    <!--Navigation Bar-->
    <nav class="navbar navbar-expand navbar-light bg-white">
            <div class="container">
                <a href="index.php" class="navbar-brand"><h3>L&R System</h3></a>
                <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Services</a>
                        </li>
                   <?php
                   
                        if(logged_in())
                        {
                    ?>
                        <li class="nav-item">
                            <a href="logout.php"><button class="btn btn-danger mr-1"><class="nav-link">Logout</button></a>
                        </li>
                    <?php
                        }
                        else
                        {
                    ?>  
                    
                         <li class="nav-item">
                            <a href="login.php"><button class="btn btn-warning mr-1"><class="nav-link">Login</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.php"><button class="btn btn-success mr-1"><class="nav-link">Sign up</button></a>
                        </li>
                    <?php
                        }
                   
                   
                   ?>
                </ul>
            </div>
        </nav>