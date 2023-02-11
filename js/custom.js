jQuery(document).ready( function($) {

    var W = Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
        H = Math.max(document.documentElement.clientHeight, window.innerHeight || 0),
        body = $('body'),
        wrap = $('#wrap'),
        main = $('#main'),
        header = $('#header'),
        content = $('#content'),
        footer = $('#footer');

    function detectOs() {
        var OSName="Unknown OS";
        if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
        else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
        else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
        else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
        if (OSName == "Windows") {
            $('html').addClass('win');
        } else if (OSName == "MacOS")  {
            $('html').addClass('mac');
        }
    }
    detectOs();

	if ($().fancybox) {
		$(".fancybox").fancybox({
			padding: 0,
			margin: 30,
			closeClick: true,
			helpers:  {
                overlay: {
                    locked: false
                }
            }
		});
	}

    if($().idTabs) {
        $("#filter").idTabs();
    }
    
 	if($().resizeToParent) {
 		$('.imgfill').resizeToParent();
    }

    function navMainInit() {
        if ($(document).scrollTop() > 0) {
            header.addClass('scrolled')
        }
        $(document).scroll(function() {
            if ($(document).scrollTop() > 0) {
                header.addClass('scrolled')
            } else {
                header.removeClass('scrolled')
            }
        });
    }
    navMainInit();

    function scrollToInit() {
        $('.scrollto').on('click', function(){
            $.scrollTo( $(this).attr('href') , 1000, {
                margin: true,
                offset: function() {
                    if ( Modernizr.touch || !Modernizr.touch && $(window).width() < 650 ) {
                        return { top: 0 - $('#header').height() };
                    }
                }
            });
        }) 
    }
    scrollToInit();

    function mainNavMenuInit() {
        $('.menu-item-brands .sub-menu').remove();
        $('#menuBrands').appendTo('.menu-item-brands').addClass('sub-menu');
    	$( ".sub-menu" ).prepend( $( "<span class='tooltips'></spn>" ) );
    	
    	var mainli = $('.nav-main > ul > li')
    	var subMenu = $('.sub-menu');
    	subMenu.hide();
    	mainli.on('mouseleave', function() {
    		mainli.find('.sub-menu').hide();
            $(this).find('a').removeClass('current');
        }).on('mouseenter', function(){
        	$(this).find('.sub-menu').show()
            $(this).find('a').addClass('current');
        });

    }
    mainNavMenuInit();

    function sideMenuToggle() {
    	var tgBtn = $('#side-nav');
    	$('#side-nav').removeClass('active');
    	tgBtn.click(function() {
    		$('#side-nav').toggleClass('active');
    		$('#side-nav').toggleClass('inactive');
    	})
    	$(window).scroll(function() {
		    $('#side-nav').removeClass('active');
		});
		$(window).resize(function() {
		    $('#side-nav').removeClass('active');
		});
    }
    sideMenuToggle(); 

    function enlargeBagInit() {
		var main = $('.packset'),
		    target = main.find('li');
        // main.height(main.find('img').height()+20);
		target.on('mouseenter', function() {
            $(this).addClass('pick');
			$(this).siblings().addClass('drop');
		}).on('mouseleave', function() {
            target.removeClass('pick');
            target.removeClass('drop');
        })
	}
    if (!Modernizr.touch) {
        enlargeBagInit();
    }
	

    function hoverReadMoreBtn() {
        $('.readmore').hide();
        $('.entry').on('mouseleave', function() {
            $(this).find('.readmore').hide();
        }).on('mouseenter', function(){
            $(this).find('.readmore').show();
        });
    }

    /* ---------------------------------------------------------------------- */
    /* Resizing DOM
    /* ---------------------------------------------------------------------- */

    $.fn.resizeratio = function() {
        var x = 6, y = 4,
            w = $(this).width(),
            h = Math.floor((w/x)*y),
            W = $(window).width(),
            H = $(window).height();
        $(this).each(function() {
            if (h >= H) {
                $(this).height(H);
            }
            else {
                $(this).height(h);
            }
        });
    } 
    if ($(window).width() < 650) {
        $('.ratio_64').resizeratio();
    }

    function resizeBags() {
        var target = $('.packset');
        target.each( function() {
            var w = $(this).width();
            $(this).height( w );
        })
    }
    resizeBags();

    function resizeGoogleMap() {
        $('#gmap').height( Math.floor( $(window).height() * 0.5) )
    }
    resizeGoogleMap();

    $(window).on('resize', function() {
        resizeBags();
        resizeGoogleMap();
        if ($(window).width() < 650) {
            $('.ratio_64').resizeratio();
        }
        
    });

    /* ---------------------------------------------------------------------- */
    /* Toggle Menu Panel
    /* ---------------------------------------------------------------------- */

    function menuToggleInit() {
    var menuPanel = $('#main-menu'),
        menuToggleBtn = $('#toggle-menu'),
        menuOpened = false,
        menuTime = 500,
        menuEase = "ease-in-out",
        menuOverlay = $('.menu-overlay'),
        menuPanelScroll = new IScroll( '#main-menu' , { mouseWheel: true, click: true }),
        menuTransition = { 
            "-webkit-transition":"-webkit-transform " + menuTime + "ms " + menuEase,
            "-moz-transition":"-moz-transform " + menuTime + "ms " + menuEase,
            "-ms-transition":"-ms-transform " + menuTime + "ms " + menuEase,
            "-o-transition":"-o-transform " + menuTime + "ms " + menuEase,
            "transition":"transform " + menuTime + "ms " + menuEase,
        },
        menuSlideOpen = function(menuWidth) {
            return {
                "-webkit-transform":"translate(-" + menuWidth + "px,0px)",
                "-moz-transform":"translate(-" + menuWidth + "px,0px)",
                "-ms-transform":"translate(-" + menuWidth + "px,0px)",
                "-o-transform":"translate(-" + menuWidth + "px,0px)",
                "transform":"translate(-" + menuWidth + "px,0px)"
            }
        },
        menuSlideClose = {
            "-webkit-transform":"translate(0px,0px)",
            "-moz-transform":"translate(0px,0px)",
            "-ms-transform":"translate(0px,0px)",
            "-o-transform":"translate(0px,0px)",
            "transform":"translate(0px,0px)"
        };

        menuInit = function () {
            content.add(header).add(footer).css( menuTransition );
        }
   
        menuPanelOpen = function() {
            if ( menuOpened == false ) {
                //menuPanelScroll.scrollTo(0,0)
                //body.css('overflow','hidden');
                menuOverlay.fadeIn(menuTime)
                header.css("height","100%");
                content.add(header).add(footer).css( menuSlideOpen(menuPanel.width()) );
                menuOpened = true
            }
        }
        menuPanelClose = function() {
            if ( menuOpened == true ) {
                //body.css('overflow','visible');
                menuOverlay.fadeOut(menuTime);
                header.css("height","auto");
                content.add(header).add(footer).css( menuSlideClose );
                menuOpened = false
            }
        };
        menuInit();
        menuToggleBtn.on('click', function() {
            if ( menuOpened == true ) {
                menuPanelClose();
            } else {
                menuPanelOpen();
            }
        });
        menuOverlay.on('click', function() {
            if(menuOverlay.is(':visible')) {
                menuPanelClose();
            }
        });  
        $(window).on('resize', menuPanelClose);
        if (Modernizr.touch && $().swipe) {
            menuOverlay.swipe({
                //Generic swipe handler for all directions
                swipeRight:function(event, direction, distance, duration, fingerCount) {
                    if ( menuOpened == true ) {
                        menuPanelClose();
                    }
                }
            });
        }
    }
    menuToggleInit();

    // function sharingEmail() {
        function sharing_email($form) {
            var getdata = $form.serialize();
            jQuery.ajax({
                 type: 'POST',   
                 url: ajax.url,
                 data: ({action : 'ajax_sharing_email',getdata:getdata }),
                 // beforeSend:function() {
                 //   res.container.append(res.loader)
                 // },
                 success: function(html) {
                    alert('success');
                    // setTimeout(function(){ 
                        // $ajxdiv.removeClass('loading');
                        // $ajxdiv.empty();
                        // res.container.find(res.loader).remove();
                        // $ajxdiv.html(html);
                        // categoryItemsMasonry();
                        // $noresult = $('.no-result'); 
                        // $noresult.length ? $noresult.height($(window).height() - header.height() - $filter.outerHeight()) : null;
                        // $noresult.hide().fadeIn();
                        // $(window).resize( function() {
                        //     $noresult.length ? $noresult.height($(window).height() - header.height() - $filter.outerHeight()) : null;
                        // })
                    // }, 1000);
                    
                 }
            })
            console.log(getdata);
        }
        $(".se-form").on('submit', function(e){
            e.preventDefault();
            // alert($(this).attr('id'));
            console.log($(this).attr('id')+' submitted');
            sharing_email($(this))
        });

});