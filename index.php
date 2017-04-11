<?php
    //disable cache
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
 <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ThinkZion | We are a Web Agency | Sydney, London</title>
    <meta name="description" content="ThinkZion | We are a Web Agency | Design, Development, Graphic, Ecommerce | Sydney, London | AU & UK Based | We specialise in custom Web Solutions">
    <link rel="canonical" href="http://joeldobbinsdesigns.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.min.css?version=<?php echo hash_file('md5', 'css/main.min.css'); ?>">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
    <meta name="theme-color" content="#999999">
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="body-background"></div>
    <div class="wrapper">
        <a name="home" class="anchor"></a>
        <div class="home">
            <h2>Let’s Revitalise your Online Strategy Today to Optimise your Business Profit</h2>
            <h1>WE ARE A WEB AGENCY<br><br>Design + Development + Graphic + Ecommerce<br><a href="#how"><span>SERVICES</span></a></h1>
            <img class="home-logo" src="img/header.jpg?version=<?php echo hash_file('md5', 'img/header.jpg'); ?>" alt="header">
            <div class="home-down">
                <a href="#how">
                    <img src="img/home-down.png?version=<?php echo hash_file('md5', 'img/home-down.png'); ?>" alt="Home Down" />
                </a>
             </div>
        </div>
        <!--<div class="why-wrapper">
            <a name="why" class="anchor"></a>
            <div class="why row">
                <div class="col-md-12">
                    <h2>Why ThinkZion?</h2>
                    <ul>
                        <li>Custom fit and appropriately designed for you unlike any CMS or DIY site</li>
                        <li>Cheaper than CMS alternatives</li> 
                        <li>Integrated custom styled e-commerce solutions</li>
                        <li>24 hour guaranteed response times for content or shopping cart product updates</li>
                    </ul>
                    <p>Our mission is to analyse, conceive and implement a solution, a custom solution, that will not only be cheaper than a DIY web builder long term, but will genuinely be an investment generating real business profit into the future</p>                    
                </div>                
            </div>
        </div>-->
        <div class="how-wrapper">
            <a name="how" class="anchor"></a>
            <div class="how row">                
                <div class="col-md-4">
                    <img src="img/icon-creative.png?version=<?php echo hash_file('md5', 'img/icon-creative.png'); ?>" alt="Payment Options">
                    <h2>DESIGN &amp; CREATIVE</h2>
                    <p>Through engaging interfaces and designs, we craft brands that leave a lasting impression</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-development.png?version=<?php echo hash_file('md5', 'img/icon-development.png'); ?>" alt="Payment Options">
                    <h2>WEB DEVELOPMENT</h2>
                    <p>From flexible platforms to custom applications, we build technology to enhance and simplify your business</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-payment.png?version=<?php echo hash_file('md5', 'img/icon-payment.png'); ?>" alt="Payment Options">
                    <h2>PAY IT LIKE A PHONE CONTRACT</h2>
                    <p>We offer flexible payment options so you can pay it off monthly over a 24 month period, interest free of course</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-responsive.png?version=<?php echo hash_file('md5', 'img/icon-responsive.png'); ?>" alt="Payment Options">
                    <h2>RESPONSIVE WEB DESIGN</h2>
                    <p>Whatever the device, our websites can be built to ensure your web page look good on all devices (desktops, tablets, and phones)</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-ecommerce.png?version=<?php echo hash_file('md5', 'img/icon-ecommerce.png'); ?>" alt="Payment Options">
                    <h2>E-COMMERCE SHOPPING CARTS</h2>
                    <p>E-commerce should be the next step for selling your products for any business and having your invoices paid online by your customers</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-social.png?version=<?php echo hash_file('md5', 'img/icon-social.png'); ?>" alt="Payment Options">
                    <h2>SOCIAL MEDIA INTEGRATION</h2>
                    <p>Connecting with customers via social media is evermore crucial. Why not integrate them all together within your new website, further boosting your business profits</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-seo.png?version=<?php echo hash_file('md5', 'img/icon-seo.png'); ?>" alt="Payment Options">
                    <h2>SEO: SEARCH ENGINE OPTIMISATION</h2>
                    <p>Search engines outperform all other media in driving visitors to websites. We do everything possible to enhance your page rank attracting new potential clients to your new website</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-hosting.png?version=<?php echo hash_file('md5', 'img/icon-hosting.png'); ?>" alt="Payment Options">
                    <h2>DOMAIN NAMES WEB HOSTING</h2>
                    <p>We work with you to decide on a domain name that suits your business or organisation and provide a secure yet cost-effective webhosting and email service</p>
                </div>
                <div class="col-md-4">
                    <img src="img/icon-print.png?version=<?php echo hash_file('md5', 'img/icon-print.png'); ?>" alt="Payment Options">
                    <h2>PRINT DESIGN</h2>
                    <p>With extensive former print industry experience, we can design anything print-ready for you be it a business card, brochure, packaging, clothing, etc</p>
                </div>
            </div>
        </div>
        <div class="feature-wrapper packages">
            <a name="packages" class="anchor"></a>
            <!--<div class="feature row">
                <div class="col-md-7 feature-text">
                    <h2>EfTeePee</h2>
                    <h3>FTP EDITOR FOR MOBILE AND DESKTOP</h3>
                    <p>Make edits to your website on the fly via any smartphone, tablet or computer. No need to wait for site files to pre-download, publish or upload your site files at all, be dependent on a computer or require any additional editing tools. It's all built right in.</p>
                </div>
                <div class="col-md-5">
                    <a href="#feature">
                        <img id="featureImg1" src="img/feature-efteepee1.jpg" alt="EfTeePee" />
                    </a>
                </div>
            </div>
            <div class="feature row">
                <div class="col-md-5">
                    <a href="http://urldomainlist.com">
                        <img id="featureImg2" src="img/feature-UrlDomainList1.jpg" alt="Url Domain List" />
                    </a>
                </div>
                <div class="col-md-7 feature-text">
                    <h2>URL Domain List</h2>
                    <h3>URL DOMAIN LIST STATUS MONITORING SYSTEM</h3>
                    <p>Keeps track of all your wishlist domain web addresses and emails you within the hour if the availability status of the domain changes, so you can race out and purchase before anyone else has the chance to do so.</p>
                    <p><a href="http://urldomainlist.com">Sign Up</a></p>
                </div>
            </div>-->
            <div class="feature row">
                <div class="feature row">
                    <div class="col-md-3 feature-text">
                        <h2>Basic</h2>
                        <h3>CMS WEBSITE<br>+<br>BACKDOOR LOGIN TO CHANGE TEXT AND IMAGES</h3>
                        <p>We integrate a ready-made theme for your new website and hook up a shopping cart plugin. You will be provided with a login so you can maintain the content yourself</p>                        
                        <h3>OPTIONALS</h3>
                        <ul>
                            <li>We can make changes via the login</li>
                        </ul>
                    </div>
                    <div class="col-md-3 gold-package">
                        <h2>Pro</h2>
                        <h3>CUSTOM DESIGNED WEBSITE</h3>
                        <p>We custom design in Photoshop exactly what you are after, and after you are happy we build it: pixel perfect. We take care of everything for you so there is no hassle on your end. We even take care of the shopping cart setup for you, and best of all it is all inbuilt into the design of your new website</p>                        
                        <h3>OPTIONALS</h3>
                        <ul>
                            <li>Integrated shopping cart</li>
                            <li>Continual updates after launch for text, image and shopping cart product updates within 24hrs</li>
                            <li>Sky’s the limit, make any changes you want after launch</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>Ultimate</h2>
                        <h3>CMS CUSTOM DESIGNED WEBSITE<br>+<br>BACKDOOR LOGIN TO CHANGE TEXT AND IMAGES</h3>
                        <p>We custom design in Photoshop a design, and once approved we build the custom design as a new theme for your new website and hook up a shopping cart plugin. You will be provided with a login so you can maintain the content yourself</p>
                        <h3>OPTIONALS</h3>
                        <ul>
                            <li>We can make changes via the login</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>Flexible</h2>
                        <h3>CUSTOM CONTRACT</h3>
                        <p>Whatever your situation - no matter how unique - we’re here and would love to be involved. If you just need us to make a few changes with your current website then we are happy to help</p>
                    </div>                    
                </div>     
            </div>
        </div>
        <div class="feature-wrapper">
            <div class="feature row">
                <a name="what" class="anchor"></a>
                <div class="feature row">
                    <div class="col-md-7 feature-text">
                        <h2>Kosrae Nautilus Resort</h2>
                        <h3>DESIGN & DEVELOPMENT OF NEW WEBSITE</h3>
                        <p>Kosrae Nautilus Resort, which made international headlines after it was raffled off in July 2016 to two lucky Australians, just got a brand new website</p>
                        <p><a href="http://kosraenautilus.com/">www.kosraenautilus.com</a></p>
                    </div>
                    <div class="col-md-5">
                        <a href="http://www.kosraenautilus.com/">
                            <img id="featureImg3" src="img/feature-kosrae1.jpg?version=<?php echo hash_file('md5', 'img/feature-kosrae1.jpg'); ?>" alt="Kosrae Nautilus" />
                        </a>
                    </div>
                </div> 
                <div class="feature row">
                    <div class="col-md-7 feature-text">
                        <h2>GNSS Monitoring</h2>
                        <h3>CUSTOM DEVELOPMENT</h3>
                        <p>Advanced live CSV data graphing and map integration</p>                        
                        <p><a href="http://gnssmonitoring.com.au/">www.gnssmonitoring.com.au</a></p>
                    </div>
                    <div class="col-md-5">
                        <a href="http://gnssmonitoring.com.au/">
                            <img src="img/GNSSMonitoring.jpg?version=<?php echo hash_file('md5', 'img/GNSSMonitoring.jpg'); ?>" alt="GNSS Monitoring" />
                        </a>
                    </div>
                </div>
                <div class="feature row">
                    <div class="col-md-7 feature-text">
                        <h2>Kosrae Diving</h2>
                        <h3>DESIGN & DEVELOPMENT OF NEW WEBSITE</h3>
                        <p>The sister site of the international headlining Kosrae Nautilus Resort we recently launched, offering a more in-depth island wide guide from under the surface of the ocean</p>
                        <p><a href="http://www.kosraediving.com/">www.kosraediving.com</a></p>
                    </div>
                    <div class="col-md-5">
                        <a href="http://www.kosraediving.com/">
                            <img src="img/feature-kosraeDiving.jpg?version=<?php echo hash_file('md5', 'img/feature-kosraeDiving.jpg'); ?>" alt="Kosrae Diving" />
                        </a>
                    </div>
                </div>  
                <div class="feature row">
                    <div class="col-md-7 feature-text">
                        <h2>Rebel Sierra</h2>
                        <h3>DESIGN & DEVELOPMENT OF NEW WEBSITE</h3>
                        <p>Offers professional laser cutting services for Businesses, Designers, Makers, Hobbyists and everyone in between</p>
                        <p><a href="http://rebelsierra.com/">www.rebelsierra.com</a></p>
                    </div>
                    <div class="col-md-5">
                        <a href="http://rebelsierra.com/">
                            <img src="img/feature-rebelSierra.jpg?version=<?php echo hash_file('md5', 'img/feature-rebelSierra.jpg'); ?>" alt="Rebel Sierra" />
                        </a>
                    </div>
                </div> 
                <?php
                $sapi_type = php_sapi_name();
                    if (substr($sapi_type, 0, 3) !== 'cgi') {
                        echo('
                            <div class="feature row">
                                <div class="col-md-7 feature-text">
                                    <h2>Frederick And Muriel</h2>
                                    <h3>DESIGN & DEVELOPMENT OF NEW E-COMMERCE WEBSITE</h3>
                                    <p>For all your homeware needs for the Southern Highlands</p>
                                    <p><a href="http://frederickandmuriel.com.au/">www.frederickandmuriel.com.au</a></p>
                                </div>
                                <div class="col-md-5">
                                    <a href="http://frederickandmuriel.com.au/">
                                        <img src="img/feature-FrederickAndMuriel.jpg" alt="Frederick And Muriel" />
                                    </a>
                                </div>
                            </div> 
                        ');
                    }
                ?>                                                       
            </div>                                              
        </div>
        <div class="clients-wrapper">
                <a name="clients" class="anchor"></a>
                <div class="clients row">  
                    <div class="col-md-3">
                        <h2>"Great new website."</h2>
                        <p>Peter Goerman</p>
                    </div> 
                    <div class="col-md-3">
                        <h2>"Wow! That's Kosrae?!?😍"</h2>
                        <p>Ashley Meredith</p>                        
                    </div>       
                    <div class="col-md-3">
                        <h2>"Looks great! I really enjoyed my stay!"</h2>
                        <p>Nicole LaBarge</p>                        
                    </div>
                    <div class="col-md-3">
                        <h2>"Looks fantastic &#128077;"</h2>
                        <p>PeterPat Guster</p>                        
                    </div>
                </div>
            </div>
        <!--<div class="what">
            <div class="what-wrapper row">                
                <div class="col-md-4 what-item">
                    <h3>MAYFAIR RISING</h3>
                    <ul>
                        <li>Website Development</li>
                    </ul>
                    <a href="http://joeldobbinsdesigns.com/mayfairRising/">
                        <img src="img/what-mayFairRising.jpg" alt="Mayfair Rising" />
                    </a>
                </div>
                <div class="col-md-4 what-item">
                    <h3>CROSSFITS</h3>
                    <ul>
                        <li>Restrategised Branding</li>
                        <li>Website Development</li>
                    </ul>
                    <a href="http://www.crossfits.com.au/">
                        <img src="img/what-crossfits.jpg" alt="Crossfits" />
                    </a>
                </div>
                <div class="col-md-4 what-item">
                    <h3>FORBES DOWLING</h3>
                    <ul>
                        <li>Website Development</li>
                    </ul>
                    <a href="http://www.forbesdowling.com.au/">
                        <img src="img/what-forbesDowling.jpg" alt="Forbes Dowling" />
                    </a>
                </div>
                <div class="col-md-4 what-item">
                    <h3>JOSH WHALAN</h3>
                    <ul>
                        <li>Restrategised Branding</li>
                        <li>Website Co-Design/Development</li>
                    </ul>
                    <a href="http://www.joshwhalan.com/">
                        <img src="img/what-joshWhalan.jpg" alt="Josh Whalan" />
                    </a>
                </div>
                <div class="col-md-4 what-item">
                    <h3>HPM LEGRAND CAREERS</h3>
                    <ul>
                        <li>Website Development</li>
                    </ul>
                    <a href="http://careers.hpmlegrand.com.au/">
                        <img src="img/what-hpmLegrandCareers.jpg" alt="HPM Legrand Careers" />
                    </a>
                </div>
                <div class="col-md-4 what-item">
                    <h3>STEAMATIC</h3>
                    <ul>
                        <li>Website Development</li>
                    </ul>
                    <a href="http://www.steamatic.com.au/">
                        <img src="img/what-steamatic.jpg" alt="Steamatic" />
                    </a>
                </div>
            </div>
        </div>-->
        <!--<div class="who-wrapper">            
            <div class="who row">  
                <div class="col-md-6 who-text">
                    <h2>Joel Dobbins</h2>
                    <h3>FULL STACK WEB DEVELOPER/DESIGNER</h3>
                    <p>“If you can imagine it, you can make it.”</p>
                    <p><a href="http://joeldobbinsdesigns.com">www.joeldobbinsdesigns.com</a></p>
                </div>  
                <div class="col-md-6 who-text">
                    <h2>Todd Sutherland</h2>
                    <h3>FRONT END DEVELOPER/DESIGNER</h3>
                    <p>“Let's work together to make your business thrive online.”</p>
                    <p><a href="http://toddsutherlanddesigns.com">www.toddsutherlanddesigns.com</a></p>
                </div>
            </div>
        </div>-->
        <a name="where" class="anchor"></a>
        <div class="where">
            <h2>Based in Sydney and London</h2>
        </div>

        <!--<div class="twitter-wrapper">
            <a class="twitter-timeline" data-link-color="#211e14" href="https://twitter.com/ThinkZion">Tweets by ThinkZion</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>-->
        <div class="footer-cityscape"></div>
        <footer class="row">
            <a name="contact" class="anchor"></a>
            <div class="col-md-6 footer-item">
                <h2>SYDNEY</h2>
                <p><span class="caption">M</span>+61 410 636 052</p>
                <p><span class="caption">E</span><a href="mailto:sydney@thinkzion.com">sydney@thinkzion.com</a></p>
            </div>
            <div class="col-md-6 footer-item">
                <h2>LONDON</h2>
                <p><span class="caption">M</span>+44 7 835 333 500</p>
                <p><span class="caption">E</span><a href="mailto:london@thinkzion.com">london@thinkzion.com</a></p>
            </div>
            <div class="col-md-6 footer-item">
                <h2>THINK</h2>
                <p>Design</p>
                <p>Development</p>
                <p>Graphic</p>
                <p>Ecommerce</p>
            </div>
            <div class="col-md-6 footer-item">
                <h2>CONNECT WITH US</h2>
                <ul>
                    <li>
                        <a href="https://www.linkedin.com/company/thinkzion">
                            <img src="img/social-linkedIn.png?version=<?php echo hash_file('md5', 'img/social-linkedIn.png'); ?>" alt="linkedIn" />
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/ThinkZion">
                            <img src="img/social-twitter.png?version=<?php echo hash_file('md5', 'img/social-twitter.png'); ?>" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/ThinkZion/">
                            <img src="img/social-facebook.png?version=<?php echo hash_file('md5', 'img/social-facebook.png'); ?>" alt="Facebook" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 footer-copyright">
                <p><strong>&copy; ThinkZion 2016 - <?php echo date("Y"); ?>.</strong> All Rights Reserved. <a href="#">Policies</a> | <a href="#">Terms and Conditions</a></p>
            </div>
        </footer>
    </div>
    <header>
        <div class="header-wrapper">
            <div class="nav-logo">
                <a href="#home">
                    <img src="img/logo.png?version=<?php echo hash_file('md5', 'img/logo.png'); ?>" alt="logo" />
                </a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#how">SERVICES</a></li>
                    <li><a href="#packages">PACKAGES</a></li>
                    <li><a href="#what">CLIENTS</a></li>
                    <li><a href="#where">WHERE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="nav-button">

            </div>
        </div>
    </header>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <?php
        //check if running on localhost as opposed to the server
        $sapi_type = php_sapi_name();
        if (substr($sapi_type, 0, 3) !== 'cgi') {
            echo("<script src='js/main.js?version=" . hash_file('md5', 'js/main.js') . "'></script>");
        } else {
            echo("<script src='js/main.es5.min.js?version=" . hash_file('md5', 'js/main.es5.min.js') . "'></script>");
        }
    ?>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <?php
            //check if running on localhost as opposed to the server
            $sapi_type = php_sapi_name();
            if (substr($sapi_type, 0, 3) == 'cgi') {
                echo("<script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-82258602-1', 'auto');
                ga('send', 'pageview');

            </script>");
            }
        ?>
</body>
</html>
