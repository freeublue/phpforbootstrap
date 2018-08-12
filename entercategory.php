<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Album manager</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addimages.php">Add Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="editlead.php">Edit Content</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Album Management</h3>
      </div>


      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Add category</h4>
          <p>
          <?
          
function input_form($input_id, $input_type, $input_label, $size) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "'></div></div></div>"; 
 echo "$input_form"; } 
 
 

 echo "<div class='container-fluid'><form action='processcate.php' method='post'>";
 $input_label = 'Category';
 $input_type = 'text';
 $size = 'col-xs-2 col-md-4';
 $input_id = 'cate';
 input_form($input_id, $input_type, $input_label, $size);
 
 echo "<button class='btn btn-lg btn-primary btn-block' type='submit' name='submit'>Submit</button><br />";
 echo "</form></div>";
 ?>
          
</p>

          
        </div>

      </div>

      <footer class="footer">
        <p>&copy; Itsasmartsolve</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
