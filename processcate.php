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
    <link href="../bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../narrow-jumbotron.css" rel="stylesheet">
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
          <h4>Added</h4>
          <p>
          <?
          require "conf.php";
          

 
 

 echo "<div class='container-fluid'><div class='row'>
        <div class='col-md-4'>";
        $cate = $_POST["cate"];
        echo "$cate<br />";
        $sq = $db->query("INSERT INTO albumcategory(cate_title) values('$cate')");
        
        
        

        
echo "</div></div>";
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


        