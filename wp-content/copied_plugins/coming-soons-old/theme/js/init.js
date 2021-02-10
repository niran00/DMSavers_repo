window.addEventListener("load",function(){
	var load_screen=document.getElementById("RW_Load_Content");
	document.body.removeChild(load_screen);
	var show_hide=jQuery(".RW_desc_show").val();
	var desc_type=jQuery(".RW_desc_show_type").val();
	var rw_cs_cout_show=jQuery(".rw_cs_cout_show").val();
	var rw_cs_heading_show=jQuery(".rw_cs_heading_show").val();
	var rw_cs_social_Show=jQuery("#rw_cs_social_Show").val();
	if(show_hide=="show"){
		var text=jQuery(".intro").text();
		var count=0;
		if(desc_type=="Text Animation"){
			jQuery(".intro").text('');
		}
		var value=''
		function textAnim(){
			if(count<=text.length){
				value+=text.charAt(count);
				count++;
				jQuery(".intro").text(value);
			}else{
				return;
			}
		}
	}	
	var y=0;
	function scrollAnim(){
		var window_height = jQuery(window).height();
		var window_top_position = jQuery(window).scrollTop();
		var window_bottom_position = (window_top_position + window_height);
		if(show_hide=="show"){
			var element = jQuery(".intro");
			var element_height = element.outerHeight();
			var element_top_position = element.offset().top;
			var element_bottom_position = (element_top_position + element_height);
		}
		if(rw_cs_heading_show=="show"){
			var elementHeader = jQuery("#RW_CS_Header");
			var element_heightHeader = elementHeader.outerHeight();
			var element_top_positionHeader = elementHeader.offset().top;
			var element_bottom_positionelementHeader = (element_top_positionHeader + element_heightHeader);
		}
		if(rw_cs_cout_show=="show"){
			var elementCount = jQuery(".countdown");
			var element_heightCount = elementCount.outerHeight();
			var element_top_positionCount = elementCount.offset().top;
			var element_bottom_positionelementCount = (element_top_positionCount + element_heightCount);
		}
		var elementMInfo = jQuery(".moreInfo");
		if(elementMInfo.length){
			var element_heightMInfo = elementMInfo.outerHeight();
			var element_top_positionMInfo = elementMInfo.offset().top;
			var element_bottom_positionelementMInfo = (element_top_positionMInfo + element_heightMInfo);
		}
		
		var elementNMe = jQuery(".notify");
		if(elementNMe.length){
			var element_heightNMe = elementNMe.outerHeight();
			var element_top_positionNMe = elementNMe.offset().top;
			var element_bottom_positionelementNMe = (element_top_positionNMe + element_heightNMe);
		}

		if(rw_cs_social_Show=="Show"){
			var elementSoc = jQuery("#socialIcons");
			var element_heightSoc = elementSoc.outerHeight();
			var element_top_positionSoc = elementSoc.offset().top;
			var element_bottom_positionelementSoc = (element_top_positionSoc + element_heightSoc);
		}
		if(show_hide=="show"){
			if (element_top_position <= window_bottom_position) {
				y++
				element.addClass('introAnim');
				if(y==1){
				    setInterval(function(){
				      	if(desc_type=="Text Animation"){
							textAnim();
						}
					},70)
				}   	
			}
		}
		if (element_top_positionMInfo <= window_bottom_position) {
			elementMInfo.addClass('moreInfoAnim');
		}
		if (element_top_positionNMe <= window_bottom_position) {
			elementNMe.addClass('notifyAnim');
		}
		if(rw_cs_social_Show=="Show"){
			if (element_top_positionSoc <= window_bottom_position) {
				elementSoc.addClass('socialIconsAnim');
			}
		}
		if(rw_cs_cout_show=="show"){
			if (element_top_positionCount <= window_bottom_position) {
				elementCount.addClass('countdownAnim');
			}
		}
		if(rw_cs_heading_show=="show"){
			if (element_top_positionHeader <= window_bottom_position) {
				elementHeader.addClass('RW_CS_HeaderAnim');
			}
		}
	}
	scrollAnim()
	jQuery(window).scroll(function(){
		scrollAnim();
	})
})