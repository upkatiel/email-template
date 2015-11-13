<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Builder</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="src/minified/TweenMax.min.js"></script>
        <script src="src/minified/jquery.gsap.min.js"></script>
        <script src="//cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>
    </head>
    <body>
        <div class="newsletter-tool">
            <h1 id="title">Newsletter tool</h1>
            <div>
                <div class="stores">
                    <form id="formy">
                        <div>
                            <input type="radio" name="store" value="hmv-ie" data-id="hmv">hmv
                            <input type="radio" name="store" value="xv-ie" data-id="Xtra-vision">Xtra-vision IE
                            <input type="radio" name="store" value="xv-uk" data-id="Xtra-vision">Xtra-vision UK
                            <input type="radio" name="store" value="xvm-ie" data-id="Xtra-vision Marketplace">XVM IE
                            <input type="radio" name="store" value="xvm-uk" data-id="Xtra-vision Marketplace">XVM UK
                            <input type="button" name="get" value="Get HTML" id="get-html">
                            <input type="button" name="save" value="Save HTML" onclick="saveMe();">
                            <div>
                            </div>
                            <input type="text" id="pre_header" size="60" value placeholder="Pre-header" data-id="PRE-HEADER" /> 
                            <input type="text" id="intro_text" size="60" value placeholder="Intro Text" data-id="INTRO-TEXT" /> 
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
                while($count <= 4) {
                    // loop though until count is equal or less than 3
                    // Plus one to the counter each loop
                    $count++;
                    ?>
                    <div class="bigBox box-<?php echo $count?>" <?php if ($count > 3) { echo 'style="display:none"' ; }?>>
                        <h2>Product <?php echo $count?></h2>
                        <form>
                            <div class="box">
                                <input type="text" id="product_title-1" class="product-title" size="60" value placeholder="Product Title" data-id="PRODUCT-TITLE-<?php echo $count?>" />
                                <input type="text" id="product_synopsis-1" size="60" value placeholder="Product Synopsis" data-id="PRODUCT-SYNOPSIS-<?php echo $count?>" />
                                <input type="text" id="image_url-1" size="60" class="image" value placeholder="Image URL" data-id="IMAGE-URL-<?php echo $count?>" />
                                <input type="text" id="product_url-1" size="60" value placeholder="Product URL" data-id="PRODUCT-URL-<?php echo $count?>" />
                                <input type="checkbox" name="check" id="pre-order-1" value placeholder="Pre-order" data-id="PRE-ORDER-<?php echo $count?>" />Pre-order
                            </div>
                            <div class="box">
                                <?php   while($second_count <= 2) {
                                    // loop though until count is equal or less than 6
                                    // Plus one to the counter each loop
                                    $second_count++;
                                    ?>
                                    <input type="text" id="product_price-<?php echo $count?>-<?php echo $second_count?>" size="4" value placeholder="Price" data-id="PRODUCT-PRICE-<?php echo $count?>-<?php echo $second_count?>" />
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
                                    <?php

                                }
                                // Reset the counter to 1 or it will never loop again after the first 6.
                                $second_count = 1; ?>
                            </div>
                            <div style="clear:both;"></div>
                        </form>
                    </div>
                    <div style="clear:both;"></div>
                <?php  }?>
                </div>
                <button class="add-another">Add More</button>
                <button class="remove">Remove</button>

            <div style="clear:both;padding-top:50px;">
                <h2>Toools</h2>
                <form>
                    <input type="button" value="Remove Links" onClick="goLinks();">
                    <input type="button" value="Remove Alt" onClick="goAlt();">
                    <input type="button" value="Fix Pre-header & Footer" onClick="goFix();">
                </form>
            </div>
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
