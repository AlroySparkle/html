<?php
    clearstatcache();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainDesign.css">
    <link rel="stylesheet" href="newsMainDesign.css">
    <link rel="stylesheet" href="sales.css">
    <link rel="stylesheet" href="productCards.css">
    <link rel="stylesheet" href="upcoming.css">
    <link rel="stylesheet" href="contactUs.css">
    <link rel="stylesheet" href="new-marchandise.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ca5d4bd03e.js" crossorigin="anonymous"></script>
    <script src="products.js"></script>
    <script src="new-marchandise.js"></script>
    <script src="/html/sources/jquery.js"></script>


</head>

<body>
    <div class="container">
        <div class="logo">
            <a href="#"><img alt=""></a>
        </div>
        <div class="choices">
            <ul>
                <li><a href="#">main</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">anime</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">merchandise</a></li>
            </ul>
        </div>
        <div class="icons">
            <?php
            if(isset($_SESSION["username"])){
                echo '<a href="#" id="cart-link"><i class="fas fa-shopping-cart cart"></i></a>';
                echo '<a href="settings.html" id="cart-link"><i class="fas fa-cog cart"></i></a>';
            }
            else{
                echo '<a href="login.php" id="cart-link"><i class="fas fa-user cart"></i></a>';
            }
            ?>
            
        </div>
        <div class="hamburger">
            <i class="fas fa-bars" id="hamburger"></i>
        </div>
    </div>
    <!-----------------------------------------upcoming------------------------------------------------------->
    <div class="upcoming-container">
        <div class="upcoming-information">
            <div class="upcoming-head">UPCOMING</div>
            <div class="upcoming-platform">PLATFORM</div>
            <div class="upcoming-release">Ullamco adipisicing duis dolor sit anim in consequat deserunt laborum officia culpa deserunt cupidatat ipsum.</div>
            <a href="#" class="upcoming-button">pre-order</a>
        </div>
        <div class="upcoming-image">
            <img src="/sources/newsImage/2.png" alt="">
        </div>
    </div>
    <!-----------------------------------------products------------------------------------------------>
    <br>
    <hr size="3">
    <div style="display:flex; align-items: center; justify-content: space-between; width: 17%;">
        <h1 style="margin: 10px;">TOP SELLS</h1> <a href="#" class="see-more">see more</a></div>
    <div class="products-sell">
        <button onclick="swap(-1)" class="swap-button left-swap">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button onclick="swap(1)" class="swap-button right-swap">
            <i class="fas fa-chevron-right"></i>
        </button>
        <div class="hide-product"></div>
        <div class="product-container" id="product1">
            <a href="#" class="product-link">
                <img height="150px" width="300px" src="/sources/newsImage/3.png" alt="card-sale" class="product-image">
            </a>
            <div class="date">00/00/0000</div>
            <h3 class="product-title"><a href="#">the name of game</a></h3>
            <label class="product-price">$10</label>
            <div class="contain-platform-button">
                <span class="platform">support device</span>
                <button class="wishlist-button">wish list</button>
            </div>
        </div>
        <div class="product-container" id="product2">
            <a href="#" class="product-link">
                <img height="150px" width="300px" src="/sources/newsImage/3.png" alt="card-sale" class="product-image">
            </a>
            <div class="date">00/00/0000</div>
            <h3 class="product-title"><a href="#">the name of game</a></h3>
            <label class="product-price">$10</label>
            <div class="contain-platform-button">
                <span class="platform">support device</span>
                <button class="wishlist-button">wish list</button>
            </div>
        </div>
        <div class="product-container" id="product3">
            <a href="#" class="product-link">
                <img height="150px" width="300px" src="/sources/newsImage/3.png" alt="card-sale" class="product-image">
            </a>
            <div class="date">00/00/0000</div>
            <h3 class="product-title"><a href="#">the name of game</a></h3>
            <label class="product-price">$10</label>
            <div class="contain-platform-button">
                <span class="platform">support device</span>
                <button class="wishlist-button">wish list</button>
            </div>
        </div>
        <div class="product-container" id="product4">
            <a href="#" class="product-link">
                <img height="150px" width="300px" src="/sources/newsImage/3.png" alt="card-sale" class="product-image">
            </a>
            <div class="date">00/00/0000</div>
            <h3 class="product-title"><a href="#">the name of game</a></h3>
            <label class="product-price">$10</label>
            <div class="contain-platform-button">
                <span class="platform">support device</span>
                <button class="wishlist-button">wish list</button>
            </div>
        </div>
    </div>
    <!-----------------------------------------marchandise------------------------------------------>
    <br>
    <hr size="3">
    <div class="new-games-container" id="new-game-image">
        <div class="new-game-container"><img src="/sources/images/2020-merch-2.png" alt="" class="new-game-image" id="new-game-image2"></div>
        <br><br>
        <div class="new-games-choices">
            <img src="/sources/images/2020-merch-2.png" style="border: #feed99 solid;" alt="" class="new-game-choice1 game-choice" onclick="nameGameImageContainer('/sources/images/2020-merch-2.png',0)">
            <img src="/sources/images/batman.png" alt="" class="new-game-choice2 game-choice" onclick="nameGameImageContainer('/sources/images/batman.png',1)">
            <img src="/sources/images/marchandise.png" alt="" class="new-game-choice3 game-choice" onclick="nameGameImageContainer('/sources/images/marchandise.png',2)">
            <img src="/sources/images/mbdsm89579471.png" alt="" class="new-game-choice4 game-choice" onclick="nameGameImageContainer('/sources/images/mbdsm89579471.png',3)">
        </div>
    </div>
    <hr size="3">
    <!-----------------------------------------best sold-------------------------------------------->
    <br>
    <div class="news-container">
        <div class="card-container">
            <img src="/sources/newsImage/3.png" alt="" class="card-image">
            <div class="card">
                <h1 class="card-title">random text</h1>
                <a href="#" class="button">more details</a>
                <div for="information" class="card-info">Consectetur duis labore tempor aute veniam Lorem exercitation. Ad culpa sunt excepteur Lorem cillum sint non nisi fugiat in consectetur sint adipisicing. Do sit deserunt laboris nulla ut incididunt dolore dolore minim mollit nisi officia.
                    Ad Lorem excepteur aute id laborum amet consequat. Fugiat nostrud mollit quis ea non ex dolore ea ad labore nostrud velit. Pariatur reprehenderit consequat mollit consectetur.</div>
            </div>
        </div>
        <div class="card-container">
            <img src="/sources/newsImage/3.png" alt="" class="card-image">
            <div class="card">
                <h1 class="card-title">random text</h1>
                <a href="#" class="button">more details</a>
                <div for="information" class="card-info">Voluptate eu dolore qui excepteur ex sint. Cupidatat irure culpa deserunt ad. Ad nulla tempor tempor deserunt ea culpa nisi ullamco eiusmod aute occaecat duis. Labore cupidatat sint Lorem ullamco enim reprehenderit veniam elit. Aliquip
                    laborum in incididunt officia occaecat elit nostrud nulla minim proident consequat laborum. Anim est non velit aliqua quis. Aliquip elit laborum sunt aliquip magna tempor aliquip excepteur incididunt sunt anim ea voluptate.</div>
            </div>
        </div>
        <div class="card-container">
            <img src="/sources/newsImage/3.png" alt="" class="card-image">
            <div class="card">
                <h1 class="card-title">random text</h1>
                <a href="#" class="button">more details</a>
                <div for="information" class="card-info">Voluptate velit esse eu consectetur fugiat proident deserunt. Ullamco quis sint proident amet consectetur aliquip. Enim et sit anim labore non. Eiusmod culpa irure eiusmod ut in aute ad. Exercitation laboris cillum qui consectetur consequat
                    consectetur ut.</div>
            </div>
        </div>
    </div>
    <br>
    <div class="contact-us-footer">
        <div class="grid-contact-us">
            <div class="copyright">&copy; DreamLand 2021 (not real)</div>
            <div class="social-media-contact-us">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
            <div class="email-contact-us">email: alroy.row2@gmail.com</div>
            <div class="phone">phone: +9665000000</div>
            <div class="address">DreamLand Inc. | Saudi Arabia, Ash Sharqiyah</div>
        </div>
    </div>
</body>

</html>