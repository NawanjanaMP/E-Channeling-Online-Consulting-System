<?php error_reporting(0);?>
<script src="https://sdk.videosdk.live/rtc-js-prebuilt/0.1.4/rtc-js-prebuilt.js"></script>
<script>
  var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const meeting = new VideoSDKMeeting();
    
    const config = {
      name: "",
      apiKey: "f1b4261b-580b-4198-bddd-cdc1eb204995", // generated in Setup
      meetingId: "milkyway", // enter your meeting id

      containerId: null,
      redirectOnLeave: "https://www.google.com",

      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,

      chatEnabled: true,
      screenShareEnabled: true,
      pollEnabled: true,
      whiteBoardEnabled: true,
      raiseHandEnabled: true,

      recordingEnabled: true,
      recordingWebhookUrl: "https://www.videosdk.live/callback",
      participantCanToggleRecording: true,

      brandingEnabled: true,
      brandLogoURL: "../assets/img/favicon.png",
      brandName: "Online Consulting",
      poweredBy: true,

      participantCanLeave: true, // if false, leave button won't be visible
     

      // Live stream meeting to youtube
      livestream: {
        autoStart: true,
        outputs: [
          // {
          //   url: "rtmp://x.rtmp.youtube.com/live2",
          //   streamKey: "<STREAM KEY FROM YOUTUBE>",
          // },
        ],
      },

      permissions: {
        askToJoin: false, // Ask joined participants for entry in meeting
        toggleParticipantMic: true, // Can toggle other participant's mic
        toggleParticipantWebcam: true, // Can toggle other participant's webcam
      },

      joinScreen: {
        visible: true, // Show the join screen ?
        title: "Online Consuting", // Meeting title
         // Meeting joining url
        
   
      },
    };

    meeting.init(config);
  });

  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.1.5/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
</script>