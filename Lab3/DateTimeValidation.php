<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Date Time Validation</title>
</head>

<body>
  <p class="m-4">Enter your name and select date and time for the appointment</p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <div>
          <label for="name">Name: </label>
          <input type="text" name="name" id="" placeholder="Enter your name">
          <br><br>
        </div

        <div>
          <label for="date">Date: </label>
          <input type="date" name="date" id="">
          <br><br>
        </div>

        <div>
        <label for="time">Time: </label>
        <select name="hour" id="">
            <?php
            for ($i = 0; $i <= 23; ++$i) {
                if ($hour == $i) {
                    print("<option selected>$i</option>");
                } else {
                    print("<option>$i</option>");
                }
            }
            ?>
        </select>
        <select name="minutes" id="">
            <?php
            for ($i = 0; $i <= 59; ++$i) {
                if ($minutes == $i) {
                    print("<option selected>$i</option>");
                } else {
                    print("<option>$i</option>");
                }
            }
            ?>
        </select>
        <select name="second" id="">
            <?php
            for ($i = 0; $i <= 59; ++$i) {
                if ($second == $i) {
                    print("<option selected>$i</option>");
                } else {
                    print("<option>$i</option>");
                }
            }
            ?>
        </select>
        <br><br>
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <?php 
       
        $name = $_GET["name"];
        $date = date("d-m-Y", strtotime($_GET["date"]));
        if ($name!= '' && $date!= ''){
            $hour = $_GET["hour"];
            $second = $_GET["second"];
            $minutes = $_GET["minutes"];
            $split = explode('-', $date);
            $year = $split[0];
            $month = $split[1];
            print("<p>Hi $name</p>");
            print("<p>You have choose to have a appointment on $hour:$minutes:$second, $date</p>");
            print("<p>More info:</p>");
            print("<p>In 12 hours, the time and date is");
            if($hour >= 13){
                $hour = $hour - 12;
                print(" $hour:$minutes:$second PM,");
            }else{
                print(" $hour:$minutes:$second AM,");
            }
            print(" $date</p>");
            switch ($month) {
                case '1':
                case '3':
                case '5':
                case '7':
                case '8':
                case '10':
                case '12':
                    print("<p>This month has 31 days</p>");
                    break;
                case '4':
                case '6':
                case '9':
                case '11':
                    print("<p>This month has 30 days</p>");
                    break;
                default:
                    if(($year % 400 == 0) || (($year % 4 == 0) && ($year % 100 != 0))){
                        print("<p>This month has 29 days</p>");
                    }else{
                        print("<p>This month has 28 days</p>");
                    }
                    break;
            }
        }else{}
    ?>
</body>

</html>