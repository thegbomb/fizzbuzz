<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wind turbine inspection test</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style type="text/css">
  body {
    font-family: fa5-proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
  }
  li {
    list-style-type: none;
  }
  li::before {
    margin-right: 10px;
    font-family: "Font Awesome 5 Free";
  }
  .fas {
    display: block;
  }
  .fail::before {
    color: red;
    content: "\f00d";
  }
  .pass::before {
    color: green;
    content: "\f00c";
  }

</style>
</head>

<body>
<h1>Wind turbine inspection test</h1>
<p>Item test results:</p>
<ul>
<?php
for ($i = 0; $i < 100; $i++) {
  $output = array();

  if ($i % 3 == 0) {
    $output[] = 'Coating Damage';
  }

  if ($i % 5 == 0) {
    $output[] = 'Lightning Strike';
  }

  if (!empty($output)) {
    echo '<li class="fail fas">' . implode(' and ', $output) . '</li>';
  }
  else {
    echo '<li class="pass fas">' . $i . '</li>';
  }
}
?>
</ul>
</body>
</html>
