( function( api ) {

	// Extends our custom "vw-clothing-store" section.
	api.sectionConstructor['vw-clothing-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );