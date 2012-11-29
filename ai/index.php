<!DOCTYPE html>
<html>
    <head>
        <title>AI</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Mobile -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
        
        <!-- AI Pics -->
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
        
        <link rel="stylesheet" type="text/css" href="css/shadowbox.css">
        
        <link href="css/photoswipe.css" type="text/css" rel="stylesheet" />
        
        <style>
            img {max-width: 100%}
            
            
            .view {
                background: none repeat scroll 0 0 #333333;
                box-shadow: 0 4px 3px -3px #333333;
                border: 8px solid white;
                display: block;
                float: left;
                height: 125px;
                margin: 10px;
                overflow: hidden;
                position: relative;
                width: 200px;
            }
            
            body:after { 
                content: 'mobile'; 
                display: none; /* comment this line for debugging purposes */ 
            } 

            @media screen and (min-width: 768px) { 
                body:after { 
                    content: 'skinny' 
                } 
            } 

            @media screen and (min-width: 1000px) { 
                body:after { 
                    content: 'wide-screen' 
                }
        </style>
        
        <!-- PhotoSwipe -->
	<script type="text/javascript" src="lib/klass.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.5.min.js"></script>
	
	
	<script type="text/javascript">
            if (window.matchMedia("(min-width: 768px)").matches) {


            } else {
                (function(window, $, PhotoSwipe){

                    $(document).ready(function(){

                            var options = {};
                            $("#Gallery a").photoSwipe(options);

                            $("a").removeAttr("rel");

                    });

                }(window, window.jQuery, window.Code.PhotoSwipe));
            }
            
	</script>
        
        <!-- Responsive Javascript -->
         
        <script type="text/javascript" src="js/onmediaquery.min.js"></script> 
        <script> 
            // Define the queries you want to test for.. and what to do if they're TRUE 
            var queries = [ 
                { 
                    context: 'mobile', 
                    callback: function() { 
                        console.log('Mobile callback. Maybe hook up some tel: numbers?'); 
                        // Your mobile specific logic can go here.  
                    } 
                }, 
                { 
                    context: 'skinny', 
                    callback: function() { 
                        console.log('skinny callback! Swap the class on the body element.'); 
                        // Your tablet specific logic can go here. 
                    } 
                }, 
                { 
                    context: 'wide-screen', 
                    callback: function() { 
                        console.log('wide-screen callback woohoo! Load some heavy desktop JS badddness.'); 
                        // your desktop specific logic can go here. 
                    } 
                } 
            ]; 
            // Go! 
            MQ.init(queries); 
        </script> 
	
    </head>
    <body>
        
         <article id="Gallery" class="imageContainer">
    			      <div id="grid" class="main">

                                    <?php 
                                    // Aufruf der Function.php 
                                    include ('function.php'); ?>
                                  
                                    <?php
                                    // Aufruf der Pics - Funktion
                                    pics()

                                    ?>
       
    			         </div>
                    </article>
        <!--- jQuery  -->
        <script type="text/javascript" src="js/jquery.js"></script>
        
        <!--- Shadowbox -->
        <script type="text/javascript" src="js/shadowbox.js"></script>
        <script type="text/javascript">
            Shadowbox.init({
                handleOversize: "drag",
                modal: true
            });
        </script> 
        
        <!--- Mein Script  -->
        <script type="text/javascript" src="js/script.js"></script>
        
    </body>
</html>
