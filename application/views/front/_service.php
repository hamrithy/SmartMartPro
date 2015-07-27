<section class="section section-services">
            <div class="container">
                <header class="entry-header aligncenter section-header section-services-header margin-top-60">
                    <h2 class="entry-title">
                        Services
                    </h2>
                    <h3 class="entry-title-desc">
                        Visit our Cafe Shop, impeccable service will impress you
                    </h3>   
                </header>
            
                <div id="showservicedetail">

                </div>
                
            </div>
        </section>

<script>
    $(document).ready(function(){
        $.post("service/listservice",function(data){
           $("#showservicedetail").html(showlistservice(data));
        });

        function showlistservice(data){
            var str= "";
            str +='<ul class="clean-list services-list featured-items row">';
                for(var i=0; i<3; i++){
                str += '<li class="col-md-4 col-sm-4">'+
                '        <div>'+
                '            <figure class="ovh">'+
                '                <a href="'+ data[i].linkto +'" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">'+
                '                    <img src="'+ data[i].imageurl +'" alt="Best Cousine" class="" />'+
                '                </a>'+
                '            </figure>'+
                '            <div class="content-block background-white border-top-orange best-cousine-icon service-icon">'+
                '                <h4 class="entry-title pre-line padding"><a href="'+ data[i].linkto +'">'+ data[i].title +'</a></h4><hr />'+
                '                <div class="content padding">'+
                '                    <p>'+
                                       data[i].description
                '                    </p>'+
                '                </div>'+
                '                    <div class="svg-container">'+
                '                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">'+
                '                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4"/></svg>'+
                '                    </div>'+
                '            </div>'+
                '        </div>'+
                '    </li>';
            }
              str +='</ul><!-- /.featured-items -->';
            return str;
        }
    });
</script>