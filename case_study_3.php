<?php
$rows = $_GET['row'] + 1;       
$columns = $_GET['column'] + 1; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Case Study 3</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    max-width: 95vw;
    overflow: auto;
  }

  .grid-container {
    display: grid;
    grid-template-columns: repeat(<?= $columns ?>, minmax(100px, 1fr)); 
    gap: 8px;
  }

  .grid-container > div {
    aspect-ratio: 1 / 1;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: clamp(16px, 2.2vw, 28px); 
    border-radius: 10px;
  }

  .grid-item-odd {
    background-color: #ffeb3b;
    color: #000;
    font-weight: bold;
    border: 2px solid #f1c40f;
  }

  .grid-item-even {
    background-color: #e0e0e0;
    color: #333;
    border: 1px solid #bdbdbd;
  }

  .grid-header {
    background-color: #2196f3;
    color: white;
    font-weight: bold;
    border: 2px solid #1976d2;
  }

  .grid-corner {
    background-color: #424242;
    color: white;
    font-weight: bold;
    border: 2px solid #212121;
  }
</style>
</head>
<body>
<div class="container">
  <div class="grid-container">
    <?php
    for($r = 0; $r < $rows; $r++){
        for($c = 0; $c < $columns; $c++){
            
            if($r == 0 && $c == 0){
                $content = 'X'; 
                $class = 'grid-corner';
            }
            elseif($r == 0 || $c == 0){
                $content = ($r == 0) ? $c : $r; 
                $class = 'grid-header';
            }
            else{
                $content = $r * $c; 
                $class = ($content % 2 == 1) ? 'grid-item-odd' : 'grid-item-even';
            }

            echo "<div class='$class'>$content</div>";
        }
    }
    ?>
  </div>
</div>
</body>
</html>
