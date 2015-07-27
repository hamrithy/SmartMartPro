

<section class="section section-slider">
                <div id="home_slider" class="home-slider">
                    
                </div>
</section>
<script>
    $(document).ready(function(){
        
        $.post('slide/listSlide', function(data){
                $("#home_slider").html(showlistslide(data));
                startshowslide();
         });
     
        function showlistslide(data){
            var str= "";
            str += '<ul class="clean-list slidesContainer">';
                    for(var i=0; i<data.length; i++){
                        str+= '<li class="slide" style="background: url(\''+ data[i].imageurl +'\') no-repeat 0 0 transparent;background-size: cover;">'+
                                '<header class="aligncenter">'+
                                    '<h2 class="entry-title">'+ data[i].title +'</h2>'+
                                    '<h3 class="entry-title-secondary">'+ data[i].caption +'</h3>'+
                                    '<a href="'+data[i].linkto+'" class="view center-me">View<i></i></a>'+
                                '</header>'+
                        '</li>';
                    }
            str +='</ul>';
            return str;
        }

        function startshowslide(){
             $('#home_slider').sudoSlider({
                numeric: false,
                auto: true,
                responsive: true,
                vertical: true,
                autoHeight: true,
                moveCount: 1,
                prevhtml: ' <a href="#" class="prev-nav"></a> ',
                nexthtml: ' <a href="#" class="next-nav"></a> ',
                controlsattr: 'id="home_controls" class="controls"',
                numericattr: 'class="slider-nav"',
                continuous: false,
                animationZIndex: 10
              });
         }    
  
    });
</script>

