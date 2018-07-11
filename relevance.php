<?php

include_once("functions.php");
include_once("config.php");

/**
 *Function to add relevance(London) for the SearchEngine
 */
//Relevance in Keywords
function relevanceKeywords (){

	global $db;
	
	$sqlNonv = "SELECT * FROM nonvalido"; //take from the db the nonvalid words
	
	$resultNon = mysqli_query($db,$sqlNonv);
	,
	if(mysqli_num_rows($resultNon)>0){//if there are nonvalid words link them in a string
		
		foreach ($resultNon as $key => $value) {
			
			$noValid .= $value['nonvalid']."|";
		}
		$noValid = substr($noValid,0,-1);
	//	print($noValid);
	}
	
	$sqlRelev = "SELECT * FROM relevances";//take from the db the relevant words
	
	$resultRelev = mysqli_query($db, $sqlRelev);
	
	if(mysqli_num_rows($resultRelev)>0){ //if there are relevant words link them in a string
		
		foreach ($resultRelev as $key1 => $value1) {
			
			$relevance .= $value1['relevance']."|";
		}
		$relevance = substr($relevance,0,-1);
		print($relevance);
	}
	//Find for relevant words on titles and descriptions from useractivities table and exclude the non valids 
	$sql = "SELECT userActivities from irisuseractivities where (titles REGEXP '".$relevance."' or descriptions REGEXP '".$relevance."') and (titles not REGEXP '".$noValid."' or descriptions not REGEXP '".$noValid."')"; 
	//print($sql);
	
	$activities = mysqli_query($db,$sql);
	if(mysqli_num_rows($activities)>0){//take the result and update the relevance column if relevant
		
		foreach ($activities as $key => $value){
			
			$sqlupd = "UPDATE useractivities set relevance = 1 WHERE id_userActivities = ".$value['id_userActivities'];
			
			print($sqlupd);
			if (mysqli_query($db, $sqlupd)) {
                    print("Records updated successfully");
                }
                else{
                    print "ERROR". mysqli_error($db);
                }
		}
	}
	
	
}
//Relevance in relevance in publications
function relevancePub (){

	global $db;
	
	$sqlNonv = "SELECT * FROM nonvalido";//take from the db the nonvalid words
	
	$resultNon = mysqli_query($db,$sqlNonv);
	
	if(mysqli_num_rows($resultNon)>0){//if there are nonvalid words link them in a string
		
		foreach ($resultNon as $key => $value) {
			
			$noValid .= $value['nonvalid']."|";
		}
		$noValid = substr($noValid,0,-1);
	//	print($noValid);
	}
	
	$sqlRelev = "SELECT * FROM relevances";//take from the db the relevant words
	
	$resultRelev = mysqli_query($db, $sqlRelev);
	
	if(mysqli_num_rows($resultRelev)>0){//if there are relevant words link them in a string
		
		foreach ($resultRelev as $key1 => $value1) {
			
			$relevance .= $value1['relevance']."|";
		}
		$relevance = substr($relevance,0,-1);
		//print($relevance);
	}
	//Find for relevant words on titles and abstracts from useractivities table and exclude the non valids 
	$sql = "SELECT id from publications where (titles REGEXP '".$relevance."' or abstracts REGEXP '".$relevance."') and (titles not REGEXP '".$noValid."' or abstracts not REGEXP '".$noValid."')"; 
	//print($sql);
	
	$publications = mysqli_query($db,$sql);
	if(mysqli_num_rows($publications)>0){
		
		foreach ($publications as $key => $value){
			
			$sqlupd = "UPDATE publications set relevance = 1 WHERE id = ".$value['id'];
			
			print($value['id']);
			if (mysqli_query($db, $sqlupd)) {
                    print("Records updated successfully");
                }
                else{
                    print "ERROR". mysqli_error($db);
                }
		}
	}
	
	
}					

			
	


?>
<div id="test3">
    <?php
      //relevanceKeywords();
		relevancePub();
    ?>
</div>