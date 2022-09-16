(function($) {

    $(document).ready(function() {
        function showSection() {

            var menu = $('#mobile-link');
            var menuShow = $('#mobile-block');

            function switchClass($myvar) {
                if ($myvar.hasClass('active')) {
                    $myvar.removeClass('active');
                } else {
                    $myvar.addClass('active');
                }
            }

            menu.on('click', function() {
                switchClass($(this));
                menuShow.slideToggle();
            });

        }

        $(window).on('load', showSection);
    });

        /**
    * Navigation sub menu show and hide
    *
    * Show sub menus with an arrow click to work across all devices
    * This switches classes and changes the genericon.
    * Note: Props Espied for the aria addition
    *
    */
    $( '.main-navigation .page_item_has_children > a, .main-navigation .menu-item-has-children > a' ).append( '<div class="showsub-toggle" aria-expanded="false"></div>' );

    $( '.showsub-toggle' ).click( function( e ) {
        e.preventDefault();
        $( this ).toggleClass( 'sub-on' );
        $( this ).parent().next( '.children, .sub-menu' ).toggleClass( 'sub-on' );
        $( this ).attr( 'aria-expanded', $( this ).attr( 'aria-expanded' ) == 'false' ? 'true' : 'false');
    } );

	$( document ).on( 'click', function( event ) {
		if ( ! $( event.target ).closest( '#site-navigation' ).length ) {
			$( '.showsub-toggle' ).removeClass( 'sub-on' ).attr( 'aria-expanded', 'false' );
			$( '#site-navigation .children, #site-navigation .sub-menu' ).removeClass( 'sub-on' );
		}
	} );

   	/**
   	 * Add space at the top of the page, for fixed headers.
   	 */
	function fixHeaderSpace() {
		var nav = $('#masthead'),
			navHeight = nav.innerHeight();

		// Check if the menu is currently fixed, to determine if we're on a mobile screen or not.
		if ( 'fixed' === $( nav ).css( 'position' ) ) {
			$( '#skrollr-body' ).css('padding-top', navHeight );
		} else {
			$( '#skrollr-body' ).css('padding-top', '0' );
		}
	}

	// Fire on document ready
	$( document).ready( function() {
		fixHeaderSpace();
	} );

	//Fire on window resize
	var resizeTimer;
	$( window ).on( 'resize', function() {
		clearTimeout( resizeTimer );
		resizeTimer = setTimeout( function() {
			fixHeaderSpace();
		}, 250 );
	} );
})(jQuery);
