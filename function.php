<?php
  include_once 'header.php';

 ?>

    <div class="div1">
      <?php



      function operation($num1, $opr, $num2){
        $sum;
        switch ($opr) {
          case "add":
            $sum = $num1 + $num2;
            break;
          case "subtract":
            $sum = $num1 - $num2;
            break;
          case "multi":
            $sum = $num1 * $num2;
            break;
          default:
            $sum = "ERROR";
            break;
        }
        return $sum;
      }

      $num1 = $_GET["num1"];
      $num2 = $_GET["num2"];
      $opr = $_GET["Operation"];

      echo "Value: " . operation($num1, $opr, $num2) . "<br>" . $opr;

       ?>
    </div>

  </body>
</html>
