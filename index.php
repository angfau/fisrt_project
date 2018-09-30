<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="/money_changer/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/money_changer/css/bootstrap.min.css">

<script src="/money_changer/js/bootstrap.min.js"></script>
<script src="/money_changer/js/jquery-3.3.1.min.js"></script>
<script src="/money_changer/js/jquery-ui-1.12.1.js"></script>
<script src="/money_changer/js/jquery.min.js"></script>
<script src="/money_changer/js/jqx-all.js"></script>
<script src="/money_changer/js/bootstrap.js"></script>
<body>

	<div class="col-md-5 col-md-offset-5 form-login">
		<div>
		<?php
            if(!empty($_SESSION['msg'])){
                $message = $_SESSION['msg'];
                echo "<p class='msg'>$message <button class='btn btn-danger ' id='closeMsg'>X</button></p>";
            }
        ?>
    </div>
    	<h1>Sign In</h1>
        <div class="outter-form-login">
            <!-- <div class="logo-login">
                <em class="glyphicon glyphicon-user"></em>
            </div> -->
    	<div class="form-group"></div>
        <form action="controller/employee/login.php" method="POST" class="inner-login">
            <label>Username</label>
            <input style="width: 40%;" type="text" id="username" class="form-control" placeholder="Insert Username" required autofocus name="username">
            <label>Password</label>
            <input type="password" style="width: 40%;" id="inputPassword" class="form-control" placeholder=" Insert Password" required name="password">
            <br>
            <button class="btn btn-primary" type="submit" style="float: left; width: 40%">Sign in</button>
        </form>
        <br>
        <br>
        <label>Tidak punya akun?</label>
        <br>
        <a href="view/employee/add.php">
            <button class="btn btn-primary" style="width:40%">Sign up</button>
            </a>
    </div>
	</div>
</body>
<?php
    session_destroy(); 
?>

<script>
    $('#closeMsg').click(function(){
        $('p.msg').remove();        
    });
</script>