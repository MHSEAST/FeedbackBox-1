<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Display</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2>Feedback Display</h2> 

  <div class="panel panel-default"> 
        <table class="table">
          <thead>
            <tr> 
              <th>#</th>
              <th>Module</th>
              <th>Semester</th>
              <th>Text</th>
              <th>Rating</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            
            // load xml file 
            $xml = simplexml_load_file("./data/feedbacks.xml") or die("ERROR: Cannot load feedbacks.xml!");
   
            $n = 1;
            
            // loop: one row for each feedback
            foreach($xml->children() as $feedback){
              
              echo "<tr>"; // start of table row
              echo "<th scope=\"row\">" . $n . "</th>"; 
              
              // loop: one column for each element inside the feedback
              foreach($feedback->children() as $child){
                echo "<td>" . $child . "</td>";
              }
              
              echo "</tr>"; // end of table row
              $n++;
            }
            
            ?>
            
          </tbody> 
    </table> 
  </div>
  
  </div>

</body>
</html>