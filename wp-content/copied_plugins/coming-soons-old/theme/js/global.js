/*
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/
jQuery( function() {
// Add background image
	//jQuery.backstretch('images/road2.jpg');
	var rw_cs_count_datepicker=jQuery(".rw_cs_count_datepicker").val();
	var rw_cs_count_type1_DT_T=jQuery(".rw_cs_count_type1_DT_T").val();
	var rw_cs_count_type1_HT_T=jQuery(".rw_cs_count_type1_HT_T").val();
	var rw_cs_count_type1_MT_T=jQuery(".rw_cs_count_type1_MT_T").val();
	var rw_cs_count_type1_ST_T=jQuery(".rw_cs_count_type1_ST_T").val();
	var array=rw_cs_count_datepicker.split("/");
	// console.log(array);
	var day=array[0];
	var month=array[1];
	var yearandtime=array[2];
	var endDate = ""+month+"/"+day+"/"+yearandtime+"";
	jQuery('.countdown.simple').countdown({ date: endDate });
	jQuery('.countdown.styled').countdown({
	  date: endDate,
	  render: function(data) {
	  	// this.leadingZeros(data.days, 3)
	  	// this.leadingZeros(data.hours, 2)
	  	// this.leadingZeros(data.min, 2)
	  	// this.leadingZeros(data.sec, 2)
	  	var day=this.leadingZeros(data.days, 3)
		var hours=this.leadingZeros(data.hours, 2)
		var min=this.leadingZeros(data.min, 2)
		var sec=this.leadingZeros(data.sec, 2)

		// jQuery(this.el).html("<div> </div><div></div><div> </div><div> </div>");
		// setTimeout(function(){
			jQuery(this.el).html("<div>"+day+" <span>"+rw_cs_count_type1_DT_T+"</span></div><div>"+hours+" <span>"+rw_cs_count_type1_HT_T+"</span></div><div>"+min+" <span>"+rw_cs_count_type1_MT_T+"</span></div><div>"+sec+" <span>"+rw_cs_count_type1_ST_T+"</span></div>");
		// },300)
		window.addEventListener("load",function(){
			jQuery(this.el).html("<div>"+day+" <span>days</span></div><div>"+hours+" <span>hrs</span></div><div>"+min+" <span>min</span></div><div>"+sec+" <span>sec</span></div>");
			
			// var textDay="";
			// var textHours="";
			// var textMin="";
			// var textSec="";
			// var countDay=0;
			// var countHours=0;
			// var countMin=0;
			// var countSec=0;
			// function writeDay(){
			// 	if(countDay<=day.length){
			// 		textDay+=day.charAt(countDay);
			// 		countDay++;
			// 		jQuery(".styled>div").eq(0).html(textDay+'<span>days</span>');
			// 	}else{
			// 		return;
			// 	}
			// }
			// function writeHours(){
			// 	if(countHours<=hours.length){
			// 		textHours+=hours.charAt(countHours);
			// 		countHours++;
			// 		jQuery(".styled>div").eq(1).html(textHours+'<span>hrs</span>');
			// 	}else{
			// 		return;
			// 	}
			// }
			// function writeMin(){
			// 	if(countMin<=min.length){
			// 		textMin+=min.charAt(countMin);
			// 		countMin++;
			// 		jQuery(".styled>div").eq(2).html(textMin+'<span>min</span>');
			// 	}else{
			// 		return;
			// 	}
			// }
			// function writeSec(){
			// 	if(countSec<=sec.length){
			// 		textSec+=sec.charAt(countSec);
			// 		countSec++;
			// 		jQuery(".styled>div").eq(3).html(textSec+'<span>sec</span>');
			// 	}else{
			// 		return;
			// 	}
			// }
			// setInterval(function(){
			// 	writeDay();
			// },200)
			// setInterval(function(){
			// 	writeHours();
			// 	writeMin();
			// },300)
			// setInterval(function(){
			// 	writeSec();
			// },150)
		})
	  }
	});
	jQuery('.countdown.callback').countdown({
	  date: +(new Date) + 10000,
	  render: function(data) {
		jQuery(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
	  },
	  onEnd: function() {
		jQuery(this.el).addClass('ended');
	  }
	}).on("click", function() {
	  jQuery(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();
	});
});
