<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Builder</title>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="src/minified/TweenMax.min.js"></script>
        <script src="src/minified/jquery.gsap.min.js"></script>
        <script src="src/simple-expand.min.js"></script>
        <script src="//cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>
        <link href="//cdn.muicss.com/mui-0.2.1/css/mui.min.css" rel="stylesheet" type="text/css" />
        <script src="//cdn.muicss.com/mui-0.2.1/js/mui.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="newsletter-tool">
            <h1 id="title">Newsletter tool</h1>

            <div class="mui-panel">
                <form id="formy" class="mui-form--inline">
                    <div class="mui-radio store">
                        <label>
                            <input type="radio" name="store" value="hmv-ie" data-id="hmv">hmv
                        </label>
                    </div>
                    <div class="mui-radio store">
                        <label>
                            <input type="radio" name="store" value="xv-ie" data-id="Xtra-vision">Xtra-vision IE
                        </label>
                    </div>
                    <div class="mui-radio store">
                        <label>
                            <input type="radio" name="store" value="xv-uk" data-id="Xtra-vision">Xtra-vision UK
                        </label>
                    </div>
                    <div class="mui-radio store">
                        <label>
                            <input type="radio" name="store" value="xvm-ie" data-id="Xtra-vision Marketplace">XVM IE
                        </label>
                    </div>
                    <div class="mui-radio store">
                        <label>
                            <input type="radio" name="store" value="xvm-uk" data-id="Xtra-vision Marketplace">XVM UK
                        </label>
                    </div>

                    <button class="mui-btn mui-btn--primary" id="get-html">Get HTML</button>
                    <button class="mui-btn mui-btn--primary" id="save-html">Save HTML</button>

                    <div class="mui-textfield">
                        <input type="text" id="pre_header" size="60" value placeholder="Pre-header" data-id="PRE-HEADER" />
                    </div>
                    <div class="mui-textfield">
                        <input type="text" id="intro_text" size="60" value placeholder="Intro Text" data-id="INTRO-TEXT" />
                    </div>
                    <div class="mui-textfield">
                        <input type="text" id="title_text" size="60" value placeholder="Title Text" data-id="TITLE-TEXT" />
                    </div>
                </form>
            </div>
            <div class="forms">
                <?php
                // Start the first count at 0 outside the loop.
                $count = 0;
                // Start the second count at 0 outside the loop.
                $second_count = 0;
                // Arrays normally start at 0 so the count starts at 0 for good practice.
                while($count <= 3) {
                    // loop though until count is equal or less than 3
                    // Plus one to the counter each loop
                    $count++;
                ?>
                
                <div class="box-<?php echo $count?>" <?php if ($count > 3) { echo 'style="display:none"' ; }?>>
                    <a class="expander" data-expander-target=".content-<?php echo $count?>" href="#"><h2 class="product-box">Product <?php echo $count?></h2></a>
                    <div class="content-<?php echo $count?> mui-panel">
                        <div class="mui-textfield">
                            <input type="text" class="product-title" size="60" value placeholder="Product Title" data-id="PRODUCT-TITLE-<?php echo $count?>" />
                        </div>
                        <div class="mui-textfield">
                            <input type="text" size="60" value placeholder="Product Synopsis" data-id="PRODUCT-SYNOPSIS-<?php echo $count?>" />
                        </div>
                        <div class="mui-textfield">    
                            <input type="text" size="60" class="image" value placeholder="Image URL" data-id="IMAGE-URL-<?php echo $count?>" />
                        </div>
                        <div class="mui-textfield">
                            <input type="text" size="60" class="producturl"  value placeholder="Product URL" data-id="PRODUCT-URL-<?php echo $count?>" />
                        </div>
                        <div class="mui-checkbox">
                            <label>
                                <input type="checkbox" name="pre-order" id="pre-order-1" value placeholder="Pre-order" data-id="PRE-ORDER-<?php echo $count?>" />
                                Pre-order
                            </label>
                        </div>

                        <form class="mui-form--inline">

                            <?php while($second_count <= 2) {
                    // loop though until count is equal or less than 2 - ADDS 3 PRICE/FORMAT blocks
                    // Plus one to the counter each loop
                    $second_count++;
                            ?>
                            <div class="priceBlock">
                                <div class="mui-textfield price">
                                    <input type="text" id="product_price-<?php echo $count?>-<?php echo $second_count?>" size="4" value placeholder="Price" data-id="PRODUCT-PRICE-<?php echo $count?>-<?php echo $second_count?>" />
                                </div>
                                <div class="mui-select format">
                                    <select id="format_<?php echo $count?>-<?php echo $second_count?>" data-id="FORMAT-<?php echo $count?>-<?php echo $second_count?>">
                                        <option value="">Blank</option>
                                        <option value="DVD">DVD</option>
                                        <option value="Blu-ray">Blu-ray</option>
                                        <option value="3D-Blu-ray">3D Blu-ray</option>
                                        <option value="SteelBook">SteelBook</option>
                                        <option value="Exclusive-SteelBook">Exclusive SteelBook</option>
                                        <option value="CD">CD</option>
                                        <option value="Vinyl">Vinyl</option>
                                        <option value="Xbox-One">Xbox One</option>
                                        <option value="PS4">PS4</option>
                                        <option value="Console-Bundle">Console Bundle</option>
                                    </select>
                                </div>
                            </div>

                            <?php
                }
                    // Reset the counter to 1 or it will never loop again after the first 2.
                    $second_count = 0; ?>

                        </form>
                    </div>
                </div>
                <div style="clear:both;"></div>
                <?php  }?>
            </div>

            <button class="mui-btn mui-btn--primary add-another">Add More</button>
            <button class="mui-btn mui-btn--primary remove">Remove</button>

            <div style="clear:both;padding-top:50px;">
                <h2>Toools</h2>
                <button class="mui-btn mui-btn--primary" onclick="goLinks();">Remove Links</button>
                <button class="mui-btn mui-btn--primary" onclick="goAlt();">Remove Alt</button>
            </div>

        </div>
        <div class="output-wrapper">
            <div id="mainHTML" style=""></div>
            <textarea id="quine"></textarea>
        </div>
        <script src="src/moment.min.js"></script>
        <script src="src/custom-email.js"></script>
        <script src="src/tools.js"></script>
        <script src="src/save.js"></script>
        <script src="src/add-more.js"></script>
        
    </body>
</html>
