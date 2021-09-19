<?php
  session_start();
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
   <style>
   * {
  margin: 0;
  padding: 0;
  text-decoration: none;
}

button {
  cursor: pointer;
}

body {
	
  background-color: #F3F3F3;
}

.wrapper-main {
  width: 900px;
  margin: 0 auto;
}

header {
  width: calc(100% - 30px);
  height: 60px;
  padding: 0 15px;
  background-color: #FFF;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.nav-header-main {
  height: 80%;
  display: flex;
  flex-direction: row;
}

.header-logo {
  width: 40px;
  padding-right: 10px;
}

.nav-header-main img {
  height: 100%;
}

.nav-header-main ul {
  height: 100%;
}

.nav-header-main ul li {
  list-style: none;
  float: left;
  height: 100%;
}

.nav-header-main ul li a {
  display: block;
  height: 100%;
  padding: 0 10px;
  border-radius: 6px;
  line-height: 48px;
  font-family: arial;
  font-size: 16px;
  color: #111;
  text-transform: uppercase;
}

.header-login {
  height: 60%;
  display: flex;
  flex-direction: row;
}

.header-login form {
  height: 100%;
}

.header-login form input {
  height: 100%;
  width: 160px;
  padding: 0 15px;
  border: none;
  border-radius: 4px;
  background-color: #F6F6F6;
  float: left;
  margin-left: 8px;
  font-family: arial;
}

.header-login form button {
  height: 100%;
  padding: 0 10px;
  border: none;
  border-radius: 4px;
  background-color: #333;
  margin-left: 8px;
  font-family: arial;
  font-size: 13px;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
}

.header-signup {
  height: 100%;
  width: 70px;
  padding: 0 6px;
  border: none;
  border-radius: 4px;
  margin-left: 8px;
  font-family: arial;
  font-size: 13px;
  line-height: 36px;
  color: #111;
  text-transform: uppercase;
  text-align: center;
}

main {
  padding-top: 20px;
}

.section-default {
  width: 100%;
  padding: 20px;
  border-radius: 6px;
  background-color: #FFF;
}

.login-status {
  text-align: center;
  font-size: 26px;
  font-family: arial;
  color: #111;
}

h1 {
  text-align: center;
  font-size: 26px;
  font-family: arial;
  color: #111;
}

/* signup.php */

.form-signup {
  margin: 0 auto;
  padding-top: 20px;
  width: 200px;
}

.form-signup input {
  width: calc(100% - 30px);
  height: 30px;
  padding: 0 15px;
  margin-bottom: 6px;
  border: 1px solid #CCC;
  border-radius: 4px;
  background-color: #F6F6F6;
  float: left;
  font-family: arial;
}

.form-signup button {
  display: block;
  height: 40px;
  padding: 0 10px;
  margin: 0 auto;
  border: none;
  border-radius: 4px;
  background-color: #333;
  font-family: arial;
  font-size: 13px;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
}
.signuperror {
  padding-top: 14px;
  font-family: arial;
  font-size: 16px;
  color: red;
  text-align: center;
}

.signupsuccess {
  padding-top: 14px;
  font-family: arial;
  font-size: 16px;
  color: green;
  text-align: center;
}
   </style>
  </head>
  <body>

    <header 
style="  width: calc(100% - 30px);
  height: 60px;
  padding: 0 15px;
  background-color: #FFF;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;">
      <nav style="  height: 80%;display: flex;flex-direction: row;" class="nav-header-main">
        <a style="width: 40px;padding-right: 10px;" class="header-logo" href="index.php">
		<img style=" height: 100%;" src="img/logo.png" alt="blooming logo">
		<a style=" font-family: Catamaran;
  font-size: 24px;
  font-weight: 900;
  color: #111;
  text-transform: uppercase;
  display: block;
  margin-right:5px;
  margin-left:-10px;
  text-align: center;
  padding: 5px 0;" >Blooming</a>         
        </a>
        <ul style="height: 100%;">
          <li style=" list-style: none;float: left;height: 100%;">
		  <a style="display: block;height: 100%;padding: 0 10px;border-radius: 6px;line-height: 48px;font-family: arial;font-size: 16px;color: #111;text-transform: uppercase;" href="index.php">Home</a></li>
          <li style=" list-style: none;float: left;height: 100%;">
		  <a style="display: block;height: 100%;padding: 0 10px;border-radius: 6px;line-height: 48px;font-family: arial;font-size: 16px;color: #111;text-transform: uppercase;" href="about.php">About </a></li>
		  <li style=" list-style: none;float: left;height: 100%;">
		  <a style="display: block;height: 100%;padding: 0 10px;border-radius: 6px;line-height: 48px;font-family: arial;font-size: 16px;color: #111;text-transform: uppercase;" href="gallery.php">Gallery </a></li>
          <li style=" list-style: none;float: left;height: 100%;">
		  <a style="display: block;height: 100%;padding: 0 10px;border-radius: 6px;line-height: 48px;font-family: arial;font-size: 16px;color: #111;text-transform: uppercase;" href="question.php">Questions</a></li>
        </ul>
      </nav>
      <div style=" height: 60%;
  display: flex;
  flex-direction: row;" class="header-login">
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form style="  height: 100%;" action="includes/login.inc.php" method="post">
            <input style="  height: 100%;
  width: 160px;
  padding: 0 15px;
  border: none;
  border-radius: 4px;
  background-color: #F6F6F6;
  float: left;
  margin-left: 8px;
  font-family: arial;" type="text" name="mailuid" placeholder="E-mail/Username">
            <input style="  height: 100%;
  width: 160px;
  padding: 0 15px;
  border: none;
  border-radius: 4px;
  background-color: #F6F6F6;
  float: left;
  margin-left: 8px;
  font-family: arial;" type="password" name="pwd" placeholder="Password">
            <button style="  height: 100%;
  padding: 0 10px;
  border: none;
  border-radius: 4px;
  background-color: #333;
  margin-left: 8px;
  font-family: arial;
  font-size: 13px;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;"type="submit" name="login-submit">Login</button>
          </form>
          <a style="  height: 100%;
  width: 70px;
  padding: 0 6px;
  border: none;
  border-radius: 4px;
  margin-left: 8px;
  font-family: arial;
  font-size: 13px;
  line-height: 36px;
  color: #111;
  text-transform: uppercase;
  text-align: center;" href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo ' <a style="  height: 100%;
  width: 70px;
  padding: 0 6px;
  border: none;
  border-radius: 4px;
  margin-left: 8px;
  font-family: arial;
  font-size: 13px;
  line-height: 36px;
  color: #111;
  text-transform: uppercase;
  text-align: center;" href="profileA.php">Profile</a>';
		   echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
