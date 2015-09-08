<!DOCTYPE html>
<html>
  <head>
       <title>Título</title>
       <meta charset="UTF-8" />
       <meta name="viewport" content="width=device-width, user-scalable=no">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="css/responsive.css">
       <link rel="stylesheet" type="text/css" href="css/basestyle.css">
  </head>

  <body>
       <div class="quote">
          <a href="freequote.php">Free Quote</a>
       </div>
       <section class="banner2">
       		<?php include('header.php') ?>
       </section>
       <section id="aboutus">
       		<div class="container">
            <div class="tit espacio">ONLINE REQUEST</div>
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-xs-4">
                    <img  src="img/f1.png" class="img-responsive">
                  </div>
                  <div class="col-xs-8">
                    <p class="fq"><b>100% free</b></p>
                    <p>There's no need to commit to anything at this point — no strings attached.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-xs-4">
                    <img  src="img/f2.png" class="img-responsive">
                  </div>
                  <div class="col-xs-8">
                    <p class="fq"><b>100% safe and secure</b></p>
                    <p>We will never share your contact details or business idea with anyone, period.</p>
                  </div>
                </div>
               
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-xs-4">
                    <img  src="img/f3.png" class="img-responsive">
                  </div>
                  <div class="col-xs-8">
                    <p class="fq"><b>Fast response</b></p>
                    <p>An expert will get in touch with you within 24 hours max — and that's a promise.</p>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
            
       </section>
       <section id="aboutus" class="sales">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <form>
                  <div class="form-group">
                    <label for="exampleInputName1">Name*:</label>
                    <input type="text" class="form-control" id="exampleInputName1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">City:</label>
                    <input type="text" class="form-control" id="exampleInputName1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email*:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                  </div>
                </form>
            </div>
            <div class="col-sm-6">
              <form>
                  <div class="form-group">
                    <label for="exampleInputName1">Company:</label>
                    <input type="text" class="form-control" id="exampleInputName1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Phone:</label>
                    <input type="text" class="form-control" id="exampleInputName1" >
                  </div>
                  <label for="exampleInputName1">Country:</label>
                  <select class="form-control">
                    <option>Select Country</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                 
                </form>
            </div>
          </div>
          <div class="row">
            <form>
              <div class="form-group">
                    <label for="exampleInputName1">Your message (0 out of 2000)*:</label>
                    <textarea class="form-control" rows="3"></textarea>
              </div>
               <div class="form-group">
                    <label for="exampleInputFile">Attach a file<br>Max attachment size is 20 MB</label>
                    <input type="file" id="exampleInputFile">
                  </div>
                 
                  <button type="submit" class="btn btn-default">Send Request</button>
            </form>
          </div>
        </div>
       </section>

       <footer>
        <?php include('footer.php') ?>
       </footer>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <script src="js/index.js" type="text/javascript"></script>
  </body>
</html>

    