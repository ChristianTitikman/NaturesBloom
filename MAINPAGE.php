<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature's Bloom.com</title>
    <link rel="icon" type="text/image" href="natures bloom logo.png">
    <link rel="icon" type="image/icon" href="nature bloom logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .buts {
            border: 10px;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: black;
            border-radius: 5px; 
            height: 50px;
            width:150px;
        
        }
        
        body {
            text-align: center;
            font-family:popins-sanserif;
            color:limegreen;
            background-color: #37432B;
            margin
        }
        
        
        .navbar ul{
            list-style-type: none;
            padding: 0px;
            margin:0px;
            overflow:hidden;
            display: flex;
            justify-content: flex-end;
            
        }
        .navbar .search-container {
            display: flex;
            align-items: center;
            margin-right: auto;
            margin-left: 50px;
           
        }
        .navbar input[type="search"] {
            margin-left: 10px;
            width: 400px;
            border-radius: 5px;
        }
        .navbar a{
            color:grey;
            text-decoration: none;
            padding: 15px;
            display: block;
            margin-right: 20px;
        }
        .navbar a:hover{
            color:black;
            background-color:light rgb(238, 148, 148) ;
        }
        .navbar li{
            float: left;
        }
        .nature {
        float: left;
        margin-left: 50px;
        }
        .navbar{
        width: 100%;
        height: 50px;
        }

    .img1:hover,
    .img2:hover,
    .img3:hover {
        transform: scale(1.2);
        transition: transform 0.3s ease;
        outline: 2px solid black;
    }
    .g1:hover,.g2:hover{
        transform: scale(1.2);
        transition: transform 0.3s ease;
    }
    .g1,.g2{
    outline: 2px solid black; 
    }
    
    .follow {
    
    text-align: center;
    
}
    .product-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

    .product {
    text-align: center;
}

    .product-image {
    margin-bottom: 10px;
}
    #cartButton {
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 10px;
    background-color: black;
    color: white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

    #cartButton:hover {
    background-color:red;
}
    #chan{
    background-color:#9ab482;
}
    .bg {
    background-color: #9ab482;
}
    .bg2 {
    background-color: #cdc772;
}
    .bg3{
    background-color: #747c7c;
    color:black;
}
    #photoArray{
        display:grid;
        grid-gap: 5em;
        grid-template-areas:
        "photoOne photoTwo photoThree"
        "photoOne photoFour photoFive";
    grid-template-columns: 1fr 20% 20%;
      }
      #photoArray > div{
        
      }
      #photoArray > div:first-child {
      grid-area: photoOne;
      height:140px;
    }
    .PHOTO1{
        height:200px;
        width:200px;
        outline: 2px solid black;
    }
    #HAHA{
        height:300px;
        width:400px; 
    }
    .lastsection{
        background-color:#37432B;
    }
    .logo {
  float: left;
}


    .address {
float: left;
}

    .clearfix::after {
  content: "";
  display: table;
  clear: both;
}


    </style>
</head>

<body>
    

    <nav class="navbar">
        
        <ul>
            <li><img src="natures bloom logo.png" alt="" height="50px" width="70px"></li>
            <li class="search-container" ><i class="fa-solid fa-magnifying-glass"></i><img src="icons8-search-50.png" height="15px" width="15px"> <input type="search" placeholder="Search..."></li>
            <li><a href="#">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Help</a></li>
            <li>
            <a href="#">
                    <button id="cartButton" class="buts" style="color: white; background-color:red;">
                        <i class="fas fa-cart-shopping" style="color: #cf0202;"></i> Your Cart
                    </button>
                </a>
            </li>

        </ul>
<div class="background-color">
    </nav>
    <img src="natures bloom logo.png">
    <p style="font-size: 40px; color: limegreen;">"Where Nature Blossoms"</p>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
    
<div id="chan" class="bg"><!--Change my background color -->
    <hr>
    <br>
    <br>
    <br>
    <img src="tulip.jpg" class="img1" height="200em" width="200" style="border-radius:5px;">&nbsp;&nbsp;
    <img src="sunflower.jpg" class="img2" height="200em" width="200" style="border-radius:5px;">&nbsp;&nbsp;
    <img src="whiterose.jpg" class="img3" height="200em" width="200" style="border-radius:5px;">&nbsp;&nbsp;
    <br>    
    <br>
    <br>
    <br>
    <button id="shopNowButton" class="buts" style="color: red;background-color: white;" >
        <i class="fas fa-shopping-cart" style="color: #cf0202;"></i> Shop Now
    </button>

    <br>
<br>
</div>
<div class="bg2"><!--Change my background color -->
<hr>
    <h1 style="text-shadow: 2px 2px black;">Featured Products</h1>
    <div class="featured"><i class="fa-solid fa-caret-left" style="color: #37432B;height: 40px;" ></i>
        &nbsp;&nbsp;<img src="gumamela.jpg" height="200em" width="350" class="g1" style="border-radius:20px;">&nbsp;&nbsp;
    <img src="whiterose.jpg"  height="200em" width="350" class="g2" style="border-radius:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-caret-right" style="color: #37432B;height: 40px;"></i></i>
    <pre style="color:black;">Product:<b>Gumamela</b>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Product:<b>White rose</b></pre>
    <pre style="color:black;">Price:<b>₱200</b>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Price:<b>₱200</b></pre>
    
</div>
    
    <br>
    <br>
    <hr>
</div>
    <p>Add Your Email <input type="search" placeholder="Email address">&nbsp;&nbsp;<a href="#"><button id="subscribe" class="buts" style="color: red; background-color:white;">
            <i class="fas fa-cart-shopping" style="color: #cf0202;"></i> Subscribe
        </button>
    </a></p>
    Please add your email for us to know you!!
    
<div class="bg3">
    <hr>
    <div class="container">
        <section id="photoArray">
         <div><img src="gumamela.jpg" class="PHOTO1" id="HAHA" title="Buy Me" id="photog">
             <P>Product Name:<b> Gumamela</b> </P>
             <P>Price:200</P>
             <P>Rating:<i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i></P>    
         </div>
         
         <div><img src="Tulip.jpg" class="PHOTO1" id="photog2">
             <P>Product Name:<b> Tulip</b></P>
             <P>Price:200</P>
             <P>Rating:<i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i></P>
         </div>
         <div><a href="3rdPage.html"><img src="Sunflower.jpg" class="PHOTO1" id="photog3"></a>
             <P>Product Name:<b> Sunflower</b></P>
             <P>Price:200</P>
             <P>Rating:<i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i></P>
         </div>
         <div><img src="Santan1.jpg" class="PHOTO1" id="photog4">
             <P>Product Name:<b> Tulip</b></P>
             <P>Price:200</P>
             <P>Rating:<i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i></P>
         </div>
         <div><a href="WhiteRosePage.html"><img src="whiterose.jpg" class="PHOTO1" id="photog5"></a>
             <P>Product Name:<b> Whiterose</b></P>
             <P>Price:200</P>
             <P>Rating:<i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i></P>
         </div>
        </section>
         <div>
    <br>
    <hr>
</div>

    <h1 id="About" style="text-shadow: 2px 2px black;color:limegreen;" >About Nature's Bloom:</h1>
    <pre>          Nature's Bloom is more than just a flower shop; it's a celebration of nature's wonders. Join us in
        embracing the beauty of flowers and let us help you create cherished moments that will be remembered for a lifetime. 
    Experience the enchantment of Nature's Bloom and let the magic of flowers ignite your senses.</pre>
   
    <div class="lastsection">
        <hr>
    

<br>

<div class="container">
    <div class="logo">   <div class="lt"><img src="natures bloom logo.png" alt="natures Logo" height="120px" width="150px" ><br><b>Address:</b> Balingcanaway Tarlac City   &nbsp;&nbsp;&nbsp;&nbsp;<Pre style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Main Menu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Discover&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find us on:</Pre><Pre style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Company&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; The Team&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook</Pre><Pre style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Careers&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Our History&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Twitter</Pre>
<Pre style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Press&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Brand Motto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Intagram</Pre>
</Pre>
<Pre style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Help</pre>
</div>     




<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php" >Logout</a>
      ?>

    
        <pre style="text-align: left;;" >© NaturesBloom</pre>




    <script>
        var shopNowButton = document.getElementById("shopNowButton");

        shopNowButton.addEventListener("click", function() {
            // Add your desired action here
            alert("Please Log in First!");
        });
        var images = document.querySelectorAll('.featured img');

        images.forEach(function(img) {
            img.addEventListener('click', function() {
                var confirmBuy = confirm('Do you want to buy this product?');
                if (confirmBuy) {
                    alert('Product added to cart!'); // Action when confirmed
                }
            });
        });
        var images = document.querySelectorAll('.container');

images.forEach(function(img) {
    img.addEventListener('click', function() {
        var confirmBuy = confirm('Do you want to buy this product?');
        if (confirmBuy) {
            alert('Product added to cart!'); // Action when confirmed
        }
    });
});
    </script>
    
</body>