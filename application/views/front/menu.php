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

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
    <script>
        var categoryType = '<?php echo "#".strtoupper($cat) ?>';
    </script>
</head>
<body>
    <div class="page-content show-content">
        
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->
        
        
        
        

        <div class="dishes-filters wood-background">
            <div class="container">
            
                <div class="padding-10 margin-top">
                    <div class="background-white ovh filter-cats-wrap">
                        <ul class="clean-list inline-list filter-cats center-me" id="FOOD_CATEGORY">
                            <li><a href="javascript:;">All</a></li>
                            <?php foreach($categories as $category){
                                echo '<li id="'.strtoupper($category->title).'"><a href="javascript:;">'.$category->title.'</a></li>';
                            }?>
                            <!-- <li><a href="javascript:;">All</a></li>
                            <li><a href="javascript:;">Appetizers</a></li>
                            <li><a href="javascript:;">Salads</a></li>
                            <li><a href="javascript:;">Meat</a></li>
                            <li><a href="javascript:;">Seafood</a></li>
                            <li><a href="javascript:;">Desserts</a></li> -->
                        </ul> <!-- /.filter cats -->
                    </div>
                </div>

                <div class="background-white padding margin-top dishes-block">
                    <ul class="clean-list filter-items menu-items row">
                        <?php foreach($foods as $food){
                        echo '<li class="col-md-3 col-sm-6 col-xs-6 '.strtolower($food->foodtype_title).'" id="'.$this->encryption->encrypt($food->foodid).'">
                            <div>
                                <div>
                                    <figure>
                                        <a href="'.$food->thumbnailurl.'" class="zoom-image"><img src="'.$food->thumbnailurl.'" alt="menu item" style="min-height:252px;"></a>
                                        <figcaption class="aligncenter">
                                            <a href="'.site_url().'/menu/food/'.$food->foodid.'" title="'.$food->food_title.'">'.$food->food_title.'</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        '.$food->food_description.'
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$'.$food->price.'</span>
                                    </div>
                                </div>
                            </div>
                        </li>';
                        }?>
                   <!-- <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a> -->
                       <!--  <li class="col-md-3 col-sm-6 col-xs-6 desserts">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$1.70</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 meat">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/pizza-with-mozzarella.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/pizza-with-mozzarella.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Pizza with mozzarella &amp; salami">Pizza with mozzarella 
                                            &amp; salami</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 appetizers meat">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Sandwiches with fried bacon &amp; sauce">Sandwiches with fried bacon &amp; sauce</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$7.50</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 desserts">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Mascarpone mousse with nuts &amp; basil">Mascarpone mousse with nuts &amp; basil</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$14.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 seafood">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/sauce-seafood.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sauce-seafood.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Sauce with seafood">Sauce with 
                                            seafood</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$12.50</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 appetizers meat">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/crispy-bacon-sandwich.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/crispy-bacon-sandwich.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Crispy bacon sandwich with mascarpone">Crispy bacon sandwich with mascarpone</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$14.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 appetizers meat">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-fried-bacon.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Sandwiches with fried bacon">Sandwiches with 
                                            fried bacon</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$11.20</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 seafood">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/barbecue-salmon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/barbecue-salmon.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Barbecue from salmon with vegetables">Barbecue from salmon 
                                            with vegetables</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$11.20</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 meat">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/barbecue-cassoulet.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/barbecue-cassoulet.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="Barbecue cassoulet">Barbecue 
                                            cassoulet</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$18.20</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-6 col-xs-6 desserts">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/icecream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/icecream.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="icecream">Mint 
                                            Icecream</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$05.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-md-3 col-sm-6 col-xs-6 salads">
                            <div>
                                <div>
                                    <figure>
                                        <a href="<?php echo base_url()?>public/style_front/images/dishes/vegetables.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/vegetables.jpg" alt="menu item"></a>
                                        <figcaption class="aligncenter">
                                            <a href="<?php echo site_url()?>/front/recipe" title="vegetables">Vegetables
                                            Mix</a>
                                        </figcaption>
                                    </figure>
                                </div><hr />
                                <div class="filters-meta">
                                    <div class="tags-list aligncenter">(
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">beef</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">noodles</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">carrots</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">onions</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">celery</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">tomatoes</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">salt</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">pepper</a>, 
                                        <a rel="tag" href="<?php echo site_url()?>/front/recipe">basil</a>
                                        )
                                    </div><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$05.00</span>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <!--  Footer -->
        
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
    </div>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
    <script>
        $(function(){
            if(categoryType!="#"){
                $("#FOOD_CATEGORY").find(categoryType).find("a").trigger('click');
            }
        });
    </script>
</body>
</html>
