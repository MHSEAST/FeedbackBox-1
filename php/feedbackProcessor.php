<?php

  if(isset($_POST['submit'])){
    
    // process the feedback form
    
    // put everything in variables
    $module = $_POST['module'];
    $semester = $_POST['semester'];
    $text = $_POST['text'];
    $rating = $_POST['rating'];

    // load the existing xml file
    $xml = simplexml_load_file("./data/feedbacks.xml") or die("ERROR: Cannot load feedbacks.xml!");
    
    // add the new feedback
    $feedback = $xml->addChild("feedback");
    $feedback->addChild('module', $module);
    $feedback->addChild('semester', $semester);
    $feedback->addChild('text', $text);
    $feedback->addChild('rating', $rating);
    
    
    echo "1";
    
    // save the whole modified xml file
    $xml->asXML("./data/feedbacks.xml");
    
    // go to some other thank you site
    header("Location: ../thankyou.html");
    
  } else {
    
    echo "No submission!";
  
  }

?>