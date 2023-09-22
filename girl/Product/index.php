<!DOCTYPE html>

<?php
include('../includes/dbconnection.php');
	if(isset($_POST['submit'])){ $e=[];
		$r=$_POST['R'];
		$r['type']=3;//product
	if(strlen(empty($r['name']))) 	$e[]='Name is too short.';  	
    if(strlen(empty($r['email']))) 	$e[]='Email is too short.';
	elseif(!filter_var($r['email'], FILTER_VALIDATE_EMAIL)) $e[]='Invalid email.';
	if(!$r['number']) $e[]='Number is too short.';
	elseif( $r['number']<=99999999) $e[]="Mobile number is Invalid(Ex: 0712345689)."; 	
    if(strlen(empty($r['message']))) 	$e[]='Message is too short.';

	
	if($e){
		echo "<script language='javascript'>alert('".implode('\n',$e)."')</script>";
	}else{
		$query=mysqli_query($con,"insert into mail(Name,Email,Message,Type,Mobile) value('$r[name]','$r[email]','$r[message]','$r[type]','$r[number]')");
			if($query){ 
				echo "<script language='javascript'>alert('Thank you for your response.Our sales team contact you ASAP')</script>";
			}else
			{
				echo "<script>alert('Something Went Wrong. Please try again.');</script>"; 
			}
	}
		//echo "<script language='javascript'>alert('message successfully sent')</script>";
	}
	
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Blossom Product.</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>our product</h3>
        <span> natural cream </span>
        <p>You can get all the high quality products you need here...</p>
        <a href="#" class="btn">shop now</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> </span>about us</h1>

    <div class="row">

        <div class="video-container">
            <video src="images/about1.mp4" loop autoplay muted></video>
            <h3>best cream sellers in Srilanka</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Are you happy with our services?</p>
            
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by blossom</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading">  <span></span>latest products </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">10%</span>
            <div class="image">
                <img src="images/img-5.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>cherry blossom tone-up cream</h3>
                <div class="price"> RS 800 <span>RS 1000</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">15%</span>
            <div class="image">
                <img src="images/img-2.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>cherry blossom body wash</h3>
                <div class="price"> RS 550 <span>RS 600</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">5%</span>
            <div class="image">
                <img src="images/img-3.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>cherry blossom cleanser</h3>
                <div class="price"> RS 750 <span>RS 800</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">20%</span>
            <div class="image">
                <img src="images/img-1.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>cherry blossom champoo</h3>
                <div class="price"> RS 1200 <span>RS 1400</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">17%</span>
            <div class="image">
                <img src="images/img-4.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>cherry blossom conditioner</h3>
                <div class="price"> RS 1300 <span>RS 1400</span> </div>
            </div>
        </div>

       
            

       
            

</section>

<!-- prodcuts section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> <span></span>review customer's  </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>i have been using your cream for a long time now and it is very good.</p>
        <div class="user">
            <img src="images/cus1.jpeg" alt="">
            <div class="user-info">
                <h3>Hansi senewirathna</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>your shampoo is very good. i have been using it for three months now and i have very good results. this is very healing. i love that feeling.</p>
        <div class="user">
            <img src="images/cus2.jpeg" alt="">
            <div class="user-info">
                <h3>hashintha samaranayaka</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>your body wash is verybgood, healthy and fresh, i really like it.</p>
        <div class="user">
            <img src="images/cus3.jpeg" alt="">
            <div class="user-info">
                <h3>madhusha galappaththi</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>  </span>contact us </h1>

    <div class="row">

        <form action="" method="POST">
            <input type="text" name="R[name]" placeholder="name" class="box">
            <input type="email" name="R[email]" placeholder="email" class="box">
            <input type="number" name="R[number]" placeholder="number" class="box">
            <textarea name="R[message]" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
			<input type="number" name="R[type]" placeholder="type" class="box" hidden>
            <input type="submit" value="send message" name="submit" class="btn">
		</form>

        <div class="image">
            <img src="images/svg.jpeg" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
        <h3>quick links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Product</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Review</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Contact</a>
       
      </div>


       <div class="box">
         <h3>locations</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Matara</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Colombo</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Kandy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Rathnapura</a>
       
      </div>

         <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94 115 465 008 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94 775 679 349</a>
         <a href="#"> <i class="fas fa-envelope"></i> BlossomSalon&Spa@gmail.com </a>
         <a href="#"> <i class="fas fa-envelope"></i> BlossomSalon&Spa@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> No24/A, Blossom Salon & Spa, Colombo 07, Srilanka </a>
      </div>


        <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-github"></i> github </a>
     
      </div>

    </div>

    <div class="credit"> created by <span> @2022 </span> | BLOSSOM SALON  </div>

</section>

<!-- footer section ends -->


















    
</body>
</html>