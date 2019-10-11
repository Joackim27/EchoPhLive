<?php
$con=new mysqli("localhost","root","usbw","db_echo");
	if(isset($_POST["submitOrder"]))
	{
		$testing="";
		if(isset($_POST["Tala"]))
		{
			$testing=$testing."Tala,";
		}
		
		if(isset($_POST["Sinta"]))
		{
			$testing=$testing.",Sinta";
		}
		
		if(isset($_POST["Sampaguita"]))
		{
			$testing=$testing.",Sampaguita";
		}
	
		$Name=$_POST['Name'];
		$Address=$_POST['Address'];
		$CNumber=$_POST['Number'];
		$Email=$_POST['Email'];
		
		
		$SQLQuery="INSERT INTO tbl_orders(Name,Address,CNumber,Email,ProductOrdered,Status)VALUES('".$Name."','".$Address."','".$CNumber."','".$Email."','".$testing."','Ordered')";
		if($con->query($SQLQuery)===TRUE)
		{
			echo"<script>alert('Successfully Ordered')</script>";
		}
		else
		{
			echo"<script>alert('".$con->error."')</script>";
		}
	}
?>
<html>
<head>
	<title>Echo PH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.Ordernow{width:100%;margin:auto auto;height:130px;background-color:#eee8dd;z-index:1;position:fixed;display:none;border:3px solid #000;}
			.Ordernow table{width:100%;}
	
		.MenuButton{height:80px;width:80px;margin:auto auto;position:relative;background-color:white;}
	
		.OrderNowDiv{height:600px;width:800px;margin:auto auto ;background-color:rgba(0,0,0,.2);top:100;z-index:3;position:fixed;left:400px;display:none;}
			.OrderNowDiv button{background-color:inherit;position:relative;margin:auto auto;border:1px solid white;color:white;font:20px OPTIsupAuvantGothicBold;padding:10px 30px;}
				.OrderNowDiv button:hover{background-color: #fff;color:#000;}
			.OrderNowNavigation{width:200px;height:200px;display:none;position:fixed;}
				.OrderNowNavigation table{height:100%;}
				.OrderNowNavigation  a{background-color:#d8a138;}
				



			.order{
					background-color:rgba(0,0,0,.5);;
					height:100%;
}

					.heading{
						text-align: center;
						position: relative;
						top: 15%;
						left:50%;
					transform: translate(-50%,-50%);
						position:relative;

					}

					.heading .title1 p{
						color:white;
						font-family: Mermaid Swash Caps;
						font-size: 100px;
					}

					.heading p{
						color: white;
						font-family: OPTIsupAuvantGothicBold;
						font-size:30px;
					}

					.forms{
						color:white;
						text-align: center;
						position: relative;
						top: 35%;
						left:50%;
					transform: translate(-50%,-50%);
					font-family: Arvo;
					}
				.page1{position:relative;top:200px;display:block;}
				.page2{position:relative;top:200px;display:none;}
				.texttable{
					color:white;
				}
				
				
					
	</style>
	<script>
		window.onscroll = function() {myFunction()};

		function myFunction() {
		  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
			document.getElementsByClassName("Ordernow")[0].style.display="block";
		  } else {
			document.getElementsByClassName("Ordernow")[0].style.display="none";
		  }
		}
		function showOrderDiv()
		{
			document.getElementsByClassName('OrderNowDiv')[0].style.display="block";
			document.getElementsByClassName('wrapper')[0].style.filter="blur(8px)";

		}
		function cancelOrder()
		{
			document.getElementsByClassName('OrderNowDiv')[0].style.display="none";
			document.getElementsByClassName('wrapper')[0].style.filter="none";

		}
		function nextPage()
		{
			var Name =	document.getElementsByName('Name')[0].value;
			var Address=document.getElementsByName('Address')[0].value;
			var CNumber=document.getElementsByName('Number')[0].value;
			if(Name==""|Address==""|CNumber=="")
			{
				alert('Please fill required fields');
			}
			else
			{
				document.getElementsByClassName('page1')[0].style.display="none";
				document.getElementsByClassName('page2')[0].style.display="block";
			}

			

		}

		function backPage()
		{
			document.getElementsByClassName('page1')[0].style.display="block";
			document.getElementsByClassName('page2')[0].style.display="none";

		}
		
		function ProductScroll()
		{
		window.scrollBy({ 
		  top: 1590, // could be negative value
		  left: 0, 
		  behavior: 'smooth' 
		});
		}
		function AboutUsScroll()
		{
		window.scrollBy({ 
		  top: 4220, // could be negative value
		  left: 0, 
		  behavior: 'smooth' 
		});
		}
		function ContactUsScroll()
		{
		window.scrollBy({ 
		  top: 6780, // could be negative value
		  left: 0, 
		  behavior: 'smooth' 
		});
		}
		function OrderNowNavigationShow()
		{
			
			if(document.getElementsByClassName('OrderNowNavigation')[0].style.display=="block")
			{
				document.getElementsByClassName('OrderNowNavigation')[0].style.display="none";
			}
			else
			{
				document.getElementsByClassName('OrderNowNavigation')[0].style.display="block";
			}
		}

									
			

	</script>
	
</head>
<body>
<form method='POST'>
<div class='Ordernow'>
					<table>
						<tr>
							<td><a href="#" class="btn1"onclick='return showOrderDiv();'>Order Now</a></td>
							<td>
								<div class="logo">
									<img src=logo3.png>
								</div>
							</td>
							<td rowspan='2'>
								
								<button name='btn_menuDiv'onclick='return OrderNowNavigationShow();'style='background-color: inherit;border:0px;'>
									<img src=menu-button.png style="width:60px;height:auto;">
								</button>
									<div class='OrderNowNavigation'>
										<table>
											<tr>	
												<td><a href="index.html"class="btn">Home<a/></td>
											</tr>
											<tr>
												<td><a href="#"class="btn"id='Products'onclick='return ProductScroll();'>Products<a/></td>
											</tr>
											<tr>
												<td><a href="#"class="btn"onclick='return ContactUsScroll();'>Contact Us<a/></td>
											</tr>
											<tr>
												<td><a href="#"class="btn"onclick='return ContactUsScroll();'>About Us<a/></td>
											</tr>
										</table>
									</div>
								</div>
								
								
							</td>
						</tr>
					</table>
				</div>
				<center>
						<div class='OrderNowDiv'>
								<div class='order'>
									<div class=heading>
										<div class=title1><p>Echo</p></div>
										<p>Order Form</p>
									</div>

										<div class='page1'>
											<div class=forms>
													Name
													<br>
													(Last Name, First Name)
													<br>
												<input type="text" name="Name">
													<br>
													<br>
													Address
													<br>
										  		<input type="text" name="Address">
										  			<br>
										  			<br>
										  			Contact Number
										  			<br>
										  		<input type="text" name="Number">
										  			<br>
										  			<br>
										  			Email(optional)
										  			<br>
										  		<input type="text" name="Email">
										  			<br>
										  			<br>
									  			<table style='position:relative;margin:auto auto;'>
									  				<tr>
									  					<td>
									  						<a href="#" class="btn"onclick='return cancelOrder();'>Cancel</a>
									  					</td>
									  					<td>
									  						<a href="#" class="btn"onclick='return nextPage();'>Next</a>
									  					</td>
									  				</tr>
									  			</table>
								  			</div>
								  		</div>
								  		<div class='page2'>

								  				
													<div class=forms><div class=texttable>
														<center><table>
											  			<tr>
											  				<td colspan='2'>
											  					<input type="checkbox" name="Tala">Tala
											  					<br>
											  					<img src="tala1.png" style="width:230px;height:auto;">
											  				</td>
											  				<td colspan='2'>
											  					<input type="checkbox" name="Sinta"> Sinta
											  					<br>
														  		<img src="sinta1.png" style="width:230px;height:auto;">

											  				</td>
											  				<td colspan='2'>
											  					<input type="checkbox" name="Sampaguita"> Sampaguita
											  					<br>
														  		<img src="4.png" style="width:230px;height:auto;">

											  				</td>

											  			</tr>
											  			<tr>
											  				<td colspan='2'>
										  					<td>
										  						<a href="#" class="btn"onclick='return backPage();'>Back</a>
										  					</td>
										  					<td>
										  						<button type='submit'name='submitOrder'>Submit</button>
										  					</td>
										  				</tr>
		
											  		
													</table></center>  	
												</div></div>

								  		</div>
															  	
								</div>

								
						</div>
					</center>
	<div class='wrapper'>
			
			
					
		<div style='width:100%;margin:auto auto;text-align:right;'>
			<div class="main">
				<table>		
					<tr>
						<td>
							<div class="logo">
							<img src=logo2.png>
							</div>
						</td>
				
						<td>
							<div class='navigation'>
								<table>
									<tr>
										
									<td><a href="index.html"class="btn">Home<a/></td>
									<td><a href="#"class="btn"id='Products'onclick='return ProductScroll();'>Products<a/>
									
									</td>
									<td><a href="#"class="btn"onclick='return ContactUsScroll();'>Contact Us<a/></td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<header>		
			<div class="slidesDiv">
				<div class="mySlides fade">
					<img src="1.png" style="width:100%">
				</div>

				<div class="mySlides fade">
					<img src="2.png" style="width:100%">
				</div>

				<div class="mySlides fade">
					<img src="3.png" style="width:100%">
				</div>
			
				<script>
						var slideIndex = 0;
						showSlides();

						function showSlides() {
						  var i;
						  var slides = document.getElementsByClassName("mySlides");
						  for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";
						  }
						  slideIndex++;
						  if (slideIndex > slides.length) {slideIndex = 1}
						  slides[slideIndex-1].style.display = "block";
						  setTimeout(showSlides, 5000);
						}
				
				</script>
			<div class="title">
				<h1 align=center>Echo</h1>
			</div>
			
			<div class="tagline">
				<h2>BE NATURE'S VOICE</h2>
			</div>
			<div class="button">
				<a href="#" class="btn"onclick='return showOrderDiv();'>Order Now</a>
				<a href="#" class="btn"onclick='return AboutUsScroll();'>About Us</a>
			</div>
			
			<br>
			<br>
			<br>
			<br>
		</header>
		
			<br>
			<br>
			<br>
			<br>
			<br>

		<section>
			<div class=left>
				<div class=content01>
						<h1>Updates</h1>
						<p>Stay tuned to our Echoes!</p>
				</div>
			</div>
			<div class="events">
				<ul>
					<li>
							<div class=time>
								<h2>27<br><br><span> September</span></h2>
							</div>
							<div class="details">
								<h3>Pre-Order Now!</h3>
								<p>Thank you for waiting! Echo PH is finally open for Pre Orders! To get your very own Abaca Bags, please contact us through Facebook or Instagram, provide us with the necessary information, and wait for your Abaca Bags to arrive!</p>
								<div style=clear:both></div>
							</div>
					</li> 
					<li>
							<div class=time>
								<h2>3<br><br><span> October</span></h2>
							</div>
							<div class="details">
								<h3>Our Soft Opening!</h3>
								<p>If you ever want to check out our products for yourselves, feel free to drop by on October 3, in the DLSU Integrated Campus Lobby! We're on the leftmost side, right next to 4See and Vanilla, and it's really hard to miss. 

Check us out!
</p>
								<div style=clear:both></div>
							</div>
					</li> 
					<li>
							<div class=time>
								<h2>11<br><br><span> October</span></h2>
							</div>
							<div class="details">
								<h3>Did you miss us?</h3>
								<p>Did you miss out on your chance to buy from us last October 3? Don't worry! 

There's still another bazaar to be held on October 11, and you can always just contact any member of our management team to place an order!

Just go to our contact page for more information!</p>
								<div style=clear:both></div>
							</div>
					</li> 
				</ul>
			</div>
		</section>

		<div class="bg">
			<div class=talaP>

				<div class=products>
				<h1 align=center>Products</h1>
			</div>
				<div class="tala">
				
				
					<br>
					<br>
					<table>	
						<tr>
							<td rowspan='2'><img src="tala.png"></td>
							<td>&nbsp;&nbsp;</td>
							<td ><h1>TALA</h1></td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;</td>
							<td width='600px'>
								<p>
							
								Tala is a handbag for sophisticated women who
									needs or wants a big amount of space for their
									everyday needs. The team named this handabag
									“Tala” or bright star when translated into english.
									We took this beautiful word for us to highlight that
									this is our star design.
								</p>
							</td>
						</tr>
					</table>
			
				</div>
					<br>
					<br>
					
				<div class="slideshow-container1">

					<div class="mySlides2 fade">
					  <img src="tala1.png" style="width:100%">
					</div>

					<div class="mySlides2 fade">
					  <img src="tala2.png" style="width:100%">
					</div>

					<div class="mySlides2 fade">
					  <img src="tala3.png" style="width:100%">
					</div>

					<a class="prev" onclick="plusSlides0(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides0(1)">&#10095;</a>
					<div class=sidetext>
						<h1>Tala</h1>
					</div>
							<script>
							
									
									
									var slideIndex2 = 1;
									showSlides2(slideIndex2);

									// Next/previous controls
									function plusSlides0(n) {
									  showSlides2(slideIndex2 += n);
									}

									// Thumbnail image controls
									function currentSlide0(n) {
									  showSlides2(slideIndex2 = n);
									}

									function showSlides2(n) {
									  var i;
									  var slides = document.getElementsByClassName("mySlides2");
									  var dots = document.getElementsByClassName("dot");
									  if (n > slides.length) {slideIndex2 = 1}
									  if (n < 1) {slideIndex2 = slides.length}
									  for (i = 0; i < slides.length; i++) {
										  slides[i].style.display = "none";
									  }
									  for (i = 0; i < dots.length; i++) {
										  dots[i].className = dots[i].className.replace(" active", "");
									  }
									  slides[slideIndex2-1].style.display = "block";
									  dots[slideIndex2-1].className += " active";
									}
							</script>	
				</div>
			</div>
			</div>
			<div class=sintaP>
				<br>
				<br>
				<div class="tala">
					
					<table>	
						<tr>
							<td><div class="sintaalign"><h1>SINTA<h1></div></td>
							<td>&nbsp;&nbsp;</td>						
							<td rowspan='2'><img src="sinta.png"></td>
						</tr>
						<tr>
							
							<td width='600px'>
								<div class="sintaalign"><p>Echo PH decided to name this round crossbody bag “sinta,” because this means “my love” in english. 
								This crossbody bag is aimed to be an everyday bag for the women of echo ph. This bag represents the everydaypresence of love in our lives.
								</div>
								</p>
							</td>
							<td>&nbsp;&nbsp;</td>
						</tr>
					</table>
				</div>
				
				<div class="slideshow-container2">

					<div class="mySlides3 fade">
					  <img src="sinta1.png" style="width:100%">
					</div>

					<div class="mySlides3 fade">
					  <img src="sinta2.png" style="width:100%">
					</div>

					<div class="mySlides3 fade">
					  <img src="sinta3.png" style="width:100%">
					</div>

					<a class="prev1" onclick="plusSlides2(-1)">&#10096;</a>
					<a class="next1" onclick="plusSlides2(1)">&#10097;</a>\
					<div class=sidetext1>
						<h1>Sinta</h1>
					</div>
							<script>
							
									
									
									var slideIndex3 = 2;
									showSlides3(slideIndex3);

									// Next/previous controls
									function plusSlides2(n) {
									  showSlides3(slideIndex3 += n);
									}

									// Thumbnail image controls
									function currentSlide2(n) {
									  showSlides3(slideIndex3 = n);
									}

									function showSlides3(n) {
									  var i;
									  var slides = document.getElementsByClassName("mySlides3");
									  var dots = document.getElementsByClassName("dot");
									  if (n > slides.length) {slideIndex3 = 1}
									  if (n < 1) {slideIndex3 = slides.length}
									  for (i = 0; i < slides.length; i++) {
										  slides[i].style.display = "none";
									  }
									  for (i = 0; i < dots.length; i++) {
										  dots[i].className = dots[i].className.replace(" active", "");
									  }
									  slides[slideIndex3-1].style.display = "block";
									  dots[slideIndex3-1].className += " active";
									}
							</script>	
				</div>
			</div>
			<div class=sampaguitaP>
					<br>
					<br>
			<div class="tala">
				
				<table>	
					<tr>
						<td rowspan='2'><img src="sampaguita1.png"></td>
						<td><h1>SAMPAGUITA<h1></td>
						<td>&nbsp;&nbsp;</td>						
						<td rowspan='2'></td>
					</tr>
					<tr>
						
						<td width='600px'>
							<p>The sampaguita spells simplicity. Elegance. Beauty. 
It is no wonder that the Philippines chose the sampaguita as its national flower, adorning saints, used as perfume, and sold anywhere in the country.
Echo PH elevates the sampaguita into something even more than the sum of its parts. The flowing, vine-like appearance of sampaguita wreaths can be seen in the bag, particularly because of its distinctive shoulder strap and handbag that seems to lovingly adorn the wearer's shoulders. 
							</p>
						</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
				</table>
				</div>	
				
				<div class="slideshow-container3">
<br>
					<div class="mySlides4 fade">
					  <img src="4.png" style="width:100%">
					</div>

					<div class="mySlides4 fade">
					  <img src="5.png" style="width:100%">
					</div>

					<div class="mySlides4 fade">
					  <img src="6.png" style="width:100%">
					</div>

					<a class="prev2" onclick="plusSlides(-1)">&#10098;</a>
					<a class="next2" onclick="plusSlides(1)">&#10099;</a>

					<div class=sidetext2>
						<h1>Sampaguita</h1>
					</div>
							<script>
							
									
									
									var slideIndex4 = 1;
									showSlides4(slideIndex4);

									// Next/previous controls
									function plusSlides(n) {
									  showSlides4(slideIndex4 += n);
									}

									// Thumbnail image controls
									function currentSlide(n) {
									  showSlides4(slideIndex4 = n);
									}

									function showSlides4(n) {
									  var i;
									  var slides = document.getElementsByClassName("mySlides4");
									  var dots = document.getElementsByClassName("dot");
									  if (n > slides.length) {slideIndex4 = 1}
									  if (n < 1) {slideIndex4 = slides.length}
									  for (i = 0; i < slides.length; i++) {
										  slides[i].style.display = "none";
									  }
									  for (i = 0; i < dots.length; i++) {
										  dots[i].className = dots[i].className.replace(" active", "");
									  }
									  slides[slideIndex4-1].style.display = "block";
									  dots[slideIndex4-1].className += " active";
									}
							</script>	
				</div>
				</div>
			</div>
	<div class=aboutusbg>
		<div class="Products">
			<h1 align=center>About &nbsp; Us</h1>
		</div>
		
		<br>
		<br>
		
		<div class="AboutUs">
					
				<table>	
					<tr>
						<td rowspan='2'><img src="abtus.png" style="width:auto;height:400px;"></td>
						<td>&nbsp;&nbsp;</td>
						<td ><h1>ECHOING OUR ENVIRONMENT</h1></td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;</td>
						<td width='600px'>
							<p>
							Echo PH is a business that aims to reduce waste, and mitigate the impact of waste products on the environment. 
							It is in the accessories business, and will be selling carry-on luggage, and other products along with them. 
							These carry-on luggage include shoulder bags, handbags, and coin purses, and are to be made out of natural woven fibers. 
							These fibers are not only more durable than plastic bags, but are also recyclable and reusable.
							</p>
						</td>
					</tr>
				</table>
				
				<br>
				<br>
				<div class="What">
				<h1>What We Do</h1>
				</div>
				
				<br>
				
				<div class="pictures">
					<center>
						<img src=save.png style="width:150px;height:150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src=forest.png style="width:150px;height:150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src=philippines.png style="width:150px;height:150px">
							<br>
						<div class="texts">
							<ul>
							<li>
								<p>Help our environment</p></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<li><p>&nbsp;&nbsp;&nbsp;&nbsp;Sell eco-friendly</p></li>&nbsp;
							<li><p>&nbsp;&nbsp;Promote Local Products</p></li>
						</ul>
						</div>
					</center>
				</div>
			
			</div>
	</div>
	</div>
			<div class=bg2>
				<div class="Products">
					<h1 align=center>Contact &nbsp; Us</h1>
				</div>
							<br>
							<br>
						<center><img src=logo3.png style="width:300px;height:auto;"></center>
							<br>
							<br>
							<br>
					<div class="socialmedia"><div class="button2">
					<a href="https://www.facebook.com/The.Echo.PH/" class="btn2"><img src=facebook.png style="width:50px;height:50;"></a>&nbsp;
					<a href="https://www.instagram.com/the.echo.ph/" class="btn2"><img src=instagram.png style="width:50px;height:50;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<img src=gmail.png style="width:50px;height:50;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src=icon.png style="width:50px;height:50;">
					</div></div>
		
			</div>
	</div>	
</form>
</body>	

</html>