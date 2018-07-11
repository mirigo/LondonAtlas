<?php

  include_once("functions.php");
  include_once("config.php");


/**
 *Function to scrap all the researcher's activities from IRIS
 */
function displayAll()
{

    global $db;

    $sql = "SELECT user_ucl_iris FROM irisKey ORDER by department";

    $result = mysqli_query($db, $sql);

    $usrActArray = [];

    if (mysqli_num_rows($result) > 0) {

        echo "number of researchers in IrisKey is ", mysqli_num_rows($result), '<br>';
        echo '<br>';
    
        foreach ($result as $key => $value) {

           print($value['user_ucl_iris']) . "\n";

           $usrActArray = irisActivities($value['user_ucl_iris']);

       }
    }
    mysqli_close($sql);
    mysqli_close($result);
}
/**
 *Function to scrap all the researcher's activities details from IRIS
 */
  function irisActivities($irisId)
  {
      $db = mysqli_connect("host","database","user","pwd");

      $irisData = getIrisData($irisId);

      if(isset ($irisData['resActivities']['researchActivity'])) {
          $activities = $irisData['resActivities']['researchActivity'];

          foreach ($activities as $result) { //For each activity found

              $activitiesData = xml2array($result); //transform a xml to an array
              $actId = $activitiesData['id']; //extracting attributes
              $actTitle = $activitiesData['title'];
              print ('ID= '.$actId)."\n";
              print ('TITLE= '.$actTitle)."\n";

              if($actTitle == '' || $actId == '' ) {

                  $actId = $activities['id'];
                  $actTitle = $activities['title'];

                  print ('ID= '.$actId)."\n";
                  print ('TITLE= '.$actTitle)."\n";
                  $strslash = addslashes($actTitle);
                  $stmt = ("INSERT INTO irisUserActivities (user_ucl_iris,id_irisUserActivity,user_activity) VALUES ('$irisId','$actId','$strslash')");
                  print $stmt;


                  if (mysqli_query($db, $stmt)) {
                      print("Records inserted successfully");
                  }
                  else{
                      print "ERROR1". mysqli_error($db);
                  }
                  return $irisData;
              }
              else {

                $strslash = addslashes($actTitle);
                $stmt = ("INSERT INTO irisUserActivities (user_ucl_iris,id_irisUserActivity,user_activity) VALUES ('$irisId','$actId','$strslash')");
                print 'traena: '. $stmt;

                if (mysqli_query($db, $stmt)) {
                    print("Records inserted successfully");
                }
                else{
                    print "ERROR2". mysqli_error($db);
                }
              }
          //mysqli_close($db);
      }
      return $activitiesData;
  }
  else {
    print ('THERE ARE NOT ACTIVITIES FOR: '.$irisId);
  }
}


?>
<div id="test3">
                <?php
                  displayAll();

                  ?>
</div>
