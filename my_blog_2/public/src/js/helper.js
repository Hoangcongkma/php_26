function show_error(element, text, err_class = 'fa fa-times-circle') {
	$(element).html('<i class="' + err_class + '"></i> ' + text);
}

function completeAjax(element) {
	$(element).html('');
}