<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Archakaas | Reset Account</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>

    <div class="container">

        <div class="starter-template">
          <h3>Enter Your E-mail</h3>
          <div class="alert alert-warning glyphicon glyphicon-remove" role="alert">&nbsp;<strong>Warning!</strong>&nbsp;This E-mail address has already been registered with us.</div>
       <p> You can reset your password here.</p>
        </div>

        <form class="form-inline" action="">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sr" data-toggle="modal" data-target="#myModal">
             Reset
            </button>
                


        </form>
      <!-- Modal -->
            <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Check Mail</h4>
                  </div>
                  <div class="modal-body">
                    <p>We have sent you an E-mail with dummpy password.</p>
                    <p></p>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

    </div><!-- /.container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>