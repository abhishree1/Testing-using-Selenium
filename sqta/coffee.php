<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Coffee</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="index.php">MB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact Us</a>
            </li>
            
        </ul>
      </div>
  </nav>

  <div class="row" style="padding-top: 50px;">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="images/coffee/coffee1.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Coffee 1</h5>
            <p class="card-text">ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </p>
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>

             <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
             <!-- Modal content-->
           <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
             <form action="form.php" method="post">

             <div class="form-group">
             <label for="exampleFormControlInput1" name="name">Name</label>
             <input type="text" class="form-control" name="name" placeholder="name">
         
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" name="address">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
          </div>
          </div>
          <input type="Submit" name="buy" class="btn btn-success">
          </form>
             </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      
         </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="images/coffee/coffee2.jpg" class="card-img" alt="cake" style="height: 100%">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Coffee 2</h5>
            <p class="card-text">ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </p>
           
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>

             <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
             <!-- Modal content-->
           <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
             <form action="form.php" method="post">

             <div class="form-group">
             <label for="exampleFormControlInput1" name="name">Name</label>
             <input type="text" class="form-control" name="name" placeholder="name">
          </div>
      
          <div class="form-group">
            <label for="exampleFormControlTextarea1" name="address" >Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
          </div>
          </div>
          <input type="Submit" name="buy" class="btn btn-success">
          </form>
             </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      
         </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </body>
</html>