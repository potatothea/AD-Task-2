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