
function fetch_rv(date) {
	
	$.ajax({
  	type: 'POST',
  	url: "php_file/fetch_available_rv.php",
  	data: {date : date},
 	cache: false,

  	success: function(response){
  		// alert(response);
  		$('#model')
 	    .empty()
        .append('<option selected="selected" value="whatever">Choose a Model</option>')
;
  		var JSONArray = JSON.parse(response);
  		
		for(var i = 0 ; i < JSONArray.length ; i++)
		{
			// alert(JSONArray[i]["rv_name"]);
			 $('#model').append('<option value="' + i + '">' + JSONArray[i]["rv_name"] + '</option>');
		}
	} 
});

}