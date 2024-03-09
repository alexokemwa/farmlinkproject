<?php
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require "../app/core/database.php";

                
                $sql = "SELECT * FROM employees WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_assoc($result);
                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = $user["id"]; 
                        header("Location: homepage.php");
                        die();
                    } else {
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }
            }
            