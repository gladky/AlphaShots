/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2010 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: basic.js 254 2010-07-23 05:14:44Z emartin24 $
 */

jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('.popup-standard').click(function (e) {
		$('#basic-modal-content-standard').modal('show');
		return false;
	});
	// Load dialog on click
	$('.popup-premium').click(function (e) {
		$('#basic-modal-content-premium').modal('show');

		return false;
	});
	// Load dialog on click
	$('.popup-pictures').click(function (e) {
		$('#basic-modal-content-pictures').modal('show');

		return false;
	});
	// Load dialog on click
	$('.popup-adverts').click(function (e) {
		$('#basic-modal-content-adverts').modal('show');

		return false;
	});
});