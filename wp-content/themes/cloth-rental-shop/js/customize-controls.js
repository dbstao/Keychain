( function( api ) {

	// Extends our custom "cloth-rental-shop" section.
	api.sectionConstructor['cloth-rental-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );