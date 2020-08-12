<?php
  include './functions.php';
?>
<html>
  <head>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  </head>
  <body>
    <div class='container mt-5'>
      <?php if ($page === 1) { ?>
        <form method="GET" action="">
          <div class="for-group">
            <h2>
              Add participants
            </h2>
            <input
              type="text"
              placeholder="Name of participants"
              name="names"
              class="form-control"
            >
            <small id="nameshelp" class="form-text text-muted">
              Add the names separated by commas
            </small>
          </div>
          <button
            type="submit"
            class="btn btn-primary mt-3"
          >
            Add participants
          </button>
        </form>
        <div>
        </div>
          <?php
            foreach ($errors as $error) {
          ?>
            <div class="alert alert-danger">
          <?php
            echo "$error"
          ?>
          </div>
          <?php 
          }
          //end forEach
        }
        //end if
      ?>
      <?php if ($page === 2) { include './page_2.php'; } ?>
      <?php if ($page === 3) { include './page_3.php'; } ?>
      <?php echo '<div> Page: '  . $page . '</div>';  ?>
      <?php echo '<div> Random Number: '  . rand(0, count($namesArray) - 1) . '</div>';  ?>
    </div>  
  </body>
</html>