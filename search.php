<!DOCTYPE html>
<?php 
  include_once("functions.php");
  include_once("config.php");
  include_once("./inc/header.php");
  
?>

 <?php
	//FUNCTIONS CALL
	if (!empty($_REQUEST['term'])) {
		
		$activ = array(); 
		$reports = array();
		$publications = array();
		$experts = array();
		$sliced_activ = array();
		$sliced_reports = array();
		$sliced_publications = array();
		$sliced_experts = array();
		$str_out = array();
		$search =$_REQUEST['term'];
		
		$activ = searchEngineActiv($search);
		if(!empty($activ)){
			$sliced_activ = array_slice($activ, 0, 8);
		}
		
		$reports = searchEnginePub($search,1);
		if(!empty($reports)){
			$sliced_reports = array_slice($reports,0,8);
		}
		
		$publications = searchEnginePub($search,2);
		if(!empty($publications)){
			$sliced_publications = array_slice($publications,0,8);
		}
		
		$experts = searchEngine($search);
		if(!empty($experts)){
			$sliced_experts = array_slice($experts, 0, 8);
		}
	}
	/*else{
		 header('Location: ./index.php');
		 exit();
	}*/
	
	?>
<section class="engine"></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form2-12" data-rv-view="129" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container" style="padding-top: 30px; padding-bottom: 0px;">
        <form class="mbr-form" action="search.php" method="post">
			<div class="row srch-txt"><?php echo ucfirst($search); ?></div>
			<div class="mbr-form__left">
				<input type="search" style="font-size: 17px;" class="form-control mbr-form__left pull-right" name="term" required="" placeholder="">
			</div>
			<div class="mbr-form__right mbr-buttons mbr-buttons--no-offset mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">Search</button></div>
		</form>
		<div class="col-sm-12">
		
		</div>
        
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="pricing-table1-11" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--relative mbr-section__container--std-top-padding container" style="padding-top: 30px; margin-bottom: -93px;">
        <div class="row mbr-plan__header mbr-plan--title mbr-plan--first">
		<h3 class="mbr-header__text" align="center" >PROJECTS</h3>
		</div>
		<div class="row">
		<?php 
			if(!empty($sliced_activ)){
				
			
				foreach ($sliced_activ as $key => $value) { 
				
				$idproj = '';
				$idproj = $value['id'];
				
		?>
            <div class="mbr-plan col-xs-12 mbr-plan--warning col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price" style="padding-top:10px;">
                            <span ><strong><p class="block-with-text"><a href="details.php?id=<?php echo $idproj;?>&type=1&term=<?php echo $search;?>"><?php echo $value['title'];?></a></p></strong></span>
                            
                        </div>
                    </div>
                    <div class="mbr-plan__details"><p class="block-with-text search-box"><a style="text-decoration:none" href="details.php?id=<?php echo $idproj;?>&type=1"><?php echo $value['description'];?></a></p></div>
                    
                </div>
            </div>
		<?php }}?>
            
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="pricing-table1-13" style="background-color: rgb(239, 239, 239); padding-top: 80px;">
    
    <div class="mbr-section__container mbr-section__container--relative mbr-section__container--std-top-padding container" style="padding-top: 30px; margin-bottom: -93px;">
        <div class="row mbr-plan__header mbr-plan--title mbr-plan--first">
		<h3 class="mbr-header__text" align="center" >REPORTS</h3>
		</div>
		<div class="row">
		<?php 
			if(!empty($sliced_reports)){
				foreach ($sliced_reports as $key => $value) { 
					$idrep='';
					$idrep=$value['id'];?>
            <div class="mbr-plan col-xs-12 mbr-plan--warning col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price" style="padding-top:10px;">
                            <span ><strong><p class="block-with-text"><a href="details.php?id=<?php echo $idrep;?>&type=2&term=<?php echo $search;?>"><?php echo $value['title'];?></p></a></strong></span>
                           
                        </div>
                    </div>
                    <div class="mbr-plan__details" ><p class="block-with-text search-box"><a style="text-decoration:none" href="details.php?id=<?php echo $idrep;?>&type=2"><?php echo $value['abstract'];?></p></a></div>
                    
                </div>
            </div>
				<?php }}?>
            
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="pricing-table1-14" data-rv-view="143" style="background-color: rgb(239, 239, 239); padding-top: 80px;">
    
   <div class="mbr-section__container mbr-section__container--relative mbr-section__container--std-top-padding container" style="padding-top: 30px; margin-bottom: -93px;">
        <div class="row mbr-plan__header mbr-plan--title mbr-plan--first">
		<h3 class="mbr-header__text" align="center" >PUBLICATIONS</h3>
		</div>
		<div class="row">
		<?php 
			if(!empty($sliced_publications)){
			foreach ($sliced_publications as $key => $value) {
				$idpub='';
				$idpub=$value['id'];
				
				?>
            <div class="mbr-plan col-xs-12 mbr-plan--warning col-md-3 col-sm-6">
                <div class="mbr-plan__box">
                    
                    <div class="mbr-plan__number">
                        <div class="mbr-number mbr-number--price" style="padding-top:10px;">
                            <span ><strong><p class="block-with-text"><a href="details.php?id=<?php echo $idpub;?>&type=3&term=<?php echo $search;?>"><?php echo $value['title'];?></p></a></strong></span>
                            
                        </div>
                    </div>
                    <div class="mbr-plan__details"><p class="block-with-text search-box"><a style="text-decoration:none" href="details.php?id=<?php echo $idpub;?>&type=3"><?php echo $value['abstract'];?></p></a></div>
                    
                </div>
            </div>
			
			<?php }}?> 
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-15" data-rv-view="146" style="background-color: rgb(239, 239, 239); padding-top: 80px;">
    
    <div class="mbr-section__container mbr-section__container--relative mbr-section__container--std-top-padding mbr-section__container--sm-bot-padding mbr-section-title container" style="padding-top: 31px;">
        <div class="row mbr-plan__header mbr-plan--title mbr-plan--first">
		<h3 class="mbr-header__text" align="center" >EXPERTS</h3>
		</div>
		
    </div>
    <div class="mbr-section__container container">
        <div class="row">
		<?php 
			if(!empty($sliced_experts)){
				foreach ($sliced_experts as $key => $value) {
						
		?>
		
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6" style="margin-bottom:40px;">
				<a target="_blank" style="text-decoration:none" href="<?php echo $value['iris_link']?>">
					<div style="background: #90929f;" class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
						<figure class="mbr-figure"><img src="<?php echo $value['imgurl'] ?>" style="width:100%; height:100%;" class="mbr-figure__img img-align" > </figure>
					</div>
					<div class="mbr-section__container mbr-section__container--middle name">
						<div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
							<h3 class="mbr-header__text"><?php echo $value['user_displayname']?></h3>
						</div>
					</div>
					<div class="mbr-section__container mbr-section__container--last name" >
						<div class="mbr-article mbr-article--wysiwyg">
							<p><?php echo $value['department']?></p>
						</div>
					</div>
                </a>
            </div>
		
			<?php }} ?>
           
        </div>
    </div>
</section>


 <?php
  include_once("./inc/footer.php");
 
 ?>