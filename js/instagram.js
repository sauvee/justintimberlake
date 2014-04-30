// JavaScript Document


//Use this url below to get your access token
//https://instagram.com/oauth/authorize/?display=touch&client_id=c6c4665bb8dc4b64a7817763d7986bb7&redirect_uri=http://mariesauvee.com/justintimberlake&response_type=token 
// Access token: 193245437.c6c4665.9f91d53be2b34b65bb5700451bff15e5
//if you need a user id for yourself or someone else use:
//http://jelled.com/instagram/lookup-user-id
	
						
$(function() {
	
	var apiurl = "https://api.instagram.com/v1/tags/JT2020TOUR/media/recent?access_token=193245437.c6c4665.9f91d53be2b34b65bb5700451bff15e5&callback=?"
	var access_token = location.hash.split('=')[1];
	var html = ""
	
		$.ajax({
			type: "GET",
			dataType: "json",
			cache: false,
			url: apiurl,
			success: parseData
		});
				
		
		function parseData(json){
			//console.log(json);
			
			$.each(json.data,function(i,data){
				html += '<a class="fancybox" rel="group" title="Photo by: ' + data.user.full_name +'" href="' + data.images.standard_resolution.url +'"><img src ="' + data.images.low_resolution.url + '"></a>'
			});
			
			//console.log(html);
			$("#results").append(html);
	}  
 });
