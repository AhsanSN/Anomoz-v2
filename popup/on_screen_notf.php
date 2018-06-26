<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

.notifications {
    display: none;
  position: absolute;
  right: 10px;
  top: 10px;
font-family: "Open Sans", sans-serif;
z-index:4;
}

.notify {
  width: 400px;
  height: 70px;
  background-color: #225877;
  border-radius: 7px;
  box-shadow: 0 1px 4px #1c4963;
  overflow: hidden;
  cursor: pointer;
  margin: 4px 0;
}

.notify:first-child {
  margin: 0 0 4px 0;
}

.circle {
  width: 28px;
  height: 20px;
  display: block;
  border-radius: 100%;
  transform: translate(17px, 17px);
  color: whitesmoke;
  padding: 10px 0 10px 13px;
}

.bl > .circle {
  background-color: whitesmoke;
}

.info {
  width: 320px;
  height: 70px;
  line-height: 19px;
  transform: translate(70px, -35px);
  padding: 4.5px;

}

.info_title {
  display: block;
  color: whitesmoke;
  font-weight: 600;
  font-size: 15px;
}

.info_body {
  color: whitesmoke;
  font-size: 13px;
      white-space:pre-wrap;

}

@media screen and (max-width: 735px) {
.notify {
  width: 300px;
  height: 90px;
  background-color: #225877;
  border-radius: 7px;
  box-shadow: 0 1px 4px #1c4963;
  overflow: hidden;
  cursor: pointer;
  margin: 4px 0;
}

.info {
  width: 220px;
  height: 90px;
  line-height: 19px;
  transform: translate(70px, -35px);
  padding: 4.5px;

}
}
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<div onclick="document.getElementById('on_screen_notifications').style.display = 'none';
"class="notifications" id="on_screen_notifications">
  <div class="notify bl">
    <div class="circle">
      <i style="color:#225877"class="icon-bell"></i>
    </div>
    <div class="info">
      <span id="info_title" class="info_title">You have 42 new messages from 2 chats.</span>
      <span id="info_body" class="info_body"> as an Electrical Supervisor in a well-known firm! At an age of 25, Saleem has fully realized its responsibilities towards its sldalskdnlkasnd 1:41 PM</span>
    </div> 
  </div>
</div> 
