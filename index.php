<!DOCTYPE html>
<?php 

  include_once("functions.php");
  include_once("config.php");
  include_once("./inc/header.php");
?>



<section class="engine" style="background-color: rgb(239, 239, 239);"></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="form2-12" data-rv-view="129" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--sm-padding container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text"></h2>
                        </div>
                        
                        <form class="mbr-form" action="search.php" method="post">
                            
                            <div id="term" class="mbr-form">
                                <input type="text" style="font-size: 17px;" class="form-control search-box" name="term" id="term" required=""  placeholder="Discover research projects about London">
                            </div>
                            <div class="mbr-form__right mbr-buttons mbr-buttons--no-offset mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">Search</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section--no-padding" id="gallery1-x" style="background-color: rgb(239, 239, 239);">
    <!-- Gallery -->
    <div class=" mbr-gallery-layout-default container" style="padding-top: 31px; padding-bottom: 31px;">
        <div>
            <div class="row mbr-gallery-row no-gutter">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=housing">
						<figcaption class="mbr-figure__caption">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Housing</small>
						</figcaption>
                    
                        <img src="assets/images/housing1-800x600.jpg" alt="Housing" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=sustainability">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Sustainability</small>
						</figcaption>
                    
                        <img src="assets/images/sustainability1-800x480.jpg" alt="Sustainability" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=design">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Design</small>
						</figcaption>
                    
                        <img src="assets/images/design1-800x524.jpg" alt="Desgin" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=public space">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Public Space</small>
						</figcaption>
                    
                        <img src="assets/images/publicspace1-800x427.jpg" alt="Public Space" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=culture">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Culture</small>
						</figcaption>
                    
                        <img src="assets/images/culture1-800x668.jpg" alt="Culture" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=space syntax">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Space Syntax</small>
						</figcaption>
                    
                        <img src="assets/images/spacesyntax1-800x600.png" alt="Space Syntax" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=digital fabrication">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Digital Fabrication</small>
						</figcaption>
                    
                        <img src="assets/images/digitalfabrication1-800x480.jpg" alt="Digital Fabrication" />
                    </a>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
					<a href="search.php?term=planning">
						<figcaption class="mbr-figure__caption mbr-figure__caption--std-grid">
							<div class="mbr-caption-background"></div>
							<small class="mbr-figure__caption-small">Planning</small>
						</figcaption>
                    
                        <img src="assets/images/planning1-800x449.jpg" alt="Planning" />
                    </a>
                </div>
            </div>
        </div>
        
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box2-t" style="background-color: rgb(239, 239, 239);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;POPULAR</h3>
                        </div>
                    </div>
                    
                </div>
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-4">
                    
                </div>
            </div>
        </div>
    </div>

</section>
<?php 
	$pop = array();
	$proj = array();
	$rep = array();
	$pub = array();
	$pop = popular("","",2);
	$proj = array_slice($pop,0,3);
	
	$rep = array_slice($pop,3,3);

	$pub = array_slice($pop,6,3);
	

?>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size " id="pricing-table1-q" style="height:100%;  padding-bottom: 320px;
    margin-bottom: -320px; background-color: rgb(240, 240, 240);">
    
    <div class="mbr-section__container mbr-section__container--std-top-padding container" style="padding-top: 31px; margin-bottom: 31px;">
        <div class="row">
            
            <div class="mbr-plan col-xs-12 mbr-plan--success mbr-plan--first col-lg-3 col-sm-4 col-lg-offset-1-5 col-sm-0">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">REPORTS</h3>
                        </div>
                    </div>
                  
                    <div class="mbr-plan__detailsPopular"><ul>
					<?php foreach($rep as $key => $value) {?>
						<li><strong><a href="search.php?term=<?php echo $value['term'] ?>"><?php echo $value['term'] ?></a></strong></li>
					<?php } ?>
					</ul></div>
                    
                </div>
            </div>
            <div class="mbr-plan col-xs-12 mbr-plan--danger mbr-plan--favorite col-lg-3 col-sm-4">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">&nbsp;PROJECTS</h3>
                        </div>
                    </div>
                    
                    <div class="mbr-plan__detailsPopular"><ul>
					<?php foreach($proj as $key => $value2) {?>
						<li><strong><a href="search.php?term=<?php echo $value2['term'] ?>"><?php echo $value2['term'] ?></a></strong></li>
					<?php } ?>
					</ul></div>
                    
                </div>
            </div>
            <div class="mbr-plan col-xs-12 mbr-plan--warning mbr-plan--last col-lg-3 col-sm-4">
                <div class="mbr-plan__box">
                    <div class="mbr-plan__header">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">PUBLICATIONS</h3>
                        </div>
                    </div>
                    
                    <div class="mbr-plan__detailsPopular"><ul>
					<?php foreach($pub as $key => $value1) {?>
						<li><strong><a href="search.php?term=<?php echo $value1['term'] ?>"><?php echo $value1['term']; ?></a></strong></li>
					<?php } ?>
					</ul></div>
                </div>
            </div>
            
        </div>
    </div>
</section>


 <?php
  include_once("./inc/footer.php");
 
 ?>