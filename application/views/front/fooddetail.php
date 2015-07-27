<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <meta name="description" content="Great theme for creative people">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive helper -->

    <!-- Apple devices -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/style_front/img/favicon/favicon-apple.html" /> <!-- 152x152 -->
    <link rel="icon" href="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->

    <!-- For IE -->
    <!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]--> <!-- 16x16 -->

    <!-- For Mobile Windows -->
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->
    
    <!-- Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/jquery.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>

</head>
<body>
    <div class="page-content show-content">
        
        
         <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <section class="wood-background recipe-content">
            <div class="container ">
                <div class="background-white margin-top-60 margin-bottom-120">
                    <header>
                        <figure>
                            <img src="<?php echo $food->thumbnailurl ?>" alt="Featured Image" />
                            <figcaption>
                                <h2 class="entry-title aligncenter margin-top-60"><?php echo $food->food_title ?></h2>
                            </figcaption>
                        </figure>
                    </header>

                    <div class="row no-margin padding-right">
                        <div class="col-md-9 no-padding">
                            <div class="entry-content padding padding-double">
                                <h3 class="entry-title">Description</h3>
                                <?php echo $food->food_description; ?>
                                <!--
                                <p>
                                   1. Combine 1 tablespoon soy sauce, sherry, 2 teaspoons cornstarch, and chicken in a large bowl; toss well to coat. Combine remaining 2 tablespoons soy sauce, remaining 2 teaspoons cornstarch, broth, oyster sauce, and honey in a small bowl.     
                                </p>
                                <p>
                                    <img src="<?php echo base_url()?>public/style_front/images/chicken-recipe.jpg" alt="Grilled Chicken Legs" />
                                </p>
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment       
                                </p>
                                <p>
                                    2. Heat 1 teaspoon oil in a large nonstick skillet over medium-high heat. Add chicken mixture to pan; sauté 3 minutes. Remove from pan. Heat remaining 1 teaspoon oil in pan. Add onion, celery, and bell pepper to pan; sauté 2 minutes. Add ginger and garlic; sauté 1 minute. Return chicken mixture to pan; sauté 1 minute. Stir in broth mixture. Bring to a boil; cook 1 minute, stirring constantly. Remove from heat. Sprinkle with green onions and cashews.
                                </p>
                                <p>
                                    Rice pilaf: Heat 1 tablespoon canola oil in a large saucepan over medium-high heat. Add 1/2 cup chopped onion and 2 teaspoons grated peeled fresh ginger to pan; sauté 2 minutes. Stir in 1 cup water, 1/2 cup long-grain rice, and 1/4 teaspoon salt; bring to a boil. Cover, reduce heat, and simmer 12 minutes or until liquid is absorbed. Remove from heat; stir in 2 tablespoons chopped fresh cilantro.
                                </p>
                                -->
                                <div class="clean-list share-links padding-top share-socials border-top clearfix">
                                    <ul class="clean-list socials inline">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="st_facebook_large">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="st_twitter_large">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="st_pinterest_large">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 no-padding">
                            <div class="aside background-white">
                                <div class="recipe-block border padding margin-top-100">
                                    <h3 class="entry-title margin-left padding-bottom">Ingridients</h3>    
                                    <ol class="clean-list recipe-list margin-left">
                                        <li>beef - 500gr</li>
                                        <li>noodles - 150 gr</li>
                                        <li>carrots - 1</li>
                                        <li>onions - 2</li>
                                        <li>celery - 100 gr</li>
                                        <li>tomatoes - 2</li>
                                        <li>salt</li>
                                         <li>pepper</li>
                                        <li>basil</li>
                                    </ol>
                                </div>
                                <div class="most-popular ">
                                    <h3 class="entry-title margin-double-top">Most Popular</h3>
                                    <ul class="clean-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="<?php echo base_url()?>public/style_front/images/popular/barbecue-salmon.jpg" alt="Barbecue from salmon with vegetables" />
                                                        </a>
                                                    </figure>
                                                </div> 
                                                <div class="col-md-7">
                                                    <h4 class="entry-title"><a href="#">Barbecue from salmon with vegetables</a></h4>
                                                </div> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="<?php echo base_url()?>public/style_front/images/popular/cookies-with-honey.jpg" alt="Cookies with honey cream and bananas" />
                                                        </a>
                                                    </figure>
                                                </div> 
                                                <div class="col-md-7">
                                                    <h4 class="entry-title"><a href="#">Cookies with honey cream and bananas</a></h4>
                                                </div> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <figure>
                                                        <a href="#">
                                                            <img src="<?php echo base_url()?>public/style_front/images/popular/barbecue-cassoulet.jpg" alt="Barbecue cassoulet" />
                                                        </a>
                                                    </figure>
                                                </div> 
                                                <div class="col-md-7">
                                                    <h4 class="entry-title"><a href="#">Barbecue cassoulet</a></h4>
                                                </div> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Footer -->
        
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
    </div>

</body>
</html>
