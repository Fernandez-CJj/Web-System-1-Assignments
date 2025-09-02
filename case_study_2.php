<?php
  //variables for getting input via url
  $name = $_GET['name'];
  $score = $_GET['score'];
  $grade = null;
  $remarks = null;
  
  if ($score >= 95 && $score <= 100) {
    $grade = "Excellent";
    $remarks = "Outstanding Performance!";
  } 
  else if ($score >= 90 && $score <= 94) {  
      $grade = "Very Good";
      $remarks = "Great Job!";
  } 
  else if ($score >= 85 && $score <= 89) {  
      $grade = "Good";
      $remarks = "Good Effort, Keep It Up!";
  } 
  else if ($score >= 75 && $score <= 84) {  
      $grade = "Needs Improvement";
      $remarks = "Work harder next time.";
  } 
  else if($score < 75 && $score >= 0){
      $grade = "Failed";
      $remarks = "You need to improve.";
  }
  else{
    $grade = "Invalid";
    $remarks = "Enter a valid score (0-100)";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Study 2</title>
  <style>
    body{
      background-color: #edededff;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container{
      width: 1000px;   
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      background-color: white;
      padding: 50px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .result{
      font-size: 50px;
      font-weight: bold;
      text-align: center;
      color: #262626ff;
    }
    .grid{
      display: grid;
      grid-template-columns: 1fr 2fr;
      grid-template-rows: repeat(3,100px);
      width: 800px;
      margin: 50px;
      row-gap: 3px;
    }
     .grid-item {
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: bold;
      font-size: 25px;
      color: black;
      border: 1px solid #8d8c8cff;
      
    }
    .grid-item:nth-child(1) { background-color: #338636ff; color: white; }
    .grid-item:nth-child(3) { background-color: #338636ff; color: white; }
    .grid-item:nth-child(5) { background-color: #338636ff; color: white; }

    .grid-container{
      display: flex;
      align-items: center;
      justify-content: center;
    }
      .final-result{
      font-size: 50px;
      font-weight: bold;
      text-align: center;
      color: #262626ff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="result">Student Grading Result</div>
    <div class="grid-container">
      <div class="grid">
        <div class="grid-item">Student Name</div>
        <div class="grid-item"><?= $name?></div>
        <div class="grid-item">Score</div>
        <div class="grid-item"><?= $score?></div>
        <div class="grid-item">Grade</div>
        <div class="grid-item"><?= $grade?></div>
      </div>
    </div>
    <div class="final-result"><?= $remarks?></div>
  </div>
</body>
</html>