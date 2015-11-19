/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#ident').on('click', function(){
$.ajax({
  method: "POST",
  url: "control_connexion.php",
  data: {
      login:"toto",
      password:"poto"             
  },
}).done(function() {
  if(pondera == "bonobo"){
      document.location("pageBackoffice.php");
  };
});
});