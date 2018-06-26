<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-messaging.js"></script>
<script>
//localStorage.setItem('ask_notf','19');//making default
    if (Notification.permission == "granted")
    {
        console.log('Developer: Syed Ahsan Ahmed');
        if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('../firebase-messaging-sw.js')
  .then(function(registration) {
    console.log('Registration successful, scope is:', registration.scope);
  }).catch(function(err) {
    console.log('Service worker registration failed, error:', err);
  });
}

var config = {
    apiKey: "AIzaSyDCLnSZbGa4svSBmIocCiDxyOf39ei839A",
    authDomain: "anomoz-website.firebaseapp.com",
    databaseURL: "https://anomoz-website.firebaseio.com",
    projectId: "anomoz-website",
    storageBucket: "",
    messagingSenderId: "637578602529"
  };
  firebase.initializeApp(config);
  const messaging = firebase.messaging();
  messaging.usePublicVapidKey("BAXjr7PyJPkcizghTiXrNfkDohz16F97r9Zvs63HQpVE2ts6Ja59pmsfrWGW2OvPv5I7vVT1hw0roMXqYeKqteE");
  if (Notification.permission == "default") {console.log("can be granted")

  }
  messaging.requestPermission()
  .then(function(){
    return messaging.getToken()
  .then(function(currentToken) {
    console.log(currentToken);
            var now = new Date();
var time = now.getTime();
time += 3600 * 1050 *24*4;
now.setTime(time);
document.cookie = 
'currentToken_notf='+currentToken+ '; expires=' + now.toUTCString() + 
'; path=/';
    //token received
  })
  .catch(function(err) {
    console.log('An error occurred while retrieving token. ', err);
    showToken('Error retrieving Instance ID token. ', err);
    setTokenSentToServer(false);
  });
  }).catch(function(err){
    console.log('Error');
  });
messaging.onTokenRefresh(function() {
  messaging.getToken().then(function(refreshedToken) {
    console.log('Token refreshed.');
    setTokenSentToServer(false);
    sendTokenToServer(refreshedToken);
                var now = new Date();
var time = now.getTime();
time += 3600 * 1050 *24*4;
now.setTime(time);
document.cookie = 
'currentToken_notf='+refreshedToken+ '; expires=' + now.toUTCString() + 
'; path=/';
    //token received
  }).catch(function(err) {
    console.log('Unable to retrieve refreshed token ', err);
    showToken('Unable to retrieve refreshed token ', err);
  });
});
messaging.onMessage(function(payload) {
  console.log('Message received. ', payload);
  // ...
});
}
</script>
<style>
        .dialog {
            position: absolute;
            z-index: 3;
            display: block;
            margin: auto;
            color: #E6EAEA;
            top: 20px;
            margin-left: auto;
            margin-right: auto;
            min-width: 100px;
            max-width: 530px;
            width: -moz-min-content;    /* Firefox */
            width: -webkit-min-content; /* Chrome */
            width: -webkit-fit-content; /* Chrome */
            width: -moz-fit-content;
            width: fit-content;
            height: -moz-min-content;    /* Firefox */
            height: -webkit-min-content; /* Chrome */
            height: -webkit-fit-content; /* Chrome */
            height: -moz-fit-content;
            height: fit-content;
            height: auto;
            padding: 24px;
            padding-bottom: 8px;
            background: #2c3e50;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.23), 0 10px 40px rgba(0, 0, 0, 0.19);
        }
        
        @media screen and (max-width: 735px) {
            .dialog {
            position: absolute;
            z-index: 3;
            display: block;
            margin: auto;
            color: #E6EAEA;
            top: 20px;
            margin-left: auto;
            margin-right: auto;
            min-width: 100px;
            max-width: 530px;
            width: -moz-min-content;    /* Firefox */
            width: -webkit-min-content; /* Chrome */
            width: -webkit-fit-content; /* Chrome */
            width: -moz-fit-content;
            width: fit-content;
            height: -moz-min-content;    /* Firefox */
            height: -webkit-min-content; /* Chrome */
            height: -webkit-fit-content; /* Chrome */
            height: -moz-fit-content;
            height: fit-content;
            height: auto;
            padding: 24px;
            margin: auto auto;
            margin-right: 50px;
            padding-bottom: 8px;
            background: #2c3e50;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.23), 0 10px 40px rgba(0, 0, 0, 0.19);
        }
        }

        .dialog-actions {
            height: 48px;
            width: 100%;
        }
        .dialog-actions button {
            margin: 0 3px;
            display: inline-block;
            border: none;
            outline: none;
            height: 36px;
            float: right;
            text-transform: uppercase;
            color: white;
            cursor: pointer;
            padding-left: 25px;
            padding-right: 25px;
            vertical-align: middle;
            border-radius: 5px;
        }
        .dialog-actions button:focus,.dialog-actions button:hover {
            background: #757575;
            border-radius: 5px;
        }
        .yes{
            background-color: #3d8bc6;
        }
        .no{
            background-color: #8da2b7;
        }
</style>
<div style="display:none;" class="dialog" id="notf_bar">
    <h1 id="notf_title" style="color: #edeff2; font-family: 'Helvetica Neue', sans-serif; font-size: 25px; letter-spacing: -1px; line-height: 1; text-align: center;font-weight: 300;margin: -5px 0 -5px;">Allow Notifications</h1>
    <h2 id="notf_body" style=" color: #edeff2; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 100; line-height: 20px; margin: 20px 0 14px; text-align: center; ">Stay updated on this device regarding what going on in your joined groups.</h2>
    <div class="dialog-actions" id="notf_buttons">
        <button onclick="yes()" class="yes" style="">Allow</button>
        <button onclick="no()" class="no"style="">Later</button>
    </div>
</div>
<script>
function show_box(){document.getElementById("notf_bar").style.display = "block";}
setTimeout(show_box, 100);

function yes(){
    document.getElementById("notf_bar").style.display = "none";
    console.log('Developer: Syed Ahsan Ahmed');
    console.log('Email: sa02908@st.habib.edu.pk');
    console.log('Note: If you find any issue, kindly report it to me. ');
    
            if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('../firebase-messaging-sw.js')
  .then(function(registration) {
    console.log('Registration successful, scope is:', registration.scope);
  }).catch(function(err) {
    console.log('Service worker registration failed, error:', err);
  });
}

var config = {
    apiKey: "AIzaSyDCLnSZbGa4svSBmIocCiDxyOf39ei839A",
    authDomain: "anomoz-website.firebaseapp.com",
    databaseURL: "https://anomoz-website.firebaseio.com",
    projectId: "anomoz-website",
    storageBucket: "",
    messagingSenderId: "637578602529"
  };
  firebase.initializeApp(config);
  const messaging = firebase.messaging();
  messaging.usePublicVapidKey("BAXjr7PyJPkcizghTiXrNfkDohz16F97r9Zvs63HQpVE2ts6Ja59pmsfrWGW2OvPv5I7vVT1hw0roMXqYeKqteE");
  if (Notification.permission == "default") {console.log("can be granted")

  }
  messaging.requestPermission()
  .then(function(){
    return messaging.getToken()
  .then(function(currentToken) {
    console.log(currentToken);
                    var now = new Date();
var time = now.getTime();
time += 3600 * 1050 *24*4;
now.setTime(time);
document.cookie = 
'currentToken_notf='+currentToken+ '; expires=' + now.toUTCString() + 
'; path=/';
    
    //token received
  })
  .catch(function(err) {
    console.log('An error occurred while retrieving token. ', err);
    showToken('Error retrieving Instance ID token. ', err);
    setTokenSentToServer(false);
  });
  }).catch(function(err){
    console.log('Error');
  });
messaging.onTokenRefresh(function() {
  messaging.getToken().then(function(refreshedToken) {
    console.log('Token refreshed.');
    setTokenSentToServer(false);
    sendTokenToServer(refreshedToken);
                    var now = new Date();
var time = now.getTime();
time += 3600 * 1050 *24*4;
now.setTime(time);
document.cookie = 
'currentToken_notf='+refreshedToken+ '; expires=' + now.toUTCString() + 
'; path=/';
    //token received
  }).catch(function(err) {
    console.log('Unable to retrieve refreshed token ', err);
    showToken('Unable to retrieve refreshed token ', err);
  });
});
messaging.onMessage(function(payload) {
  console.log('Message received. ', payload);
  // ...
});
localStorage.setItem('ask_notf','1');
}
function no(){
    document.getElementById("notf_title").innerHTML = "Notification Permission Declined";
    document.getElementById("notf_body").innerHTML = "You can always turn on notifications on this device from your sidebar.";
    document.getElementById("notf_buttons").style.display = "none";
    setTimeout(hide, 3000);

localStorage.setItem('ask_notf','1');    
}
function hide(){document.getElementById("notf_bar").style.display = "none";}
</script>