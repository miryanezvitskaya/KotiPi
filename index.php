<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KotiPi web application">
    <meta name="author" content="Mirya Nezvitskaya">
    <link rel="icon" href="../../favicon.ico">

    <title>KotiPi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

      <!--sql.js for reading database -->
   <script src="js/sql.js"></script>
   <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/home/pi/pi_database.sqlite', true);
        xhr.responseType = 'arraybuffer';

        xhr.onload = funcTion(e) {
        var uInt8Array = new Uint8Array(this.response);
        var db = new SQL.Database(uInt8Array);
        var contents = db.exec("SELECT * FROM user");
        };
	xhr.send();

  </script>

  <script language="javascript">
        function pasuser(form) {
        if (form.login.value=="admin") {
        if (form.pswd.value=="penis") {
        location="home.php"
        } else {
        alert("Invalid Password")
        }
        } else {  alert("Invalid UserID")
        }
        }
  </script>

  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputLogin" class="sr-only">Login</label>
        <input name="login "type="login" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name = "pswd" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox"
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="pasuser(this.form)">Sign in</button>
      </form>

    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
