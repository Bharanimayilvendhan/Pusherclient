<!DOCTYPE html>
<head>
<title>Pusher Test</title>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>

<script>
    Pusher.logToConsole = true;
    var pusher = new Pusher('919ac716a9b7ec1a1900', {	
   	 cluster: 'mt1',
      encrypted: true,
     enabledTransports: ['ws'],
     disableStats: true,
     authEndpoint: "https://apimgr.entva0.dev.vonagenetworks.net:8243/pusher/v1/auth",
     authTransport: "ajax",
     auth: {
       headers: { 
       	'X-Von-Token': "2d5e90dd-a7df-32ea-a689-91f4cda733ca",
       	"Authorization": "Bearer 0fe56b32-ac07-33e3-832f-6222dd717a3e"}
     }
   });
  var channel = pusher.subscribe('private-144955-presence');
  var events = ['Initializing',
                  'Start Ringing',
                  'Ringing',
                  'Answered',
                  'Connected',
                  'Terminated',
                  'Disconnected'
                ];
  var eventName;
  for (var i = 0; i < events.length; i++) {
      eventName = events[i];
    console.log(eventName);
      
       channel.bind( eventName, function(data) {
   
    console.log(data.message);
    });
 } 
  </script>
</head>


