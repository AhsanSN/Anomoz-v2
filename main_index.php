<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="home/style1.css" />
  <link rel="stylesheet" href="home/style2.css" />
  <link rel="stylesheet" href="home/style3.css" />
  <meta name="viewport" content="width=device-width">
  <title>Anomoz - Meet new people</title>
    <meta name="description" content="Anomoz is where people make new friends online while not risking their privacy. Chat with people having same interest as yours. Have group conversations and much more.">
  <link rel="fluid-icon" href="/home/anomozlogo (1).png" title="Anomoz">
    <meta property="og:url" content="https://Anomoz.com">
    <meta property="og:site_name" content="Anomoz">
    <meta property="og:title" content="Make new friends online">
    <meta property="og:description" content="Anomoz is where people make new friends online while not risking their privacy. Chat with people having same interest as yours. Have group conversations and much more.">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta property="og:image" content="/home/anomozlogo (1).png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">

  <meta name="pjax-timeout" content="1000">
      <meta name="hostname" content="anomoz.com">
      <meta name="expected-hostname" content="anomoz.com">

      <meta name="viewport" content="width=device-width">
 <link crossorigin="anonymous" media="all" integrity="sha512-zyxweUSm/NG+juywqcMFSS4HbKjLWCZyEM2JjoCqnQUU6RVrHpHMwH66xreiaeMIRoA6vYuk0hm8S1X42r/YWQ==" rel="stylesheet" href="https://assets-cdn.github.com/assets/site-220df28424b63d1e24f3bd909efebe81.css" />

    <link rel="canonical" href="https://anomoz.com/" data-pjax-transient>

  <link rel="mask-icon" href="/home/anomozlogo (1).png" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="/home/anomozlogo (1).png">

<meta name="theme-color" content="#0f2338">
  <script src="https://apis.google.com/js/api:client.js"></script>
  <script>
  
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      auth2 = gapi.auth2.init({
        client_id: '140850185426-85mc78v6jlu83v7onv1set2gjif8bu27.apps.googleusercontent.com',
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          var name= googleUser.getBasicProfile().getName();
        var id = googleUser.getBasicProfile().getId();
         var email = googleUser.getBasicProfile().getEmail();
              var pic = googleUser.getBasicProfile().getImageUrl();
              if(id!='')
              {
                  document.getElementById("google_data").elements[0].value = id;
                  document.getElementById("google_data").elements[1].value = name;
                  document.getElementById("google_data").elements[2].value = email;
                  document.getElementById("google_data").elements[3].value = pic;
                  document.getElementById('google_data').submit();
              }
        }, function(error) {
        });
  }
  </script>
  </head>

  <body class="logged-out env-production page-responsive min-width-0 f4">
    
  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

        <header style="background-color: #1a2e44; " class="Header header-logged-out js-details-container Details position-relative f4 py-3" role="banner">
  <div class="container-lg d-lg-flex p-responsive">
    <div class="d-flex flex-justify-between flex-items-center">
      <a class="header-logo-invertocat my-0" href="https://www.anomoz.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
        <img src="/home/anomozlogo (1).png" alt="" height="42" width="42">
      </a>


          <div class="d-lg-none css-truncate css-truncate-target width-fit p-2">
        
          </div>

        <button class="btn-link d-lg-none mt-1 js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
          <svg height="24" class="octicon octicon-three-bars text-white" viewBox="0 0 12 16" version="1.1" width="18" aria-hidden="true"><path fill-rule="evenodd" d="M11.41 9H.59C0 9 0 8.59 0 8c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zm0-4H.59C0 5 0 4.59 0 4c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM.59 11H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1H.59C0 13 0 12.59 0 12c0-.59 0-1 .59-1z"/></svg>
        </button>
    </div>

    <div class="HeaderMenu HeaderMenu--bright d-lg-flex flex-justify-between flex-auto">
        <nav class="mt-3 mt-lg-0">
          <ul class="d-lg-flex list-style-none">
               <li class="ml-lg-2">
                <a class="js-selected-navigation-item HeaderNavlink px-0 py-3 py-lg-2 m-0" data-ga-click="Header, click, Nav menu - item:features" data-selected-links="/features /features/project-management /features/code-review /features/project-management /features/integrations /features" href="/about.php">
                  About
</a>              </li>
            <li class="ml-lg-2">
                <a class="js-selected-navigation-item HeaderNavlink px-0 py-3 py-lg-2 m-0" data-ga-click="Header, click, Nav menu - item:features" data-selected-links="/features /features/project-management /features/code-review /features/project-management /features/integrations /features" href="/contact.php">
                  Contact  
</a>              </li>

             
          </ul>
        </nav>

      <div class="d-lg-flex">
          <div class="d-lg-flex flex-items-center mr-lg-3">
            <div class="header-search   js-site-search position-relative" role="search">
  <div class="position-relative">
    <!-- '"` --><!-- </textarea></xmp> --></option></form>  </div>
</div>

          </div>

        <span class="d-block d-lg-inline-block">
            <div class="HeaderNavlink px-0 py-2 m-0">
              <a class="text-bold text-white no-underline" href="/login.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
                <span class="text-gray">or</span>
                <a class="text-bold text-white no-underline" href="/signup.php" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
            </div>
        </span>
      </div>
    </div>
  </div>
</header>

  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">
</div>
  <div role="main" class="application-main ">
        
<div style="background-color: #2c3e50; padding-top:58px !important;" class="py-6 py-sm-8 py-lg-10 py-xl-12 jumbotron-codelines">
  <div class="container-lg p-responsive position-relative">
    <div class="d-md-flex flex-items-center gutter-md-spacious">
      <div class="col-md-7 text-center text-md-left ">
        <h1 class="alt-h0 text-white lh-condensed-ultra mb-3">Built for Anonymous Chatting.</h1>
        <p class="alt-lead mb-4">
          Make new friends online, while not risking your privacy. Have anonymous group chats, share photos, and much more. All for free.
        </p>
      </div>
        <div class="mx-auto col-sm-8 col-md-5 hide-sm">
          <div class="rounded-1 text-gray bg-gray-light py-4 px-4 px-md-3 px-lg-4">
            <form class="home-hero-signup js-signup-form" autocomplete="off" action="/signup.php" accept-charset="UTF-8" method="post"><dl class="form-group mt-0">
                <dt class="input-label">
                  <label class="form-label f5" for="user[login]">Username</label>
                </dt>
                <dd>
                  <div src="/signup_check/username" csrf="sVl3gZggIkIZobzocENOqz42GNXYCodmT3XKGvPtVJgkABzbx3XTeECV6wYnca0uVv5NWZXmdZIVRlej8aQfBA==">
                    <input required type="text" name="username" id="user[login]" class="form-control form-control-lg input-block" placeholder="Pick a username" autofocus>
                  </div>
                </dd>
              </dl>
              <dl class="form-group">
                <dt class="input-label">
                  <label class="form-label f5" for="user[email]">Email</label>
                </dt>
                <dd>
                  <div src="/signup_check/email" csrf="KXKuqRDcZxKqzfeaHJ6Y1a6RmLPERAUIrl0EgJxsExAu96Y/O+Ubf5ktSyWI9pGUflHDtZez3MyQubfA3v69yQ==">
                    <input required type="text" name="email" id="user[email]" class="form-control form-control-lg input-block js-email-notice-trigger" placeholder="you@example.com">
                  </div>
                </dd>
              </dl>
              <dl class="form-group">
                <dt class="input-label">
                  <label class="form-label f5" for="user[password]">Password</label>
                </dt>
                <dd>
                  <div src="/signup_check/password" csrf="RK1uWIjb2Mgl/3z8fic6mV/XmEKwUkmUy9vWPyHAXjOSjSVsS/0ozfYBcl40QzLl9X+pai0hVXDt6KKoQj+LMw==">
                    <input required type="password" name="password" id="user[password]" class="form-control form-control-lg input-block" placeholder="Create a password">
                  </div>
                </dd>
                <p class="form-control-note">Create a strong password</p>
              </dl>
              <input type="text" name="required_field_41fa" id="required_field_41fa" style="display: none" class="form-control" />
              <button style="background-image: linear-gradient(-180deg, #2c3e50 0%, #3a5570 90%);" class="btn btn-primary btn-large f4 btn-block" type="submit" data-ga-click="Signup, Attempt, location:teams;">Sign up for Anomoz</button>
</form>
<hr style="border-top: 1px solid #bab2b2;">


<style type="text/css">
    #customBtn {
      color: #fff;
    background-color: #28a745;
    background-image: linear-gradient(-180deg, #ea1e1e  0%, #bd3d37  90%);
    padding: .75em 1.25em;
    font-size: inherit;
    border-radius: 6px;
    position: relative;
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-repeat: repeat-x;
    background-position: -1px -1px;
    background-size: 110% 110%;
    border: 1px solid rgba(27,31,35,0.2);
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font: 100%/1.5em 'Open Sans', sans-serif;
      font-weight: normal;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
    
  </style>

<div id="gSignInWrapper">
    <div id="customBtn" class="btn btn-primary btn-large f4 btn-block">
        <span class="label">Signup/Login with Google</span>
    </div>
  </div>
  <form id="google_data" action="signup.php" method="post">
            <input type="text" hidden name="usernumber" value="">
            <input type="text" hidden name="username" value="">
            <input type="email" hidden name="email" value="">
            <input type="text" hidden name="pic" value="">
            <button type="submit" hidden></button>
            </form>
      <script>startApp();</script>





</div>        </div>
        <div class="d-sm-none text-center">
          <a rel="nofollow" class="btn btn-primary btn-large border-0" data-ga-click="Signup, Attempt, location:jumbotron;" href="/signup.php">Sign up for Anomoz</a>
        </div>
    </div>
  </div>
</div>


<div class="py-7 py-md-8 py-lg-9 border-top">
  <div class="container-lg p-responsive pb-6">
    <h2 class="alt-h1 lh-condensed mt-3 mb-2 text-center">
      A better way to make strong connections.
    </h2>
    <p class="lead text-center col-md-8 mx-auto">
      Anomoz brings people closer to each other. They can be strangers or your collegues. Through anonymous group chatting, Anomoz believes in building a strong community.
    </p>
    <div class="text-center">
        <a class="btn btn-large btn-outline" data-ga-click="Signup, Attempt, location:teams;" href="/signup.php">Make new friends</a>
    </div>
  </div>

  <div class="container-xl p-responsive">
    <div class="position-relative overflow-hidden d-lg-flex pt-6">
      <div class="col-10 col-sm-7 mx-auto mx-lg-6 mb-sm-3">
        <br>
        <div class="text-center">
            <h3 class="alt-h3 mb-1">What is Anomoz?</h3>
            </div>
            <br><ul>
                <li>Anomoz is where you can chat to a random person from around the globe anonymously.</li>
                <li>Anomoz is where you can create a group and invite all your friends together to talk about a topic anonymously so that no one can judge you.</li>
                <li>Anomoz is where you can create a confession group and invite your collegues to join and post in it.</li>
                <li>Anomoz is where you have your personal URL so that it's easier for people to remember you.</li>
                <li>Anomoz is where you are completely anonymous even from our database.</li>
                <li>Anomoz is where you are kept updated of all the conversations using our screen notification system.</li>
                <li>Anomoz is where you give your friends a chance to be honest with you.</li>
                <li>Anomoz is where you can create hidden groups to talk about a subject.</li>
                <li>Anomoz is where you are share messages with images. </li>
                <li>Anomoz is where you can chat with people without even having an account. </li>
            </ul>
            <br>
        <div class="text-center">    
        <a class="btn btn-large btn-outline" data-ga-click="Signup, Attempt, location:teams;" href="/signup.php">Join now</a>
        </div>
        
      </div>
      <div class="col-lg-5">
          <a class="summarylink">
          <div class="summarylink-illustration">
          </div>
          <div class="summarylink-btn d-flex flex-justify-between flex-items-center f5 text-gray-dark rounded-1 p-sm-4 my-4 my-sm-0">
            <div class="col-10">
              <h3 class="alt-h3 mb-1">Meet new people</h3>
              <p class="mb-0">Browse and find new people to chat with from all around the world. Make new friends and have nonstop conversations day and night.</span></p>
            </div>
            
          </div>
        </a>
        <a class="summarylink">
          <div class="summarylink-illustration">
          </div>
          <div class="summarylink-btn d-flex flex-justify-between flex-items-center f5 text-gray-dark rounded-1 p-sm-4 my-4 my-sm-0">
            <div class="col-10">
              <h3 class="alt-h3 mb-1">Anonymous group conversations</h3>
              <p class="mb-0">Have anonymous group conversations with your existing friends and collegues. Talk about hobbies, share memes and much more.</span></p>
            </div>
            
          </div>
        </a>
        <a class="summarylink">
          <div class="summarylink-illustration">
          </div>
          <div class="summarylink-btn d-flex flex-justify-between flex-items-center f5 text-gray-dark rounded-1 p-sm-4 my-4 my-sm-0">
            <div class="col-10">
              <h3 class="alt-h3 mb-1">Get Notified</h3>
              <p class="mb-0">Remain updated regarding all the chatting that is going on in your joined conversations. Get notified on your all devices through your notifications.</span></p>
            </div>
            
          </div>
        </a>
      </div>
    </div>
  </div>

</div>


<div class="py-7 py-md-8 py-lg-9 border-top">
  <div class="container-lg p-responsive text-center">
    <div class="col-md-8 py-md-6 mx-auto">
      <h2 class="alt-h1 lh-condensed mt-3 mb-2">
        Features
      </h2>
      <p class="lead mb-2 pb-md-4 px-md-3">
        Anomoz brings a huge bunch of features to its users desk. All you have to do is to discover them and use them.
      </p>
      <p class="f4 text-center mb-6">
        <a href="/about.php" class="btn btn-large btn-outline mx-auto">More about Anomoz</a>
      </p>
    </div>

    <div class="apps-cluster d-flex flex-wrap flex-justify-center pb-6">
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #553958;" aria-label="Public Walls"><img src="/home/1wall.png" alt="" class="CircleBadge-icon"></div>
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #364e98;" aria-label="Groups"><img src="/home/1group.png" alt="" class="CircleBadge-icon"></div>
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #58967a;" src="/home/1hidden.png" alt=""aria-label="Hidden Groups"  class="CircleBadge-icon"><img src="/home/1hidden.png" alt="" class="CircleBadge-icon"></div>
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #5fb57d;" aria-label="Chatting without account "><img src="/home/1account.png" alt="" class="CircleBadge-icon"></div>
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #9dea9d;" aria-label="Custom URLs"><img src="/home/1url.png" alt="" class="CircleBadge-icon"></div>
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #f3f6fb;" aria-label="Notifications"><img src="/home/1notf.png" alt="" class="CircleBadge-icon"></div>
      <div class="CircleBadge CircleBadge--medium CircleBadge--feature hide-sm tooltipped tooltipped-s tooltipped-no-delay" style="background-color: #6976ce;" aria-label="Personalized Settings"><img src="/home/1settings.png" alt="" class="CircleBadge-icon"></div>
    </div>

    <div class="col-md-8 py-md-6 mx-auto">
      <p class="my-2 alt-text-small col-sm-8 col-md-6 mx-auto">
        What are you waiting for? Signup now and explore these features.
      </p>
      <p>
        <a href="/signup.php">Create new <span class="no-wrap">account<svg height="16" class="octicon octicon-chevron-right ml-2 v-align-text-bottom" viewBox="0 0 8 16" version="1.1" width="8" aria-hidden="true"><path fill-rule="evenodd" d="M7.5 8l-5 5L1 11.5 4.75 8 1 4.5 2.5 3l5 5z"/></svg></span></a>
      </p>
    </div>
  </div>
</div>


  <div class="py-7 py-md-8 py-lg-3" style="background-color: #2c3e50;">
    <div  class="container-lg p-responsive text-white text-center">
        <h2 class="alt-h1 lh-condensed mt-3 mb-2">
        Message a random person
      </h2>
      <p style="color: #ffffff;" class="lead mb-2 pb-md-4 px-md-3">
        Don't want to create an account? We understand you. Why not message a random person without an account? But remember, having no account means you will not be notified if the person replies you. You will miss tons of other perks too.
      </p>
      <p class="f4 text-center mb-6">
        <a href="/find_stranger.php" class="btn btn-large btn-outline mx-auto">Find a stranger</a>
      </p>
  </div>

  <div class="modal-backdrop js-touch-events"></div>

  </div>
    
</html>

