
window.onload = function loadHospitalRandom() {
	var url = "http://local.medzoc.com/doctor/hospitallist";
		$.ajax({
    		type: "GET",
    		url: url,
 			dataType: 'json',
 			success : function(data)
 			{
       	        // alert(data.length + ' cities has been loaded');
       	        // var sel = $("#cities");
       // 	        document.getElementById('cities').options.length = 0;
       // 	        for (var i=0; i<data.length; i++) 
       // 	        {
       // 	        	sel.append('<option value="' + data[i].id + '">' + data[i].City + '</option>');
    			// }

    			var node = document.getElementById('hospitalList');
    			var fragment = '';
    			var img = "http://local.medzoc.com/assets/frontend/layout/img/default/hospital-100px.png";
    			while (node.hasChildNodes()) {
    				node.removeChild(node.lastChild);
				}

				for (var i=0; i<data.length; i++) 
				{
					fragment += '<div class="portlet box radius">'+
								'<div class="portlet-body radius">'+
								 	'<div class="row">'+
								 		'<div class="col-md-3">'+
								 			'<img src="'+ img +'" alt="Hospital">'+
								 		'</div>'+
								 		'<div class="col-md-8">'+
								 			'<div>'+ data[i].name + '</div>'+
								 			'<div>'+ data[i].Address1 + ', ' + data[i].Address2 + ', ' + data[i].City + ', ' + data[i].province + '</div>'+
								 			'<div>'+ data[i].contact + '</div>'+
								 			'<div class="form-actions right">'+
												'<button type="submit" class="btn default"><i class="fa fa-external-link"></i> Link to me!</button>'+
											'</div>'+
								 		'</div>'+
								 	'</div>'+
								 	'<div class="row">'+
								 		'<div class="col-md-12">'+
								 			'<div><p>'+ data[i].description +'</p></div>'+
								 		'</div>'+
								 	'</div>'+
								'</div>'+
							'</div>';
				}
				node.innerHTML = fragment;
				// console.log = fragment;

       	    },
       	    error: function (xhr, ajaxOptions, thrownError) 
       	    {
       			window.alert(xhr.status);
       			window.alert(thrownError);
       			console.log(thrownError);
      		}
			
    	});
}