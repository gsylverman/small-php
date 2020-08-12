<?php
  $namesArray = array();
  $errors = array();
  $page = 1;
  $chosenOne = '';

  if (isset($_GET['names'])) {
    if (!empty($_GET['names'])) {
      $names = $_GET['names'];
      $namesArray = removeWhiteSpace(explode(',', trim($names, ',')));
      $hasErrors = validate($namesArray);

      if (!$hasErrors) {
        $page = 2;
        if (isset($_GET['do_math'])) {
          $page = 3;
          $chosenOne = $namesArray[array_rand($namesArray)];
          echo 'page 3';
        }
        // echo 'go forward';
      }
      // echo '<pre>',
      //       print_r($errors),
      //       '</pre>';
    } else {
      array_push($errors, 'Sorry, you need at least one name');
    }
  }

  function removeWhiteSpace ($names) {
    $fixedNames = array();
    foreach ($names as $name) {
      array_push($fixedNames, trim($name, ' '));
    }
    return $fixedNames;
  }

  function validate ($names) {
    global $errors;
    $hasErrors = false;
    if (count($names) <= 1 ) {
      array_push($errors, 'Sorry, you need at least two names');
      $hasErrors = true;
    }
    foreach ($names as $name) {
      if (strlen($name) < 3) {
        $hasErrors = true;
        array_push($errors, 'Sorry, names must have more than 2 characters');
      }
    }
    return $hasErrors;
  }
?>