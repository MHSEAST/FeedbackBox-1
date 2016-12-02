<?php

  if(isset($_POST['submit'])){
    
    // process the feedback form
    
    // put everything in variables
    $text = $_POST['text'];

    // load the existing xml file
    $xml = simplexml_load_file("./data/feedbacks.xml") or die("ERROR: Cannot load feedbacks.xml!");
    
    // add the new feedback
    $feedback = $xml->addChild("feedback");
    $feedback->addChild('text', $text);
    
    // save the whole modified xml file
    $xml->asXML("./data/feedbacks.xml");
    
    // go to some other thank you site
    header("Location: ../thankyou.html");
    
  }

?>