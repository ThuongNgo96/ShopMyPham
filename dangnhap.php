<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>

<body style="height: 100vh ; background-image:url(https://data.whicdn.com/images/84259561/original.gif); background-size:cover;">
    <div class=" container Login h-100 ">
        <div class="row  d-flex align-items-center w-100 h-100">
            <form method="POST" action="./database/xulylogin.php" class=" d-flex flex-column align-items-center m-auto btn-outline-info col-4">
                <img src="https://logos.textgiraffe.com/logos/logo-name/Sagi-designstyle-soccer-m.png" alt="clear" height="150px" width="170px">
              
                <h3 class="Login__1st-Row__Form__h3 pt-3 pb-2">Please sign in</h3>
                <input class=" form-control " type="text" name="username" placeholder="Username">
                <!-- <?php
                        if (isset($error['username'])) :
                        ?>
                    <strong class="text-danger"><?php echo $error['username'] ?></strong>
                <?php
                        endif
                ?> -->
                <input class="form-control " type="password" name="password" placeholder="Password">
                <div class=" mt-2">
                    <input type="checkbox">
                    <label>Remember me</label>
                </div>
                <button type="submit" name="login" class="mt-3 btn btn-success w-75"> Sign in</button>
                <p class="mt-5 ">©Copy By Thương Ngô 2020</p>
            </form>
        </div>
    </div>
</body>

</html>