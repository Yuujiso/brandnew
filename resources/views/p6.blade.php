<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chicken Rainbow</title>
    <meta name="description" content="Welcome to my future Shop!">
    <meta name="theme-color" content="#ffcee3">
    <link rel="shortcut icon" type="image/png" href="images/search.png" >

</head>

<body>
<!-- -------------------------------------- {TOP} -------------------------------------- -->

<div class="top-container">
    <div style="position: relative;">
        <h3><dfn>Outer beauty pleases the eye. Inner beauty captivates the heart.</dfn></h3>
    </div>
    <div class="header-search__wrapper">
        <div class="header-search">
            <button id="show-search" class="btn search-btn" aria-label="Search"></button>
        </div>
    </div>
</div>

<!-- -------------------------------------- {NAVI} -------------------------------------- -->

<div class="header" id="stickMan">
    <div class="topnav">
        <img src="images/gif.gif" class="logo">
        <a href="/index">Home</a>
        <a href="/cart">Cart</a>
        <a id="show-login">Login</a>
    </div>
</div>



<main class="main-content" role="main" >
    <div class="product-page">
        <div class="wrapper" data-product-wrapper="">
            <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                <a href="/index" title="Back to the frontpage">Home</a>
                <span aria-hidden="true">›</span>
                <span title="This page">Womens Lace Dress</span>
            </nav>
            <div class="grid product-single">
                <div class="grid__item large--two-thirds">

                    <!-- Slideshow container -->

                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="images/60.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="images/61.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="images/62.jpg" style="width:100%">
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prevProduct" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="nextProduct" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>

                <!--  Slideshow container  -->

                <div class="grid__item large--one-third" id="productInfo-product">
                    <div class="text-center">
                        <h5 class="product__price uppercase h5">
                            <span class="money"><span id="ProductPrice-product"><span class="money">$89.99</span></span></span>

                            <p class="small compare-at em" id="ComparePriceWrapper-product" style="display: none">
                                <span class="money"><span id="ComparePrice-product">$89.99</span></span>
                            </p>
                        </h5>
                        <h1 class="h2">Womens Lace Dress</h1>
                        <div class="product-description rte">
                            <ul>
                                <li>Cotton/Polyester blend T-Shirt</li>
                                <li>T-Shirt&nbsp;with multi-color ink print<span>&nbsp;</span></li>
                                <li><span></span>Chicken design<span>&nbsp;</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="product__form">
                        <div id="AddToCartForm-product" data-section="product" class="product-form-product product-form">
                            <form action="/cart">
                                <div class="selector-wrapper js">
                                    <label for="SingleOptionSelector-product-0">
                                        Color
                                    </label>
                                    <select class="single-option-selector single-option-selector-product" id="SingleOptionSelector-product-0" data-section="product" data-index="option1">
                                        <option value="Royal Blue" selected="selected">White</option>
                                    </select>
                                </div>

                                <div class="selector-wrapper js">
                                    <label for="SingleOptionSelector-product-1">
                                        Size
                                    </label>
                                    <select class="single-option-selector single-option-selector-product" id="SingleOptionSelector-product-1" data-section="product" data-index="option2">
                                        <option value="Small" selected="selected">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                        <option value="X-Large">X-Large</option>
                                        <option value="2X-Large">2X-Large</option>
                                    </select>
                                </div>
                                <div class="add-to-cart__wrapper">
                                    <button type="submit" class="btn btn--large btn--full btn--clear uppercase addToCart">
                                        <span>Add to Cart</span>
                                        <span class="unicode">•</span>
                                        <span class="money">$89.99</span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ------------------------------------- {FOOTER} ------------------------------------- -->
<div>
    <footer class="site-footer-wrapper">
        <div class="wrapper site-footer">
            <div class="grid-uniform">
                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">Main Menu</p>
                    <hr> <!-- it is underline -->
                    <ul class="footer-links">
                        <li><a href="/index"> Home</a></li>
                        <li><a href="/index"> Shop All</a></li>
                    </ul>
                </div>

                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">More Info</p>
                    <hr> <!-- it is underline -->
                    <ul class="footer-links">
                        <li><a href="https://t.me/yuujiso">Contact</a></li>
                    </ul>
                </div>

                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">Newsletter</p>
                    <hr> <!-- it is underline -->
                    <div>
                        <p>Join to get special offers, new info, and once-in-a-lifetime deals.</p>
                    </div>

                    <form>
                        <div class="input-group newsletter-form">
                            <input type="email" placeholder="your-email@example.com" class="input-group-field" aria-label="your-email@example.com">
                            <span class="input-group-btn">
                                    <input type="submit" value="joy" class="btn uppercase">
                                </span>
                        </div>

                    </form>
                </div>
            </div>

            <div class="footer-secondary-wrapper">
                <ul class="footer-secondary inline-list">
                    <li>MY FUTURE SHOP</li>
                    <li>Powered By <a href="https://t.me/yuujiso">TALGAT</a></li>
                </ul>

            </div>
        </div>
    </footer>
</div>

<div class="popup-overlay"></div>
<div class="popup">

    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Log in</h2>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" id="password" value="password" placeholder="Enter password">
        </div>
        <div class="form-element">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
        </div>
        <div class="form-element">
            <form method="get" action="/reg">
                <button id="signup" type="submit" >Sign up</button>
            </form>
        </div>
        <div class="form-element">
            <form method="get" action="/index">
                <button id="signin" type="submit" onclick="javascript:playSound();">Sign in</button>
            </form>
        </div>
        <div class="form-element">
            <a href="#">Forgot password?</a>
        </div>
    </div>
</div>

<div class="popup-search-overlay"></div>
<div class="popup-search">

    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Search</h2>
        <div class="form-element">
            <input class="search-bar" type="search" name="q" title="Search" placeholder="I want...">
        </div>
        <div class="form-element">
            <form method="get" action="" role="search">
                <button id="find" type="submit" value="search" aria-label="Search">Find</button>
            </form>
        </div>
    </div>
</div>
<button onclick="topFunction(); playSound();" id="myBtn" title="Go to top">▲</button>
<!-- ------------------------------------- {END} ------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="js/main.js"></script>
</body>
</html>
