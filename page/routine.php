<?php
$daily_task =[
    //Morning Routine
    "5:05am - Wake Up",
    "5:10am - Feed my cats",
    "5:15am - Make the bed",
    "5:20am - Take a bath",
    "6:00am - Get dressed",
    "6:15am - Eat Breakfast",
    "6:20am - Brush teeth",
    "6:30am - Go to school",
    //After School
    "4:00pm - Get home",
    "4:15pm - Get changed",
    "4:20pm - Unpack bag",
    "4:25pm - Have a snack",
    "4:35pm - Quality time with my cats",
    "4:40pm - Chills on socials",
    "5:00pm - Have a powernap",
    "7:00pm - Prepare Dinner",
    "7:30 - Feed my cats and clean litter sand",
    "8:00pm - Eat dinner",
    "8:45pm - Start on homework",
    "9:15pm - Skincare",
    "11:00pm - Finish Homework",
    "11:15pm - Chill out",
    "11:30pm -Lights out and music"
];
$workout =[
    "Cardio" => "🏃",
    "Weight" => "🏋️",
    "Yoga" => "🧘",
    "Stretch" => "🤸",
    "Rest Day" => "😴",
    "Other" => "❓"
];

function renderChecklist($items){
    $output = '<div class="checklist">';
    foreach ($items as $i => $task){
        $id = strtolower(str_replace([' ', ':', '-', ','], '', $task));
        $output .= "<div class='checklist-item'>
        <input type='checkbox' id='$id'> 
        <label for='$id'>$task</label>
        </div>";
    }
    $output .= '</div>';
    return $output;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thea's School Routine</title>
    <link rel = "stylesheet" href = "/page/assets/css/style.css">
</head>
<body>
    <div class="container">
    <img src="./assets/img/schoolroutinetext.png" alt="School Routine" class="header-image">
</div>

    </div>
    <div class ="date-picker">
        DATE
        <input type = "text" placeholder="MM/">/
        <input type = "text" placeholder="DD/">/
        <input type = "text" placeholder="YY/">
        <div class="weekdays">S&nbsp;M&nbsp;T&nbsp;W&nbsp;T&nbsp;F&nbsp;S</div>
    </div>

    <!-- Checklist -->
    <?php 
        echo renderChecklist($daily_task);
    ?>

    <!-- Workout -->
    <div class="panel">
    <h2> Workout</h2>
    <div class="workout-options">
        <?php
        foreach($workout as $type => $icon){
            echo "<label><input type='radio' name='work'> $type $icon</label>";
        }
        ?>
       </div>
    </div>


        <!-- Water Balance -->
    <div class = "panel tracker">
        <h2> Water Balance</h2>
    <div class = "icons">

    <?php 
     $cups = 8;
     while ($cups >0){
        echo "<label><input type = 'checkbox'/>🥛</label>";
        $cups--;
     }
     ?>
      </div>
    </div>

     <!-- Mood -->
     <div class = "panel mood">
        <h2> MOOD</h2>
    <div class = "mood-options">
        <?php
        $moods = [
          "angry" => "😠",
          "tired" => "😴",
          "sad" => "😢",
          "great" => "😃",
          "funny" => "😂"
        ];
        foreach ($moods as $feeling => $emoji){
            echo "<label><input type='radio' name='mood' value='$feeling'><span>$emoji</span> " . ucfirst($feeling) . "</label><br>";
        }
        ?>
        </div>
    </div>

    <div class="back-button">
        <button onclick="history.back()">&larr; Back</button>
    </div>
</div>
</div>
</body>
</html>