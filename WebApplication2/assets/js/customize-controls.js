( function( api ) {

	// Extends our custom "lz-toy-store" section.
	api.sectionConstructor['lz-toy-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );