<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <!-- This is the page title and the font of this webpage -->

<title>Login</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">

<style>

/* This is the css code of the body */

body {
padding: 0;
margin: 0;
font-family: 'Montserrat', sans-serif;
background-color: #012e2e;
}

input:focus,ff
select:focus,
textarea:focus,
button:focus {
outline: none;
}


/*This is the code for the webpage container*/

	.container {
            display: grid;
            grid-template-columns: 40% auto 40%;
            grid-template-rows: 250px 500px;
        }


/* This is the code of the login box */


.box-1 {
            background-color : #008080 ;
            grid-column: 2/3;
            grid-row: 2/3;
            -webkit-border-radius:;
            -moz-border-radius:;
            border-radius: 10px;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }


/*This is the code for the login container */



.login-container {
            display: block;
            margin: 0 auto;
        }


/*This is the css code for the letters */

h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 80px;
        }


/*This is the css code for the submission button, it hover feature, and it location*/

.submit-button {
            text-align: center;
            margin-top: 40px;
            height: 44px;
            width: 100px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 0 10px 0 10px;
            font-size: 20px;
            background-color: rgb(1, 46, 46);
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }


	.submit-button:hover {
            background-color: rgba(0, 128, 128, 0.8);
            border-radius: 3px;
        }

	.submit-button-location {
	   text-align: center;
        }



/*This is the code for the username and password box */

        .username, .password {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 40px;
            width: 260px;
            font-size: 20px;
            padding: 0 10px 0 10px;
        }


/*This is the error message location code */

 .error-messages {
            text-align: center;
        }

        </style>
   </head>
   <body>


<!-- This is the code for the container-->

<div class="container">

        <!-- This is the code for box 1-->

        <div class="box-1">

<!-- This is the welcome message -->


	<h1> Login  To Your Microblog Account</h1>


<!-- This is validation code-->


            <?php /*print_r($this->session->all_userdata()); */?>
            <div class="error-messages">
                <?php echo validation_errors(); ?>

</div>

<!-- This is the login form code -->

<form role = "form" method = "post" action = "<?php echo base_url('index.php/User/doLogin'); ?>">
        <div class="login-container">

<!-- This is the form placeholders, and submission button location and type-->

        <div class="login-container">
                    <div>
                        <input class="username" placeholder="Username" type="text" name="username">
                    </div>
                    <br>
                    <div>
                        <input class="password" placeholder="Password" type="password" name="password">
                    </div>
                    <div class="submit-button-location">
                        <input class="submit-button" type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>


