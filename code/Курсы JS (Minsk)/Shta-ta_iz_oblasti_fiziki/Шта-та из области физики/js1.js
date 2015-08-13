$(document).ready(function(){

$("input#rez").click(function(event){  
   $('#result').text($('#vshar').val()*$('#tshar').val()+($('#ashar').val()*$('#tshar').val()*$('#tshar').val())/2); 
   }); 
});


