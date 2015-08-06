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
          Free Quote
       </div>
       <section class="banner2">
       		<?php include('header.php') ?>
       </section>
       <section id="aboutus">
       		<div class="container">
            <div class="tit espacio"><a href="services.php">JOIN US</div>
            <div class="row">
              <div class="col-sm-8">
                <form>
                  <div class="form-group">
                    <label for="exampleInputName1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputName1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Subject</label>
                    <input type="text" class="form-control" id="exampleInputName1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Your Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload CV</label>
                    <input type="file" id="exampleInputFile">
                  </div>
                 
                  <button type="submit" class="btn btn-default">Send</button>
                </form>
              </div>
              <div class="col-sm-4">
                  <p>Antaven Street 435. Culiacán, Sin.</p>
                <p><span class="titulo">Phone:</span><br>+1 (515) 779-3658  / 011 52 (667) 1023950</p>
                 <p><span class="titulo">E-Mail:</span><br>info@antaven.com / hr@antaven.com</p>
                <p><a href="index.php">www.antaven.com</a></p>
               


              </div>
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

    