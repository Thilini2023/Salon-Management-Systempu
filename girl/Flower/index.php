<!DOCTYPE html>

<?php
include('../includes/dbconnection.php');
	if(isset($_POST['submit'])){ $e=[];
		$r=$_POST['R'];
		$r['type']=2;//flower
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
    <title>flower website design</title>

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

    <a href="#" class="logo">Blossom Flowers.</a>

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
        <h3>fresh flowers</h3>
        <span> natural & beautiful flowers </span>
        <p>Beautiful flower bouquets and flower decorations for all your festivel occasions at very affordable prices from our company BLOSSOM...</p>
        <a href="#" class="btn">shop now</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> </span>about us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/about-vid.mp4" loop autoplay muted></video>
            <h3>best flower sellers in Srilanka</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Are you happy with our services?</p>
            <p>Precious flowers for all parties including your wedding day and birthday from us...</p>
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

    <h1 class="heading"> latest products<span></span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">10%</span>
            <div class="image">
                <img src="images/img1.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower boquet</h3>
                <div class="price"> RS 1000 <span>RS 1200</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">15%</span>
            <div class="image">
                <img src="images/img-2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> RS 2000 <span>RS 2450</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">5%</span>
            <div class="image">
                <img src="images/img3.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower boquet</h3>
                <div class="price"> RS 4000 <span>RS 4500 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">20%</span>
            <div class="image">
                <img src="images/img4.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower boquet</h3>
                <div class="price"> RS 6000 <span>RS 7200</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">17%</span>
            <div class="image">
                <img src="images/img5.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower boquet</h3>
                <div class="price"> RS 9500 <span>RS 9800</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">3%</span>
            <div class="image">
                <img src="images/img-6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> RS 1000 <span>RS 1200</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">18%</span>
            <div class="image">
                <img src="images/img7.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower basket</h3>
                <div class="price"> RS 3000 <span>RS 3300 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">10%</span>
            <div class="image">
                <img src="images/img-8.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> RS 1500 <span>RS 1800</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">5%</span>
            <div class="image">
                <img src="images/img9.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower boquet</h3>
                <div class="price"> RS 14000 <span>RS 15000</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- prodcuts section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading">customer's review <span></span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>We are very happy to be able to do all the things we need in one institution.. I pray that all your work will be successful...</p>
        <div class="user">
            <img src="images/pic-1.jpeg" alt="">
            <div class="user-info">
                <h3>Hasi Prabha</h3>
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
        <p>As an organization, we are very proud to be able to buy all the flower decorations needed by brides like us who come to you...</p>
        <div class="user">
            <img src="images/pic-2.jpeg" alt="">
            <div class="user-info">
                <h3>Dilmi Kapuge</h3>
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
        <p>I got to do my whole wedding as I had in mind. Thank you very much for your services...</p>
        <div class="user">
            <img src="images/pic-3.jpeg" alt="">
            <div class="user-info">
                <h3>Thilini Balacharige</h3>
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
            <img src="images/contact-img.svg" alt="">
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