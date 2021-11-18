<?php

 function user_sort($a, $b) {
   // smarts is all-important, so sort it first
   if($b == 'smarts') {
     return 1;
   }
   else if($a == 'smarts') {
     return -1;
   }

   return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
 }

 $values = array('name' => 'Buzz Lightyear',
                 'email_address' => 'buzz@starcommand.gal',
                 'age' => 32,
                 'smarts' => 'some');

$values_origin = array('name' => 'Buzz Lightyear',
                 'email_address' => 'buzz@starcommand.gal',
                 'age' => 32,
                 'smarts' => 'some');

 if (isset($_POST["sort_type"])) {
        $submitted = $_POST["submitted"];
        $sort_type = $_POST["sort_type"];
    } else {
        $sort_type = "unsorted";
        $submitted = false;
    }
    
  if($submitted) {
   if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
     $sort_type($values, 'user_sort');
   }
   else {
     $sort_type($values);
   }
  }

?>

<form action="index.php" method="post">
 <p>
    <table>
      <tr>
        <td><input type="radio" name="sort_type" value="sort"/> Standard sort</td>
        <td><input type="radio" name="sort_type" value="usort" /> User-defined sort</td>
        <td><input type="radio" name="sort_type" value="krsort" /> Reverse key sort</td>
        <td><input type="radio" name="sort_type" value="asort" /> Value sort</td>
      </tr>
      <tr>
        <td><input type="radio" name="sort_type" value="rsort" /> Reverse sort</td>
        <td><input type="radio" name="sort_type" value="ksort" /> Key sort</td>
        <td><input type="radio" name="sort_type" value="uksort" /> User-defined key sort</td>
        <td><input type="radio" name="sort_type" value="arsort" /> Reverse value sort</td>
      </tr>
      <tr>
        <td></td><td></td><td></td>
        <td><input type="radio" name="sort_type" value="uasort" /> User-defined value sort</td>
    </table>
 </p>

 <p align="center">
    <input type="submit" value="Sort" name="submitted" />
 </p>

 <p>
  <table>
    <tr>
      <td>Values unsorted (before sort)</td>
      <td>
        <ul>
          <?php
            foreach($values_origin as $key=>$values_origin) {
            echo "<li><b>$key</b>: $values_origin</li>";
            }
          ?>
        </ul>
      </td>

      <td><?= $submitted ? "Values sorted by $sort_type" : ""; ?>:</td>
      <td>
        <ul>
          <?php
            if ($submitted) {
              foreach($values as $key=>$values) {
              echo "<li><b>$key</b>: $values</li>";
              }
            }
          ?>
        </ul>
      </td>
  
  </table>
 </p>

</form>
