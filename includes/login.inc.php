<?php

session_start();


if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $db_col2 = mysqli_real_escape_string($conn, $_POST['db_col2']);
    $db_col3 = mysqli_real_escape_string($conn, $_POST['db_col3']);

    //Error handlers
    //Check if inputs are empty
    if (empty($db_col2) || empty($db_col3)) {
        header("Location: ../index.php?login=empty ");
        exit();
    } else {
        $sql = "SELECT * FROM $db_tablel1 WHERE login_username='$db_col2'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($db_col3, $row['login_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user here
                    $_SESSION['l_id'] = $row['login_id'];
                    $_SESSION['l_username'] = $row['login_username'];
                    $_SESSION['l_pwd'] = $row['login_pwd'];
                    $_SESSION['l_B2B_code'] = $row['login_B2B_code'];
                    switch ($row['login_B2B_code']) {
                        case 'product1':
                            header("Location: ../product1.php?login=success");
                            exit();
                            break;
                        case "product2":
                            header("Location: ../product2.php?login=success");
                            exit();
                            break;
                        case "product3":
                            header("Location: ../product3.php?login=success");
                            exit();
                            break;
                        default:
                            header("Location: ../product4.php?login=success");
                            exit();
                    }
                }
            }
        }
    }
} else {
    header("Location: ../index.php?login=error");
    exit();
}
?>


