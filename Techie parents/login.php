<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="./style.css">
<style>
  body{
    background-image: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }
  h1 {
    font-size: 40px;
    font-weight: bolder;
    color: white;
    text-align: center;
    margin-top: 40px;

}
</style>
</head>
<body>
  <h1>Welcome to Techie Parents</h1>
  <div class="login-page">
  <div class="form">

   
    <form class="login-form" action="login2.php" method="post">
      <input type="text" placeholder="username" name="name1"/>
      <input type="password" placeholder="password" name="pw"/>
      <button onclick="location.href='welcome.php'" class="btn" type="submit" name="save" >Save</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>

  </div>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
