<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>my_shoutbox</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password">
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
    <script src="./js/login.js"></script>


</body>

</html>