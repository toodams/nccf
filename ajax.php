<?php

//ajax.php

 

include('controller.php');


$control = new controller;


date_default_timezone_set('Africa/Lagos');

$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));
$datetime = date("Y-m-d");


if(isset($_POST['page']))
{
	if($_POST['page'] == 'calendar_index')
	{
		if($_POST['action'] == 'load_sermon')
		{
			if($_POST['sermon_id'] == '')
			{
				$control->query = "
				SELECT * FROM sermon_table 
				WHERE date = '$datetime' 
				ORDER BY id ASC 
				LIMIT 1
				";
			}
			else
			{
				$control->query = "
				SELECT * FROM sermon_table 
				WHERE date = '".$_POST["sermon_id"]."'
                ORDER BY id ASC 
				LIMIT 1
				";
			}

			$total_row = $control->total_row();
			

			$output = '';

			if($total_row > 0){
				
				$result = $control->query_result();
				foreach($result as $row)
				{
					if($row["sermon_audio"] !== '')
					{
						$output .= '
										
										<div class="animate__animated animate__backInLeft">
											<div class="top-sermon-wrap">
												<div class="top-show-cal">
													<p><i class="far fa-calendar"></i>Devotional</p>
												</div>
											
												<br />
												<div>'.$row["sermon_body"].'</div>
												<br />
												<br />
												<div class="sermon-play-audio animate__animated animate__backInUp">
													<audio controls>
														<source src="
																	'.$row["sermon_audio"].'
																	"
																type="audio/mpeg">
														<source src="
																	'.$row["sermon_audio"].'
																	"
																type="audio/ogg">
													</audio>
												</div>
												<br />
											</div>
										</div>
									';
					}else{
						$output .= '
										
										<div class="animate__animated animate__backInLeft">'.$row["sermon_body"].'</div>
										<hr />
										
										<br />
										<div class="row">
										
										</div>
									';
					}
					

				}
			}
			
			
			if($total_row == 0){
				$output .= '
					
					<div id="single_sermon_area" class="animate__animated animate__swing">
												
						<div class="top-show-cal-wrap">
							<div class="top-show-cal">
								<p><i class="fas fa-info-circle"></i>Waiting for Devotion</p>
							</div>
							<div class="top-sub-cal">
								<div class="image-cal">
									<img src="image/img2.jpg" alt="">
								</div>
								<div class="sub-area">
									<h1>Start Your Day With Quick Daily Devotions</h1>
									<p>See Gods love and power, his presence and purpose in your life everyday</p>
									<div class="input-cal">
										<form action="#">
											<input type="text" placeholder="Email address">
											<input type="submit" value="Subscribe for free">
										</form>
									</div>
								</div>
							</div>

							
							<div id="previous_sermon_area">
								<h2>Previous Devotions</h2>
								<div class="prev-devotion">
	
								';
							

										$control->query = "
										SELECT * FROM sermon_table 
										WHERE date < '$datetime' 
										ORDER BY id DESC 
										LIMIT 4
										";

																
										$result = $control->query_result();

										foreach($result as $sub_row)
										{
											$output .= '
											<div class="prev-devotion-cards previous_devotion_click" data-devotion_date="'.$sub_row["date"].'">
												<div class="prev-devotion-cards-top">
													<h4>'.$sub_row["date"].'</h4>
												</div>
												<div class="prev-devotion-cards-bottom">
													<p></p>
														
													<p></p>
													<p>'.$sub_row["sermon_name"].'</p>
												</div>
											</div>
											';
						
										}

									

					$output .= '
								</div>
        					</div>
							
							
						</div>
					</div>
						
					';
			}
			echo $output;
		}

	}

}






if(isset($_POST['page']))
{
	if($_POST['page'] == 'login')
	{
		if($_POST['action'] == 'allow_user')
		{
			
			$response = array( 
				'status' => '0', 
				'message' => 'Thanks.'
			); 
			
			if(isset($_POST['action'])){
				$response['status'] = 1; 
				$response['message'] = 'You are logged in'; 
	
				$allow_user = 0;
				
				$_SESSION['allow_user'] = $allow_user;
				
	
	
			} 
					
	
			
			echo json_encode($response);

		}

	}

}
?>