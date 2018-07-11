<!DOCTYPE html>
<?php 
  include_once("functions.php");
  include_once("config.php");
  include_once("./inc/header.php");
?>

<?php
	//FUNCTIONS CALL
	if (!empty($_REQUEST['id']) && !empty ($_REQUEST['type']) && !empty ($_REQUEST['term'])) {
		$type = $_REQUEST['type'];
		$id = $_REQUEST['id'];
		$itype = intval($type);
		$term = $_REQUEST['term'];
		$detail = array();
		$detail = details($id,$type);
		echo "vars en details ".$term." ".$type;
		popular($term,$itype,1);
		
		
	}
	else{
		 header('Location: ./index.php');
		 exit();
	}

	if($type==1){ ?>
<section class="engine"></section><section class="mbr-section mbr-after-navbar" id="header3-17" data-rv-view="97" style="background-color: rgb(239, 239, 239);">
    <div class="mbr-section__container container mbr-section__container--first; " >
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2" style="padding-top:30px; padding-bottom:15px;">
			<?php foreach ($detail as $key => $value){
					
				
			} ?>
                <h3 class="mbr-header__text"><?php echo $value['title']?></h3>
                <p class="mbr-header__subtext">By: <?php echo $value['authorsName']; ?><br></p><p class="mbr-header__subtext_web"><strong> Status: </strong><?php echo $value['status']?></p></p>
            
			</div>
        </div>
    </div>
</section>

<section class="mbr-section" id="content1-18" data-rv-view="99" style="background-color: rgb(239, 239, 239);">
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="row">
			<?php if(($value['description'])!= '') { ?>
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p><?php echo $value['description']?></p></div>
			<?php } ?>
		</div>
    </div>
</section>

<section class="mbr-section" id="content1-19" data-rv-view="100" style="background-color: rgb(239, 239, 239); padding-top: 15px;padding-bottom: 15px;">
    <div class="mbr-section__container container mbr-section__container--last">
        <div class="row">
			<?php if(($value['website'])!= '') { ?>
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p><strong> Website: </strong><a target="_blank" href="<?php echo $value['website']?>"><?php echo $value['website']?></a></p><br></div>
			<?php } ?>
		</div>
    </div>
</section>
<?php }
	else{ ?>

<section class="engine"></section><section class="mbr-section mbr-after-navbar" id="header3-17" data-rv-view="97" style="background-color: rgb(239, 239, 239);">
    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
			<?php foreach ($detail as $key => $value){ ?>
			<?php } ?>			
                <h3 class="mbr-header__text"><?php echo $value['title']?></h3>
                <p class="mbr-header__subtext">By: <?php echo $value['authorsName']?><br></p><p class="mbr-header__subtext_web"><strong> Publication date: </strong><?php echo date("d-m-Y", strtotime($value['publicationDate']));?></p></p>
            
			</div>
        </div>
    </div>
</section>

<section class="mbr-section" id="content1-18" data-rv-view="99" style="background-color: rgb(239, 239, 239);">
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p><?php echo $value['abstract']?></p></div>
        </div>
    </div>
</section>
	
<section class="mbr-section" id="content1-19" data-rv-view="100" style="background-color: rgb(239, 239, 239);padding-top: 15px; padding-bottom: 15px;">
    <div class="mbr-section__container container mbr-section__container--last">
        <div class="row">
			<?php if(($value['doi'])!="") { ?>
				<div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p><strong> Reference: </strong><a target="_blank" href="<?php echo 'https://dx.doi.org/'.$value['doi']?>"><?php echo 'https://dx.doi.org/'.$value['doi']?></a></p><br></div>
			<?php } if(($value['issn'])!="") { ?>	
				<div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p><strong> ISSN: </strong><?php echo $value['issn']?></p><br></div>
			<?php } ?>	
		</div>
    </div>
</section>

	<?php } ?>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="pricing-table1-11" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--std-top-padding container" style="padding-top: 10px; margin-bottom: 30px;">
        <div class="row mbr-plan__header mbr-plan--title mbr-plan--first">
		<h3 class="mbr-header__text" align="center" >RELATED PROJECTS</h3>
		</div>
		<div class="row">
		<?php 
			$relatedp = array();
			$relatedp = relatedProj(($value['upi']));
			$sliced_relatedp = array_slice($relatedp, 0, 4);
			foreach ($sliced_relatedp as $key => $value) { 
				$idproj='';
				$idproj=$value['id']; ?>
            <div class="mbr-plan col-xs-12 mbr-plan--warning col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price desc-div" >
                            <span ><strong><p class="block-with-text"><a  href="details.php?id=<?php echo $idproj;?>&type=1&term=<?php echo $term;?>"><?php echo $value['title'];?></a></p></strong></span>
                            
                        </div>
                    </div>
                    <div class="mbr-plan__details last-line" style="text-align: justify; font-family: 'PT Sans', sans-serif;" ><p class="block-with-text"><a style="text-decoration:none" href="details.php?id=<?php echo $idproj;?>"><?php echo $value['description'];?></a></p></div>
                    
                </div>
            </div>
		<?php }?>

        </div>
    </div>
</section>


 <?php
	include_once("./inc/footer.php");
 ?>