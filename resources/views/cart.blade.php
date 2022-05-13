<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Registration</title>
    <meta name="description" content="Welcome to my future Shop!">
    <meta name="theme-color" content="#ffcee3">
    <link rel="shortcut icon" src="images/search.png" type="image/png">
    <script src="js/cart.js" async></script>
</head>

<body>
<div class="fullhouse">
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
        <a id="show-login">Login</a>
    </div>
</div>



<main style="padding-top: 85px;">
    <div>
        <div class="cart">
            <div class="wrapper page-margin">
                <form action="" method="post" class="cart cartForm">
                    <h3>Your Cart</h3>
                    <div data-cart-form-wrapper="">
                        <div class="cart__body">
                            <div class="cart__row medium-down--hide cart__header-labels">
                                <div class="grid--full">
                                    <div class="grid__item large--one-half push--large--one-half">
                                        <div class="grid--full cart__line__nums">
                                            <div class="grid__item one-third medium-down--one-third">
                                                Price
                                            </div>
                                            <div class="grid__item one-third medium-down--one-third text-center cart__qty__th">
                                                Quantity
                                            </div>
                                            <div class="grid__item one-third medium-down--one-third text-right">
                                                Total
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__row">
                                <div class="item--loadbar" style="display: none;"></div>
                                <div class="grid--full cart__row--table-large">
                                    <div class="grid__item large--one-half">
                                        <div class="grid--full cart__row--table-large">

                                            <div class="grid__item one-third small--one-quarter">
                                                <a href="" class="cart__image">
                                                    <img src="" alt="">
                                                </a>
                                            </div>

                                            <div class="grid__item two-thirds small--three-quarters cart__item__title">
                                                <a href="" class="h4--body">
                                                    Some product
                                                </a>

                                                <p><small>Option</small></p>
                                                <p class="item__vendor">Producer</p>
                                                <a href="" class="cart__remove uppercase lighten">
                                                    <small>Remove</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item large--one-half">
                                        <div class="grid--full cart__row--table-large cart__line__nums">
                                            <div class="grid__item one-third text-left">
                                                <span class="cart__mini-labels">Price</span>
                                                <div class="item__price">
                                                    <p class="item__price--final">$35.00</p>
                                                </div>
                                            </div>
                                            <div class="grid__item one-third text-center cart__line__qty">
                                                <div class="cart__qty">
                                                    <span class="cart__mini-labels">Quantity</span>
                                                    <div class="js-qty quantity-selector">
                                                        <span class="js-qty__adjust js-qty__adjust--minus quantity__minus" onclick="this.parentNode.querySelector('[type=number]').stepDown();">−</span>
                                                        <input class="text quantity js-qty__num quantity__input" type="number" min="1" size="4" aria-label="quantity" pattern="[0-9]*" value="1">
                                                        <span class="js-qty__adjust js-qty__adjust--plus quantity__plus" onclick="this.parentNode.querySelector('[type=number]').stepUp();">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item one-third text-right cart__line__totals">
                                                <div class="cart__subtotal">
                                                    <span class="cart__mini-labels">Total</span>
                                                    <span class="h5--body money">$35.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart__row cart__footer">
                            <div class="grid">
                                <div class="grid__item text-right">
                                    <p class="cart__footer__text">
                                        <span class="cart__subtotal-title uppercase">Subtotal</span>
                                        <span class="h3--body cart__subtotal money">$35.00</span>
                                        <span class="cart-total-price">$0</span>
                                    </p>
                                    <div class="cart__footer__buttons">
                                        <span><input name="checkout" class="btn uppercase btn--large btn--splash checkout__button" value="Check Out"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- ------------------------------------- {FOOTER} ------------------------------------- -->
<div class="stay-bottom">
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
</div>
<button onclick="topFunction(); playSound();" id="myBtn" title="Go to top">▲</button>
<!-- ------------------------------------- {END} ------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="js/main.js"></script>

</body>

</html>
