<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my_shoutbox</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        referrerpolicy="no-referrer" crossorigin="anonymous"/>

</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>my_shoutbox</header>
            <form action="#">
                <div class="error-txt">error message!</div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="field button">
                    <input type="submit" placeholder="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Sign now</a> </div>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>


</body>

</html>