<!DOCTYPE html>

<html>
    <!-- Body -->
    <link rel="stylesheet" href="CSS/index.css">
    <body background="Images/login-bg.jpg">

        <img class="flamingoImage" src="Images/ChileanFlamingo.jpg" ALIGN="left" />

        <img class="salisburyZooLogoImage" src="Images/Header/logo.png" />

        <form class="loginForm" action="loginHandler.php" method="post">
            <input type="text" placeholder="Email" name="submittedEmail"/>
            <input type="password" placeholder="Password" name="submittedPassword"/>
            <input type="submit" value="Log in"/>
        </form>
    </body>
</html>
