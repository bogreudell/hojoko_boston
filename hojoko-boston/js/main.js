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

    // hide hero video on mobile 

     window.mobilecheck = function() {
    var check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
    return check; }
    
    if(window.mobilecheck()){
      $('#video').hide()
      $('#hero-video').addClass('mobile')
      $('#logo').addClass('mobile')
    } else {
      console.log('video playing')
    }

    setAspectRatio()   
    $(window).resize(setAspectRatio)

    // footer ticker

     $('#webticker').webTicker({'speed':100,'startEmpty':false}); 

})