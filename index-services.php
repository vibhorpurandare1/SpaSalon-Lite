 <?php $service_data=get_option('spa_theme_options');
    // print_r($service_data);
 ?> 
  <div class="container">	  
      <div class="row">
          
        <div class="span3">
          <h4 class="home_service"><?php echo  $service_data['service1_title']?></h4>
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service1_image']!='')  ?>
			       
				
				<img src="<?php echo $service_data['service1_image']; ?>"  alt="Spa Featture" class="home_service_img" />
	
			
		 <div class="home_service_para">
		 <p><?php echo $service_data['service1_content']?> </p>
		  </div>
        </div>
		  <div class="spacer">
    </div>
        </div>
		
		
         <div class="span3">
          <h4 class="home_service"><?php echo  $service_data['service2_title']?></h4>
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service2_image']!='')  ?>
			       
				
				<img src="<?php echo $service_data['service2_image']; ?>"  alt="Spa Featture" class="home_service_img" />
	
			
		 <div class="home_service_para">
		 <p><?php echo $service_data['service2_content']?> </p>
		  </div>
        </div>
		  <div class="spacer">
    </div>
        </div>
		
	    <div class="span3">
          <h4 class="home_service"><?php echo  $service_data['service3_title']?></h4>
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service3_image']!='')  ?>
			       
				
				<img src="<?php echo $service_data['service3_image']; ?>"  alt="Spa Featture" class="home_service_img" />
	
			
		 <div class="home_service_para">
		 <p><?php echo $service_data['service3_content']?> </p>
		  </div>
        </div>
		  <div class="spacer">
    </div>
        </div>
		
		
	    <div class="span3">
          <h4 class="home_service"><?php echo  $service_data['service4_title']?></h4>
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service4_image']!='')  ?>
			       
				
				<img src="<?php echo $service_data['service4_image']; ?>"  alt="Spa Featture" class="home_service_img" />
	
			
		 <div class="home_service_para">
		 <p><?php echo $service_data['service4_content']?> </p>
		  </div>
        </div>
		  <div class="spacer">
    </div>
        </div>
   <!-- close of spa services section -->
   <div class="spacer">
    </div>
 

		  
</div>	
</div>		   