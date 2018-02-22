<?php


//is the variable being submitted
if(isset($_POST['submit'])){
  
  
  $module = $_POST['module'];
  $semester = $_POST['semester'];
  $rating = $_POST['rating'];
  $text = $_POST['text'];
  print "module is $module; semester is $semester ; text is $text ; rating is $rating ; ";
//for the data.xml file we created in the xml folder
  $xml = simplexml_load_file("../xml/data.xml") or die('Eror: Cannot find the data storage');
  //add node ie <feedback> tags in the xml file
  $feedback = $xml->addChild('feednack');
  
  //put data in feedback node
  $feedback->addChild('module', $module);
   $feedback->addChild('module', $semester);
   $feedback->addChild('module', $text);
   $feedback->addChild('module', $rating);
  
  //save node.. on codeanywhere is does write to the data.xml file but you have to refresh to see the updated file
  $xml->asXML('../xml/data.xml');
  
} else {
  //go back to the feedback form if vairable wasnt set
  header("Location: ../index.php");
}

//$feedbackText = $_POST['text'];
//print_r($_POST); // output entire array of variables submitted
//echo "Feedback Text =  $feedbackText";
?>