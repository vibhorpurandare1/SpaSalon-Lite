 <!-- Slider -->

<?php $current_options=get_option('spa_theme_options');?>
   

 <!-- Slider -->
  <div id="container" class="cf">
<div id="main" role="main">
      <div class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides">
           	<li style="height:800px;position:relative">
			
			   	 <?php 	if($current_options['home_feature']!='')  ?>
			       
				
				<img src="<?php echo $current_options['home_feature']; ?>"  alt="Spa Featture" class="main-sliderimg" />
	
				
                <div class="slidesDescription container" >
					 
	             <div class="row-fluid">
			        <div class="span3" style="margin-top:15px; width:auto; margin-left:20px;">
			          <dl class="pink_title">    <dt><?php echo ($current_options['line_one']); ?></dt>
                      <dt><h1 class="pink-head"><?php echo ($current_options['line_two']); ?></h1></dt>	</dl>
					</div>
			 
		<div class="span6"  style="margin-top:20px"><p> <?php echo ($current_options['description']); ?></p>
			</div>
		     <div class=" spa_tag"><span><?php _e( "Call us on", 'sis_spa' ); ?><p><?php echo $current_options['call_us']; ?></p></span></div> 
                </div>
           </div>
      
  	    	</li>
		
  	    
  	    	
  	    		
          </ul>
		  
		  	<div class="slider-thumb-container container">	
		      
				<div class="thumb-img-container">
				   	 <?php 	if($current_options['first_thumb_image']!='')  ?>
			           <img src="<?php echo $current_options['first_thumb_image']; ?>"  alt="Spa Featture"class="slider-thumb" />
	                   
				</div>
				
				<div class="thumb-img-container">
					 <?php 	if($current_options['second_thumb_image']!='')  ?>
			           <img src="<?php echo $current_options['second_thumb_image']; ?>"  alt="Spa Featture"class="slider-thumb" />
	                    
				</div>
				
				<div class="thumb-img-container">
					 <?php 	if($current_options['third_thumb_image']!='') ?>
			           <img src="<?php echo $current_options['third_thumb_image']; ?>"  alt="Spa Featture"class="slider-thumb" />
	                  
				</div>
				
		
		</div>
	 <!--end of slider Thumbnails images-->
        </div>
		
        
	
      </div>
    
    </div>
  </div>
 <!-- /Slider-->

  

