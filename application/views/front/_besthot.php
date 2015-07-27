                        <div class="col-md-5">
                            <div class="content-dish-day relative" id="showbesthots">
                                   
                               </div>
                            </div>
<script>
  $(document).ready(function(){
      $.post("bestoffer/listbestoffer/2", function(data){
        $("#showbesthots").html(showbesthot(data));
      });
      function showbesthot(data){
        var str="";
        for (var i=0; i<1; i++){
            str+= '<header class="round-offer">'+
'                                        <div class="shape-round background-green dish-icon">'+
'                                                <h2 class="entry-title center-me">Best Hot</h2>'+
'                                        </div>'+
'                                   </header>'+
'                                   <figure>'+
'                                        <a href="#"><img src="'+ data[i].thumbnailurl+'" alt="portfolio item"></a>'+
'                                        <figcaption class="background-white">'+
'                                            <h2 class="entry-title no-margin aligncenter padding-top">'+data[i].title+' </h2>'+
'                                            <div class="price center-me background-orange half-padding">$ '+ data[i].price+'</div>'+
'                                        </figcaption>'+
'                                    </figure>';
        }

        return str;
      }

  });

</script>