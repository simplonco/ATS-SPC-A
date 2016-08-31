<?php
include 'employees/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // username and password sent from form
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);
    $sql = "SELECT * FROM users WHERE passcode = '$mypassword' and name = '$myusername' and session != CURDATE()";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['id'];
    $time = $row['session'];
    $count = mysqli_num_rows($result);
    // if result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        $sql_1 = "INSERT INTO checkins (user_id,arrival_time) VALUES ('$active',NOW())";
        $result_1 = mysqli_query($db, $sql_1);
        $query = "UPDATE users SET session = CURDATE() WHERE id = '$active'";
        $result_0 = mysqli_query($db, $query);
        $_SESSION['login_user'] = $myusername;
        header('location: employees/welcome.php');
    } else {
        $error = 'Your Login Name or Password is invalid or you are already enter today';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="./employees/material.min.css">
    <script src="./employees/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
        body {
            background-image: url("employees/accenture.jpg");
        }
        .mdl-layout {
            align-items: center;
            justify-content: center;
        }
        .mdl-layout__content {
            padding: 24px;
            flex: none;
        }
    </style>
</head>

<body>
    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="mdl-card mdl-shadow--6dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                    <h2 class="mdl-card__title-text">Accenture Attendance App</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form action="" method="post">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" id="username" name="username" />
                            <label class="mdl-textfield__label" for="username">Username</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password" id="userpass" name="password" />
                            <label class="mdl-textfield__label" for="userpass">Password</label>
                        </div>
                    </form>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" value=" Submit">Log in</button>
                    </form>
                    <div style="font-size:11px; color:#cc0000; margin-top:10px">
                        <?php if (isset($error)) { echo $error; } ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
