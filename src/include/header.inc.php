<header class="header">
    <img src="/php-oop-booking-app/src/images/airdnd.png" alt="Airdnd logo" class="logo">

    <form action="#" method="POST" class="search-bar">
        <input type="search" name="search" class="form-input" placeholder="Search">
        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
    </form>

    <div class="register_sign-in">
        <a href="/php-oop-booking-app/src/pages/register.php" class="navigation-button">Register</a>
        <button id="myBtn" class="sign-in-button">Sign In</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Sign In</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="text" name="email" class="form-input" placeholder="Email">
                        <input type="password" name="password" class="form-input" placeholder="Password">
                        <input type="submit" class="sign-in-button" value="Sign In">
                    </form>
                </div>
            </div>

        </div>
</header>