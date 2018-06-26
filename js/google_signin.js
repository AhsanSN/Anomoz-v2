function onSignIn(googleUser){
	var profile=googleUser.getBasicProfile();
	$("#pic").attr('src',profile.getImageUrl());
	$("#email").text(profile.getEmail());
	$("#name").text(profile.getName());
}
function signOut(){
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut();
}
