<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PWD 6</title>
  </head>
  <body>
    <div class="container mt-5 pt-5">
    <h1>COBA-COBA CAPTCHA</h1>
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="cek_login.php" method="POST">
                    <div class="row">
                    <div class="form-group mt-2">
                        <label>Username</label>
                        <input type="text" name="id_user" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Captcha</label>
                        <div class="row">
                            <div class="col-sm-9">
                                <input type="text" name="captcha_code" class="form-control" required>
                            </div>
                            <div class="col-sm-3">
                                <img src="captcha.php"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 st-2">
                        <button type="submit" name="Submit" class="btn btn-info float-right"> Login </button> 
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>