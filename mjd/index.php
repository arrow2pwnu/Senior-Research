<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/webtex.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <div class="container" id="test1">
    <div id="textInput">
      <input type="text" id="textInputText">
      <button class="btn waves-effect waves-light" id="generateTextInput" onclick="doFunction();">Generate</button>
    </div>
    <div id="mathDisplay">
      $$\int x^2$$
      <?php
        $directList = system('ls');
        print_r($directList);
        print_r($directList);
        print_r($directList);
        //echo "<br>" . $directList . "<br>";
        for ($i=0; $i < sizeof($directList); $i++) { 
          echo $directList[$i] . "<br>";
        }
      ?>
    </div>

  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/webtex.js"></script>
  <script src="../js/init.js"></script>
  <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

  </body>
</html>
