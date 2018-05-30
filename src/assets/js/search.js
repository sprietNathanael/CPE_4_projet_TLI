var diseases = [];
var diseasesToDisplay = [];

function searchDisease()
{
    $.ajax({
		type: "GET",
		contentType : "application/json",
		url: "rest/diseasesSearchRest.php?meridien="+$("#search_meridien_input").val()+"&type="+$("#search_type_input").val()+"&desc="+$("#search_patho_input").val(),
		success: function(data){
			answer = JSON.parse(data);
			diseasesToDisplay = [];
			console.log(answer);
			for(i = 0; i < answer.length; i++)
			{
				diseasesToDisplay.push({name:answer[i].desc, type:answer[i].type, meridian:answer[i].nom});
			}
			console.log(diseasesToDisplay);
			refreshPagesNumber();
		},
		error : function(){
			console.log('Echec');
		}
	});
}