var player,
    time_update_interval = 0;

var rw_cs_bg_image_vsl_sound=jQuery(".rw_cs_bg_image_vsl_sound").val();
var rw_cs_bg_image_vsl_quality=jQuery(".rw_cs_bg_image_vsl_quality").val();
var rw_cs_bg_image_video_slideshow=jQuery(".rw_cs_bg_image_video_slideshow").val();
console.log(rw_cs_bg_image_video_slideshow);
var video_array=rw_cs_bg_image_video_slideshow.split(";");
var First_video=video_array[0];
video_array.shift();
var arr_text=video_array.join(',');



function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-placeholder', {
        width: "100%",
        height: "100%",
        videoId: First_video,
        playerVars: {
			autoplay: 1,
			loop:1,
            rel:0,
            showinfo:0,
            enablejsapi: 1,
            iv_load_policy:3,
            origin: document.location.host,
            color: 'white',
            controls:0,
            playlist: arr_text
        },
        events: {
            onReady: initialize
        }
    });
}

function initialize(event){
	event.target.setVolume(100);
    event.target.playVideo();
    if(rw_cs_bg_image_vsl_sound=="false"){
        event.target.mute();
        jQuery('.RW_mute-toggle').attr('class','RW_BgVSl_Icons RW_mute-toggle rich_web rich_web-volume-up');
    }
    event.target.setPlaybackQuality(rw_cs_bg_image_vsl_quality);
    updateTimerDisplay();
    updateProgressBar();
    clearInterval(time_update_interval);
    time_update_interval = setInterval(function () {
        updateTimerDisplay();
        updateProgressBar();
    }, 1000);
    jQuery('#volume-input').val(Math.round(player.getVolume()));
}
function updateTimerDisplay(){
    jQuery('#current-time').text(formatTime( player.getCurrentTime() ));
    jQuery('#duration').text(formatTime( player.getDuration() ));
}
function updateProgressBar(){
    jQuery('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
}
jQuery('#progress-bar').on('mouseup touchend', function (e) {
    var newTime = player.getDuration() * (e.target.value / 100);
    player.seekTo(newTime);
});
jQuery('.RW_play').on('click', function () {
    jQuery(this).css("display","none");
    jQuery('.RW_pause').css("display","inline-block");
    player.playVideo();
})
jQuery('.RW_pause').on('click', function () {
    jQuery(this).css("display","none");
    jQuery('.RW_play').css("display","inline-block");
    player.pauseVideo();
})

jQuery('.RW_mute-toggle').on('click', function() {
    var mute_toggle = jQuery(this);
    if(player.isMuted()){
        player.unMute();
        mute_toggle.attr('class','RW_BgVSl_Icons RW_mute-toggle rich_web rich_web-volume-down');
    }
    else{
        player.mute();
        mute_toggle.attr('class','RW_BgVSl_Icons RW_mute-toggle rich_web rich_web-volume-up');
    }
});
jQuery('#volume-input').on('change', function () {
    player.getAvailablePlaybackRates()
    player.setVolume(jQuery(this).val());
});
jQuery('#speed').on('change', function () {
    player.setPlaybackRate(jQuery(this).val());
});

jQuery('.quality').on('change', function () {
    player.setPlaybackQuality(jQuery(this).val());
});
jQuery('.RW_next').on('click', function () {
    player.nextVideo()
});

jQuery('.RW_prev').on('click', function () {
    player.previousVideo()
});

jQuery('.thumbnail').on('click', function () {
    var url = jQuery(this).attr('data-video-id');
    player.cueVideoById(url);
});

function formatTime(time){
    time = Math.round(time);

    var minutes = Math.floor(time / 60),
        seconds = time - minutes * 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    return minutes + ":" + seconds;
}

jQuery('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
});