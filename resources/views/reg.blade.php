<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="public/images/favicon.png">
    <link href="public/css/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Register</title>
    <meta name="description" content="Welcome to my future Shop!">
    <meta name="theme-color" content="#ffcee3">
    <link rel="icon" type="image/png" src="images/search.png" >
</head>
<!-- -------------------------------------- {TOP} -------------------------------------- -->
<body>
<div class="top-container">
    <div style="position: relative;">
        <h3><dfn>Outer beauty pleases the eye. Inner beauty captivates the heart.</dfn></h3>
    </div>
</div>
<!-- -------------------------------------- {NAVI} -------------------------------------- -->
<div class="header" id="stickMan">
    <div class="topnav">
        <img src="images/gif.gif" class="logo-gif">
        <a href="/index">Home</a>
        <a href="/cart">Cart</a>
    </div>
</div>

<!-- -------------------------------------- {REGIS} -------------------------------------- -->
<main class="main-content" role="main">
    <div class="wrapper">
        <div class="homepage-collection">
            <div class="grid__item large--one-third push--large--one-third text-center">
                <div class="text-center h1">
                    <b>Create Account</b>
                </div>
                <x-jet-authentication-card>
                    <x-slot name="logo">
                    </x-slot>
                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="regform-element warn h2 text-center red__text" id="showWarn" style="opacity: 0; transition: 1s;"><warning id="warn">
                            </warning></div>
                        <div class="regform-element">
                            <x-jet-input type="text" maxlength="20" id="name" placeholder="Name" name="name" :value="old('name')" required oninvalid="this.setCustomValidity('Enter Name Here')"
                                   oninput="this.setCustomValidity('');"  required autofocus autocomplete="name" />
                        </div>
                        <div class="regform-element">
                            <x-jet-input id="email" maxlength="35" name="email" placeholder="Email" required type="email" oninvalid="this.setCustomValidity('Please Enter valid email')"
                                   oninput="setCustomValidity('')"  :value="old('email')" required />
                        </div>
                        <div class="regform-element-pass">
                            <x-jet-input type="password" maxlength="30" id="password_confirmation" placeholder="Password" oninput="checkPass()" name="password" required autocomplete="new-password"  />
                            <button type="button" class="pass-btn" onmousedown="showPassword(1)" onmouseup="showPassword(0)"><img src="images/eyesee.png" id="changeable" style="width: 50%; height: 50%; margin-top: 5px"></button>
                        </div>
                        <div class="regform-element-pass">
                            <x-jet-input type="password" maxlength="30" id="password-repeat" placeholder="Password Again" name="password_confirmation"  required autocomplete="new-password" />
                            <button type="button" type="submit" value="submit" class="pass-btn" id="showPass" onmousedown="showPasswordRepeat(1)" onmouseup="showPasswordRepeat(0)"><img src="images/eyesee.png" id="changeable-repeat" style="width: 50%; height: 50%; margin-top: 5px"></button>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif

                        <x-jet-button id="finish" class="btn btn--full" onclick="confirm()">Register</x-jet-button>
                    </form>
                </x-jet-authentication-card>

                </div>
        </div>

    </div>

</main>
<div style="padding-top: 63px">
    <footer class="site-footer-wrapper">
        <div class="wrapper site-footer">
            <div class="grid-uniform">
                <div class="grid__item large--one-third footer__block">
                    <p class="uppercase footer__title">Main Menu</p>
                    <hr> <!-- it is underline -->
                    <ul class="footer-links">
                        <li><a>Home</a></li>
                        <li><a>Shop All</a></li>
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

<!-- ------------------------------------- {END} ------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="public/js/main.js"></script>


</body>

</html>
