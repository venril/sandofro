/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#ident').on('click', function(){
    var slogIn = $('#login').val();
    var smdp = $('#mdp');
$.ajax({
  method: "POST",
  url: "control_connexion.php",
  data: {
      login:slogIn,
      password:smdp             
  },
}).done(function(e) {
    
    document.location = "control_connexion.php";
 
});
});