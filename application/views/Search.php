<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <!-- This is the page title and the font of this webpage -->
      <title>Search Feature</title>
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

 /* This is the css code of the container */

         .container {
         display: grid;
         grid-template-columns: 20% 2fr 6fr 20%;
         grid-template-rows: 50px 100px 100px 100px 100px 300px;
         grid-gap: 1rem;
         }
         h1 {
         text-align: center;
         }

    /* This is the css code of logout-button/hover and boxes */

      
        .login-container {
         display: flex;
         justify-content: center;
         }
         .input-box {
         height: 40px;
         width: 300px;
         font-size: 20px;
         padding: 0 10px 0 10px;
         }
         input[type="submit"]{
         -moz-appearance: none;
         -webkit-appearance: none;
         appearance: none;
         }

      /* This is the css code for the submission button and the hover feature*/

      .submit-button {
         height: 44px;
         width: 100px;
         background-color: #008080;
         margin-left: 20px;
         border: 1px solid rgba(0, 0, 0, 0.2);
         padding: 0 10px 0 10px;
         font-size: 20px;
         background-color: rgb(0, 128, 128);
         color: white;
         cursor: pointer;
         }
         .submit-button:hover {
         background-color: rgba(0, 128, 128, 0.9);
         }


         
  /* This is the css code of logout-button/hover and boxes */
 

         .logout-button {
         width: 150px;
         height: 40px;
         font-size: 20px;
         -webkit-border-radius:;
         -moz-border-radius:;
         border-radius: 5px;
         border: none;
         background-color: white;
         cursor: pointer;
         }
         .logout-button:hover {
         background-color: white;
         color: black;
         border: 1px solid white;
         width: 150px;
         height: 45px;
         }


/* This is the css code for boxes 1-6 */

.box-1 {
         background-color: #008080;
         grid-column: 2/3;
         grid-row: 2/3;
         border-radius: 10px;
         display: flex;
         align-items: center;
         justify-content: center;
         border: 1px solid rgba(255, 255, 255, 0.5);
         }
	
 .box-2 {
         background-color: #008080;
         grid-column: 2/3;
         grid-row: 3/6;
         border-radius: 10px;
         display: grid;
         grid-template-columns: auto;
         grid-template-rows: 1fr 1fr 1fr 1fr;
         font-size: 20px;
         border: 1px solid rgba(255, 255, 255, 0.5);
         color: white;
         }
    .box-3  {
         display: flex;
         align-items: center;
         justify-content: center;
         border-bottom: 1px solid rgba(255, 255, 255, 0.5);
         }
    .box-4 {
         display: flex;
         align-items: center;
         justify-content: center;
         border-bottom: 1px solid rgba(255, 255, 255, 0.8);
         }
    .box-5 {
         display: flex;
         align-items: center;
         justify-content: center;
         border-bottom: 1px solid rgba(255, 255, 255, 0.8);
         }

         .box-6 {
         display: flex;
         align-items: center;
         justify-content: center;
         }
	
	.box-7 {
         background-color: white;
         grid-column: 3/4;
         grid-row: 2/4;
         border-radius: 10px;
         border: 1px solid rgba(0, 0, 0, 0.8);
         }
    .box-8 {
         background-color:;
         grid-column: 3/4;
         grid-row: 4/7;
         border-radius: 10px;

  /* This is the css code of boxes colors */


a {
         text-decoration: none;
         }
         a:visited {
         color: white;
         }
         a:hover {
         font-size: 22px;
         cursor: pointer;
         }

       
         </style>
   </head>
   <body>

 <!-- This is the code for the container-->

	<div class="container">
         <!-- This is the code for box 1 content and the logout feature-->

         <div class="box-1">
            <form action="/proj/co539m/microblog/rm731/index.php/user/logout">
               <button class="logout-button" name="logout-button" type="submit">Logout</button>
            </form>
         
         </div>

        <!-- This is the code for buttons 2-6-->

            <div class="box-2">

         <!-- This is the code for the My Messages Button-->


         <div class="box-3">
               <a>My Messages</a>
            </div>

<!-- This is the code for the Post a Message Button, which hyperlinks to the Message controller -->

	<div class="box-4">
               <a href="<?php echo base_url('index.php/Message/index'); ?>">Post a Message</a>
            </div>

<!-- This is the code for the Message Feed button -->

<div class="box-5">
               <a>Message Feed</a>
            </div>

<!-- This is the code for the Search feature, which hyperlinks to the Search controller -->

<div class="box-6">
               <a href="<?php echo base_url('Search'); ?>">Search</a>
            </div>
         </div>

<!-- This is the code for the button 7. This button searches the database for the letters typed in the search box  -->


  <div class="box-7">
            <h1>Search for Message</h1>
            <?php /*print_r($this->session->all_userdata()); */?>


<!-- In this code, it users the doSearch function Located in the Search controller -->

	<form action="/proj/co539m/microblog/rm731/index.php/search/dosearch">
               <div class="login-container">


<!-- This code shows the information for searchbox type and placeholder -->

                  <div>
                     <input class="input-box" placeholder="Search" type="text" name="search">
                  </div>
                  <div>
                     <input class="submit-button" type="submit" value="Find">
                  </div>
               </div>
            </form>

<!-- This is the code for box 8-->

         </div>
         <div class="box-8"></div>
      </div>
   </body>
   </html>
