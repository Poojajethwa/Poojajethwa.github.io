<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete website</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>  
    <header>
        <nav>
            <div class="logo">
               <p style="font-weight:bold ;"> फोटो - lytical</p>
            </div>
            <div class="menu">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Gallery</a>
                <a href="#">Contact</a>
                <a href="logout.php">Logout </a>
            </div>
        </nav>
        <section class="h-text">
            <i class="fa fa-camera" id="camera"></i>
            <h1 data-aos="fade-up">Capturing the moments that captivate your heart.</h1>
           
            
        </section>
    </header>
    <section class="filter-gallery">
        <div class="portfolio-menu">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li class="active" data-filter=".nature">Nature</li>
                <li class="active" data-filter=".love">Love</li>
                <li class="active" data-filter=".aesthetic">Aesthetic</li>
                <li class="active" data-filter=".galaxy">Galaxy</li>
            </ul>
        </div>
        <div class="portfoli-item">
            <div class="item nature">
                <a href="images\5.jpg" download=""><img src="images\5.jpg" width="100" height="100"></a>
            </div>
            <div class="item love">
                <a href="images\1.jpg" download=""><img src="images\1.jpg" width="100" height="100"></a>
            </div>
            <div class="item aesthetic">
                <a href="images\17.jpg" download=""><img src="images\17.jpg" width="100" height="100"></a>
            </div>
            <div class="item galaxy">
                <a href="images\15.jpg" download=""><img src="images\15.jpg" width="100" height="100"></a>
            </div>

            <div class="item nature">
                <a href="images\6.jpg" download=""><img src="images\6.jpg" width="100" height="100"></a>
            </div>
            <div class="item love">
                <a href="images\2.jpg" download=""><img src="images\2.jpg" width="100" height="100"></a>
            </div>
            <div class="item aesthetic">
                <a href="images\18.jpg" download=""><img src="images\18.jpg" width="100" height="100"></a>
            </div>
            <div class="item galaxy">
                <a href="images\14.jpg" download=""><img src="images\14.jpg" width="100" height="100"></a>
            </div>

            <div class="item nature">
                <a href="images\9.jpg" download=""><img src="images\9.jpg" width="100" height="100"></a>
            </div>
            <div class="item love" >
                <a href="images\3.jpg" download=""><img src="images\3.jpg" width="100" height="100"></a>
            </div>
            <div class="item aesthetic" >
                <a href="images\19.jpg" download=""><img src="images\19.jpg" width="100" height="100"></a>
            </div>
            <div class="item galaxy" >
                <a href="images\11.jpg" download=""><img src="images\11.jpg" width="100" height="100"></a>
            </div>

        </div>
    </section>
  


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha1006-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript">
        $('.portfoli-item').isotope({
  // options
  itemSelector: '.item',
  layoutMode: 'fitRows'
});
        $('.portfolio-menu ul li').click(function(){
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');

         var selector = $(this).attr('data-filter'); 
        $('.portfoli-item').isotope({
            filter:selector
        });
        return false;
        })
    </script>
     <section>
        
                <div class="ft">
                <p>Our<span> Information</span></p>
            </div>
        </section>
        <section>
        
            <div class="ft1" data-aos="zoom-in-up">
            <p>What our page says</p>
        </div>
        <div class="member-card" >
            <img src="images/info1.jpg" width="100" style="clip-path: circle();">
            <p>
                The nature of Rain is the same, but it makes thorns grow in the marshes and flowers in the Gardens;
                Sometimes Love is unfair, the more you sacrifice the more you hurt, and when you've given your best to someone you love, it seems not enough.
                Scholars in the field have define aesthetics as" critical reflrction on art, culture and nature".
            </p>
            <h2> फोटो - lytical</h2>
               <a href="https://www.instagram.com"><img src="images/ins.png" width="100"></a>
                <a href="https://www.whatsapp.com"><img src="images/w1.jpg" width="100"></a>
                <a href="https://www.facebook.com"><img src="images/fac.png" width="100"></a>
                <a href="https://www.twitter.com"><img src="images/twi.png" width="100"></a>

        </div>
        <div class="m-images" >
            <img src="images/pearl.webp" alt="">
            <img src="images/surbhi.jpg" alt="">
            <img src="images/prabhas.jpg" alt="">
            <img src="images/kiara.jpg" alt="">
            <img src="images/sid.jpg" alt="">
            <img src="images/zen.jpg" alt="">
            <img src="images/vir.jpg" alt="">

        </div>
    </section>
    <footer>
        <div class="newsletter">
            <div >
                <h2>Subscribe our newsletter</h2>
        <p>We're a team of non-cynics who truly care for our work.</p>
            </div>
            <div class="ntext">
                <label>
                    <input type="text" name="" placeholder="Enter your email">
                    <button>Subscribe</button>
                </label>
            </div>
        </div>
        <div class="f-contact" >
        <div>
                <h1>Information</h1>
        <p>Lorem ipsum dolor sit amet, consectetur elit. Nihil sit dicta.</p>
        <a href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a>
        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        <a href="https://www.telegram.com"><i class="fa fa-telegram"></i></a>
        <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>

        </div>

        <div> 
            <h1>Useful Links</h1>
            <p>About Us</p>
            <p>Gallery</p>
            <p>Blog post</p>
            <p>Pricing plans</p>
        </div>

        <div> 
            <h1>Details</h1>
            <p>Photographs</p>
            <p>Gallery</p>
            <p>About</p>
            <p>Pricing plans</p>
        </div>

        <div> 
            <h1>Help & Support</h1>
            <p>Privacy policy</p>
            <p>Term & Conditions</p>
            <p>Technical Support</p>
            <p>Customer care</p>
        </div>


        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
      </script>
</body>
</html>