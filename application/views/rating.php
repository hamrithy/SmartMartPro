<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Demo :: Rating Stars System With Php jQuery & Ajax</title>

        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/style_front/css/stylerating.css') ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/style_front/css/example.css') ?>">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
           
    </head>
 
    <body>
    <div class="tuto-cnt">

        <div class="rate-ex3-cnt" style="width:250px;">
            <div id="1" class="rate-btn-1 rate-btn"></div>
            <div id="2" class="rate-btn-2 rate-btn"></div>
            <div id="3" class="rate-btn-3 rate-btn"></div>
            <div id="4" class="rate-btn-4 rate-btn"></div>
            <div id="5" class="rate-btn-5 rate-btn"></div>
        </div>

        <hr>

    </div><!-- /tuto-cnt -->
     
      
 <script>
        rate();
        function rate(){
               <?php
            if($rate != null){
                foreach($rate as $r){
         ?>

         for (var i = <?php echo $r->ratenum; ?>; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-hover');
                };
         <?php }} ?>
        }
     
        
        // rating script
        $(function(){ 
            $('.rate-btn').hover(function(){
                $('.rate-btn').removeClass('rate-btn-hover');
                var therate = $(this).attr('id');
                for (var i = therate; i >= 1; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-hover');
                };
            });
            $('.rate-btn').mouseleave(function(){
                 $('.rate-btn').removeClass('rate-btn-hover');
                var therate = $(this).attr('id');
                for (var i = therate; i >= 1; i--) {
                    $('.rate-btn-'+i).removeClass('rate-btn-hover');
                };
                rate();
            })
            $('.rate-btn').click(function(){    
                var therate = $(this).attr('id');
                var dataRate = 'act=rate&post_id= 2 &rate='+therate; //
                $('.rate-btn').removeClass('rate-btn-active');
                for (var i = therate; i >= 1; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-active');
                };
                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url() ?>rate/rating",
                    data: {
                        "productid": 82,
                        "ratenumber": therate
                    },
                    success:function(){
                        rate();
                    }
                });
             
            });
        });
    </script>


</body>
</html>