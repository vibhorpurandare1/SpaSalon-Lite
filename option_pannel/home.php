<?php 
$current_options=get_option('spa_theme_options');
 //$product=$current_options['spa_product_Title'];
//print_r($product);
if(isset($_POST['spa_home_settings_save']))
{
	if($_POST['spa_home_settings_save'] == 1) 
	{
		
		/*nonce field implement*/
if ( empty($_POST) || !wp_verify_nonce($_POST['spa_home_nonce_customization'],'spa_customization_nonce_home') )
		{
		   _e('Sorry, your nonce did not verify.','sis_spa');
		   exit;
		}
		else
		{   
		
		       $current_options['line_one']=sanitize_text_field($_POST['line_one']);
			    $current_options['line_two']=sanitize_text_field($_POST['line_two']);
				$current_options['description']=sanitize_text_field($_POST['description']);
		    $current_options['call_us']=sanitize_text_field($_POST['call_us']);
			 
			 $current_options['home_slider_image']=sanitize_text_field($_POST['home_slider_image']);
			  	 $current_options['home_feature']=sanitize_text_field($_POST['home_feature']);
			 $current_options['first_thumb_image']=sanitize_text_field($_POST['first_thumb_image']);
			 $current_options['second_thumb_image']=sanitize_text_field($_POST['second_thumb_image']);
		    $current_options['third_thumb_image']=sanitize_text_field($_POST['third_thumb_image']);
						 
			$current_options['service1_title']=sanitize_text_field($_POST['service1_title']);			 
			$current_options['service1_image']=sanitize_text_field($_POST['service1_image']); 
			$current_options['service1_content']=sanitize_text_field($_POST['service1_content']);
			
			$current_options['service2_title']=sanitize_text_field($_POST['service2_title']);			 
			$current_options['service2_image']=sanitize_text_field($_POST['service2_image']); 
			$current_options['service2_content']=sanitize_text_field($_POST['service2_content']);
			
			$current_options['service3_title']=sanitize_text_field($_POST['service3_title']);			 
			$current_options['service3_image']=sanitize_text_field($_POST['service3_image']); 
			$current_options['service3_content']=sanitize_text_field($_POST['service3_content']);
			
			$current_options['service4_title']=sanitize_text_field($_POST['service4_title']);			 
			$current_options['service4_image']=sanitize_text_field($_POST['service4_image']); 
			$current_options['service4_content']=sanitize_text_field($_POST['service4_content']);
			//product option
            $current_options['product1_title']=sanitize_text_field($_POST['product1_title']);			 
			$current_options['product1_image']=sanitize_text_field($_POST['product1_image']); 
             
            $current_options['product2_title']=sanitize_text_field($_POST['product2_title']);			 
			$current_options['product2_image']=sanitize_text_field($_POST['product2_image']); 
			
            $current_options['product3_title']=sanitize_text_field($_POST['product3_title']);			 
			$current_options['product3_image']=sanitize_text_field($_POST['product3_image']); 
			
			$current_options['product4_title']=sanitize_text_field($_POST['product4_title']);			 
			$current_options['product4_image']=sanitize_text_field($_POST['product4_image']); 
			
			$current_options['product5_title']=sanitize_text_field($_POST['product5_title']);			 
			$current_options['product5_image']=sanitize_text_field($_POST['product5_image']);  
		
			
			
			$current_options['tagline_title']=sanitize_text_field($_POST['tagline_title']);
			$current_options['tagline_contents']=sanitize_text_field($_POST['tagline_contents']);
			$current_options['product_title']=sanitize_text_field($_POST['product_title']);
			$current_options['product_contents']=sanitize_text_field($_POST['product_contents']);
			$current_options['spa_home_Title']['home_title_px']=sanitize_text_field($_POST['home_title_px']);
			$current_options['spa_home_Title']['home_font_family']=sanitize_text_field($_POST['home_font_family']);
			$current_options['spa_home_Title']['home_font_style']=sanitize_text_field($_POST['home_font_style']);
			$current_options['spa_home_Title']['home_color_title']=sanitize_text_field($_POST['home_color_title']);
			//product heading
			$current_options['spa_product_Title']['product_title_px']=sanitize_text_field($_POST['product_title_px']);
			$current_options['spa_product_Title']['product_font_family']=sanitize_text_field($_POST['product_font_family']);
			$current_options['spa_product_Title']['product_font_style']=sanitize_text_field($_POST['product_font_style']);
			$current_options['spa_product_Title']['product_color_title']=sanitize_text_field($_POST['product_color_title']);
			/*update all field*/
			update_option('spa_theme_options' , $current_options);
		}

	}
}
?>

<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="option_home" aria-labelledby="ui-id-5" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">


  
<form method="post" action = ""  id="spa_home_setting">
 <?php wp_nonce_field('spa_customization_nonce_home','spa_home_nonce_customization'); ?> 

 
<div class="option option-input">
<span class="option_tab_title"> <div class="section_heading"><?php _e('Pink Highlight Strip ','sis_spa');?></div></span>

     <h3><?php _e('Line One','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="line_one"  value="<?php  if($current_options['line_one']!='') { echo esc_attr($current_options['line_one']); } ?>">
        </div>
 
    </div>
	   <h3><?php _e('Line Two','sis_spa');?></h3>
	  <div class="section">
        <div class="element">
            <input type="text"  name="line_two" id="subfooter_left_text" value="<?php  if($current_options['line_two']!='') { echo esc_attr($current_options['line_two']); } ?>">
        </div>
 
    </div>
	  
     
    <h3><?php _e('Call us on','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="call_us" id="subfooter_left_text" value="<?php  if($current_options['call_us']!='') { echo esc_attr($current_options['call_us']); } ?>">
        </div>
 
    </div>
	
	   <h3><?php _e('Description','sis_spa');?></h3>
	  <div class="section">
        <div class="element">
		  
            <textarea   name="description" rows="8" > <?php  if($current_options['description']!='') { echo esc_attr($current_options['description']); } ?></textarea>
        </div>
 
    </div>
	

 <div id="option_ver_border"></div>
</div> 

 <!-- home top feature slider image setting-->
 <div class="option option-input">
<span class="option_tab_title"><div class="section_heading"><?php _e('Home Top Feature ','sis_spa');?></div></span>

     <h3><?php _e('Upload Feature Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      
		    <input type="text" value="<?php if($current_options['home_feature']!='') { echo esc_attr($current_options['home_feature']); } ?>" id="home_feature" name="home_feature" size="36" />
            <input type="button" id="upload_button" value="Featured Image" class="upload_image_button"  /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as a FullWidth Featured On Home page','sis_spa');?> 
		  </div>
    </div>
  <div id="option_ver_border">  </div>
 </div>

 
 <!--home page thumbnails setting -->
  <div class="option option-input">
<div class="section_heading"><?php _e('Home Feature Thumbstrip setting ','sis_spa');?></div>

     <h3><?php _e('Upload First Thumb Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['first_thumb_image']!='') { echo esc_attr($current_options['first_thumb_image']); } ?>" id="first_thumb_image" name="first_thumb_image" size="36" />
               <input type="button" id="upload_button" value="Second Thumbnail" class="upload_image_button"  /><br>
           
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used below the FullWidth Feature as featured Thumb','sis_spa');?> 
		 </div>
    </div>
	<!--second thumbnails  -->
	  <h3><?php _e('Upload Second Thumb Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['second_thumb_image']!='') { echo esc_attr($current_options['second_thumb_image']); } ?>" id="second_thumb_image" name="second_thumb_image" size="36" />
               <input type="button" id="upload_button" value="Second Thumbnail" class="upload_image_button" class="upload_button" /><br>
          
        </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used below the FullWidth Feature as featured Thumb','sis_spa');?> 
		 </div>
    </div>
	
	<!--third thumbnails -->
	  <h3><?php _e('Upload Third Thumb Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['third_thumb_image']!='') { echo esc_attr($current_options['third_thumb_image']); } ?>" id="third_thumb_image" name="third_thumb_image" size="36" />
               <input type="button" id="upload_button" value="Third Thumbnail" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used below the FullWidth Feature as featured Thumb','sis_spa');?> 
		 </div>
    </div>
	
	
	
	 <div  id="option_ver_border"> </div>
 </div>

 
 
 
 
<!-- code for site tegline title and content-->            
<div class="option option-input">
<div class="section_heading"><?php _e('Home Page Tegline ','sis_spa');?></div>
    <h3><?php _e('Tagline Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text" class="" name="tagline_title" id="subfooter_left_text" value="<?php if($current_options['tagline_title']!='') { echo esc_attr($current_options['tagline_title']); } ?>"/>
        </div>
	</div>


<div class="option option-textarea">
    <h3><?php _e('Tagline Content','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <textarea name="tagline_contents" rows="8"><?php if($current_options['tagline_contents']!='') { echo esc_textarea($current_options['tagline_contents']); } ?></textarea>
        </div>
    </div>
</div>

 <div  id="option_ver_border"> </div>
 
</div>

<!-- code for the service thumbnail  on home page -->

 <div class="option option-input">
<div class="section_heading"><?php _e('Home page Four Services Section ','sis_spa');?></div>
     <!--service first-->
        <h3><?php _e('First Service Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text" class="" name="service1_title" value="<?php if($current_options['service1_title']!='') { echo esc_attr($current_options['service1_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload First Service Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['service1_image']!='') { echo esc_attr($current_options['service1_image']); } ?>" id="third_thumb_image" name="service1_image" size="36" />
               <input type="button" id="upload_button" value="Service One" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as a Service Image on Home Page','sis_spa');?> 
		 </div>
    </div>

<div class="option option-textarea">
    <h3><?php _e('First Service Content','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <textarea name="service1_content" rows="8">
			<?php if($current_options['service1_content']!='') { echo esc_textarea($current_options['service1_content']); } ?>
			</textarea>
        </div>
    </div>
</div>
  <!-- service two--> 
   
        <h3><?php _e('Second Service Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text" class="" name="service2_title" value="<?php if($current_options['service2_title']!='') { echo esc_attr($current_options['service2_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload Second Service Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['service2_image']!='') { echo esc_attr($current_options['service2_image']); } ?>" id="third_thumb_image" name="service2_image" size="36" />
               <input type="button" id="upload_button" value="Service Two" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as a Service Image on Home Page','sis_spa');?> 
		 </div>
    </div>

<div class="option option-textarea">
    <h3><?php _e('Second Service Content','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <textarea name="service2_content" rows="8">
			<?php if($current_options['service2_content']!='') { echo esc_textarea($current_options['service2_content']); } ?>
			</textarea>
        </div>
    </div>
</div>
   <!-- serive third  part-->
 
		       <h3><?php _e('Third Service Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="service3_title" value="<?php if($current_options['service3_title']!='') { echo esc_attr($current_options['service3_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload Third Service Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['service3_image']!='') { echo esc_attr($current_options['service3_image']); } ?>" id="third_thumb_image" name="service3_image" size="36" />
               <input type="button" id="upload_button" value="Service Three" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as a Service Image on Home Page','sis_spa');?> 
		 </div>
    </div>

<div class="option option-textarea">
    <h3><?php _e('Third Service Content','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <textarea name="service3_content" rows="8">
			<?php if($current_options['service3_content']!='') { echo esc_textarea($current_options['service3_content']); } ?>
			</textarea>
        </div>
    </div>
</div>
<!-- service four section >-->
    	
           <h3><?php _e('Fourth Service Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text" class="" name="service4_title" value="<?php if($current_options['service1_title']!='') { echo esc_attr($current_options['service1_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload First Service Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['service4_image']!='') { echo esc_attr($current_options['service4_image']); } ?>" id="third_thumb_image" name="service4_image" size="36" />
               <input type="button" id="upload_button" value="Service Four" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as a Service Image on Home Page','sis_spa');?> 
		 </div>
    </div>

<div class="option option-textarea">
    <h3><?php _e('Fourth Service Content','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <textarea name="service4_content" rows="8">
			<?php if($current_options['service1_content']!='') { echo esc_textarea($current_options['service1_content']); } ?>
			</textarea>
        </div>
    </div>
</div>
   
   
  <div  id="option_ver_border"> </div>
 </div>  
   
   


<!-- code for product section& tegline title and content--> 
              
<div class="option option-input">
     <div class="section_heading"><?php _e('Home page  Products Section ','sis_spa');?></div>
    <h3><?php _e('Product Heading Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text" name="product_title" id="subfooter_left_text" value="<?php if($current_options['product_title']!='') { echo esc_attr($current_options['product_title']); } ?>"/>
        </div>
	</div>
     



<div class="option option-textarea">
    <h3><?php _e('Product Heading Content','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <textarea name="product_contents" rows="8"><?php if($current_options['product_contents']!='') { echo esc_textarea($current_options['product_contents']); } ?></textarea>
        </div>
    </div>
</div>

<!--prduuct one section>-->
     	       <h3><?php _e('First Product Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="product1_title" value="<?php if($current_options['product1_title']!='') { echo esc_attr($current_options['product1_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload First Product Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['product1_image']!='') { echo esc_attr($current_options['product1_image']); } ?>" id="first_product_image" name="product1_image" size="36" />
               <input type="button" id="upload_button" value="First Product" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as Product Image on home page','sis_spa');?> 
		 </div>
    </div>
   
 <!--product two section-->  
 	        <h3><?php _e('Second Product Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="product2_title" value="<?php if($current_options['product2_title']!='') 
			{ echo esc_attr($current_options['product2_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload Second Product Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['product2_image']!='') 
			  { echo esc_attr($current_options['product2_image']); } ?>" id="second_product_image" name="product2_image" size="36" />
               <input type="button" id="upload_button" value="Second Product" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as Product Image on home page','sis_spa');?> 
		 </div>
    </div>
 <!--product three section -->
 
 	       <h3><?php _e('Third Product Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="product3_title" 
			value="<?php if($current_options['product3_title']!='') { echo esc_attr($current_options['product3_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload Thrid Product Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['product3_image']!='') 
			  { echo esc_attr($current_options['product3_image']); } ?>" id="third_product_image" name="product3_image" size="36" />
               <input type="button" id="upload_button" value="Third Product" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as Product Image on home page','sis_spa');?> 
		 </div>
    </div>
 <!--product four section-->
 	      <h3><?php _e('Fourth Product Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="product4_title" value="<?php if($current_options['product4_title']!='') 
			{ echo esc_attr($current_options['product4_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload Fourth Product Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['product4_image']!='')
			  { echo esc_attr($current_options['product4_image']); } ?>" id="first_product_image" name="product4_image" size="36" />
               <input type="button" id="upload_button" value="fourth Product" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as Product Image on home page','sis_spa');?> 
		 </div>
    </div>
 
 <!-- product five section-->
   
   	        <h3><?php _e('Fifth Product Title','sis_spa');?></h3>

    <div class="section">
        <div class="element">
            <input type="text"  name="product5_title" 
			value="<?php if($current_options['product5_title']!='') { echo esc_attr($current_options['product5_title']); } ?>"/>
        </div>
	</div>
   
       <h3><?php _e('Upload Fifth Product Image','sis_spa');?></h3>
    
    <div class="section">
	  
        <div class="element">
		      <input type="text" value="<?php if($current_options['product5_image']!='') 
			  { echo esc_attr($current_options['product5_image']); } ?>" id="fifth_product_image" name="product5_image" size="36" />
               <input type="button" id="upload_button" value="Fifth Product" class="upload_image_button" class="upload_button" /><br>
         
           </div>
        <div class="description">
          <?php  _e('The placeholder image that will be used as Product Image on home page','sis_spa');?> 
		 </div>
    </div>
</div>
<!-- ending of the product section -->
<!--code for site title-->
<div class="option option-checbox">
    <h3><?php _e('Tagline Settings','sis_spa');?></h3>
</div>
<div class="option option-background-upload">
   <div class="section">
        <div class="element">
                              <?php $home_title_px = $current_options['spa_home_Title']['home_title_px']; ?>
           	                   <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">	
								<select name="home_title_px" class="select">
								<?php 
								for ($i = 21; $i <= 50; $i++) {
								?>
<option value="<?php echo $i; ?>" <?php if ( $home_title_px == $i ) echo selected($home_title_px, $i ); ?>>
<?php echo $i; ?></option>
							   <?php } ?>
							   </select>
							   </div>
							   
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">								   
<select  id="main_home" onchange="return change()" class="select">
                                  <option value="px"><?php _e('px','sis_spa');?></option>
                                
                                </select>
</div>								
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">	
<select id="" name="home_font_family" class="select"><option value="MarketingScript" <?php selected($current_options['spa_home_Title']['home_font_family'], 'MarketingScript' ); ?>>MarketingScript</option><option  value="Verdana, Geneva, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Verdana, Geneva, sans-serif' ); ?>>Verdana</option><option value="Trebuchet MS, Tahoma, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Trebuchet MS, Tahoma, sans-serif' ); ?>>Trebuchet</option><option value="Georgia, serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Georgia, serif' ); ?>>Georgia</option><option value="Times New Roman, serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Times New Roman, serif' ); ?>>Times New Roman</option><option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option><option value="Palatino, Palatino Linotype, serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Palatino, Palatino Linotype, serif' ); ?>>Palatino</option><option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option><option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option><option value="Myriad Pro, Myriad, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option><option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option><option value="Arial Black, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Arial Black, sans-serif' ); ?>>Arial Black</option><option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option><option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option><option value="Impact, Charcoal, sans-serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Impact, Charcoal, sans-serif' ); ?>>Impact</option><option value="Courier, Courier New, monospace" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Courier, Courier New, monospace' ); ?>>Courier</option><option value="">-- Google Fonts --</option><option value="Abel" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Abel' ); ?>>Abel</option><option value="Abril Fatface" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Abril Fatface' ); ?>>Abril Fatface</option><option value="Aclonica" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Aclonica' ); ?>>Aclonica</option><option value="Actor" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Actor' ); ?>>Actor</option><option value="Adamina" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Adamina' ); ?>>Adamina</option><option value="Aldrich" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Aldrich' ); ?>>Aldrich</option><option value="Alice" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Alice' ); ?>>Alice</option><option value="Alike" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Alike' ); ?>>Alike</option><option value="Alike Angular" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Alike Angular' ); ?>>Alike Angular</option><option value="Allan" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Allan' ); ?>>Allan</option><option value="Allerta" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Allerta' ); ?>>Allerta</option><option value="Allerta Stencil" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Allerta Stencil' ); ?>>Allerta Stencil</option><option value="Amaranth" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Amaranth' ); ?>>Amaranth</option><option value="Amatic SC" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Amatic SC' ); ?>>Amatic SC</option><option value="Andada" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Andada' ); ?>>Andada</option><option value="Andika" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Andika' ); ?>>Andika</option><option value="Annie Use Your Telescope" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option><option value="Anonymous Pro" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Anonymous Pro' ); ?>>Anonymous Pro</option><option value="Antic" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Antic' ); ?>>Antic</option><option value="Anton" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Anton' ); ?>>Anton</option><option value="Architects Daughter" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Architects Daughter' ); ?>>Architects Daughter</option><option value="Arimo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Arimo' ); ?>>Arimo</option><option value="Artifika" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Artifika' ); ?>>Artifika</option><option value=
"Arvo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Arvo' ); ?>>Arvo</option><option value="Asset" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Asset' ); ?>>Asset</option><option value="Astloch" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Astloch' ); ?>>Astloch</option><option value="Atomic Age" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Atomic Age' ); ?>>Atomic Age</option><option value="Aubrey" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Aubrey' ); ?>>Aubrey</option><option value="Bangers" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Bangers' ); ?>>Bangers</option><option value="Bentham" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Bentham' ); ?>>Bentham</option><option value="Bevan" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Bevan' ); ?>>Bevan</option><option value="Bigshot One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Bigshot One' ); ?>>Bigshot One</option><option value="Black Ops One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Black Ops One' ); ?>>Black Ops One</option><option value="Bowlby One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Bowlby One' ); ?>>Bowlby One</option><option value="Bowlby One SC" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Bowlby One SC' ); ?>>Bowlby One SC</option><option value="Brawler" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Brawler' ); ?>>Brawler</option><option value="Butcherman Caps" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Butcherman Caps' ); ?>>Butcherman Caps</option><option value="Cabin" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cabin' ); ?>>Cabin</option><option value="Cabin Sketch" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Cabin Sketch" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Calligraffitti" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Calligraffitti' ); ?>>Calligraffitti</option><option value="Candal" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Candal' ); ?>>Candal</option><option value="Cantarell" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cantarell' ); ?>>Cantarell</option><option value="Cardo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cardo' ); ?>>Cardo</option><option value="Carme" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Carme' ); ?>>Carme</option><option value="Carter One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Carter One' ); ?>>Carter One</option><option value="Caudex" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Caudex' ); ?>>Caudex</option><option value="Cedarville Cursive" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cedarville Cursive' ); ?>>Cedarville Cursive</option><option value="Changa One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Changa One' ); ?>>Changa One</option><option value="Cherry Cream Soda" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option><option value="Chewy" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Chewy' ); ?>>Chewy</option><option value="Chivo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Chivo' ); ?>>Chivo</option><option value="Coda" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Coda' ); ?>>Coda</option><option value="Comfortaa" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Comfortaa' ); ?>>Comfortaa</option><option value="Coming Soon" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Coming Soon' ); ?>>Coming Soon</option><option value="Contrail One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Contrail One' ); ?>>Contrail One</option><option value="Copse" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Copse' ); ?>>Copse</option><option value="Corben" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Corben' ); ?>>Corben</option><option value="Corben" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Corben' ); ?>>Corben</option><option value="Cousine" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cousine' ); ?>>Cousine</option><option value="Coustard" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Coustard' ); ?>>Coustard</option><option value="Covered By Your Grace" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Covered By Your Grace' ); ?>>Covered By Your Grace</option><option value="Crafty Girls" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Crafty Girls' ); ?>>Crafty Girls</option><option value="Creepster Caps" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Creepster Caps' ); ?>>Creepster Caps</option><option value="Crimson Text" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Crimson Text' ); ?>>Crimson Text</option><option value="Crushed" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Crushed' ); ?>>Crushed</option><option value="Cuprum" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Cuprum' ); ?>>Cuprum</option><option value="Damion" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Damion' ); ?>>Damion</option><option value="Dancing Script" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Dancing Script' ); ?>>Dancing Script</option><option value="Dawning of a New Day" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Dawning of a New Day' ); ?>>Dawning of a New Day</option><option value="Days One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Days One' ); ?>>Days One</option><option value="Delius" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Delius' ); ?>>Delius</option><option value="Delius Swash Caps" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Delius Swash Caps' ); ?>>Delius Swash Caps</option><option value="Delius Unicase" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Delius Unicase' ); ?>>Delius Unicase</option><option value="Didact Gothic" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Didact Gothic' ); ?>>Didact Gothic</option><option value="Dorsa" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Dorsa' ); ?>>Dorsa</option><option value="Droid Sans" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Droid Sans' ); ?>>Droid Sans</option><option value="Droid Sans Mono" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Droid Sans Mono' ); ?>>Droid Sans Mono</option><option value="Droid Serif" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Droid Serif' ); ?>>Droid Serif</option><option value="EB Garamond" <?php selected($current_options['spa_home_Title']['home_font_family'], 'EB Garamond' ); ?>>EB Garamond</option><option value="Eater Caps" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Eater Caps' ); ?>>Eater Caps</option><option value="Expletus Sans" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Expletus Sans' ); ?>>Expletus Sans</option><option value="Fanwood Text" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Fanwood Text' ); ?>>Fanwood Text</option><option value="Federant" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Federant' ); ?>>Federant</option><option value="Federo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Federo' ); ?>>Federo</option><option value="Fontdiner Swanky" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option><option value="Forum" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Forum' ); ?>>Forum</option><option value="Francois One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Francois One' ); ?>>Francois One</option><option value="Gentium Book Basic" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Gentium Book Basic' ); ?>>Gentium Book Basic</option><option value="Geo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Geo' ); ?>>Geo</option><option value="Geostar" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Geostar' ); ?>>Geostar</option><option value="Geostar Fill" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Geostar Fill' ); ?>>Geostar Fill</option><option value="Give You Glory" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Give You Glory' ); ?>>Give You Glory</option><option value="Gloria Hallelujah" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option><option value="Goblin One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Goblin One' ); ?>>Goblin One</option><option value="Gochi Hand" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Gochi Hand' ); ?>>Gochi Hand</option><option value="Goudy Bookletter 1911" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option><option value="Gravitas One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Gravitas One' ); ?>>Gravitas One</option><option value="Gruppo" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Gruppo' ); ?>>Gruppo</option><option value="Hammersmith One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Hammersmith One' ); ?>>Hammersmith One</option><option value="Holtwood One SC" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Holtwood One SC' ); ?>>Holtwood One SC</option><option value="Homemade Apple" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Homemade Apple' ); ?>>Homemade Apple</option><option value="IM Fell DW Pica" <?php selected($current_options['spa_home_Title']['home_font_family'], 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option><option value="IM Fell English" <?php selected($current_options['spa_home_Title']['home_font_family'], 'IM Fell English' ); ?>>IM Fell English</option><option value="IM Fell English SC" <?php selected($current_options['spa_home_Title']['home_font_family'], 'IM Fell English SC' ); ?>>IM Fell English SC</option><option value="Inconsolata" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Inconsolata' ); ?>>Inconsolata</option><option value="Indie Flower" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Indie Flower' ); ?>>Indie Flower</option><option value="Irish Grover" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Irish Grover' ); ?>>Irish Grover</option><option value="Irish Growler" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Irish Growler' ); ?>>Irish Growler</option><option value="Istok Web" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Istok Web' ); ?>>Istok Web</option><option value="Jockey One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Jockey One' ); ?>>Jockey One</option><option value="Josefin Sans" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Josefin Sans' ); ?>>Josefin Sans</option><option value="Josefin Slab" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Josefin Slab' ); ?>>Josefin Slab</option><option value="Judson" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Judson' ); ?>>Judson</option><option value="Julee" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Julee' ); ?>>Julee</option><option value="Jura" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Jura' ); ?>>Jura</option><option value="Just Another Hand" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Just Another Hand' ); ?>>Just Another Hand</option><option value="Just Me Again Down Here" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option><option value="Kameron" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Kameron' ); ?>>Kameron</option><option value="Kelly Slab" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Kelly Slab' ); ?>>Kelly Slab</option><option value="Kenia" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Kenia' ); ?>>Kenia</option><option value="Kranky" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Kranky' ); ?>>Kranky</option><option value="Kreon" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Kreon' ); ?>>Kreon</option><option value="Kristi" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Kristi' ); ?>>Kristi</option><option value="La Belle Aurore" <?php selected($current_options['spa_home_Title']['home_font_family'], 'La Belle Aurore' ); ?>>La Belle Aurore</option><option value="Lato" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Lato' ); ?>>Lato</option><option value="League Script" <?php selected($current_options['spa_home_Title']['home_font_family'], 'League Script' ); ?>>League Script</option><option value="Leckerli One" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Leckerli One' ); ?>>Leckerli One</option><option value="Lekton" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Lekton' ); ?>>Lekton</option><option value="Limelight" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Limelight' ); ?>>Limelight</option><option value="Linden Hill" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Linden Hill' ); ?>>Linden Hill</option><option value="Lobster" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Lobster' ); ?>>Lobster</option><option value="Lobster Two" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Lobster Two' ); ?>>Lobster Two</option><option value="Lora" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Lora' ); ?>>Lora</option><option value="Love Ya Like A Sister" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option><option value="Loved by the King" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Loved by the King' ); ?>>Loved by the King</option><option value="Luckiest Guy" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Luckiest Guy' ); ?>>Luckiest Guy</option><option value="Maiden Orange" <?php selected($current_options['spa_home_Title']['home_font_family'], 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>


<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">	
<select id="" name="home_font_style" class="select"><option value="normal" <?php selected($current_options['spa_home_Title']['home_font_style'], 'normal' ); ?>>Normal</option><option  value="italic" <?php selected($current_options['spa_home_Title']['home_font_style'], 'italic' ); ?>>Italic</option></select>								
</div>						
								
            
       </div>
      </div>
</div>
<!-- code for product heading setting-->

<div class="option option-checbox">
    <h3><?php _e('Product Heading Settings','sis_spa');?></h3>
</div>
<div class="option option-background-upload">
   <div class="section">
        <div class="element">
                              <?php $product_title_px = $current_options['spa_product_Title']['product_title_px']; ?>
           	                   <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">	
								<select name="product_title_px" class="select">
								<?php 
								for ($i = 21; $i <= 50; $i++) {
								?>
<option value="<?php echo $i; ?>" <?php if ( $product_title_px == $i ) echo selected($product_title_px, $i ); ?>>
<?php echo $i; ?></option>
							   <?php } ?>
							   </select>
							   </div>
							   
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">								   
<select  id="main_home" onchange="return change()" class="select">
                                  <option value="px"><?php _e('px','sis_spa');?></option>
                                
                                </select>
</div>								
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">	
<select id="" name="product_font_family" class="select"><option value="MarketingScript" <?php selected($current_options['spa_product_Title']['product_font_family'], 'MarketingScript' ); ?>>MarketingScript</option><option  value="Verdana, Geneva, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Verdana, Geneva, sans-serif' ); ?>>Verdana</option><option value="Trebuchet MS, Tahoma, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Trebuchet MS, Tahoma, sans-serif' ); ?>>Trebuchet</option><option value="Georgia, serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Georgia, serif' ); ?>>Georgia</option><option value="Times New Roman, serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Times New Roman, serif' ); ?>>Times New Roman</option><option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option><option value="Palatino, Palatino Linotype, serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Palatino, Palatino Linotype, serif' ); ?>>Palatino</option><option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option><option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option><option value="Myriad Pro, Myriad, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option><option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option><option value="Arial Black, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Arial Black, sans-serif' ); ?>>Arial Black</option><option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option><option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option><option value="Impact, Charcoal, sans-serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Impact, Charcoal, sans-serif' ); ?>>Impact</option><option value="Courier, Courier New, monospace" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Courier, Courier New, monospace' ); ?>>Courier</option><option value="">-- Google Fonts --</option><option value="Abel" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Abel' ); ?>>Abel</option><option value="Abril Fatface" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Abril Fatface' ); ?>>Abril Fatface</option><option value="Aclonica" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Aclonica' ); ?>>Aclonica</option><option value="Actor" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Actor' ); ?>>Actor</option><option value="Adamina" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Adamina' ); ?>>Adamina</option><option value="Aldrich" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Aldrich' ); ?>>Aldrich</option><option value="Alice" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Alice' ); ?>>Alice</option><option value="Alike" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Alike' ); ?>>Alike</option><option value="Alike Angular" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Alike Angular' ); ?>>Alike Angular</option><option value="Allan" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Allan' ); ?>>Allan</option><option value="Allerta" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Allerta' ); ?>>Allerta</option><option value="Allerta Stencil" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Allerta Stencil' ); ?>>Allerta Stencil</option><option value="Amaranth" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Amaranth' ); ?>>Amaranth</option><option value="Amatic SC" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Amatic SC' ); ?>>Amatic SC</option><option value="Andada" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Andada' ); ?>>Andada</option><option value="Andika" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Andika' ); ?>>Andika</option><option value="Annie Use Your Telescope" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option><option value="Anonymous Pro" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Anonymous Pro' ); ?>>Anonymous Pro</option><option value="Antic" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Antic' ); ?>>Antic</option><option value="Anton" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Anton' ); ?>>Anton</option><option value="Architects Daughter" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Architects Daughter' ); ?>>Architects Daughter</option><option value="Arimo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Arimo' ); ?>>Arimo</option><option value="Artifika" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Artifika' ); ?>>Artifika</option><option value=
"Arvo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Arvo' ); ?>>Arvo</option><option value="Asset" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Asset' ); ?>>Asset</option><option value="Astloch" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Astloch' ); ?>>Astloch</option><option value="Atomic Age" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Atomic Age' ); ?>>Atomic Age</option><option value="Aubrey" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Aubrey' ); ?>>Aubrey</option><option value="Bangers" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Bangers' ); ?>>Bangers</option><option value="Bentham" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Bentham' ); ?>>Bentham</option><option value="Bevan" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Bevan' ); ?>>Bevan</option><option value="Bigshot One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Bigshot One' ); ?>>Bigshot One</option><option value="Black Ops One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Black Ops One' ); ?>>Black Ops One</option><option value="Bowlby One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Bowlby One' ); ?>>Bowlby One</option><option value="Bowlby One SC" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Bowlby One SC' ); ?>>Bowlby One SC</option><option value="Brawler" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Brawler' ); ?>>Brawler</option><option value="Butcherman Caps" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Butcherman Caps' ); ?>>Butcherman Caps</option><option value="Cabin" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cabin' ); ?>>Cabin</option><option value="Cabin Sketch" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Cabin Sketch" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Calligraffitti" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Calligraffitti' ); ?>>Calligraffitti</option><option value="Candal" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Candal' ); ?>>Candal</option><option value="Cantarell" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cantarell' ); ?>>Cantarell</option><option value="Cardo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cardo' ); ?>>Cardo</option><option value="Carme" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Carme' ); ?>>Carme</option><option value="Carter One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Carter One' ); ?>>Carter One</option><option value="Caudex" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Caudex' ); ?>>Caudex</option><option value="Cedarville Cursive" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cedarville Cursive' ); ?>>Cedarville Cursive</option><option value="Changa One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Changa One' ); ?>>Changa One</option><option value="Cherry Cream Soda" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option><option value="Chewy" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Chewy' ); ?>>Chewy</option><option value="Chivo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Chivo' ); ?>>Chivo</option><option value="Coda" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Coda' ); ?>>Coda</option><option value="Comfortaa" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Comfortaa' ); ?>>Comfortaa</option><option value="Coming Soon" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Coming Soon' ); ?>>Coming Soon</option><option value="Contrail One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Contrail One' ); ?>>Contrail One</option><option value="Copse" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Copse' ); ?>>Copse</option><option value="Corben" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Corben' ); ?>>Corben</option><option value="Corben" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Corben' ); ?>>Corben</option><option value="Cousine" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cousine' ); ?>>Cousine</option><option value="Coustard" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Coustard' ); ?>>Coustard</option><option value="Covered By Your Grace" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Covered By Your Grace' ); ?>>Covered By Your Grace</option><option value="Crafty Girls" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Crafty Girls' ); ?>>Crafty Girls</option><option value="Creepster Caps" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Creepster Caps' ); ?>>Creepster Caps</option><option value="Crimson Text" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Crimson Text' ); ?>>Crimson Text</option><option value="Crushed" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Crushed' ); ?>>Crushed</option><option value="Cuprum" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Cuprum' ); ?>>Cuprum</option><option value="Damion" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Damion' ); ?>>Damion</option><option value="Dancing Script" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Dancing Script' ); ?>>Dancing Script</option><option value="Dawning of a New Day" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Dawning of a New Day' ); ?>>Dawning of a New Day</option><option value="Days One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Days One' ); ?>>Days One</option><option value="Delius" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Delius' ); ?>>Delius</option><option value="Delius Swash Caps" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Delius Swash Caps' ); ?>>Delius Swash Caps</option><option value="Delius Unicase" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Delius Unicase' ); ?>>Delius Unicase</option><option value="Didact Gothic" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Didact Gothic' ); ?>>Didact Gothic</option><option value="Dorsa" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Dorsa' ); ?>>Dorsa</option><option value="Droid Sans" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Droid Sans' ); ?>>Droid Sans</option><option value="Droid Sans Mono" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Droid Sans Mono' ); ?>>Droid Sans Mono</option><option value="Droid Serif" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Droid Serif' ); ?>>Droid Serif</option><option value="EB Garamond" <?php selected($current_options['spa_product_Title']['product_font_family'], 'EB Garamond' ); ?>>EB Garamond</option><option value="Eater Caps" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Eater Caps' ); ?>>Eater Caps</option><option value="Expletus Sans" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Expletus Sans' ); ?>>Expletus Sans</option><option value="Fanwood Text" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Fanwood Text' ); ?>>Fanwood Text</option><option value="Federant" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Federant' ); ?>>Federant</option><option value="Federo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Federo' ); ?>>Federo</option><option value="Fontdiner Swanky" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option><option value="Forum" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Forum' ); ?>>Forum</option><option value="Francois One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Francois One' ); ?>>Francois One</option><option value="Gentium Book Basic" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Gentium Book Basic' ); ?>>Gentium Book Basic</option><option value="Geo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Geo' ); ?>>Geo</option><option value="Geostar" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Geostar' ); ?>>Geostar</option><option value="Geostar Fill" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Geostar Fill' ); ?>>Geostar Fill</option><option value="Give You Glory" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Give You Glory' ); ?>>Give You Glory</option><option value="Gloria Hallelujah" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option><option value="Goblin One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Goblin One' ); ?>>Goblin One</option><option value="Gochi Hand" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Gochi Hand' ); ?>>Gochi Hand</option><option value="Goudy Bookletter 1911" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option><option value="Gravitas One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Gravitas One' ); ?>>Gravitas One</option><option value="Gruppo" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Gruppo' ); ?>>Gruppo</option><option value="Hammersmith One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Hammersmith One' ); ?>>Hammersmith One</option><option value="Holtwood One SC" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Holtwood One SC' ); ?>>Holtwood One SC</option><option value="Homemade Apple" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Homemade Apple' ); ?>>Homemade Apple</option><option value="IM Fell DW Pica" <?php selected($current_options['spa_product_Title']['product_font_family'], 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option><option value="IM Fell English" <?php selected($current_options['spa_product_Title']['product_font_family'], 'IM Fell English' ); ?>>IM Fell English</option><option value="IM Fell English SC" <?php selected($current_options['spa_product_Title']['product_font_family'], 'IM Fell English SC' ); ?>>IM Fell English SC</option><option value="Inconsolata" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Inconsolata' ); ?>>Inconsolata</option><option value="Indie Flower" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Indie Flower' ); ?>>Indie Flower</option><option value="Irish Grover" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Irish Grover' ); ?>>Irish Grover</option><option value="Irish Growler" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Irish Growler' ); ?>>Irish Growler</option><option value="Istok Web" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Istok Web' ); ?>>Istok Web</option><option value="Jockey One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Jockey One' ); ?>>Jockey One</option><option value="Josefin Sans" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Josefin Sans' ); ?>>Josefin Sans</option><option value="Josefin Slab" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Josefin Slab' ); ?>>Josefin Slab</option><option value="Judson" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Judson' ); ?>>Judson</option><option value="Julee" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Julee' ); ?>>Julee</option><option value="Jura" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Jura' ); ?>>Jura</option><option value="Just Another Hand" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Just Another Hand' ); ?>>Just Another Hand</option><option value="Just Me Again Down Here" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option><option value="Kameron" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Kameron' ); ?>>Kameron</option><option value="Kelly Slab" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Kelly Slab' ); ?>>Kelly Slab</option><option value="Kenia" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Kenia' ); ?>>Kenia</option><option value="Kranky" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Kranky' ); ?>>Kranky</option><option value="Kreon" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Kreon' ); ?>>Kreon</option><option value="Kristi" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Kristi' ); ?>>Kristi</option><option value="La Belle Aurore" <?php selected($current_options['spa_product_Title']['product_font_family'], 'La Belle Aurore' ); ?>>La Belle Aurore</option><option value="Lato" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Lato' ); ?>>Lato</option><option value="League Script" <?php selected($current_options['spa_product_Title']['product_font_family'], 'League Script' ); ?>>League Script</option><option value="Leckerli One" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Leckerli One' ); ?>>Leckerli One</option><option value="Lekton" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Lekton' ); ?>>Lekton</option><option value="Limelight" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Limelight' ); ?>>Limelight</option><option value="Linden Hill" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Linden Hill' ); ?>>Linden Hill</option><option value="Lobster" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Lobster' ); ?>>Lobster</option><option value="Lobster Two" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Lobster Two' ); ?>>Lobster Two</option><option value="Lora" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Lora' ); ?>>Lora</option><option value="Love Ya Like A Sister" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option><option value="Loved by the King" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Loved by the King' ); ?>>Loved by the King</option><option value="Luckiest Guy" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Luckiest Guy' ); ?>>Luckiest Guy</option><option value="Maiden Orange" <?php selected($current_options['spa_product_Title']['product_font_family'], 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>


<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">	
<select id="" name="product_font_style" class="select"><option value="normal" <?php selected($current_options['spa_product_Title']['product_font_style'], 'normal' ); ?>>Normal</option><option  value="italic" <?php selected($current_options['spa_product_Title']['product_font_style'], 'italic' ); ?>>Italic</option></select>								
</div>						
	
 
  
 
  
       </div>
	  
      </div>
	    
</div>	 
<!--end if product setting-->


 <input type="hidden" value="1" id="spa_home_settings_save" name="spa_home_settings_save" />
<input type="button" class="button-framework save-options"  value= "<?php _e('Save Changes', 'sis_spa');?>" onclick="datasave_homesetting()"/>									
<input type="button" class="button-framework reset"   value="<?php _e('Restore Defaults','sis_spa');?>" onclick="reset_data_homesetting()" />
<div id="success_message_reset_home" style="display:none;width:300px;padding-left:150px;"><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/spa_option_pannel/icon_check1.png" /><?php _e('Data reset sucessfully','sis_spa'); ?></div>
<div id="success_message_save_home" style="display:none;width:300px;padding-left:150px;"><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/spa_option_pannel/icon_check1.png" /><?php _e('Data save sucessfully','sis_spa'); ?></div>	

</form>
</div>
<style>
#success_message_reset_home{
   display: none;
   margin: 15px 8px 0px 1px;
   padding: 13px 0px 15px 52px;
   background: url("../images/icon_check.png") left no-repeat #5f5f5f;
   /*opacity:0.5;
   filter:alpha(opacity=50);*/
   background-position: 15px 15px;
   border: solid 1px #F22853;
   -webkit-border-radius: 15px;
   -moz-border-radius: 15px;
   border-radius: 15px;
   width: 220px;
   font-size: 20px;
   color: #ffffff;
   position: absolute;
   left: 500px;
   bottom: 20px;
   
}		
#success_message_save_home {
   display: none;
   margin: 15px 8px 0px 1px;
   padding: 13px 0px 15px 52px;
   background: url("../images/icon_check.png") left no-repeat #5f5f5f;

   background-position: 15px 15px;
   border: solid 1px #F22853;
   -webkit-border-radius: 15px;
   -moz-border-radius: 15px;
   border-radius: 15px;
   width: 220px;
   font-size: 20px;
   color: #ffffff;
   position: absolute;
   left: 500px;
   bottom: 20px;
   
}
</style>
<?php
if(isset($_POST['spa_home_settings_save']))
{
	if($_POST['spa_home_settings_save'] == 2) 
	{
			$current_options['tagline_title']=__('Spa enter your custom title for the homepage tagline','sis_spa');
			$current_options['tagline_contents']=__('A spa WordPress theme for All Wordpress Lover. This is Best Blogging theme.','sis_spa');
			$current_options['spa_home_Title']['home_title_px']='21';
			$current_options['spa_home_Title']['home_font_family']='Georgia,Times New Roman,Times,serif;';
			$current_options['spa_home_Title']['home_font_style']='Normal';
			$current_options['spa_home_Title']['home_color_title']='#000000';
			$current_options['Highlight_title']=__('Highlight Title','sis_spa');
			$current_options['latestreview']=__('Latest Update','sis_spa');
			update_option('spa_theme_options' , $current_options);
	}
}	
?>	
		
		