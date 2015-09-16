$(function(){

	// sticky nav 

    var offsetTop = $('#nav').offset().top;
     
    var sticky_navigation = function(){
        var scrollTop = $(window).scrollTop();
         
        if (scrollTop > offsetTop) { 
            //$('#logo').addClass('vanish')
        	$('#nav ul').removeClass('bottom-border')
            $('#nav').addClass('fixed')
            $('body').addClass('padding-top')
        } else {
            //$('#logo').removeClass('vanish')
           	$('#nav').removeClass('fixed')
            $('#nav ul').addClass('bottom-border')
            $('body').removeClass('padding-top')
        }   

    };
     
    //sticky_navigation();
     
    $(window).scroll(function() {
         //sticky_navigation();
    });

    // active element on scroll 

   /* var current_url = window.location.href,
        active_link = current_url.split('#')[1],
        sections = [ $('#menu'), $('#party'), $('#location') ]

        for ( i = 0; i < 3; i++ ) {
            window['offset' + (i + 1)] = $(sections).offset().top
        }
            
    function sectionScroll() {
        
        $.each(sections, function(){
            var scrollTop = $(window).scrollTop,
                sectionName = $(this).attr('id')

            if ( offset < scrollTop ) {
                console.log(this)
            }
        })
    }*/

   /* var menuOffset = $('#menu').offset().top,
        partyOffset = $('#party').offset().top,
        locationOffset = $('#location').offset().top



    $(window).scroll(function(){
      //  sectionScroll()
    })*/

    $(window).on('scroll', function(){
        scrollTop = $(window).scrollTop(),
        menuOffset = $('#menu').offset().top,
        partyOffset = $('#party').offset().top,
        locationOffset = $('#location').offset().top,
        menuDistance = (menuOffset - scrollTop),
        partyDistance = (partyOffset - scrollTop),
        locationDistance = (locationOffset - scrollTop)

        if(menuDistance <= 0) {
            $('.menu-link').addClass('current_list_item')   
        } else {
            $('.menu-link').removeClass('current_list_item')            
        }

        if(partyDistance <= 0) {
            $('.party-link').addClass('current_list_item')
            $('.menu-link').removeClass('current_list_item')
        } else {           
            $('.party-link').removeClass('current_list_item')            
        }

        if(locationDistance <= 0) {
            $('.location-link').addClass('current_list_item')
            $('.party-link').removeClass('current_list_item')
        } else {
            $('.location-link').removeClass('current_list_item')
        }
    })

    // mobile nav

    $('#mobile-nav-trigger').on('click', function(){
        $('#mobile-nav').toggle()
    })

	// event selector 

	$('.events-list li button').on('click', function(){ 
		activeEvent = $(this).parent().attr('class')

		$('.active').removeClass('active')
		$(this).parent().addClass('active')
		$('.event-details-list li').each(function(){
			if ( $(this).hasClass(activeEvent) ) { 
				$(this).addClass('active') 
			} else {
				$(this).removeClass('active')
			}
		})
	})

	// toggle between internal and private events

	$('#private-events-trigger').on('click', function(){
		$('#internal-events').hide()
		$('#private-events').show()
	})

    $('#internal-events-trigger').on('click', function(){
        $('#private-events').hide()
        $('#internal-events').show()
    })

    // poster popup 

    function closeLightbox() {
        $('body').on('click', function(e){
            if ( e.target.tagName != 'IMG' ) {
                $('#lightbox').hide()
                $('body').css('overflow','auto')
            }
        })
    }

    $('.poster-trigger').each(function(){
        $(this).on('click', function(e){
            e.preventDefault()

            imgUrl = $(this).attr('href')

            if($('#lightbox').length > 0) {
                $('#lightbox').show()
                $('body').css('overflow','hidden')
                closeLightbox()
            } else {
                $('body').css('overflow','hidden')
                $('body').append('<div id="lightbox"><div class="lightbox-img"><img src="' + imgUrl + '" alt="" /></div></div>')
                closeLightbox()
            }
        })
    })

    // share items toggle

    $('.share button').on('click', function(){
        $(this).parent().find('.social').toggleClass('visible')
    })

	// responsive iframe for youtube and vimeo embeds

    function setAspectRatio() {
      $('iframe').each(function() {
        $(this).css('height',$(this).width()*9/16)
      })
    }

    setAspectRatio()   
    $(window).resize(setAspectRatio)

    // footer ticker

     $('#webticker').webTicker({'speed':100,'startEmpty':false}); 

})