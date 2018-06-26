<?include_once ("global.php");?>

<meta name=viewport content="width=device-width, initial-scale=1">
<html lang="en-Us">
   <head>
      <style> @charset "utf-8";
fieldset, form {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    display: inline-block;
    margin: 11vh 0 0;
}
body {
    background: #32465a;
    color: #edeff2;
    font: 100%/1.5em 'Open Sans', sans-serif;
     text-align: center;
}
a {
     text-decoration: none;
}
@media screen and (max-width: 735px) {
     h1 {
         font-size: 1em;
         margin: -12px 0 0px;
         margin-top: -22px;
    }
}
 p {
    margin-bottom: 10px;
}
strong {
    font-weight: bold;
}
.uppercase {
     text-transform: uppercase;
}
/* ---------- LOGIN ---------- */
#login {
    margin: 50px auto;
    width: 300px;
}
form fieldset input[type="text"], input[type="password"], input[type="email"] {
    background: #e5e5e5;
    border: none;
    border-radius: 3px;
    color: #5a5656;
    font-family: inherit;
    font-size: 14px;
    height: 50px;
    outline: none;
    padding: 0px 10px;
    width: 300px;

     -webkit-appearance:none;
}
form fieldset input[type="submit"] {
    background-color: #008dde;
    border: none;
    border-radius: 3px;
    color: #f4f4f4;
    cursor: pointer;
    font-family: inherit;
    height: 50px;
    text-transform: uppercase;
    width: 300px;
     -webkit-appearance:none;
}
form fieldset a {
    color: #5a5656;
    font-size: 10px;
}
form fieldset a:hover {
     text-decoration: underline;
}

h1 { color: #edeff2; font-family: 'Helvetica Neue', sans-serif; font-size: 25px; letter-spacing: -1px; line-height: 1; text-align: center;font-weight: 300;}
h2 { color: #edeff2; font-family: 'Open Sans', sans-serif; font-size: 18px; font-weight: 300; line-height: 20px; margin: 20px 0 20px; text-align: center; }
h3 { color: #edeff2; font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: 200; line-height: 20px; margin: -10px 0 20px; text-align: center; }
h4 { color: red; font-family: 'Helvetica Neue', sans-serif; font-size: 20px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
padding: 14px; padding-bottom: -20px;}
h5 { color: green; font-family: 'Helvetica Neue', sans-serif; font-size: 20px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
padding: 24px; padding-bottom: -20px;}
</style>

      <meta charset="utf-8">
      <title>Signup - Anomoz</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
   </head>
   <body>
      <div id="login">
         
         <form action="get_password.php" method="post">
             
            <fieldset>
                <h1>Set Password</h1>
               <p><input type="password" name="password" placeholder="Password" required ></p>
               <p><input type="submit" value="Signup"></p>
            </fieldset>
         </form>
   </body>
   <h2>Why is there a need to set a password?</h2>
   <h3>jbj jjb jbjb</h3>
</html>