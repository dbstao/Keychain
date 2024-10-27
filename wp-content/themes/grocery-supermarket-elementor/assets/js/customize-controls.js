( function( api ) {

	// Extends our custom "grocery-supermarket-elementor" section.
	api.sectionConstructor['grocery-supermarket-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );