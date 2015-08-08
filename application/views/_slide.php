                <div class="container clearfix">

                    <div class="col_two_third bottommargin-lg">
                        <div class="fslider" data-arrows="false">
                            <div class="flexslider">
                                <div class="slider-wrap"​ id="vuslider" data-lightbox="gallery">
                                    <?php 
                                        $slidersMain = $this->sliders->getSlidesByType();
                                        foreach($slidersMain as $slider){
                                            echo '<div class="slide">
                                                    <a href="'.$slider->imageurl.'" data-lightbox="gallery-item">
                                                        <img src="'.$slider->imageurl.'" alt="Shop Image">
                                                    </a>
                                                </div>';
                                        }
                                    ?>
                                    
                                    <!--  <div class="slide">
                                        <a href="javascript:;">
                                            <img src="<?php echo base_url('public/style_front/images/shop/slider/2.jpg')?>" alt="Shop Image">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a href="javascript:;">
                                            <img src="<?php echo base_url('public/style_front/images/shop/slider/3.jpg')?>" alt="Shop Image">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a href="javascript:;">
                                            <img src="<?php echo base_url('public/style_front/images/shop/slider/4.jpg')?>" alt="Shop Image">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a href="javascript:;">
                                            <img src="<?php echo base_url('public/style_front/images/shop/slider/3.jpg')?>" alt="Shop Image">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a href="javascript:;">
                                            <img src="<?php echo base_url('public/style_front/images/shop/slider/4.jpg')?>" alt="Shop Image">
                                        </a>
                                    </div>  -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col_one_third bottommargin-lg col_last" data-lightbox="gallery">
                        <?php 
                            $slidersSub = $this->sliders->getSlidesByType("subslide");
                            foreach($slidersSub as $slider){
                                echo '<div class="col_full bottommargin-sm slide" >
                                        <a href="'.$slider->imageurl.'" data-lightbox="gallery-item"><img id="subslide1" src="'.$slider->imageurl.'" alt="Image"></a>
                                     </div>';
                            }
                        ?>

                        <!-- <div class="col_full bottommargin-sm" >
                            <a href="javascript:;"><img id="subslide1" src="<?php echo base_url('public/style_front/images/shop/banners/7.jpg')?>" alt="Image"></a>
                        </div>

                        <div class="col_full nobottommargin">
                            <a href="javascript:;"><img  id="subslide2" src="<?php echo base_url('public/style_front/images/shop/banners/3.jpg')?>" alt="Image"></a>
                        </div> -->

                    </div>

                    <div class="clear"></div>

                </div>

<script>
   
    
/*    $.post("<?php echo site_url()?>slide/listslide/slide/<?php echo lang('lang_id');?>", function(data){
            $("#vuslider").html(showslider(data));
    });

    function showslider(data){
        var str="";
        for(var i=0; i<data.length; i++){
            str+= '<div class="slide">'+
                     '<a href="javascript:;">'+
                        '<img src="'+data[i].imageurl+'" alt="'+data[i].title+'">'+
                    '</a>'+
                '</div>';
        }
        
        return str;
    }

    $.post("<?php echo site_url()?>slide/listslide/subslide/<?php echo lang('lang_id');?>", function(data){

            $("#subslide1").attr("src", data[0].imageurl);
            $("#subslide2").attr("src", data[1].imageurl);
    });*/

</script>