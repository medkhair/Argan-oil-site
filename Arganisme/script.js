
$(function (){
	$('#contact-form').submit(function(e){
		e.preventDefault();
		$('.comments').empty();
		var postdata = $('#contact-form').serialize();
		
		$.ajax({
			type: 'POST',
			url: 'orderHandler.php',
			data: postdata,
			dataType: 'json',
			success: function(result){
				if (result.isSuccess) {
					$("#contact-form").append("<p class='thank-you'>Your message has been sent. thank you for ordering :)</p>");
					$("#contact-form")[0].reset();
				}
				else{
					$("#firstname + .comments").html(result.firstnameERR);
					$("#name + .comments").html(result.nameERR);
					$("#email + .comments").html(result.emailERR);
					$("#phone + .comments").html(result.phoneERR);
					$("#country + .comments").html(result.countryERR);
					$("#city + .comments").html(result.cityERR);
					$("#adress + .comments").html(result.adressERR);
					$("#product + .comments").html(result.productERR);
					$("#message + .comments").html(result.messageERR);
				}
			},
			error: function(xhr, status, error) {
		        console.error("AJAX Error: " + status + ": " + error);
		    }
		});

	});
})
$(function (){
	$('#contact-form2').submit(function(e){
		e.preventDefault();
		$('.comments').empty();
		var postdata = $('#contact-form2').serialize();
		
		$.ajax({
			type: 'POST',
			url: 'contactHandler.php',
			data: postdata,
			dataType: 'json',
			success: function(result){
				if (result.isSuccess) {
					$("#contact-form2").append("<p class='thank-you'>Your message has been sent. thank you for contacting us :)</p>");
					$("#contact-form2")[0].reset();
				}
				else{
					$("#firstname + .comments").html(result.firstnameERR);
					$("#name + .comments").html(result.nameERR);
					$("#email + .comments").html(result.emailERR);
					$("#phone + .comments").html(result.phoneERR);
					$("#subject + .comments").html(result.subjectERR);
					$("#message + .comments").html(result.messageERR);
				}
			},
			error: function(xhr, status, error) {
		        console.error("AJAX Error: " + status + ": " + error);
		    }
		});

	});
})
var link = `https://countriesnow.space/api/v0.1/countries/positions`;
async function change(){
	const response = await fetch(link);
	const  nations = await response.json();
	const countries = nations.data; 
	for (var i = 0; i< countries.length; i++) {
		if (countries[i].name == "Western Sahara") {
			continue;
		}
		var node = document.createElement("option");
		node.innerHTML = countries[i].name;
		document.getElementById("countries").appendChild(node) ;
	}
}
change();

window.onload = function() {
    var productName = document.getElementById("productTitle");
    var input = document.getElementById("productProd");
    
    if (productName && input) {
        input.value = productName.textContent;
    }
};