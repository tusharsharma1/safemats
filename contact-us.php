	<?php
 //  	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'init.php');
 //  	auth();
	// if( isset( $_SESSION['userData']  ))
 // 	{
		//echo 'caseData:<pre>';
		/*
		$contact_us = $_api->getCaseContactUs( $_SESSION['userData'] )->data;
 		//print_r($contact_us);
	 	if (isset($contact_us) && isset( $contact_us->opening_hours))
	 	{
			$opening_hours=json_decode($contact_us->opening_hours);
	
  			$session->setMenuStatus( true );
  
  		echo "CONTACT US:<pre>";
  		print_r($contact_us);
  		echo "</pre>";  */
	  	$contact_data = array('
		  	id' => '37',
		    'phone' => '0192 657 4489',
		    'address' => '040, Edward Street, Redditch, Worcestershire, B976HA',
		    'opening_hours' =>array(
		    	array('day'=>1,'time_open'=>'9am','time_closed'=>'5pm'),
			    array('day'=>2,'time_open'=>'9am','time_closed'=>'5pm'),
			    array('day'=>3,'time_open'=>'9am','time_closed'=>'5pm'),
			    array('day'=>4,'time_open'=>'9am','time_closed'=>'5pm'),
			    array('day'=>5,'time_open'=>'9am','time_closed'=>'5pm'),
			    array('day'=>6,'time_open'=>'closed','time_closed'=>''),
			    array('day'=>7,'time_open'=>'closed','time_closed'=>'')
		    ),
	    );
	  	$contact_data = (object) $contact_data;
	  	// echo '<pre>';
	  	// print_r($contact_data);
	  	// echo '</pre>';

?>
	<?php //require_once('header.php'); ?>



	<!DOCTYPE html>
<html lang="en">
  <head>
<?php define(SITE_URL,'http://infugintesting.com/webapp/web/')?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Roberts Jackson</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo SITE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo SITE_URL; ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo SITE_URL; ?>assets/css/style-mobile.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo SITE_URL; ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
  </head>

  <?php
    $bodyCls = $currentPage == 'dashboard' || $currentPage == 'message-document' ? NULL : ' class="white-bg" ' ;
  ?>

  <body <?php echo $bodyCls; ?>>

   	<?php //include(dirname(__FILE__) . DS . 'msg-inc.php'); ?>
  <!-- Begin page content -->
  

    <section>

      <div class="container-fluid full-width">
      

        <?php include(dirname(__FILE__) . DS . 'msg-inc.php'); ?>
        
        <div class="main_content_margin">
			<div class="row">
					<div class="col-md-6 col-sm-12">
						<form name="contact-form" id="contact-form" method="post" class="margin-row" method="post" enctype="multipart/form-data">
				    	<!--    <input type="hidden" name="redirect" value="<?php// echo $redirectTo; ?>" /> -->
				        	<div class="form-line">
				            	<h3 class="contact_heading">The best way to contact us is via a direct secure message</h3>
								<div class="form-group">
							  		<label>Subject</label>
									<input type="text" class="form-control" id="" placeholder=" Enter Subject">
								 </div>
								 <div class="form-group">
							  		<label> Message</label>
							  		<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
							  	</div>
				                <div class="col-md-12 padd_0 col-sm-12 col-xs-12">
				                	<div class="col-md-8 col-xs-12 padd_0 col-sm-9">
					  					<label class="col-md-4 padd_0 col-sm-12 col-sm-4">Add Attachments</label>
					  					<ul class="list_attachment padd_0 col-sm-6">
					  						<li>
					  							<a href="javascript:;" id="att1_dg" onclick="show_attachment(this.id);">
					  								<img class="" src="<?php echo SITE_URL;?>/assets/img/attechment_blu.png">
					  							</a>
					  							<input type="file" id="att1_dg_btn" name="att1_dg_btn" class="browser_btn" onchange="file_selected(this.id);" />
					  						</li>
					  						<li>
					  							<a href="javascript:;" id="att2_dg" onclick="show_attachment(this.id);">
					  								<img class="" src="<?php echo SITE_URL;?>/assets/img/attechment_blu.png">
					  							</a>
					  							<input type="file" id="att2_dg_btn" name="att2_dg_btn" class="browser_btn" onchange="file_selected(this.id);" />					  							
					  						</li>
					  						<li>
					  							<a href="javascript:;" id="att3_dg" onclick="show_attachment(this.id);">
					  								<img class=" defult_att" src="<?php echo SITE_URL;?>/assets/img/attechment_blu.png">
					  							</a>
					  							<input type="file" id="att3_dg_btn" name="att3_dg_btn" class="browser_btn" onchange="file_selected(this.id);" />					  							
					  						</li>

					  					</ul>
					  					
					  				</div>
					  				<div class="col-md-4 padd_0 text-right col-xs-12 col-sm-3">
					  					<button type="button" class="btn btn-default submit insubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
					  				</div>
							  	</div>
							  </div>
							  
			    		</form>
			    		<div class="contact_btm_mobile">
			    			<div class="col-xs-12">
				    			<ul class="padd_0">
				    				<li>
				    					<a href="#"><img class="" src="<?php echo SITE_URL;?>/assets/img/phone.png">  Call Us</a>
				    				</li>
				    				<li>
				    					<a href="https://www.google.co.in/maps/place/40+Edward+St,+Redditch+B97+6HA,+UK/@52.3073786,-1.9491037,17z/data=!3m1!4b1!4m5!3m4!1s0x4870c035c9fed995:0xa0c9a2286d82e93b!8m2!3d52.3073786!4d-1.946915"><img class="" src="<?php echo SITE_URL;?>/assets/img/map.png"> Find Us</a>
				    				</li>
				    			</ul>
				    		</div>
			    		</div>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12 btm_box_contact">
						<h3 class="contact_heading">Alternatively you can always give us a call or write to us</h3>
						
							<div class="col-md-4 padd_0 second_lnk_s col-sm-3">
								 <img class="imgpadleft20" src="<?php echo SITE_URL;?>/assets/img/phone.png">
									<!-- <span class="adressc"> 0800 001 4496</span> -->
								<span class="adressc">
									<?php echo isset($contact_data->phone)?$contact_data->phone:'' ?>
								</span>
						  	</div>
						    <div class="col-md-8 second_lnk_s2 col-sm-8">
						    <a href="https://www.google.co.in/maps/place/40+Edward+St,+Redditch+B97+6HA,+UK/@52.3073786,-1.9491037,17z/data=!3m1!4b1!4m5!3m4!1s0x4870c035c9fed995:0xa0c9a2286d82e93b!8m2!3d52.3073786!4d-1.946915">
								<img class="imgpadleft20" src="<?php echo SITE_URL;?>/assets/img/map.png">

								<!-- Sandfield House, Water Ln, Wilmslow SK9 5AR -->
								<span class="adressc">
									<?php echo isset($contact_data->address)?$contact_data->address:'' ?>
								</span>
							</a>
						  	</div>
						
						<div class="col-md-12 margintopbtm40">
							<div class="padd_0 singleline"></div>
						</div>
<?php
	  	// echo '<pre>';
	  	// print_r($contact_data);
	  	// echo '</pre>';

?>
						<div class="col-md-8 padd_0 col-sm-12" id="open_hours">
							<label class="opn_hour">Open Hours</label>
							<span class="right-border" style=""></span>
							<div class="col-md-3 colordark desk_view padl0" style="">Monday</div>
							<div class="col-md-3 colordark padl0 tabl_view">Mon</div>
							<div class="col-md-3 colorsoft">
							<?php 
								if(isset($contact_data->opening_hours[0])){
									echo $contact_data->opening_hours[0]['time_open'].'-'.$contact_data->opening_hours[0]['time_closed']; 
								} else {
									echo 'N/A';
								}
							?>
							</div>

							<div class="col-md-3 colordark desk_view">Tuesday</div>
							<div class="col-md-3 colordark padl0 tabl_view" style="width: 25px;">Tue</div>
							<div class="col-md-3 colorsoft">
								<?php 
									if(isset($contact_data->opening_hours[1])){
										echo $contact_data->opening_hours[1]['time_open'].'-'.$contact_data->opening_hours[1]['time_closed']; 
									} else {
										echo 'N/A';
									}
								?>
							</div>

							<div class="col-md-3 colordark desk_view padl0">Wednesday</div>
							<div class="col-md-3 colordark padl0 tabl_view">Wed</div>
							<div class="col-md-3 colorsoft">
								<?php 
									if(isset($contact_data->opening_hours[2])){
										echo $contact_data->opening_hours[2]['time_open'].'-'.$contact_data->opening_hours[2]['time_closed']; 
									} else {
										echo 'N/A';
									}
								?>
							</div>

							<div class="col-md-3 colordark desk_view">Thursday</div>
							<div class="col-md-3 colordark padl0 tabl_view" style="width: 25px;">Thu</div>
							<div class="col-md-3 colorsoft">
								<?php 
									if(isset($contact_data->opening_hours[3])){
										echo $contact_data->opening_hours[3]['time_open'].'-'.$contact_data->opening_hours[3]['time_closed']; 
									} else {
										echo 'N/A';
									}
								?>
							</div>

							<div class="col-md-3 colordark desk_view padl0">Friday</div>
							<div class="col-md-3 colordark padl0 tabl_view" style="width: 21px;">Fri</div>
							<div class="col-md-3 colorsoft">
								<?php 
									if(isset($contact_data->opening_hours[4])){
										echo $contact_data->opening_hours[4]['time_open'].'-'.$contact_data->opening_hours[4]['time_closed']; 
									} else {
										echo 'N/A';
									}
								?>
							</div>

							<div class="col-md-3 colordark desk_view">Saturday</div>
							<div class="col-md-3 colordark padl0 tabl_view" style="width: 25px;">Sat</div>
							<div class="col-md-3 colorsoft" style="width: 43px;">
								<?php 
									if(isset($contact_data->opening_hours[5])){
										echo $contact_data->opening_hours[5]['time_open'].' '.$contact_data->opening_hours[5]['time_closed']; 
									} else {
										echo 'N/A';
									}
								?>
							</div>

							<div class="col-md-3 colordark desk_view padl0">Sunday</div>
							<div class="col-md-3 colordark padl0 tabl_view" style="width: 28px;">Sun</div>
							<div class="col-md-3 colorsoft">
								<?php 
									if(isset($contact_data->opening_hours[6])){
										echo $contact_data->opening_hours[6]['time_open'].' '.$contact_data->opening_hours[6]['time_closed']; 
									} else {
										echo 'N/A';
									}
								?>
							</div>
						</div>

					</div>
			</div>
        </div>

       
 		
      </div><!-- /.container-fluid .full-width -->

    </section>
    
 <?php 
	 //} 
	//}?>
 <script type="text/javascript">
 	function show_attachment(thisid) {
 		var upload_img = "<?php echo SITE_URL;?>assets/img/one_attechment_gr.png";
 		// alert(upload_img);
 		// jQuery('#'+thisid).html('<img href="javascript:;" id="'+thisid+'" src="'+upload_img+'" alt=""/>');
 		// jQuery('#'+thisid).
 		// jQuery('.defult_att').
 		jQuery('#'+thisid).parent().find('input').click();
 	}
 	function file_selected(thisid) {
 		var upload_img = "<?php echo SITE_URL;?>assets/img/one_attechment_gr.png";
 		jQuery('#'+thisid).parent().find('a').html('<img href="javascript:;" id="'+thisid+'" src="'+upload_img+'" alt=""/>');
 		//jQuery('#'+thisid).html('<img href="javascript:;" id="'+thisid+'" src="'+upload_img+'" alt=""/>');
 	}
 </script>   
<?php //require_once('footer.php'); ?>