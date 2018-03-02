<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Logga in</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <!-- Knapp för att öppna fönster -->
        <button type="button" onclick="document.getElementById('login').style.display='block'">Login</button>

        <!-- Modulen -->
        <div id="login" class="modul">
            <span onclick="document.getElementById('login').style.display='none'" class="close" title="Stäng Modul">&times;</span>

            <!-- Login modul -->
            <form class="modul-content animate" action="action_login.php">
              <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
              </div>

              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
        </div>
    </body>
    <script src="login_modul.js"></script>
</html>
