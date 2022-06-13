<header class="header">
    <img src="/php-oop-booking-app/src/images/airdnd.png" alt="Airdnd logo" class="logo">

    <form action="#" method="POST" class="search-bar">
        <input type="search" name="search" class="form-input" placeholder="Search">
        <!-- <button type="submit" class="search-btn"><i class="fa fa-search"></i></button> -->
    </form>

    <div class="register_sign-in_modal">
        <div class="register_sign-in">
            <form action="/php-oop-booking-app/src/pages/register.php">
                <input type="submit" value="Register" class="sign-in-button">
            </form>
            <button id="myBtn" class="sign-in-button">Sign In</button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Sign In</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="register_sign-in_form">
                        <input type="text" name="email" class="form-input" placeholder="Email">
                        <input type="password" name="password" class="form-input" placeholder="Password">
                        <input type="submit" class="sign-in-button" value="Sign In">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>