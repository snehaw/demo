/*
	Function to get the base url of the app
*/
function app_base_url() {
	return window.location.origin + root_dir;
}

/*
	Custom Jquery Function to serialize form data in json
*/
 $.fn.serializeJSON = function() {
 	data = this.serializeArray();
 	var json = {};
 	$.each(data, function(k,v){
 		json[v.name] = v.value;
 	});
 	return json;
};