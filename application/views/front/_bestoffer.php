<section class="section section-offer">
            <div class="container">
                <div class="offer-block section-block margin-section-block">
                    <div class="row no-margin" id="showbestoffer">
                        
                    </div>
                </div>
            </div>
</section>
<script>
    $(document).ready(function(){
        $.post("bestoffer/listbestoffer/1", function(data){
            $("#showbestoffer").html(listbestoffers(data));
        });
        function listbestoffers(data){
            var str="";
            for(var i=0; i<1; i++){
                str += '<div class="col-md-6 no-padding">'+
                    '        <div class="offer-background" style="background: url(\''+ data[i].thumbnailurl+'\') no-repeat 50% 50% transparent;background-size: 100% auto; min-height: 570px;"></div>'+
                    '    </div>'+
                    '    <div class="col-md-6 no-padding">'+
                    '        <header>'+
                    '            <h2 class="entry-title aligncenter background-blue no-margin">Best Offer</h2>'+
                    '        </header>'+
                    '        <div class="offer content-offer">'+
                    '            <h3 class="entry-title no-margin aligncenter">'+ data[i].title +'<strong class="crearfix">07<sup>00</sup> - 10 <sup>00</sup></strong></h3>'+
                    '            <div class="row">'+
                    '                <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">'+
                    '                    <div class="shape-round double-round round-offer">'+
                    '                        <div class="round-center">'+
                    '                            <div class="center-me">only for<strong class="background-white">$'+ data[i].price+'</strong></div>'+
                    '                        </div>'+
                    '                    </div>'+
                    '                </div>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>';
            }
            return str;
        }
    });

</script>