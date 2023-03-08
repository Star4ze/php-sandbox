<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>

<body>
    <?php
    $isLoginSuccesful = true;

    if (($_GET['username'])) {
        echo '<h1> Hello! ' . $_GET['username'] . '</h1>';
        if (isset($_GET['password'])) {
            $password = $_GET['password'];

            if (strlen($password) < 8) {
                $isLoginSuccesful = false;
                showError('password is to Weak');
            }

            $chars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')'];
            foreach (str_split($password) as $c) {
                $hasChar = false;
                if (in_array($c, $chars)) {
                    $hasChar = true;
                    break;
                }
            }
            if ($hasChar) {
                $isLoginSuccesful = false;
                showError('Must contain atleast 1 character');
            }
        } else {
            $isLoginSuccesful = false;
            showError('please Enter a Password!');
        }
    } else {
        $isLoginSuccesful = false;
        showError('please Enter a Username!');
    }


    function showError(string $err): void
    {
        echo "<h1 class='error'>" . $err . " </h1>";
    }
    if($isLoginSuccesful){
        echo "<h1 class='done'> Login Succesful! </h1>"; 
    }

    ?>
</body>

</html>