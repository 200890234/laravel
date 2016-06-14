$(document).ready(function() {
	//SCROLL TO TOP LINKS
	$("a[href='#top']").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, 300);
	  return false;
	});

	//TOOLTIPS
	$('[data-tooltip!=""]').qtip({ // Grab all elements with a non-blank data-tooltip attribute.
	    content: { attr: 'data-tooltip' }, // use the attribute for the tooltip contents
	    style: { classes: 'qtip-dark qtip-rounded qtip-shadow poloTooltips' }
	});
	function updateTooltip( element, message ){
	    element.attr('data-tooltip', message);
	    element.qtip('option', 'content.text', message);
	};
});