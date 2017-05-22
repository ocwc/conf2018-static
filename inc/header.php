<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OE Global 2018</title>
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
<div class="off-canvas-wrapper">
    <div class="title-bar hide-for-large mobile-header">
        <div class="row align-middle">
            <div class="small-6 small-offset-1 column text-center">
                <a class="clearfix" href="/"><img class="logo-small" src="/images/logo.svg"/></a>
            </div>
            <div class="small-5 column text-right">
                <button type="button" data-open="offCanvas">
                    <span class="menu-icon"></span>
                    <span class="menu-label">MENU</span>
                </button>
            </div>
        </div>
    </div>

    <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
        <ul class="vertical menu" data-drilldown>
            <li>
                <a href="#Item-1">Item 1</a>
                <ul class="vertical menu">
                    <li><a href="#Item-1A">Item 1A</a></li>
                    <li><a href="#Item-1A">Item 1A</a></li>
                    <li><a href="#Item-1A">Item 1A</a></li>
                    <li><a href="#Item-1A">Item 1A</a></li>
                </ul>
            </li>
            <li><a href="#Item-2">Item 2</a></li>
        </ul>
    </div>

    <div class="menu-desktop">
        <div class="row header header--social show-for-large text-right">
            <div class="medium-12 columns">
                Follow us for updates:
                <a href="#"><img class="social-icon" src="/images/icon-facebook.svg"/></a>
                <a href="#"><img class="social-icon" src="/images/icon-twitter.svg"/></a>
                <a href="#"><img class="social-icon" src="/images/icon-youtube.svg"/></a>
            </div>
        </div>
        <div class="row header show-for-large align-middle">
            <div class="medium-3 columns">
                <a class="clearfix" href="/"><img class="logo" src="/images/logo.svg"/></a>
            </div>
            <div class="medium-9 columns">
                <ul class="dropdown header--dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="#">Item 1</a>
                        <ul class="menu">
                            <li><a href="#">Item 1A</a></li>
                            <li><a href="#">Item 1A</a></li>
                            <li><a href="#">Item 1A</a></li>
                            <li><a href="#">Item 1A</a></li>
                            <!-- ... -->
                        </ul>
                    </li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="off-canvas-content" data-off-canvas-content>
        <div class="row">
            <div class="medium-offset-1 medium-10 columns">
                <h1 class="page--title">Page title</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam et iste nam. Accusantium eius est id officiis optio, porro qui vitae? Hic magni, similique! Assumenda delectus ducimus officia porro quo!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam et iste nam. Accusantium eius est id officiis optio, porro qui vitae? Hic magni, similique! Assumenda delectus ducimus officia porro quo!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam et iste nam. Accusantium eius est id officiis optio, porro qui vitae? Hic magni, similique! Assumenda delectus ducimus officia porro quo!</p>
            </div>
        </div>

        <footer class="row align-center">
            <div class="small-3 medium-2 columns">
                <img class="license-image" src="/images/cc-by.svg" />
            </div>
            <div class="small-9 medium-10 large-10 columns">
                <p>Except where otherwise noted, content on this site is licensed under a <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License.</a></p>
            </div>
        </footer>
    </div>
</div>
