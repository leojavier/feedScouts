$(document).ready(function(){
    var App = {
        Vars:{
            containerHeight:0
        },
        Options:{
            domain:'http://localhost:9000',
            targetElement:'#instafeed',
            loadButton: {// Load more button options [display, Caption, Target-element]
                status: false,
                text: 'Load More',
                target: 'app-wrapper'
            },
            carousel:false,
            columns:10,
            rows:3,
            pagesFrom:0,
            pagesTo:1,
            feed: new Instafeed({// Feed options
                get: 'tagged',
                tagName: 'redbull',    
                limit: "60",
                clientId: '6b92bcd408184a77b9f69928f298c2e4',
                sortBy:'most-recent',
                template: '<a id="{{id}}" class="image-container" href="{{link}}" target="_blank"><img src="{{image}}" target="blank"/></a>',
                after:function(){
                    App.Controller.remove("904552836398132638_1667296354");
                    $children = $(App.Options.targetElement + " > a");
                    for(var i = 0, l = $children.length; i < l; i += App.Options.rows) {
                        $children.slice(i, i+App.Options.rows).wrapAll('<div class="item"></div>');
                    }
                    if(App.Options.pagesFrom < App.Options.pagesTo){
                        App.Options.feed.next();
                        App.Options.pagesFrom++;
                    }
                    else {
                        if(App.Options.carousel){
                            App.Utilities.carousel();
                        }
                        else{
                            App.Utilities.imageResize();
                            $(App.Options.targetElement).css('background-image','none');
                            $(App.Options.targetElement + ' a').fadeIn(500);
                        }
                    }
                    
                }
            })
        },
        Init:function(){
            App.Controller.setters();
            if(App.Options.loadButton.status){
               App.Controller.loadButton();
            }
            App.Options.feed.run();
            $(window.parent.window).resize(function(){
                $('#instafeed').css('opacity',0);
                App.Controller.carouselNavPosition();
                App.Vars.containerHeight = $(App.Options.targetElement).height();
                $(window.parent.document.body).height($(App.Options.targetElement).height());
                $(App.Options.targetElement).parent().height($(App.Options.targetElement).height())
                window.parent.document.body.height =$(App.Options.targetElement).height();
                window.resizeEvt;
                $(window).resize(function()
                {
                    clearTimeout(window.resizeEvt);
                    window.resizeEvt = setTimeout(function()
                    {
                        location.reload();
                        console.log('test');
                    }, 500);
                });
            });
            
        },
        Controller:{
            remove:function(elementID){
                $('#' + elementID).remove();
            },
            loadButton:function(){
                var html = "<div style='clear:both; height:0;'></div><a id='load-more' href='javascript:void(0)'>" + App.Options.loadButton.text + "</a>"
                var container = document.getElementById(App.Options.loadButton.target);
                container.innerHTML = container.innerHTML + html;
                // bind the load more button
                var loadButon = document.getElementById('load-more');
                loadButon.addEventListener('click', function() {
                App.Options.feed.next();
                });
            },
            containerResize:function(){
                $('html, #app-wrapper').height($(App.Options.targetElement).height());
            },
            carouselNavPosition:function(){
                $('.owl-prev, .owl-next').css('top', ($(App.Options.targetElement).height()/2)-$('.owl-prev, .owl-next').height());
            },
            setters:function(){
                // Scan the connection string properties
                FeedScouts.targetElement ? App.Options.targetElement = FeedScouts.targetElement : App.Options.targetElement
                FeedScouts.columns ? App.Options.columns = FeedScouts.columns : App.Options.columns;
                FeedScouts.loadButton.status ? App.Options.loadButton.status = FeedScouts.loadButton.status : App.Options.loadButton.status
                FeedScouts.loadButton.text ? App.Options.loadButton.text = FeedScouts.loadButton.text : App.Options.loadButton.text
                FeedScouts.loadButton.target ? App.Options.loadButton.target = FeedScouts.loadButton.target : App.Options.loadButton.target;
                FeedScouts.carousel ? App.Options.carousel = FeedScouts.carousel : App.Options.carousel;
            }
        },
        Utilities:{
            carousel:function(){
                var carousel = $(App.Options.targetElement).owlCarousel({
                  navigation : true, // Show next and prev buttons
                  //autoPlay:2000,
                     itemsDesktop : [1199,6],
                    itemsDesktopSmall : [980,5],
                    itemsTablet: [768,4],
                    itemsTabletSmall: false,
                    itemsMobile : [479,2],
                  scrollPerPage:true,
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                  items: App.Options.columns,
                  pagination : false,
                  responsive: true,
                  responsiveRefreshRate : 200,
                  responsiveBaseWidth: window,
                  afterInit:function(){
                    $(App.Options.targetElement).css('background-image','none');
                    $(App.Options.targetElement + ' a').fadeIn(500);
                    App.Controller.containerResize();
                    App.Controller.carouselNavPosition();
                  }
              })
            },
            imageResize:function(){
                var itemSize = $(App.Options.targetElement).width() / App.Options.columns;
                var relativeSize = (itemSize / $(App.Options.targetElement).width()) * 100 
                $('.item').css({
                    'max-width': relativeSize + '%',
                    'float': 'left'
                });
            }
        }
    }
   if(App.Options.domain == 'http://localhost:9000'){
      App.Init();
   } else{
       $(App.Options.targetElement).html('<p class="error-msg">This domain is not authorized</p>');
       $(App.Options.targetElement).css('background-image','none');
   }
   
});