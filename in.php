<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage
    </title>
 
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="homepage1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
        <div class="content flex_space">
            <div class="logo">
            <a class="navbar-brand logo-h" href="index.html"><img src="images/pg logo.png" alt=""></a> 
            </div>
        <div class="navlink">
            <ul id="menulist">
                <li><a href="#home">Home</a></li>
                <li><a href="#hosteller">Rooms</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About us</a></li>
                <li ><a href="index.html" active>Logout</a></li>
                

                
                 
                <li><a href="adminlog.html"><button class="primary-btn"> Admin</button></a></li>
            </ul>
            <span class="fa fa-bars"onclick="menutoggle()"></span>
        </div>
        </div>
    </header>

   <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight="0px";

  function menutoggle() {
    if(menulist.style.maxHeight== "0px"){
        menulist.style.maxHeight = "100vh";
    }
    else{
        
        menulist.style.maxHeight = "0px";  
      }
  }
   </script>
<section class="home">
        <div class="content">
       <div class="owl-carousel owl-theme">
        
      <div class="item">
        <img src="images/1.jpg"  width="800" height="600" alt="">
        <div class="text">
            <h1>PG ACCODS</h1>
            <p>Network to book your PG online</p>
            
            </div>
          </div>
          <div class="item">
            <img src="images/2.jpg"  width="800" height="600" alt="">
            <div class="text">
                <h1> PG ACCODS</h1>
            <p>Network to book your PG online</p>
                
                </div>
              </div>

              <div class="item">
                <img src="images/3.jpg"  width="800" height="600" alt="">
                <div class="text">
                    <h1>PG ACCODS</h1>
                    <p>Network to book your PG online</p>
                    
                    
                </div>
              </div>
            </div>
      </div>     
    </section>
 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
  <script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    autoplaySpeed:500,
    margin:0,
    autoplay:true,
    nav:true,
    dots: false,
   responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

   

<section class="about top">
    <div class="container flex">
        <div class="left">
            <div class="headings">
                <h1>WELCOME</h1>
            </div>
            <div class="one">   
            <h2>PG Rooms</h2><br>
            <p><b>A PG Rooms are lower-priced inn of sorts that offers basic, shared accommodations.  </b></p><br>
              <p><b>  Typically, it features a large room with separate beds, a shared bathroom.</b></p><br>
              <p><b> Some have private rooms, but the lower-cost ones generally offer bunk beds. </b></p><br> 
            </div> 
        </div>
    <div class="right">
        <img src="images/room3.jpeg" width="500" height="300" alt="">
    </div>
      </div>
</section>

<!--First Line swiper starts-->

<section class="hosteller" id="hosteller">
    <div class="container top">
        <div class="heading6" id="r1">
            <h1>ROOMS</h1>
        </div>
        <div>
        <p style="color:red;font-size:15px;font-weight: bold;font-family: 'Times New Roman', Times, serif;"><i class="fa-solid fa-circle fa-sm" style="color: #fa0000;"></i>NOT AVAILABLE</p>
              <p style="color:green;font-size:15px;font-weight: bold;font-family: 'Times New Roman', Times, serif;"><i class="fa-solid fa-circle fa-sm" style="color: #008000;"></i>AVAILABLE</p>
              <p style="color:yellow;font-size:15px;font-weight: bold;font-family: 'Times New Roman', Times, serif;"><i class="fa-solid fa-circle fa-sm" style="color: #ffff00;"></i>RESERVED</p>
        </div>
    <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="image">
                    <img src="images/bar3.jpg" width="50%" height="12%" alt="">
                </div>
                <div class="text">
                    <h2>PHILLO VILLA</h2><div class="dot" data-status="not-available"></div>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i>
                    </div>
                    <p>113-B Peramanur,Salem-636007</p>
                    <div style="font-style:bold;">
                        <p>Rs.8000</p>
                    </div>
                <div class="button flex">
                    <a href="pg1.html">
                    <button class="primarys-btn" >
                        BOOK NOW
                    </button></a>
                
                    
                </div>
            </div>
        </div>

       
    <div class="items">
        <div class="image">
            <img src="images/bar4.jpg" width="50%" height="12%" alt="">
        </div>
        <div class="text">
            <h2>PRK Rooms</h2><div class="dot" data-status="reserved"></div>
            <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                
            </div>
            <p>363-A Linemedu,Salem-636005</p>
            <div style="font-style:bold;">
                <p>Rs.7000</p>
            </div>
        <div class="button flex">
            <a href="pg2.html">
            <button class="primarys-btn" >
                BOOK NOW
            </button></a>
        </div>
    </div>
</div>

<div class="items">
    <div class="image">
        <img src="images/room4.jpeg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>NC RESIDENCY</h2><div class="dot" data-status="available"></div>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>54/A Fairlands,Salem-636016</p>
        <div style="font-style:bold;">
            <p>Rs.9000</p>
        </div>
    <div class="button flex">
        <a href="pg3.html">
        <button class="primarys-btn"  >
            BOOK NOW
        </button>
       </a>
    </div>
</div>
</div>
</div>
</div>


</section>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 10,
        },
        1000:{
            items:3
        }
    }
})
</script>

<!--First Line swiper Ends-->

<!--Second Line swiper Starts-->

<section class="hosteller" id="hosteller">
    <div class="container top">
    <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="image">
                    <img src="images/bar6.jpg" width="50%" height="12%" alt="">
                </div>
                <div class="text">
                    <h2>RUTHU HOMES</h2><div class="dot" data-status="not-available"></div>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i>
                    </div>
                    <p>787/2 Barathi Street,Chennai-600028</p>
                    <div style="font-style:bold;">
                        <p>Rs.10000</p>
                    </div>
                <div class="button flex">
                    <a href="pg4.html">
                    <button class="primarys-btn" >
                        BOOK NOW
                    </button></a>
                
                    
                </div>
            </div>
        </div>

       
    <div class="items">
        <div class="image">
            <img src="images/bar7.jpg" width="50%" height="12%" alt="">
        </div>
        <div class="text">
            <h2>PEARL INN</h2><div class="dot" data-status="not-available"></div>
            <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                
            </div>
            <p>67-A Nathan street,Trichy-620001</p>
            <div style="font-style:bold;">
                <p>Rs.9000</p>
            </div>
        <div class="button flex">
            <a href="pg5.html">
            <button class="primarys-btn" >
                BOOK NOW
            </button></a>
        </div>
    </div>
</div>

<div class="items">
    <div class="image">
        <img src="images/bar8.jpg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>ENNOLA ILLAM</h2><div class="dot" data-status="not-available"></div>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>568/5 Ananthan colony,Coimbatore-631027</p>
        <div style="font-style:bold;">
            <p>Rs.8500</p>
        </div>
    <div class="button flex">
        <a href="pg6.html">
        <button class="primarys-btn"  >
            BOOK NOW
        </button>
       </a>
    </div>
</div>
</div>
</div>
</div>


</section>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 10,
        },
        1000:{
            items:3
        }
    }
})
</script>


<!--Second Line swiper Ends-->

<!--Third Line swiper Starts-->

<section class="rooms" id="rooms">
<div class="container top">
    <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="image">
                    <img src="images/room1.jpeg" width="50%" height="12%" alt="">
                </div>
                <div class="text">
                    <h2>TRENCH HIDES</h2><div class="dot" data-status="reserved"></div>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i>
                    </div>
                    <p>55-B Chinnasamy Ext. Hosur-635109</p>
                    <div style="font-style:bold;">
                        <p>Rs.9500</p>
                    </div>
                <div class="button flex">
                    <a href="pg7.html">
                    <button class="primarys-btn"  >
                        BOOK NOW
                    </button>
                   </a>
                </div>
               
            </div>
        </div>

       
    <div class="items">
        <div class="image">
            <img src="images/bar5.jpg" width="50%" height="12%" alt="">
        </div>
        <div class="text">
            <h2>COSY VILLA</h2><div class="dot" data-status="available"></div>
            <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>  
            </div>
            <p>252/B Perumal Colony,Krishnagiri-635001</p>
            <div style="font-style:bold;">
                <p>Rs.7000</p>
            </div>
        <div class="button flex">
            <a href="pg8.html">
            <button class="primarys-btn"  >
                BOOK NOW
            </button>
           </a>
        </div>
       
        
    </div>
</div>

<div class="items">
    <div class="image">
        <img src="images/bar2.jpg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>NLL HOMES</h2><div class="dot" data-status="available"></div>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>45/C Keyan Colony,Erode-638001</p>
        <div style="font-style:bold;">
            <p>Rs.8500</p>
        </div>
    <div class="button flex">
        <a href="pg9.html">
        <button class="primarys-btn"  >
            BOOK NOW
        </button>
       </a>
    </div>
    
    </div>

</div>
 </div>

</section>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    responsive:
    {
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 10,
        },
        1000:{
            items:3
        }
    }
})
</script>
<script>
        const dots = document.querySelectorAll('.dot');
        dots.forEach(dot => {
            dot.addEventListener('mouseover', showTooltip);
            dot.addEventListener('mouseout', hideTooltip);
        });
        
        function showTooltip(event) {
            const dot = event.target;
            const status = dot.getAttribute('data-status');
            let tooltipText = status.charAt(0).toUpperCase() + status.slice(1);
            const reservationDates = dot.getAttribute('data-reservation-dates');
            const reason = dot.getAttribute('data-reason');
        
            if (status === 'reserved' && reservationDates) {
                tooltipText += ` (Reserved: ${reservationDates})`;
            } else if (status === 'not-available' && reason) {
                tooltipText += ` (Reason: ${reason})`;
            }
        
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = tooltipText;
            dot.appendChild(tooltip);
        }
        
        function hideTooltip(event) {
            const dot = event.target;
            const tooltip = dot.querySelector('.tooltip');
            if (tooltip) {
                dot.removeChild(tooltip);
            }
        }
        </script>

<!--Third Line swiper Ends-->


<section class="services top" id="services">
    <div class="container">
        <div class="heading3">
            <h1>SERVICES</h1>
        </div>
        <div class="para">
        <p>Services provided here are ensured by the PG Lessor</p>
        </div>
        
    </div>
     <div class="content flex_space">
        <div class="left grid2">
            <div class="box">
                <div class="text">
                    <i class="fa-solid fa-couch"></i>
                    <h3>Furnitures</h3>
                </div>
            </div>
            
               
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-couch"></i>
                            <h3>No Furnitures</h3>
                        </div>
                    </div>
                   
                        <div class="box">
                            <div class="text">
                                <i class="fa-solid fa-power-off"></i>
                                <h3>Electronics</h3>
                            </div>
                        </div>
                    
                        <div class="box">
                            <div class="text">
                                <i class="fa-solid fa-wifi"></i>
                                <h3>Wifi</h3>
                            </div>
                        </div>
        </div>

        <div class="right">
            <img src="images/r1.jpg"  alt="">
        </div>
     </div>



    </div>
</section>

<section class="customer top" id="customer">
    <div class="container">
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>This Room was good and infrastructure is very nice and good think to 
                    service are very perfect to express the days to maintain the knowledge 
                    on these given room.
                </p>
                      <h3>PHILLO VILLA</h3>
                      <label>Suresh</label>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>Very Nice Room With Exotic ambiance</p>
                      <h3>COSY VILLA</h3>
                      <label>Mani</label>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>Cost-Effcient and Clean Enviornment</p>
                      <h3>ENNOLA HOMES</h3>
                      <label>Arun</label>
        
        </div>
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1,
            margin: 10,
        },
        1000:{
            items:1
        }
    }
})
</script>



<section  id="about">
<footer>
    <div class="container grid">
        <div class="box">
            <h2>About Us</h2>
            <p> Discover Comfortable Living in our PG Accommodations<br>
                Welcome to PG Accods, your home away from home.
                We take pride in offering safe and comfortable PG accommodations for students and professionals.
                With a commitment to quality living, we strive to make your stay with us a memorable one.
            </p>
      

        <div class="icon">
            <i class="fa fa-facebook-f"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>

        </div>
    </div>
    <div class="box">
        <h2>Facilities</h2>
            <li>Your Comfort is our priority</li>     
            <li>100% safe PG's</li>
            <li>24/7 Security</li>
            <li>Across state</li>
    </div>
    <div class="con">
        <h2>Contact Us</h2>
        <p>ADMIN CENTER</p>
        <i class="fa fa-location-dot"></i>
        <label>SALEM</label>  <br>
        <i class="fa fa-phone"></i>
        <label>0427-658924</label>    <br>    
        <i class="fa fa-envelope"></i>
        <label>pgaccoms@gmail.com</label>
      </div>
    </div>
    
</footer>

</section>

<div class="legal" >
    <p class="container" align="center">Copyright (c) 2023 PG Accods All  Rights Reserved</p>
</div>






<script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>
</html>






































