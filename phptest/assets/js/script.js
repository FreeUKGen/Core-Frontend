$(document).ready(function(){  

// code for faking "logged in" status

if ($('html').is('.voluteer_logged_in')) {
	$(".nav-log-in").replaceWith("<li><a href=\"volunteer_user_account.php\">Your Account</a></li>");
}



// Below is for showing login page in place

$( ".user-nav ul" ).after( "<div class=\"ajaxdiv\"></div>" );
$(".ajaxdiv").hide();
$( ".ajaxdiv" ).load( "volunteer_login.php .login_content" );


$( ".nav-log-in a" ).click(function(e) {
e.preventDefault();
  $( ".ajaxdiv" ).toggle( "slow", function() {
    // Animation complete.
  });
});


});