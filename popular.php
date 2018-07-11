<?php 

 include_once("functions.php");
 include_once("config.php");

function popular1($input,$type,$mode){

//"variables: ".$input." ".$type." ".$mode;//input is the term searched, type is the kind of publication 1=projects,2=reports,3=publications, 
//mode 1=is a consult(for the main page) or 2=insert/update the database
	
	global $db;
	$popProj = array();
	$popRep = array();
	$popPub = array();
	
	if (!empty($mode)) {//check for empty values
		
		if (!empty($input) && ($mode == 1) && !empty($type)){//if there is term then insert/update
			//$itype = intval($type);
			//check if the term is already in the database
			$query="SELECT id_term, counter from popularTerm WHERE term = '".$input."' and type = '".$type."'";
			
			$result = mysqli_query($db, $query);
			$counter = 0;
			if (mysqli_num_rows($result) > 0) {//the term is already in the database, just update the counter
				//update 
			
					foreach ($result as $key => $value){
						print($value['counter']);
						print($value['id_term']);
						$counter = ++$value['counter'];
						print($counter);
						
						$qry = $db->prepare( "UPDATE popularTerm set counter =? WHERE id_term = '".$value['id_term']."';");

						$qry->bind_param('i', $counter);
						$qry->execute();
					}
			}
			else{// the term is not in the database, insert the term in table popular
				$mode = 1;
				$qry = $db->prepare("INSERT INTO popularTerm (term,type,counter)
				VALUES (?,?,?);");

				$qry->bind_param('sii',$input,$type,$mode);
				$qry->execute();
			
				if ($qry) {
					
					echo "New record created successfully. Last inserted is: " . $input,$type;
			   
				} 
				else {
						echo "Error: " . $db->error;
				}
			}
		}
			
		
		if (empty($input) && ($mode == 2)){ //consult for the main page
		
			$queryProj = "SELECT term,counter FROM popularterm WHERE type=1 ORDER BY counter DESC LIMIT 3";
			$queryRep = "SELECT term,counter FROM popularterm WHERE type=2 ORDER BY counter DESC LIMIT 3";
			$queryPub = "SELECT term,counter FROM popularterm WHERE type=3 ORDER BY counter DESC LIMIT 3";
			
			$result1 = mysqli_query($db, $queryProj);
			if (mysqli_num_rows($result1) > 0) {
				
				while($row = mysqli_fetch_assoc($result1)) {
					
					$out[$key]['term'] = $row['term'];
					$out[$key]['counter'] = $row['counter'];
					
					array_push($popProj,$out[$key]);
				}
				
			}
			
			$result2 = mysqli_query($db, $queryRep);
			if (mysqli_num_rows($result2) > 0) {
				
				while($row = mysqli_fetch_assoc($result2)) {
					
					$out[$key]['term'] = $row['term'];
					$out[$key]['counter'] = $row['counter'];
					
					array_push($popRep,$out[$key]);
				}
				
			}
			$result3 = mysqli_query($db, $queryPub);
			
			if (mysqli_num_rows($result3) > 0) {
				
				while($row = mysqli_fetch_assoc($result3)) {
					
					$out[$key]['term'] = $row['term'];
					$out[$key]['counter'] = $row['counter'];
					
					array_push($popPub,$out[$key]);
				}
				
			}
			$popular = array();
			$popular = array_merge($popProj,$popRep,$popPub);
			return $popular;
		}
		
		return $popular;
	}
	//the variables are not setting
}
?>	
<div id="test3"> 
    <?php
      //relevanceKeywords();
		popular1("social poverty",3,1);
    ?>
</div>