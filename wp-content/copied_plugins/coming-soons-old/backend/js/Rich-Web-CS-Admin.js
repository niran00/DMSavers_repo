jQuery(document).ready(function(){
	//tooltip
	jQuery('[data-toggle="tooltip"]').tooltip();
	//datetimepicker
	jQuery(function() {
		jQuery('#datetimepicker1').datetimepicker({
			language: 'en',
			autoclose: true,
		});
	});
	//alphaColorPicker
	jQuery( 'input.alpha-color-picker' ).alphaColorPicker();
	jQuery('.wp-color-result').attr('title','Select');
	jQuery('.wp-color-result').attr('data-current','Selected');
	//range 
	function rangeCS()
	{
		var cs = jQuery('.range-cs'), range = jQuery('.range-cs__range'), value = jQuery('.range-cs__value');     
		cs.each(function()
		{
			value.each(function()
			{
				var value = jQuery(this).prev().attr('value');
					jQuery(this).html(value);
			});    
			range.on('input', function()
			{
				jQuery(this).next(value).html(this.value);
			});  
		});
	};
	rangeCS();
	//logo_show
	function logo_show()
	{
		var rw_cs_logo_show=jQuery('#rw_cs_logo_show').val();
		if(rw_cs_logo_show=="show")
		{
			jQuery('.rw_logo_show_div').show();
		}
		else
		{
			jQuery('.rw_logo_show_div').hide();
		}
	}
	logo_show();
	//logo_type_show
	function logo_type_show()
	{
		var rw_cs_logo_type=jQuery('#rw_cs_logo_type').val();
		if(rw_cs_logo_type=="Text")
		{
			jQuery('.rw_logo_type_show_div_text').show();
			jQuery('.rw_logo_type_show_div_image').hide();
		}
		else if(rw_cs_logo_type=="Image")
		{
			jQuery('.rw_logo_type_show_div_text').hide();
			jQuery('.rw_logo_type_show_div_image').show();
		}
	}
	logo_type_show();
	//Logo Image Size type Show
	function ST_Show()
	{
		var rw_cs_logo_Image_ST=jQuery('#rw_cs_logo_Image_ST').val();
		if(rw_cs_logo_Image_ST=='Custom')
		{
			jQuery('.Rich_CS_Logo_Tmage_SShow').show();
		}
		else
		{
			jQuery('.Rich_CS_Logo_Tmage_SShow').hide();
		}
	}
	ST_Show();
	//logo Link Show
	function Link_Show()
	{
		var rw_cs_logo_Link_Show=jQuery('#rw_cs_logo_Link_Show').val();
		if(rw_cs_logo_Link_Show=='show')
		{
			jQuery('.rw_logo_link_show').show();
		}
		else
		{
			jQuery('.rw_logo_link_show').hide();
		}
	}
	Link_Show();
	//Heading Show
	function Heading_Show()
	{
		var rw_cs_heading_show=jQuery('#rw_cs_heading_show').val();
		if(rw_cs_heading_show=='show')
		{
			jQuery('.rw_heading_show_div').show();
		}
		else
		{
			jQuery('.rw_heading_show_div').hide();
		}
	}
	Heading_Show();
	//Description Show
	function Description_Show()
	{
		var rw_cs_desc_show=jQuery('#rw_cs_desc_show').val();
		if(rw_cs_desc_show=='show')
		{
			jQuery('.rw_desc_show_div').show();
		}
		else
		{
			jQuery('.rw_desc_show_div').hide();
		}
	}
	Description_Show();
	//Description Type Show/Hide
	function desc_type_show()
	{
		var rw_cs_desc_Type=jQuery('#rw_cs_desc_Type').val();
		if(rw_cs_desc_Type=="Text Animation")
		{
			jQuery('.rw_desc_type_show_div_text2').show();
			jQuery('.rw_desc_type_show_div_text').hide();
		}
		else if(rw_cs_desc_Type=="Description")
		{
			jQuery('.rw_desc_type_show_div_text2').hide();
			jQuery('.rw_desc_type_show_div_text').show();
		}
	}
	desc_type_show();
	//Footer Show
	function Footer_Show()
	{
		var rw_cs_footer_show=jQuery('#rw_cs_footer_show').val();
		if(rw_cs_footer_show=='show')
		{
			jQuery('.rw_footer_show_div').show();
		}
		else
		{
			jQuery('.rw_footer_show_div').hide();
		}
	}
	Footer_Show();
	//Countdown Show
	function Countdown_Show()
	{
		var rw_cs_cout_show=jQuery('#rw_cs_cout_show').val();
		if(rw_cs_cout_show=='show')
		{
			jQuery('.rw_count_show_div').show();
		}
		else
		{
			jQuery('.rw_count_show_div').hide();
		}
	}
	Countdown_Show();
	//Count Type Show
	function count_type_show()
	{
		var rw_cs_count_type=jQuery('#rw_cs_count_type').val();
		if(rw_cs_count_type=="Type 1")
		{
			jQuery('.rw_count1_type_show_div').show();
			jQuery('.rw_count2_type_show_div').hide();
		}
		else if(rw_cs_count_type=="Type 2")
		{
			jQuery('.rw_count1_type_show_div').hide();
			jQuery('.rw_count2_type_show_div').show();
		}
	}
	count_type_show();
	//Background type Show
	function bg_type_show()
	{
		jQuery('.rw_BgC_show_div').hide();
		jQuery('.rw_BgI_show_div').hide();
		jQuery('.rw_BgISlSh_show_div').hide();
		jQuery('.rw_BgV_show_div').hide();
		jQuery('.rw_BgVSlSh_show_div').hide();
		var rw_cs_bg_type=jQuery('#rw_cs_bg_type').val();
		if(rw_cs_bg_type=="Color")
		{
			jQuery(".rw_rad1").attr("checked","true");
			jQuery('.rw_BgC_show_div').show();
		}
		else if(rw_cs_bg_type=="Image")
		{
			jQuery(".rw_rad2").attr("checked","true");
			jQuery('.rw_BgI_show_div').show();
		}
		else if(rw_cs_bg_type=="Image Slideshow")
		{
			jQuery(".rw_rad3").attr("checked","true");
			jQuery('.rw_BgISlSh_show_div').show();
		}
		else if(rw_cs_bg_type=="Video")
		{
			jQuery(".rw_rad4").attr("checked","true");
			jQuery('.rw_BgV_show_div').show();
		}
		else if(rw_cs_bg_type=="Video Slieshow")
		{
			jQuery(".rw_rad5").attr("checked","true");
			jQuery('.rw_BgVSlSh_show_div').show();
		}
	}
	bg_type_show();
	//Bacground Video Controls Show
	function CS_VC_Clicked()
	{
		var rw_cs_bg_image_video_PlC=jQuery('#rw_cs_bg_image_video_PlC').val();
		if(rw_cs_bg_image_video_PlC=='true')
		{
			jQuery('.rw_show_controls_video_div').show();
		}
		else
		{
			jQuery('.rw_show_controls_video_div').hide();
		}
	}
	CS_VC_Clicked();
	//Background Video Slideshow Controls Show
	function CS_VSlC_Clicked()
	{
		var rw_cs_bg_image_vsl_PlC=jQuery('#rw_cs_bg_image_vsl_PlC').val();
		if(rw_cs_bg_image_vsl_PlC=='true')
		{
			jQuery('.rw_show_controls_vsl_div').show();
		}
		else
		{
			jQuery('.rw_show_controls_vsl_div').hide();
		}
	}
	CS_VSlC_Clicked();
	//Background Image Bar Show
	function CS_Bar_Clicked()
	{
		var rw_cs_bg_image_slideshow_bar=jQuery('#rw_cs_bg_image_slideshow_bar').val();
		if(rw_cs_bg_image_slideshow_bar=='Show')
		{
			jQuery('.RW_CS_Show_Bar_Div').show();
		}
		else
		{
			jQuery('.RW_CS_Show_Bar_Div').hide();
		}
	}
	CS_Bar_Clicked();
	//More Information Show
	function CS_Info_Clicked()
	{
		var rw_cs_info_text_Show=jQuery('#rw_cs_info_text_Show').val();
		if(rw_cs_info_text_Show=='Show')
		{
			jQuery('.rw_cs_info_show_div').show();
		}
		else
		{
			jQuery('.rw_cs_info_show_div').hide();
		}
	}
	CS_Info_Clicked();
	//Social Show
	function CS_Social_Clicked()
	{
		var rw_cs_social_Show=jQuery('#rw_cs_social_Show').val();
		if(rw_cs_social_Show=='Show')
		{
			jQuery('.rw_social_show_div').show();
		}
		else
		{
			jQuery('.rw_social_show_div').hide();
		}
	}
	CS_Social_Clicked();
	//Social Animation Transition
	jQuery("#accordion1").hover(function(){ jQuery(".fadeout").removeClass("time");}, function(){ jQuery(".fadeout").addClass("time"); });
	//Social Icon Checked Show
	if(jQuery(".fadeout").hasClass("divfacebook"))
	{
		jQuery(".facebook").attr("checked","checked");
		jQuery(".facebook").val("1");
	}
	if(jQuery(".fadeout").hasClass("divtwitter"))
	{
		jQuery(".twitter").attr("checked","checked");
		jQuery(".twitter").val("1");
	}
	if(jQuery(".fadeout").hasClass("divlinkedin"))
	{
		jQuery(".linkedin").attr("checked","checked");
		jQuery(".linkedin").val("1");
	}
	if(jQuery(".fadeout").hasClass("divgoogle-plus"))
	{
		jQuery(".google-plus").attr("checked","checked");
		jQuery(".google-plus").val("1");
	}
	if(jQuery(".fadeout").hasClass("divyoutube-play"))
	{
		jQuery(".youtube-play").attr("checked","checked");
		jQuery(".youtube-play").val("1");
	}
	if(jQuery(".fadeout").hasClass("divpinterest-p"))
	{
		jQuery(".pinterest-p").attr("checked","checked");
		jQuery(".pinterest-p").val("1");
	}
	if(jQuery(".fadeout").hasClass("divtumblr"))
	{
		jQuery(".tumblr").attr("checked","checked");
		jQuery(".tumblr").val("1");
	}
	if(jQuery(".fadeout").hasClass("divvimeo"))
	{
		jQuery(".vimeo").attr("checked","checked");
		jQuery(".vimeo").val("1");
	}
	if(jQuery(".fadeout").hasClass("divwordpress"))
	{
		jQuery(".wordpress").attr("checked","checked");
		jQuery(".wordpress").val("1");
	}
	if(jQuery(".fadeout").hasClass("divdeviantart"))
	{
		jQuery(".deviantart").attr("checked","checked");
		jQuery(".deviantart").val("1");
	}
	if(jQuery(".fadeout").hasClass("divskype"))
	{
		jQuery(".skype").attr("checked","checked");
		jQuery(".skype").val("1");
	}
	if(jQuery(".fadeout").hasClass("divfoursquare"))
	{
		jQuery(".foursquare").attr("checked","checked");
		jQuery(".foursquare").val("1");
	}
	if(jQuery(".fadeout").hasClass("divyahoo"))
	{
		jQuery(".yahoo").attr("checked","checked");
		jQuery(".yahoo").val("1");
	}
	if(jQuery(".fadeout").hasClass("divinstagram"))
	{
		jQuery(".instagram").attr("checked","checked");
		jQuery(".instagram").val("1");
	}
	if(jQuery(".fadeout").hasClass("divodnoklassniki"))
	{
		jQuery(".odnoklassniki").attr("checked","checked");
		jQuery(".odnoklassniki").val("1");
	}
	//tinymce
	tinymce.init({
		selector: '#rw_cs_desc_HTML_Text,#rw_cs_footer_HTML_Text,#rw_cs_info_text,#Rich_Web_CS_Forms_Fields_Editing_Custom_ID, #Rich_Web_CS_Forms_Fields_Editing_Privacy_ID, #Rich_Web_CS_Forms_O_21, #Rich_Web_CS_Forms_O_22, #Rich_Web_CS_Forms_Message_Message',
		height: 250,
		theme: 'modern',
		menubar: false,
		statusbar: false,
		plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
		],
		toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		toolbar2: 'print preview media | forecolor backcolor | codesample | fontselect | fontsizeselect | code | table',
		image_advtab: true,
		fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
		font_formats: 'Abadi MT Condensed Light = abadi mt condensed light; Aharoni = aharoni; Aldhabi = aldhabi; Andalus = andalus; Angsana New = angsana new; AngsanaUPC = angsanaupc; Aparajita = aparajita; Arabic Typesetting = arabic typesetting; Arial = arial; Arial Black = arial black; Batang = batang; BatangChe = batangche; Browallia New = browallia new; BrowalliaUPC = browalliaupc; Calibri = calibri; Calibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Candara = candara; Century Gothic = century gothic; Comic Sans MS = comic sans ms; Consolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; Corbel = corbel; Cordia New = cordia new; CordiaUPC = cordiaupc; Courier New = courier new; DaunPenh = daunpenh; David = david; DFKai-SB = dfkai-sb; DilleniaUPC = dilleniaupc; DokChampa = dokchampa; Dotum = dotum; DotumChe = dotumche; Ebrima = ebrima; Estrangelo Edessa = estrangelo edessa; EucrosiaUPC = eucrosiaupc; Euphemia = euphemia; FangSong = fangsong; Franklin Gothic Medium = franklin gothic medium; FrankRuehl = frankruehl; FreesiaUPC = freesiaupc; Gabriola = gabriola; Gadugi = gadugi; Gautami = gautami; Georgia = georgia; Gisha = gisha; Gulim  = gulim; GulimChe = gulimche; Gungsuh = gungsuh; GungsuhChe = gungsuhche; Impact = impact; IrisUPC = irisupc; Iskoola Pota = iskoola pota; JasmineUPC = jasmineupc; KaiTi = kaiti; Kalinga = kalinga; Kartika = kartika; Khmer UI = khmer ui; KodchiangUPC = kodchiangupc; Kokila = kokila; Lao UI = lao ui; Latha = latha; Leelawadee = leelawadee; Levenim MT = levenim mt; LilyUPC = lilyupc; Lucida Console = lucida console; Lucida Handwriting Italic = lucida handwriting italic; Lucida Sans Unicode = lucida sans unicode; Malgun Gothic = malgun gothic; Mangal = mangal; Manny ITC = manny itc; Marlett = marlett; Meiryo = meiryo; Meiryo UI = meiryo ui; Microsoft Himalaya = microsoft himalaya; Microsoft JhengHei = microsoft jhenghei; Microsoft JhengHei UI = microsoft jhenghei ui; Microsoft New Tai Lue = microsoft new tai lue; Microsoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; Microsoft Tai Le = microsoft tai le; Microsoft Uighur = microsoft uighur; Microsoft YaHei = microsoft yahei; Microsoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; MingLiU_HKSCS = mingliu_hkscs; MingLiU_HKSCS-ExtB = mingliu_hkscs-extb; Miriam = miriam; Mongolian Baiti = mongolian baiti; MoolBoran = moolboran; MS UI Gothic = ms ui gothic; MV Boli = mv boli; Myanmar Text = myanmar text; Narkisim = narkisim; Nirmala UI = nirmala ui; News Gothic MT = news gothic mt; NSimSun = nsimsun; Nyala = nyala; Palatino Linotype = palatino linotype; Plantagenet Cherokee = plantagenet cherokee; Raavi = raavi; Rod = rod; Sakkal Majalla = sakkal majalla; Segoe Print = segoe print; Segoe Script = segoe script; Segoe UI Symbol = segoe ui symbol; Shonar Bangla = shonar bangla; Shruti = shruti; SimHei = simhei; SimKai = simkai; Simplified Arabic = simplified arabic; SimSun = simsun; SimSun-ExtB = simsun-extb; Sylfaen = sylfaen; Tahoma = tahoma; Times New Roman = times new roman; Traditional Arabic = traditional arabic; Trebuchet MS = trebuchet ms; Tunga = tunga; Utsaah = utsaah; Vani = vani; Vijaya = vijaya'
	});
	//Forms
	Rich_Web_CS_Forms_FC_LabEdit_Clicked();
	Rich_Web_CS_Forms_RangeSlider();
	Rich_Web_CS_Forms_Message_Img();
	Rich_Web_CS_Forms_Message_Add_Em();
	Rich_Web_CS_Forms_FC_EditOption_Clicked();
	Rich_Web_CS_Forms_FC_EditOption_Del_Clicked();
	Rich_Web_CS_Forms_FC_EditChecks_Clicked();
	Rich_Web_CS_Forms_FC_EditChecks_Del_Clicked();
	Rich_Web_CS_Forms_FC_EditRadios_Clicked();
	Rich_Web_CS_Forms_FC_EditRadios_Del_Clicked();
	Rich_Web_CS_Forms_FC_EditRadios_Check_Clicked();
	jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val(jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val().substr(0,jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val().length-1));
});
//Logo Show in Clicked
function Rich_CS_Logo_Clicked()
{
	var rw_cs_logo_show=jQuery('#rw_cs_logo_show').val();
	if(rw_cs_logo_show=='show')
	{
		jQuery('.rw_logo_show_div').slideDown(800);
	}
	else
	{
		jQuery('.rw_logo_show_div').slideUp(800);
	}
}
//Logo Type Show in Clicked
function Rich_CS_Logo_Type_Clicked()
{
	var rw_cs_logo_type=jQuery('#rw_cs_logo_type').val();
	if(rw_cs_logo_type=="Text")
	{
		jQuery('.rw_logo_type_show_div_text').slideDown(500);
		jQuery('.rw_logo_type_show_div_image').slideUp(500);
	}
	else if(rw_cs_logo_type=="Image")
	{
		jQuery('.rw_logo_type_show_div_text').slideUp(500);
		jQuery('.rw_logo_type_show_div_image').slideDown(500);
	}
}
//Logo Image Size Tipe Show in Clicked
function Rich_CS_Logo_Tmage_ST_Clicked()
{
	var rw_cs_logo_Image_ST=jQuery('#rw_cs_logo_Image_ST').val();
	if(rw_cs_logo_Image_ST=='Custom')
	{
		jQuery('.Rich_CS_Logo_Tmage_SShow').slideDown(500);
	}
	else
	{
		jQuery('.Rich_CS_Logo_Tmage_SShow').slideUp(500);
	}
}
//Logo Link Show in Clicked
function Rich_CS_Logo_Link_Clicked()
{
	var rw_cs_logo_Link_Show=jQuery('#rw_cs_logo_Link_Show').val();
	if(rw_cs_logo_Link_Show=='show')
	{
		jQuery('.rw_logo_link_show').slideDown(500);
	}
	else
	{
		jQuery('.rw_logo_link_show').slideUp(500);
	}
}
//Heading Show in Clicked
function Rich_CS_Heading_Clicked()
{
	var rw_cs_heading_show=jQuery('#rw_cs_heading_show').val();
	if(rw_cs_heading_show=='show')
	{
		jQuery('.rw_heading_show_div').slideDown(800);
	}
	else
	{
		jQuery('.rw_heading_show_div').slideUp(800);
	}
}
//Description Show in Clicked
function Rich_CS_Desc_Clicked()
{
	var rw_cs_desc_show=jQuery('#rw_cs_desc_show').val();
	if(rw_cs_desc_show=='show')
	{
		jQuery('.rw_desc_show_div').slideDown(800);
	}
	else
	{
		jQuery('.rw_desc_show_div').slideUp(800);
	}
}
//Description Type Show in Clicked
function Rich_CS_Desc_Type_Clicked()
{
	var rw_cs_desc_Type=jQuery('#rw_cs_desc_Type').val();
	if(rw_cs_desc_Type=="Text Animation")
	{
		jQuery('.rw_desc_type_show_div_text2').slideDown(500);
		jQuery('.rw_desc_type_show_div_text').slideUp(500);
	}
	else if(rw_cs_desc_Type=="Description")
	{
		jQuery('.rw_desc_type_show_div_text2').slideUp(500);
		jQuery('.rw_desc_type_show_div_text').slideDown(500);
	}
}
//Footer Show in Clicked
function Rich_CS_Footer_Clicked()
{
	var rw_cs_footer_show=jQuery('#rw_cs_footer_show').val();
	if(rw_cs_footer_show=='show')
	{
		jQuery('.rw_footer_show_div').slideDown(800);
	}
	else
	{
		jQuery('.rw_footer_show_div').slideUp(800);
	}
}
//Countdown Show in Clicked
function Rich_CS_Count_Clicked()
{
	var rw_cs_cout_show=jQuery('#rw_cs_cout_show').val();
	if(rw_cs_cout_show=='show')
	{
		jQuery('.rw_count_show_div').slideDown(800);
	}
	else
	{
		jQuery('.rw_count_show_div').slideUp(800);
	}
}
//Countdown Type Show in Clicked
function Rich_CS_Count_Type_Clicked()
{
	var rw_cs_count_type=jQuery('#rw_cs_count_type').val();
	if(rw_cs_count_type=="Type 1")
	{
		jQuery('.rw_count1_type_show_div').slideDown(500);
		jQuery('.rw_count2_type_show_div').slideUp(500);
	}
	else if(rw_cs_count_type=="Type 2")
	{
		jQuery('.rw_count1_type_show_div').slideUp(500);
		jQuery('.rw_count2_type_show_div').slideDown(500);
	}
}
//Background Show in Clicked
function Rich_CS_Bg_Clicked(Bg)
{
	jQuery('.rw_BgC_show_div').slideUp(500);
	jQuery('.rw_BgI_show_div').slideUp(500);
	jQuery('.rw_BgISlSh_show_div').slideUp(500);
	jQuery('.rw_BgV_show_div').slideUp(500);
	jQuery('.rw_BgVSlSh_show_div').slideUp(500);
	jQuery('#rw_cs_bg_type').val(Bg);
	if(Bg=="Color")
	{
		jQuery('.rw_BgC_show_div').slideDown(500);
	}
	else if(Bg=="Image")
	{
		jQuery('.rw_BgI_show_div').slideDown(500);
	}
	else if(Bg=="Image Slideshow")
	{
		jQuery('.rw_BgISlSh_show_div').slideDown(500);
	}
	else if(Bg=="Video")
	{
		jQuery('.rw_BgV_show_div').slideDown(500);
	}
	else if(Bg=="Video Slieshow")
	{
		jQuery('.rw_BgVSlSh_show_div').slideDown(500);
	}
}
//Video Controls Show in Clicked
function Rich_CS_VC_Clicked()
{
	var rw_cs_bg_image_video_PlC=jQuery('#rw_cs_bg_image_video_PlC').val();
	if(rw_cs_bg_image_video_PlC=='true')
	{
		jQuery('.rw_show_controls_video_div').slideDown(500);
	}
	else
	{
		jQuery('.rw_show_controls_video_div').slideUp(500);
	}
}
//Video Slideshow Controls Show in Clicked
function Rich_CS_VSlC_Clicked()
{
	var rw_cs_bg_image_vsl_PlC=jQuery('#rw_cs_bg_image_vsl_PlC').val();
	if(rw_cs_bg_image_vsl_PlC=='true')
	{
		jQuery('.rw_show_controls_vsl_div').slideDown(500);
	}
	else
	{
		jQuery('.rw_show_controls_vsl_div').slideUp(500);
	}
}
//Image Slideshow Bar Show in Clicked
function RW_CS_Bar_Clicked()
{
	var rw_cs_bg_image_slideshow_bar=jQuery('#rw_cs_bg_image_slideshow_bar').val();
	if(rw_cs_bg_image_slideshow_bar=='Show')
	{
		jQuery('.RW_CS_Show_Bar_Div').slideDown(500);
	}
	else
	{
		jQuery('.RW_CS_Show_Bar_Div').slideUp(500);
	}
}
//More Information Show in Clicked
function Rich_CS_Info_Clicked()
{
	var rw_cs_info_text_Show=jQuery('#rw_cs_info_text_Show').val();
	if(rw_cs_info_text_Show=='Show')
	{
		jQuery('.rw_cs_info_show_div').slideDown(500);
	}
	else
	{
		jQuery('.rw_cs_info_show_div').slideUp(500);
	}
}
//Social Show in Clicked
function Rich_CS_Social_Clicked()
{
	var rw_cs_social_Show=jQuery('#rw_cs_social_Show').val();
	if(rw_cs_social_Show=='Show')
	{
		jQuery('.rw_social_show_div').slideDown(500);
	}
	else
	{
		jQuery('.rw_social_show_div').slideUp(500);
	}
}
//Seo Ajax
function RW_CS_Seo()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_seo_title = jQuery("#rw_cs_seo_title").val();
	var rw_cs_seo_desc = jQuery("#rw_cs_seo_desc").val();
	var rw_cs_seo_keywords = jQuery("#rw_cs_seo_keywords").val();
	var rw_cs_seo_robot_follow = jQuery("#rw_cs_seo_robot_follow").val();
	var rw_cs_seo_canonical_url = jQuery("#rw_cs_seo_canonical_url").val();
	var rw_cs_seo_google_analitics = jQuery("#rw_cs_seo_google_analitics").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_seo_rw':'action_seo_rw',
			'rw_cs_seo_title':rw_cs_seo_title,
			'rw_cs_seo_desc':rw_cs_seo_desc,
			'rw_cs_seo_keywords':rw_cs_seo_keywords,
			'rw_cs_seo_robot_follow':rw_cs_seo_robot_follow,
			'rw_cs_seo_canonical_url':rw_cs_seo_canonical_url,
			'rw_cs_seo_google_analitics':rw_cs_seo_google_analitics,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Seo Reset
function RW_CS_Res_Seo()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_seo':'action_pl_seo',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_seo_title").val("");
				jQuery("#rw_cs_seo_desc").val("");
				jQuery("#rw_cs_seo_keywords").val("");
				jQuery("#rw_cs_seo_robot_follow").val("follow");
				jQuery("#rw_cs_seo_canonical_url").val("");
				jQuery("#rw_cs_seo_google_analitics").val("");
			},2000)
		}
	});
}
//Plugin Mode Ajax
function RW_CS_Plugine_Mode()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_plugin_mode = jQuery("#rw_cs_plugin_mode").val();
	var rw_cs_theme_type = jQuery("#rw_cs_theme_type").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_seo':'rw_csp_mode',
			'rw_cs_plugin_mode':rw_cs_plugin_mode,
			'rw_cs_theme_type':rw_cs_theme_type,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Plugin Mode Reset
function RW_CS_Res_Plugine_Mode()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_pl_mode':'action_pl_mode_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_plugin_mode").val("2");
				jQuery("#rw_cs_theme_type").val("1");
			},2000)
		}
	});
}
//Fav Icon Ajax
function RW_CS_FIc()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_fic_show = jQuery("#rw_cs_fic_show").val();
	var rw_cs_fic_img = jQuery("#rich_web_cs_imgSrc_2").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_fic':'rw_csp_fic',
			'rw_cs_fic_show':rw_cs_fic_show,
			'rw_cs_fic_img':rw_cs_fic_img,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Fav Icon Reset
function RW_CS_Res_FIc()
{
	var img=jQuery(".RW_Upload_FIc").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_fic':'action_fic_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_fic_show").val("hide");
				jQuery("#rich_web_cs_imgSrc_2").val(img);
			},2000)
		}
	});
}
//Loader Ajax
function RW_CS_Loader()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_loader_BgC = jQuery("#rw_cs_loader_BgC").val();
	var rw_cs_loader1_C = jQuery("#rw_cs_loader1_C").val();
	var rw_cs_loader2_C = jQuery("#rw_cs_loader2_C").val();
	var rw_cs_loader3_C = jQuery("#rw_cs_loader3_C").val();
	var rw_cs_loader_Text_Show = jQuery("#rw_cs_loader_Text_Show").val();
	var rw_cs_loader_Text = jQuery("#rw_cs_loader_Text").val();
	var rw_cs_loader_Text_FS = jQuery("#rw_cs_loader_Text_FS").val();
	var rw_cs_loader_Text_FF = jQuery("#rw_cs_loader_Text_FF").val();
	var rw_cs_loader_Text_C = jQuery("#rw_cs_loader_Text_C").val();
	var rw_cs_loader_Custom_CSS = jQuery("#rw_cs_loader_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_loader':'rw_csp_loader',
			'rw_cs_loader_BgC':rw_cs_loader_BgC,
			'rw_cs_loader1_C':rw_cs_loader1_C,
			'rw_cs_loader2_C':rw_cs_loader2_C,
			'rw_cs_loader3_C':rw_cs_loader3_C,
			'rw_cs_loader_Text_Show':rw_cs_loader_Text_Show,
			'rw_cs_loader_Text':rw_cs_loader_Text,
			'rw_cs_loader_Text_FS':rw_cs_loader_Text_FS,
			'rw_cs_loader_Text_FF':rw_cs_loader_Text_FF,
			'rw_cs_loader_Text_C':rw_cs_loader_Text_C,
			'rw_cs_loader_Custom_CSS':rw_cs_loader_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Loader Reset
function RW_CS_Res_Loader()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_loader':'action_loader_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_loader_BgC").val("#282931");
				jQuery("#rw_cs_loader1_C").val("#47bde5");
				jQuery("#rw_cs_loader2_C").val("#ffffff");
				jQuery("#rw_cs_loader3_C").val("#30a9d1");
				jQuery("#rw_cs_loader_Text_Show").val("show");
				jQuery("#rw_cs_loader_Text").val("Loading. Please Wait...");
				jQuery("#rw_cs_loader_Text_FS").val("13");
				jQuery("#rw_cs_loader_Text_FS_Span").text("13");
				jQuery("#rw_cs_loader_Text_FF").val("Abadi MT Condensed Light");
				jQuery("#rw_cs_loader_Text_C").val("#ffffff");
				jQuery("#rw_cs_loader_Custom_CSS").val("");
			},2000)
		}
	});
}
//Logo Ajax
function RW_CS_Logo()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_logo_show = jQuery("#rw_cs_logo_show").val();
	var rw_cs_logo_type = jQuery("#rw_cs_logo_type").val();
	var rw_cs_logo_text = jQuery("#rw_cs_logo_text").val();
	var rw_cs_logo_text_FS = jQuery("#rw_cs_logo_text_FS").val();
	var rw_cs_logo_text_FF = jQuery("#rw_cs_logo_text_FF").val();
	var rw_cs_logo_text_C = jQuery("#rw_cs_logo_text_C").val();
	var rw_cs_logo_text_HTML = jQuery("#rw_cs_logo_text_HTML").val();
	var rw_cs_logo_Image = jQuery("#rich_web_cs_logo_imgSrc_2").val();
	var rw_cs_logo_Image_ST = jQuery("#rw_cs_logo_Image_ST").val();
	var rw_cs_logo_Image_MW = jQuery("#rw_cs_logo_Image_MW").val();
	var rw_cs_logo_Image_MH = jQuery("#rw_cs_logo_Image_MH").val();
	var rw_cs_logo_Link_Show = jQuery("#rw_cs_logo_Link_Show").val();
	var rw_cs_logo_Link_Url = jQuery("#rw_cs_logo_Link_Url").val();
	var rw_cs_logo_Link_Target = jQuery("#rw_cs_logo_Link_Target").val();
	var rw_cs_logo_MT = jQuery("#rw_cs_logo_MT").val();
	var rw_cs_logo_MB = jQuery("#rw_cs_logo_MB").val();
	var rw_cs_logo_Link_Custom_CSS = jQuery("#rw_cs_logo_Link_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_logo':'rw_csp_logo',
			'rw_cs_logo_show':rw_cs_logo_show,
			'rw_cs_logo_type':rw_cs_logo_type,
			'rw_cs_logo_text':rw_cs_logo_text,
			'rw_cs_logo_text_FS':rw_cs_logo_text_FS,
			'rw_cs_logo_text_FF':rw_cs_logo_text_FF,
			'rw_cs_logo_text_C':rw_cs_logo_text_C,
			'rw_cs_logo_text_HTML':rw_cs_logo_text_HTML,
			'rw_cs_logo_Image':rw_cs_logo_Image,
			'rw_cs_logo_Image_ST':rw_cs_logo_Image_ST,
			'rw_cs_logo_Image_MW':rw_cs_logo_Image_MW,
			'rw_cs_logo_Image_MH':rw_cs_logo_Image_MH,
			'rw_cs_logo_Link_Show':rw_cs_logo_Link_Show,
			'rw_cs_logo_Link_Url':rw_cs_logo_Link_Url,
			'rw_cs_logo_Link_Target':rw_cs_logo_Link_Target,
			'rw_cs_logo_MT':rw_cs_logo_MT,
			'rw_cs_logo_MB':rw_cs_logo_MB,
			'rw_cs_logo_Link_Custom_CSS':rw_cs_logo_Link_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Logo Reset
function RW_CS_Res_Logo()
{
	var img=jQuery(".RW_Upload_Logo").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_logo':'action_logo_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_logo_show").val("show");
				jQuery("#rw_cs_logo_type").val("Image");
				jQuery("#rw_cs_logo_text").val("Rich Web");
				jQuery("#rw_cs_logo_text_FS").val("65");
				jQuery("#rw_cs_logo_text_FS_Span").text("65");
				jQuery("#rw_cs_logo_text_FF").val("Abadi MT Condensed Light");
				jQuery("#rw_cs_logo_text_C").val("#ffffff");
				jQuery("#rw_cs_logo_text_HTML").val("h1");
				jQuery("#rich_web_cs_logo_imgSrc_2").text(img);
				jQuery("#rw_cs_logo_Image_ST").val("Custom");
				jQuery("#rw_cs_logo_Image_MW").val("300");
				jQuery("#rw_cs_logo_Image_MW_Span").text("300");
				jQuery("#rw_cs_logo_Image_MH").val("150");
				jQuery("#rw_cs_logo_Image_MH_Span").text("150");
				jQuery("#rw_cs_logo_Link_Show").val("hide");
				jQuery("#rw_cs_logo_Link_Url").val("#");
				jQuery("#rw_cs_logo_Link_Target").val("_blank");
				jQuery("#rw_cs_logo_MT").val("22");
				jQuery("#rw_cs_logo_MT_Span").text("22");
				jQuery("#rw_cs_logo_MB").val("4");
				jQuery("#rw_cs_logo_MB_Span").text("4");
				jQuery("#rw_cs_logo_Link_Custom_CSS").val("");
				Rich_CS_Logo_Clicked();
				Rich_CS_Logo_Type_Clicked();
				Rich_CS_Logo_Tmage_ST_Clicked();
				Rich_CS_Logo_Link_Clicked();
			},2000)
		}
	});
}
//Heading Ajax
function RW_CS_Heading()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_heading_show = jQuery("#rw_cs_heading_show").val();
	var rw_cs_heading_T = jQuery("#rw_cs_heading_T").val();
	var rw_cs_heading_FS = jQuery("#rw_cs_heading_FS").val();
	var rw_cs_heading_FF = jQuery("#rw_cs_heading_FF").val();
	var rw_cs_heading_C = jQuery("#rw_cs_heading_C").val();
	var rw_cs_heading_HTML = jQuery("#rw_cs_heading_HTML").val();
	var rw_cs_heading_TA = jQuery("#rw_cs_heading_TA").val();
	var rw_cs_heading_MT = jQuery("#rw_cs_heading_MT").val();
	var rw_cs_heading_MB = jQuery("#rw_cs_heading_MB").val();
	var rw_cs_heading_Anim = jQuery("#rw_cs_heading_Anim").val();
	var rw_cs_heading_Custom_CSS = jQuery("#rw_cs_heading_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_heading':'rw_csp_heading',
			'rw_cs_heading_show':rw_cs_heading_show,
			'rw_cs_heading_FS':rw_cs_heading_FS,
			'rw_cs_heading_T':rw_cs_heading_T,
			'rw_cs_heading_FF':rw_cs_heading_FF,
			'rw_cs_heading_C':rw_cs_heading_C,
			'rw_cs_heading_HTML':rw_cs_heading_HTML,
			'rw_cs_heading_TA':rw_cs_heading_TA,
			'rw_cs_heading_MT':rw_cs_heading_MT,
			'rw_cs_heading_MB':rw_cs_heading_MB,
			'rw_cs_heading_Anim':rw_cs_heading_Anim,
			'rw_cs_heading_Custom_CSS':rw_cs_heading_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Heading Reset
function RW_CS_Res_Heading()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_heading':'action_heading_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_heading_show").val("show");
				jQuery("#rw_cs_heading_T").val("Coming Soon");
				jQuery("#rw_cs_heading_FS").val("35");
				jQuery("#rw_cs_heading_FS_Span").text("35");
				jQuery("#rw_cs_heading_FF").val("Abadi MT Condensed Light");
				jQuery("#rw_cs_heading_C").val("#ffffff");
				jQuery("#rw_cs_heading_HTML").val("h1");
				jQuery("#rw_cs_heading_TA").val("center");
				jQuery("#rw_cs_heading_MT").val("0");
				jQuery("#rw_cs_heading_MT_Span").text("0");
				jQuery("#rw_cs_heading_MB").val("0");
				jQuery("#rw_cs_heading_MB").text("0");
				jQuery("#rw_cs_heading_Anim").val("No");
				jQuery("#rw_cs_heading_Custom_CSS").val("");
				Rich_CS_Heading_Clicked();
			},2000)
		}
	});
}
//Description Ajax
function RW_CS_Description(){
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var text=tinymce.get('rw_cs_desc_HTML_Text').getContent();
	jQuery("#rw_cs_desc_HTML_Text").text(text);
	var rw_cs_desc_show = jQuery("#rw_cs_desc_show").val();
	var rw_cs_desc_Type = jQuery("#rw_cs_desc_Type").val();
	var rw_cs_desc_HTML_Text = jQuery("#rw_cs_desc_HTML_Text").text();
	var rw_cs_desc_Text_Anim = jQuery("#rw_cs_desc_Text_Anim").val();
	var rw_cs_desc_Text_FS = jQuery("#rw_cs_desc_Text_FS").val();
	var rw_cs_desc_Text_FF = jQuery("#rw_cs_desc_Text_FF").val();
	var rw_cs_desc_Text_C = jQuery("#rw_cs_desc_Text_C").val();
	var rw_cs_desc_Text_TA = jQuery("#rw_cs_desc_Text_TA").val();
	var rw_cs_desc_Anim = jQuery("#rw_cs_desc_Anim").val();
	var rw_cs_desc_MT = jQuery("#rw_cs_desc_MT").val();
	var rw_cs_desc_MB = jQuery("#rw_cs_desc_MB").val();
	var rw_cs_desc_Custom_CSS = jQuery("#rw_cs_desc_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_desc':'rw_csp_desc',
			'rw_cs_desc_show':rw_cs_desc_show,
			'rw_cs_desc_Type':rw_cs_desc_Type,
			'rw_cs_desc_HTML_Text':rw_cs_desc_HTML_Text,
			'rw_cs_desc_Text_Anim':rw_cs_desc_Text_Anim,
			'rw_cs_desc_Text_FS':rw_cs_desc_Text_FS,
			'rw_cs_desc_Text_FF':rw_cs_desc_Text_FF,
			'rw_cs_desc_Text_C':rw_cs_desc_Text_C,
			'rw_cs_desc_Text_TA':rw_cs_desc_Text_TA,
			'rw_cs_desc_Anim':rw_cs_desc_Anim,
			'rw_cs_desc_MT':rw_cs_desc_MT,
			'rw_cs_desc_MB':rw_cs_desc_MB,
			'rw_cs_desc_Custom_CSS':rw_cs_desc_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Description Reset
function RW_CS_Res_Description()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_desc':'action_desc_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				var text=tinyMCE.activeEditor.setContent("<p style='text-align: justify;'><span style='color: #004e69; font-size: 10pt; font-family: arial, helvetica, sans-serif;'><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>");
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_desc_show").val("show");
				jQuery("#rw_cs_desc_Type").val("Description");
				jQuery("#rw_cs_desc_HTML_Text").val(text);
				jQuery("#rw_cs_desc_Text_Anim").val("");
				jQuery("#rw_cs_desc_Text_FS").val("28");
				jQuery("#rw_cs_desc_Text_FS_Span").text("28");
				jQuery("#rw_cs_desc_Text_FF").val("Abadi MT Condensed Light");
				jQuery("#rw_cs_desc_Text_C").val("#ffffff");
				jQuery("#rw_cs_desc_Text_TA").val("center");
				jQuery("#rw_cs_desc_Anim").val("hide");
				jQuery("#rw_cs_desc_MT").val("0");
				jQuery("#rw_cs_desc_MT_Span").text("0");
				jQuery("#rw_cs_desc_MB").val("0");
				jQuery("#rw_cs_desc_MB_Span").text("0");
				jQuery("#rw_cs_desc_Custom_CSS").val("");
				Rich_CS_Desc_Clicked();
				Rich_CS_Desc_Type_Clicked()
			},2000)
		}
	});
}
//Footer Ajax
function RW_CS_Footer()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var text=tinymce.get('rw_cs_footer_HTML_Text').getContent();
	jQuery("#rw_cs_footer_HTML_Text").text(text);
	var rw_cs_footer_show = jQuery("#rw_cs_footer_show").val();
	var rw_cs_footer_HTML_Text = jQuery("#rw_cs_footer_HTML_Text").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_footer':'rw_csp_footer',
			'rw_cs_footer_show':rw_cs_footer_show,
			'rw_cs_footer_HTML_Text':rw_cs_footer_HTML_Text,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Footer Reset
function RW_CS_Res_Footer()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_footer':'action_footer_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				var text=tinyMCE.activeEditor.setContent("<p style='text-align: center;'>Copyright 2020</p>");
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				jQuery("#rw_cs_footer_HTML_Text").val(text);
				Rich_CS_Footer_Clicked();
			},2000)
		}
	});
}
//CountDown Ajax
function RW_CS_CountDown()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_cout_show = jQuery("#rw_cs_cout_show").val(); var rw_cs_count_datepicker = jQuery("#rw_cs_count_datepicker").val(); var rw_cs_count_type = jQuery("#rw_cs_count_type").val(); var rw_cs_count_type1_Count_FS = jQuery("#rw_cs_count_type1_Count_FS").val(); var rw_cs_count_type1_Count_FF = jQuery("#rw_cs_count_type1_Count_FF").val(); var rw_cs_count_type1_Count_TSh = jQuery("#rw_cs_count_type1_Count_TSh").val(); var rw_cs_count_type1_text_FS = jQuery("#rw_cs_count_type1_text_FS").val(); var rw_cs_count_type1_text_FF = jQuery("#rw_cs_count_type1_text_FF").val(); var rw_cs_count_type1_text_TSh = jQuery("#rw_cs_count_type1_text_TSh").val(); var rw_cs_count_type1_lines_C = jQuery("#rw_cs_count_type1_lines_C").val(); var rw_cs_count_type1_FW = jQuery("#rw_cs_count_type1_FW").val(); var rw_cs_count_type1_DC_C = jQuery("#rw_cs_count_type1_DC_C").val(); var rw_cs_count_type1_DT_C = jQuery("#rw_cs_count_type1_DT_C").val(); var rw_cs_count_type1_DT_BC = jQuery("#rw_cs_count_type1_DT_BC").val(); var rw_cs_count_type1_DT_T = jQuery("#rw_cs_count_type1_DT_T").val(); var rw_cs_count_type1_HC_C = jQuery("#rw_cs_count_type1_HC_C").val(); var rw_cs_count_type1_HT_C = jQuery("#rw_cs_count_type1_HT_C").val(); var rw_cs_count_type1_HT_BC = jQuery("#rw_cs_count_type1_HT_BC").val(); var rw_cs_count_type1_HT_T = jQuery("#rw_cs_count_type1_HT_T").val(); var rw_cs_count_type1_MC_C = jQuery("#rw_cs_count_type1_MC_C").val(); var rw_cs_count_type1_MT_C = jQuery("#rw_cs_count_type1_MT_C").val(); var rw_cs_count_type1_MT_BC = jQuery("#rw_cs_count_type1_MT_BC").val(); var rw_cs_count_type1_MT_T = jQuery("#rw_cs_count_type1_MT_T").val(); var rw_cs_count_type1_SC_C = jQuery("#rw_cs_count_type1_SC_C").val(); var rw_cs_count_type1_ST_C = jQuery("#rw_cs_count_type1_ST_C").val(); var rw_cs_count_type1_ST_BC = jQuery("#rw_cs_count_type1_ST_BC").val(); var rw_cs_count_type1_ST_T = jQuery("#rw_cs_count_type1_ST_T").val(); var rw_cs_count_type2_resp = jQuery("#rw_cs_count_type2_resp").val(); var rw_cs_count_type2_Count_FF = jQuery("#rw_cs_count_type2_Count_FF").val(); var rw_cs_count_type2_Count_TSh = jQuery("#rw_cs_count_type2_Count_TSh").val(); var rw_cs_count_type2_text_FF = jQuery("#rw_cs_count_type2_text_FF").val(); var rw_cs_count_type2_text_TSh = jQuery("#rw_cs_count_type2_text_TSh").val(); var rw_cs_count_type2_FW = jQuery("#rw_cs_count_type2_FW").val(); var rw_cs_count_type2_DC_C = jQuery("#rw_cs_count_type2_DC_C").val(); var rw_cs_count_type2_DT_C = jQuery("#rw_cs_count_type2_DT_C").val(); var rw_cs_count_type2_DT_T = jQuery("#rw_cs_count_type2_DT_T").val(); var rw_cs_count_type2_D_Tickness = jQuery("#rw_cs_count_type2_D_Tickness").val(); var rw_cs_count_type2_D_BgC = jQuery("#rw_cs_count_type2_D_BgC").val(); var rw_cs_count_type2_D_FgC = jQuery("#rw_cs_count_type2_D_FgC").val(); var rw_cs_count_type2_D_LC = jQuery("#rw_cs_count_type2_D_LC").val(); var rw_cs_count_type2_HC_C = jQuery("#rw_cs_count_type2_HC_C").val(); var rw_cs_count_type2_HT_C = jQuery("#rw_cs_count_type2_HT_C").val(); var rw_cs_count_type2_HT_T = jQuery("#rw_cs_count_type2_HT_T").val(); var rw_cs_count_type2_H_Tickness = jQuery("#rw_cs_count_type2_H_Tickness").val(); var rw_cs_count_type2_H_BgC = jQuery("#rw_cs_count_type2_H_BgC").val(); var rw_cs_count_type2_H_FgC = jQuery("#rw_cs_count_type2_H_FgC").val(); var rw_cs_count_type2_H_LC = jQuery("#rw_cs_count_type2_H_LC").val(); var rw_cs_count_type2_MC_C = jQuery("#rw_cs_count_type2_MC_C").val(); var rw_cs_count_type2_MT_C = jQuery("#rw_cs_count_type2_MT_C").val(); var rw_cs_count_type2_MT_T = jQuery("#rw_cs_count_type2_MT_T").val(); var rw_cs_count_type2_M_Tickness = jQuery("#rw_cs_count_type2_M_Tickness").val(); var rw_cs_count_type2_M_BgC = jQuery("#rw_cs_count_type2_M_BgC").val(); var rw_cs_count_type2_M_FgC = jQuery("#rw_cs_count_type2_M_FgC").val(); var rw_cs_count_type2_M_LC = jQuery("#rw_cs_count_type2_M_LC").val(); var rw_cs_count_type2_SC_C = jQuery("#rw_cs_count_type2_SC_C").val(); var rw_cs_count_type2_ST_C = jQuery("#rw_cs_count_type2_ST_C").val(); var rw_cs_count_type2_ST_T = jQuery("#rw_cs_count_type2_ST_T").val(); var rw_cs_count_type2_S_Tickness = jQuery("#rw_cs_count_type2_S_Tickness").val(); var rw_cs_count_type2_S_BgC = jQuery("#rw_cs_count_type2_S_BgC").val(); var rw_cs_count_type2_S_FgC = jQuery("#rw_cs_count_type2_S_FgC").val(); var rw_cs_count_type2_S_LC = jQuery("#rw_cs_count_type2_S_LC").val(); var rw_cs_count_anim = jQuery("#rw_cs_count_anim").val(); var rw_cs_count_Custom_CSS = jQuery("#rw_cs_count_Custom_CSS").val();

	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : { 'action_count':'rw_csp_count', 'rw_cs_cout_show':rw_cs_cout_show, 'rw_cs_count_datepicker':rw_cs_count_datepicker, 'rw_cs_count_type':rw_cs_count_type, 'rw_cs_count_type1_Count_FS':rw_cs_count_type1_Count_FS, 'rw_cs_count_type1_Count_FF':rw_cs_count_type1_Count_FF, 'rw_cs_count_type1_Count_TSh':rw_cs_count_type1_Count_TSh, 'rw_cs_count_type1_text_FS':rw_cs_count_type1_text_FS, 'rw_cs_count_type1_text_FF':rw_cs_count_type1_text_FF, 'rw_cs_count_type1_text_TSh':rw_cs_count_type1_text_TSh, 'rw_cs_count_type1_lines_C':rw_cs_count_type1_lines_C, 'rw_cs_count_type1_FW':rw_cs_count_type1_FW, 'rw_cs_count_type1_DC_C':rw_cs_count_type1_DC_C, 'rw_cs_count_type1_DT_C':rw_cs_count_type1_DT_C, 'rw_cs_count_type1_DT_BC':rw_cs_count_type1_DT_BC, 'rw_cs_count_type1_DT_T':rw_cs_count_type1_DT_T, 'rw_cs_count_type1_HC_C':rw_cs_count_type1_HC_C, 'rw_cs_count_type1_HT_C':rw_cs_count_type1_HT_C, 'rw_cs_count_type1_HT_BC':rw_cs_count_type1_HT_BC, 'rw_cs_count_type1_HT_T':rw_cs_count_type1_HT_T, 'rw_cs_count_type1_MC_C':rw_cs_count_type1_MC_C, 'rw_cs_count_type1_MT_C':rw_cs_count_type1_MT_C, 'rw_cs_count_type1_MT_BC':rw_cs_count_type1_MT_BC, 'rw_cs_count_type1_MT_T':rw_cs_count_type1_MT_T, 'rw_cs_count_type1_SC_C':rw_cs_count_type1_SC_C, 'rw_cs_count_type1_ST_C':rw_cs_count_type1_ST_C, 'rw_cs_count_type1_ST_BC':rw_cs_count_type1_ST_BC, 'rw_cs_count_type1_ST_T':rw_cs_count_type1_ST_T, 'rw_cs_count_type2_resp':rw_cs_count_type2_resp, 'rw_cs_count_type2_Count_FF':rw_cs_count_type2_Count_FF, 'rw_cs_count_type2_Count_TSh':rw_cs_count_type2_Count_TSh, 'rw_cs_count_type2_text_FF':rw_cs_count_type2_text_FF, 'rw_cs_count_type2_text_TSh':rw_cs_count_type2_text_TSh, 'rw_cs_count_type2_FW':rw_cs_count_type2_FW, 'rw_cs_count_type2_DC_C':rw_cs_count_type2_DC_C, 'rw_cs_count_type2_DT_C':rw_cs_count_type2_DT_C, 'rw_cs_count_type2_DT_T':rw_cs_count_type2_DT_T, 'rw_cs_count_type2_D_Tickness':rw_cs_count_type2_D_Tickness, 'rw_cs_count_type2_D_BgC':rw_cs_count_type2_D_BgC, 'rw_cs_count_type2_D_FgC':rw_cs_count_type2_D_FgC, 'rw_cs_count_type2_D_LC':rw_cs_count_type2_D_LC, 'rw_cs_count_type2_HC_C':rw_cs_count_type2_HC_C, 'rw_cs_count_type2_HT_C':rw_cs_count_type2_HT_C, 'rw_cs_count_type2_HT_T':rw_cs_count_type2_HT_T, 'rw_cs_count_type2_H_Tickness':rw_cs_count_type2_H_Tickness, 'rw_cs_count_type2_H_BgC':rw_cs_count_type2_H_BgC, 'rw_cs_count_type2_H_FgC':rw_cs_count_type2_H_FgC, 'rw_cs_count_type2_H_LC':rw_cs_count_type2_H_LC, 'rw_cs_count_type2_MC_C':rw_cs_count_type2_MC_C, 'rw_cs_count_type2_MT_C':rw_cs_count_type2_MT_C, 'rw_cs_count_type2_MT_T':rw_cs_count_type2_MT_T, 'rw_cs_count_type2_M_Tickness':rw_cs_count_type2_M_Tickness, 'rw_cs_count_type2_M_BgC':rw_cs_count_type2_M_BgC, 'rw_cs_count_type2_M_FgC':rw_cs_count_type2_M_FgC, 'rw_cs_count_type2_M_LC':rw_cs_count_type2_M_LC, 'rw_cs_count_type2_SC_C':rw_cs_count_type2_SC_C, 'rw_cs_count_type2_ST_C':rw_cs_count_type2_ST_C, 'rw_cs_count_type2_ST_T':rw_cs_count_type2_ST_T, 'rw_cs_count_type2_S_Tickness':rw_cs_count_type2_S_Tickness, 'rw_cs_count_type2_S_BgC':rw_cs_count_type2_S_BgC, 'rw_cs_count_type2_S_FgC':rw_cs_count_type2_S_FgC, 'rw_cs_count_type2_S_LC':rw_cs_count_type2_S_LC, 'rw_cs_count_anim':rw_cs_count_anim, 'rw_cs_count_Custom_CSS':rw_cs_count_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//CountDown Reset
function RW_CS_Res_CountDown()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_count':'action_count_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_cout_show").val("show");
				jQuery("#rw_cs_count_datepicker").val("31/12/2017 23:59:59"); jQuery("#rw_cs_count_type").val("Type 1"); jQuery("#rw_cs_count_type1_Count_FS").val("80"); jQuery("#rw_cs_count_type1_Count_FS_Span").text("80"); jQuery("#rw_cs_count_type1_Count_FF").val("Abadi MT Condensed Light"); jQuery("#rw_cs_count_type1_Count_TSh").val("1"); jQuery("#rw_cs_count_type1_Count_TSh_Span").text("1"); jQuery("#rw_cs_count_type1_text_FS").val("20"); jQuery("#rw_cs_count_type1_text_FS_Span").text("20"); jQuery("#rw_cs_count_type1_text_FF").val("Abadi MT Condensed Light"); jQuery("#rw_cs_count_type1_text_TSh").val("1"); jQuery("#rw_cs_count_type1_text_TSh_Span").text("1"); jQuery("#rw_cs_count_type1_lines_C").val("#ffffff"); jQuery("#rw_cs_count_type1_FW").val("900"); jQuery("#rw_cs_count_type1_FW_Span").text("900"); jQuery("#rw_cs_count_type1_DC_C").val("#ffffff"); jQuery("#rw_cs_count_type1_DT_C").val("#ffffff"); jQuery("#rw_cs_count_type1_DT_BC").val("#ffffff"); jQuery("#rw_cs_count_type1_DT_T").val("days"); jQuery("#rw_cs_count_type1_HC_C").val("#ffffff"); jQuery("#rw_cs_count_type1_HT_C").val("#ffffff"); jQuery("#rw_cs_count_type1_HT_BC").val("#ffffff"); jQuery("#rw_cs_count_type1_HT_T").val("hrs"); jQuery("#rw_cs_count_type1_MC_C").val("#ffffff"); jQuery("#rw_cs_count_type1_MT_C").val("#ffffff"); jQuery("#rw_cs_count_type1_MT_BC").val("#ffffff"); jQuery("#rw_cs_count_type1_MT_T").val("min"); jQuery("#rw_cs_count_type1_SC_C").val("#ffffff"); jQuery("#rw_cs_count_type1_ST_C").val("#ffffff"); jQuery("#rw_cs_count_type1_ST_BC").val("#ffffff"); jQuery("#rw_cs_count_type1_ST_T").val("sec"); jQuery("#rw_cs_count_type2_resp").val("50"); jQuery("#rw_cs_count_type2_resp").text("50"); jQuery("#rw_cs_count_type2_Count_FF").val("Abadi MT Condensed Light"); jQuery("#rw_cs_count_type2_Count_TSh").val("1"); jQuery("#rw_cs_count_type2_Count_TSh").text("1"); jQuery("#rw_cs_count_type2_text_FF").val("Abadi MT Condensed Light"); jQuery("#rw_cs_count_type2_text_TSh").val("1"); jQuery("#rw_cs_count_type2_text_TSh").text("1"); jQuery("#rw_cs_count_type2_FW").val("300"); jQuery("#rw_cs_count_type2_FW").text("300"); jQuery("#rw_cs_count_type2_DC_C").val("#ffffff"); jQuery("#rw_cs_count_type2_DT_C").val("#ffffff"); jQuery("#rw_cs_count_type2_DT_T").val("days"); jQuery("#rw_cs_count_type2_D_Tickness").val("3"); jQuery("#rw_cs_count_type2_D_Tickness_Span").text("3"); jQuery("#rw_cs_count_type2_D_BgC").val("rgba(255,255,255,0.05)"); jQuery("#rw_cs_count_type2_D_FgC").val("#ffffff"); jQuery("#rw_cs_count_type2_D_LC").val("butt"); jQuery("#rw_cs_count_type2_HC_C").val("#ffffff"); jQuery("#rw_cs_count_type2_HT_C").val("#ffffff"); jQuery("#rw_cs_count_type2_HT_T").val("hrs"); jQuery("#rw_cs_count_type2_H_Tickness").val("3"); jQuery("#rw_cs_count_type2_H_Tickness_Span").text("3"); jQuery("#rw_cs_count_type2_H_BgC").val("rgba(255,255,255,0.05)"); jQuery("#rw_cs_count_type2_H_FgC").val("#ffffff"); jQuery("#rw_cs_count_type2_H_LC").val("butt"); jQuery("#rw_cs_count_type2_MC_C").val("#ffffff"); jQuery("#rw_cs_count_type2_MT_C").val("#ffffff"); jQuery("#rw_cs_count_type2_MT_T").val("min"); jQuery("#rw_cs_count_type2_M_Tickness").val("3"); jQuery("#rw_cs_count_type2_M_Tickness_Span").text("3"); jQuery("#rw_cs_count_type2_M_BgC").val("rgba(255,255,255,0.05)"); jQuery("#rw_cs_count_type2_M_FgC").val("#ffffff"); jQuery("#rw_cs_count_type2_M_LC").val("butt"); jQuery("#rw_cs_count_type2_SC_C").val("#ffffff"); jQuery("#rw_cs_count_type2_ST_C").val("#ffffff"); jQuery("#rw_cs_count_type2_ST_T").val("sec"); jQuery("#rw_cs_count_type2_S_Tickness").val("3"); jQuery("#rw_cs_count_type2_S_Tickness_Span").val("3"); jQuery("#rw_cs_count_type2_S_BgC").val("rgba(255,255,255,0.05)"); jQuery("#rw_cs_count_type2_S_FgC").val("#ffffff"); jQuery("#rw_cs_count_type2_S_LC").val("butt"); jQuery("#rw_cs_count_anim").val("No"); jQuery("#rw_cs_count_Custom_CSS").val("");
				Rich_CS_Count_Clicked();
				Rich_CS_Count_Type_Clicked();
			},2000)
		}
	});
}
//Image Slideshow Save
var sl_array;
function rw_cs_ISSh_Save()
{
	var rw_cs_bg_image_slideshow = jQuery("#rw_cs_bg_image_slideshow").val();
	var rw_cs_ISSh_HidNum = jQuery('#rw_cs_ISSh_HidNum').val();
	var rw_cs_ISSh_src=jQuery('#rich_web_cs_bgISl_imgSrc_2').val();
	if(rw_cs_ISSh_src=="")
	{
		alert('You need to upload image to create table');
		return;
	}
	if(rw_cs_bg_image_slideshow=="")
	{
		sl_array=[];
	}
	else
	{
		sl_array=rw_cs_bg_image_slideshow.split(";");
	}
	jQuery('.rw_cs_SaveISl_Table3').append('<tr id="tr_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'"><td name="rw_cs_number_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'" id="rw_cs_number_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'">'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'</td><td id="rw_cs_Add_Img_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'"><img src="'+rw_cs_ISSh_src+'" id="rw_cs_Add_Img_Src_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'" name="rw_cs_Add_Img_Src_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'" style="max-height:60px;"></td><td><input type="text" class="form-control RW_inp RW_marg" id="rw_cs_ISSh_Url_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'" name="rw_cs_ISSh_Url_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'"  value="'+rw_cs_ISSh_src+'"></td><td id="tdEdit_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'"><i class="rwIcPencil rich_web  rich_web-pencil" onclick="rw_cs_ISSh_EditId('+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+')"></i></td><td id="tdDelet_'+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+'"><i class="rwIcDelete rich_web  rich_web-trash" onclick="rw_cs_ISSh_DeletId('+parseInt(parseInt(rw_cs_ISSh_HidNum)+1)+')"></i></td></tr>');
	sl_array.push(rw_cs_ISSh_src);
	var txt_sl=sl_array.join(";");
	jQuery("#rw_cs_bg_image_slideshow").val(txt_sl);
	jQuery('#rw_cs_ISSh_HidNum').val(parseInt(parseInt(rw_cs_ISSh_HidNum)+1));
	rw_cs_ISSh_Res();
}
//Image Slideshow Reset
function rw_cs_ISSh_Res()
{
	jQuery('#rich_web_cs_bgISl_imgSrc_2').val('');
}
//Image Slideshow Edit
function rw_cs_ISSh_EditId(number)
{
	jQuery(".RW_CS_UPBut").show();
	jQuery(".RW_CS_SVBut").hide();
	var value=jQuery("#rw_cs_ISSh_Url_"+number).val();
	jQuery('#rich_web_cs_bgISl_imgSrc_2').val(value);
	jQuery('#rich_web_cs_bgISl_imgSrc_2').attr("name",number);
}
//Image Slideshow Delete
function rw_cs_ISSh_DeletId(number)
{
	var rw_cs_ISSh_HidNum = jQuery('#rw_cs_ISSh_HidNum').val();
	sl_array.splice(number-1,1);
	jQuery("#tr_"+number).remove();
	jQuery('.rw_cs_SaveISl_Table3 tr').each(function(){
		jQuery(this).attr('id','tr_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(1)').attr('name','rw_cs_number_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(1)').attr('id','rw_cs_number_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(2)').attr('id','rw_cs_Add_Img_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(2) img').attr('id','rw_cs_Add_Img_Src_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(2) img').attr('name','rw_cs_Add_Img_Src_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(3) input').attr('id','rw_cs_ISSh_Url_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(3) input').attr('name','rw_cs_ISSh_Url_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(4)').attr('id','tdEdit_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(4) i').attr('onclick','rw_cs_ISSh_EditId('+parseInt(parseInt(jQuery(this).index())+1)+')');
		jQuery(this).find('td:nth-child(5)').attr('id','tdDelet_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(5) i').attr('onclick','rw_cs_ISSh_DeletId('+parseInt(parseInt(jQuery(this).index())+1)+')');
	})
	var txt_sl=sl_array.join(";");
	jQuery("#rw_cs_bg_image_slideshow").val(txt_sl);
	jQuery('#rw_cs_ISSh_HidNum').val(parseInt(parseInt(rw_cs_ISSh_HidNum)-1));
}
//Image Slideshow Update
function rw_cs_ISSh_Update()
{
	jQuery(".RW_CS_UPBut").hide();
	jQuery(".RW_CS_SVBut").show();
	var count=parseInt(jQuery("#rich_web_cs_bgISl_imgSrc_2").attr("name"));
	var value=jQuery("#rich_web_cs_bgISl_imgSrc_2").val();
	jQuery("#rw_cs_ISSh_Url_"+count).val(value);
	jQuery("#rw_cs_Add_Img_Src_"+count).attr("src",value);
	sl_array.splice(count-1, 1, value);
	var txt_sl=sl_array.join(";");
	jQuery("#rw_cs_bg_image_slideshow").val(txt_sl);
	rw_cs_ISSh_Res();
}
//Image Slideshow Sortable
function rw_cs_ISSh_Sortable()
{
	sl_array=[];
	jQuery('.rw_cs_SaveISl_Table3 tbody').sortable({
		update: function( event, ui ){
			jQuery(this).find('tr').each(function(i){
				jQuery(this).attr('id','tr_'+(i+1));
				jQuery(this).find('td:nth-child(1)').html(i+1);
				jQuery(this).find('td:nth-child(1)').attr('name','rw_cs_number_'+(i+1));
				jQuery(this).find('td:nth-child(1)').attr('id','rw_cs_number_'+(i+1));
				jQuery(this).find('td:nth-child(2)').attr('id','rw_cs_Add_Img_'+(i+1));
				jQuery(this).find('td:nth-child(2) img').attr('id','rw_cs_Add_Img_Src_'+(i+1));
				jQuery(this).find('td:nth-child(2) img').attr('name','rw_cs_Add_Img_Src_'+(i+1));
				jQuery(this).find('td:nth-child(3) input').attr('id','rw_cs_ISSh_Url_'+(i+1));
				jQuery(this).find('td:nth-child(3) input').attr('name','rw_cs_ISSh_Url_'+(i+1));
				jQuery(this).find('td:nth-child(4)').attr('id','tdEdit_'+(i+1));
				jQuery(this).find('td:nth-child(4) i').attr('onclick','rw_cs_ISSh_EditId('+(i+1)+')');
				jQuery(this).find('td:nth-child(5)').attr('id','tdDelet_'+(i+1));
				jQuery(this).find('td:nth-child(5) i').attr('onclick','rw_cs_ISSh_DeletId('+(i+1)+')');
			});
		}
	})
	jQuery(".rw_cs_SaveISl_Table3 tr td:nth-child(2) img").each(function(){
		sl_array.push(jQuery(this).attr('src'));
	})
	var txt_sl=sl_array.join(";");
	jQuery("#rw_cs_bg_image_slideshow").val(txt_sl);
}
//Video Slideshow Save
var slv_array;
function rw_cs_VSSh_Save()
{
	var rw_cs_bg_image_video_slideshow = jQuery("#rw_cs_bg_image_video_slideshow").val();
	var rw_cs_VSSh_HidNum = jQuery('#rw_cs_VSSh_HidNum').val();
	var rw_cs_VSSh_src=jQuery('#rich_web_cs_bgVSl_vSrc_2').val();
	if(rw_cs_VSSh_src=="")
	{
		alert('You need to upload video to create table');
		return;
	}
	if(rw_cs_bg_image_video_slideshow=="")
	{
		slv_array=[];
	}
	else
	{
		slv_array=rw_cs_bg_image_video_slideshow.split(";");
	}
	jQuery('.rw_cs_SaveVSl_Table3').append('<tr id="tr_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'"><td name="rw_cs_number_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'" id="rw_cs_number_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'">'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'</td><td id="rw_cs_Add_Video_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'"><img src="http://img.youtube.com/vi/'+rw_cs_VSSh_src+'/mqdefault.jpg" id="rw_cs_Add_Video_Src_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'" name="rw_cs_Add_Video_Src_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'" style="max-height:60px;"></td><td><input type="text" class="form-control RW_inp RW_marg" id="rw_cs_VSSh_Url_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'" name="rw_cs_VSSh_Url_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'"  value="'+rw_cs_VSSh_src+'"></td><td id="tdEdit_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'"><i class="rwIcPencil rich_web  rich_web-pencil" onclick="rw_cs_VSSh_EditId('+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+')"></i></td><td id="tdDelet_'+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+'"><i class="rwIcDelete rich_web  rich_web-trash" onclick="rw_cs_VSSh_DeletId('+parseInt(parseInt(rw_cs_VSSh_HidNum)+1)+')"></i></td></tr>');
	slv_array.push(rw_cs_VSSh_src);
	var txt_slv=slv_array.join(";");
	jQuery("#rw_cs_bg_image_video_slideshow").val(txt_slv);
	jQuery('#rw_cs_VSSh_HidNum').val(parseInt(parseInt(rw_cs_VSSh_HidNum)+1));
	rw_cs_VSSh_Res();
}
//Video Slideshow Reset
function rw_cs_VSSh_Res()
{
	jQuery('#rich_web_cs_bgVSl_vSrc_2').val('');
}
//Video Slideshow Edit
function rw_cs_VSSh_EditId(number)
{
	jQuery(".RW_CS_UPBut").show();
	jQuery(".RW_CS_SVBut").hide();
	var value=jQuery("#rw_cs_VSSh_Url_"+number).val();
	jQuery('#rich_web_cs_bgVSl_vSrc_2').val(value);
	jQuery('#rich_web_cs_bgVSl_vSrc_2').attr("name",number);
}
//Video Slideshow Delete
function rw_cs_VSSh_DeletId(number)
{
	var rw_cs_VSSh_HidNum = jQuery('#rw_cs_VSSh_HidNum').val();
	slv_array.splice(number-1,1);
	jQuery("#tr_"+number).remove();
	jQuery('.rw_cs_SaveVSl_Table3 tr').each(function(){
		jQuery(this).attr('id','tr_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(1)').attr('name','rw_cs_number_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(1)').attr('id','rw_cs_number_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(2)').attr('id','rw_cs_Add_Video_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(2) img').attr('id','rw_cs_Add_Video_Src_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(2) img').attr('name','rw_cs_Add_Video_Src_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(3) input').attr('id','rw_cs_VSSh_Url_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(3) input').attr('name','rw_cs_VSSh_Url_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(4)').attr('id','tdEdit_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(4) i').attr('onclick','rw_cs_VSSh_EditId('+parseInt(parseInt(jQuery(this).index())+1)+')');
		jQuery(this).find('td:nth-child(5)').attr('id','tdDelet_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('td:nth-child(5) i').attr('onclick','rw_cs_VSSh_DeletId('+parseInt(parseInt(jQuery(this).index())+1)+')');
	})
	var txt_slv=slv_array.join(";");
	jQuery("#rw_cs_bg_image_video_slideshow").val(txt_slv);
	jQuery('#rw_cs_VSSh_HidNum').val(parseInt(parseInt(rw_cs_VSSh_HidNum)-1));
}
//Video Slideshow Update
function rw_cs_VSSh_Update()
{
	var rw_cs_VSSh_src=jQuery('#rich_web_cs_bgVSl_vSrc_2').val();
	if(rw_cs_VSSh_src=="")
	{
		alert('You need to upload video to create table');
		return;
	}
	jQuery(".RW_CS_UPBut").hide();
	jQuery(".RW_CS_SVBut").show();
	var count=parseInt(jQuery("#rich_web_cs_bgVSl_vSrc_2").attr("name"));
	var value=jQuery("#rich_web_cs_bgVSl_vSrc_2").val();
	jQuery("#rw_cs_VSSh_Url_"+count).val(value);
	jQuery("#rw_cs_Add_Video_Src_"+count).attr("src","http://img.youtube.com/vi/"+value+"/mqdefault.jpg");
	slv_array.splice(count-1, 1, value);
	var txt_slv=slv_array.join(";");
	jQuery("#rw_cs_bg_image_video_slideshow").val(txt_slv);
	rw_cs_VSSh_Res();
}
//Video Slideshow Sortable
function rw_cs_VSSh_Sortable()
{
	slv_array=[];
	jQuery('.rw_cs_SaveVSl_Table3 tbody').sortable({
		update: function( event, ui ){
			jQuery(this).find('tr').each(function(i){
				jQuery(this).attr('id','tr_'+(i+1));
				jQuery(this).find('td:nth-child(1)').html(i+1);
				jQuery(this).find('td:nth-child(1)').attr('name','rw_cs_number_'+(i+1));
				jQuery(this).find('td:nth-child(1)').attr('id','rw_cs_number_'+(i+1));
				jQuery(this).find('td:nth-child(2)').attr('id','rw_cs_Add_Video_'+(i+1));
				jQuery(this).find('td:nth-child(2) img').attr('id','rw_cs_Add_Video_Src_'+(i+1));
				jQuery(this).find('td:nth-child(2) img').attr('name','rw_cs_Add_Video_Src_'+(i+1));
				jQuery(this).find('td:nth-child(3) input').attr('id','rw_cs_VSSh_Url_'+(i+1));
				jQuery(this).find('td:nth-child(3) input').attr('name','rw_cs_VSSh_Url_'+(i+1));
				jQuery(this).find('td:nth-child(4)').attr('id','tdEdit_'+(i+1));
				jQuery(this).find('td:nth-child(4) i').attr('onclick','rw_cs_VSSh_EditId('+(i+1)+')');
				jQuery(this).find('td:nth-child(5)').attr('id','tdDelet_'+(i+1));
				jQuery(this).find('td:nth-child(5) i').attr('onclick','rw_cs_VSSh_DeletId('+(i+1)+')');
			});
		}
	})
	jQuery(".rw_cs_SaveVSl_Table3 tr td:nth-child(3) input").each(function(){
		slv_array.push(jQuery(this).val());
	})
	var txt_slv=slv_array.join(";");
	jQuery("#rw_cs_bg_image_video_slideshow").val(txt_slv);
}
//Background Ajax
function RW_CS_Bg()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_bg_type = jQuery("#rw_cs_bg_type").val(); var rw_cs_bg_color = jQuery("#rw_cs_bg_color").val(); var rw_cs_bg_image = jQuery("#rich_web_cs_bg_imgSrc_2").val(); var rw_cs_bg_image_slideshow = jQuery("#rw_cs_bg_image_slideshow").val(); var rw_cs_bg_image_slideshow_dur = jQuery("#rw_cs_bg_image_slideshow_dur").val(); var rw_cs_bg_image_slideshow_bar = jQuery("#rw_cs_bg_image_slideshow_bar").val(); var rw_cs_bg_image_slideshow_bar_height = jQuery("#rw_cs_bg_image_slideshow_bar_height").val(); var rw_cs_bg_image_slideshow_bar_BgC = jQuery("#rw_cs_bg_image_slideshow_bar_BgC").val(); var rw_cs_bg_image_slideshow_bar_FgC = jQuery("#rw_cs_bg_image_slideshow_bar_FgC").val(); var rw_cs_bg_image_video = jQuery("#rich_web_cs_bg_vSrs_2").val(); var rw_cs_bg_image_video_sound = jQuery("#rw_cs_bg_image_video_sound").val(); var rw_cs_bg_image_video_quality = jQuery("#rw_cs_bg_image_video_quality").val(); var rw_cs_bg_image_video_PlC = jQuery("#rw_cs_bg_image_video_PlC").val(); var rw_cs_bg_image_video_PlC_BgC = jQuery("#rw_cs_bg_image_video_PlC_BgC").val(); var rw_cs_bg_image_video_PlC_C = jQuery("#rw_cs_bg_image_video_PlC_C").val(); var rw_cs_bg_image_video_PlC_HBgC = jQuery("#rw_cs_bg_image_video_PlC_HBgC").val(); var rw_cs_bg_image_video_PlC_HC = jQuery("#rw_cs_bg_image_video_PlC_HC").val(); var rw_cs_bg_image_video_PlC_BR = jQuery("#rw_cs_bg_image_video_PlC_BR").val(); var rw_cs_bg_image_video_PlC_BSh = jQuery("#rw_cs_bg_image_video_PlC_BSh").val(); var rw_cs_bg_image_video_PlC_ShC = jQuery("#rw_cs_bg_image_video_PlC_ShC").val(); var rw_cs_bg_image_video_slideshow = jQuery("#rw_cs_bg_image_video_slideshow").val(); var rw_cs_bg_image_vsl_sound = jQuery("#rw_cs_bg_image_vsl_sound").val(); var rw_cs_bg_image_vsl_quality = jQuery("#rw_cs_bg_image_vsl_quality").val(); var rw_cs_bg_image_vsl_PlC = jQuery("#rw_cs_bg_image_vsl_PlC").val(); var rw_cs_bg_image_vsl_PlC_BgC = jQuery("#rw_cs_bg_image_vsl_PlC_BgC").val(); var rw_cs_bg_image_vsl_PlC_C = jQuery("#rw_cs_bg_image_vsl_PlC_C").val(); var rw_cs_bg_image_vsl_PlC_HBgC = jQuery("#rw_cs_bg_image_vsl_PlC_HBgC").val(); var rw_cs_bg_image_vsl_PlC_HC = jQuery("#rw_cs_bg_image_vsl_PlC_HC").val(); var rw_cs_bg_image_vsl_PlC_BR = jQuery("#rw_cs_bg_image_vsl_PlC_BR").val(); var rw_cs_bg_image_vsl_PlC_BSh = jQuery("#rw_cs_bg_image_vsl_PlC_BSh").val(); var rw_cs_bg_image_vsl_PlC_ShC = jQuery("#rw_cs_bg_image_vsl_PlC_ShC").val(); var rw_cs_bg_anim = jQuery("#rw_cs_bg_anim").val(); var rw_cs_bg_anim_type = jQuery("#rw_cs_bg_anim_type").val(); var rw_cs_ISSh_HidNum = jQuery("#rw_cs_ISSh_HidNum").val(); var rw_cs_VSSh_HidNum = jQuery("#rw_cs_VSSh_HidNum").val(); var rw_cs_bg_Custom_CSS = jQuery("#rw_cs_bg_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : { 'action_bg':'rw_csp_bg', 'rw_cs_bg_type':rw_cs_bg_type, 'rw_cs_bg_color':rw_cs_bg_color, 'rw_cs_bg_image':rw_cs_bg_image, 'rw_cs_bg_image_slideshow':rw_cs_bg_image_slideshow, 'rw_cs_bg_image_slideshow_dur':rw_cs_bg_image_slideshow_dur, 'rw_cs_bg_image_slideshow_bar':rw_cs_bg_image_slideshow_bar, 'rw_cs_bg_image_slideshow_bar_height':rw_cs_bg_image_slideshow_bar_height, 'rw_cs_bg_image_slideshow_bar_BgC':rw_cs_bg_image_slideshow_bar_BgC, 'rw_cs_bg_image_slideshow_bar_FgC':rw_cs_bg_image_slideshow_bar_FgC, 'rw_cs_bg_image_video':rw_cs_bg_image_video, 'rw_cs_bg_image_video_sound':rw_cs_bg_image_video_sound, 'rw_cs_bg_image_video_quality':rw_cs_bg_image_video_quality, 'rw_cs_bg_image_video_PlC':rw_cs_bg_image_video_PlC, 'rw_cs_bg_image_video_PlC_BgC':rw_cs_bg_image_video_PlC_BgC, 'rw_cs_bg_image_video_PlC_C':rw_cs_bg_image_video_PlC_C, 'rw_cs_bg_image_video_PlC_HBgC':rw_cs_bg_image_video_PlC_HBgC, 'rw_cs_bg_image_video_PlC_HC':rw_cs_bg_image_video_PlC_HC, 'rw_cs_bg_image_video_PlC_BR':rw_cs_bg_image_video_PlC_BR, 'rw_cs_bg_image_video_PlC_BSh':rw_cs_bg_image_video_PlC_BSh, 'rw_cs_bg_image_video_PlC_ShC':rw_cs_bg_image_video_PlC_ShC, 'rw_cs_bg_image_video_slideshow':rw_cs_bg_image_video_slideshow, 'rw_cs_bg_image_vsl_sound':rw_cs_bg_image_vsl_sound, 'rw_cs_bg_image_vsl_quality':rw_cs_bg_image_vsl_quality, 'rw_cs_bg_image_vsl_PlC':rw_cs_bg_image_vsl_PlC, 'rw_cs_bg_image_vsl_PlC_BgC':rw_cs_bg_image_vsl_PlC_BgC, 'rw_cs_bg_image_vsl_PlC_C':rw_cs_bg_image_vsl_PlC_C, 'rw_cs_bg_image_vsl_PlC_HBgC':rw_cs_bg_image_vsl_PlC_HBgC, 'rw_cs_bg_image_vsl_PlC_HC':rw_cs_bg_image_vsl_PlC_HC, 'rw_cs_bg_image_vsl_PlC_BR':rw_cs_bg_image_vsl_PlC_BR, 'rw_cs_bg_image_vsl_PlC_BSh':rw_cs_bg_image_vsl_PlC_BSh, 'rw_cs_bg_image_vsl_PlC_ShC':rw_cs_bg_image_vsl_PlC_ShC, 'rw_cs_bg_anim':rw_cs_bg_anim, 'rw_cs_bg_anim_type':rw_cs_bg_anim_type, 'rw_cs_ISSh_HidNum':rw_cs_ISSh_HidNum, 'rw_cs_VSSh_HidNum':rw_cs_VSSh_HidNum, 'rw_cs_bg_Custom_CSS':rw_cs_bg_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Background Reset
function RW_CS_Res_Bg()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_bg':'action_bg_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				location.reload();
			},2000)
		}
	});
}
//Buttons Ajax
function RW_CS_Button()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_MIB_text = jQuery("#rw_cs_MIB_text").val(); var rw_cs_MIB_text_FS = jQuery("#rw_cs_MIB_text_FS").val(); var rw_cs_MIB_text_FF = jQuery("#rw_cs_MIB_text_FF").val(); var rw_cs_MIB_text_C = jQuery("#rw_cs_MIB_text_C").val(); var rw_cs_MIB_text_BgC = jQuery("#rw_cs_MIB_text_BgC").val(); var rw_cs_MIB_text_HC = jQuery("#rw_cs_MIB_text_HC").val(); var rw_cs_MIB_text_HBgC = jQuery("#rw_cs_MIB_text_HBgC").val(); var rw_cs_MIB_BW = jQuery("#rw_cs_MIB_BW").val(); var rw_cs_MIB_BC = jQuery("#rw_cs_MIB_BC").val(); var rw_cs_MIB_HBC = jQuery("#rw_cs_MIB_HBC").val(); var rw_cs_MIB_BR = jQuery("#rw_cs_MIB_BR").val(); var rw_cs_MIB_BSh = jQuery("#rw_cs_MIB_BSh").val(); var rw_cs_MIB_BShC = jQuery("#rw_cs_MIB_BShC").val(); var rw_cs_MIB_Anim = jQuery("#rw_cs_MIB_Anim").val(); var rw_cs_MIB_Pop_Ov_BgC = jQuery("#rw_cs_MIB_Pop_Ov_BgC").val(); var rw_cs_MIB_Pop_Cont_W = jQuery("#rw_cs_MIB_Pop_Cont_W").val(); var rw_cs_MIB_Pop_Cont_H = jQuery("#rw_cs_MIB_Pop_Cont_H").val(); var rw_cs_MIB_Pop_Cont_BW = jQuery("#rw_cs_MIB_Pop_Cont_BW").val(); var rw_cs_MIB_Pop_Cont_BC = jQuery("#rw_cs_MIB_Pop_Cont_BC").val(); var rw_cs_MIB_Pop_Cont_BSh = jQuery("#rw_cs_MIB_Pop_Cont_BSh").val(); var rw_cs_MIB_Pop_Cont_ShC = jQuery("#rw_cs_MIB_Pop_Cont_ShC").val(); var rw_cs_MIB_Pop_Cont_BgC = jQuery("#rw_cs_MIB_Pop_Cont_BgC").val(); var rw_cs_MIB_Pop_Ic_Type = jQuery("#rw_cs_MIB_Pop_Ic_Type").val(); var rw_cs_MIB_Pop_Ic_FS = jQuery("#rw_cs_MIB_Pop_Ic_FS").val(); var rw_cs_MIB_Pop_Ic_C = jQuery("#rw_cs_MIB_Pop_Ic_C").val(); var rw_cs_FB_text = jQuery("#rw_cs_FB_text").val(); var rw_cs_FB_text_FS = jQuery("#rw_cs_FB_text_FS").val(); var rw_cs_FB_text_FF = jQuery("#rw_cs_FB_text_FF").val(); var rw_cs_FB_text_C = jQuery("#rw_cs_FB_text_C").val(); var rw_cs_FB_text_BgC = jQuery("#rw_cs_FB_text_BgC").val(); var rw_cs_FB_text_HC = jQuery("#rw_cs_FB_text_HC").val(); var rw_cs_FB_text_HBgC = jQuery("#rw_cs_FB_text_HBgC").val(); var rw_cs_FB_BW = jQuery("#rw_cs_FB_BW").val(); var rw_cs_FB_BC = jQuery("#rw_cs_FB_BC").val(); var rw_cs_FB_HBC = jQuery("#rw_cs_FB_HBC").val(); var rw_cs_FB_BR = jQuery("#rw_cs_FB_BR").val(); var rw_cs_FB_BSh = jQuery("#rw_cs_FB_BSh").val(); var rw_cs_FB_BShC = jQuery("#rw_cs_FB_BShC").val(); var rw_cs_FB_Anim = jQuery("#rw_cs_FB_Anim").val(); var rw_cs_FB_Pop_Ov_BgC = jQuery("#rw_cs_FB_Pop_Ov_BgC").val(); var rw_cs_FB_Pop_Cont_W = jQuery("#rw_cs_FB_Pop_Cont_W").val(); var rw_cs_FB_Pop_Cont_H = jQuery("#rw_cs_FB_Pop_Cont_H").val(); var rw_cs_FB_Pop_Cont_BW = jQuery("#rw_cs_FB_Pop_Cont_BW").val(); var rw_cs_FB_Pop_Cont_BC = jQuery("#rw_cs_FB_Pop_Cont_BC").val(); var rw_cs_FB_Pop_Cont_BSh = jQuery("#rw_cs_FB_Pop_Cont_BSh").val(); var rw_cs_FB_Pop_Cont_ShC = jQuery("#rw_cs_FB_Pop_Cont_ShC").val(); var rw_cs_FB_Pop_Cont_BgC = jQuery("#rw_cs_FB_Pop_Cont_BgC").val(); var rw_cs_FB_Pop_Ic_Type = jQuery("#rw_cs_FB_Pop_Ic_Type").val(); var rw_cs_FB_Pop_Ic_FS = jQuery("#rw_cs_FB_Pop_Ic_FS").val(); var rw_cs_FB_Pop_Ic_C = jQuery("#rw_cs_FB_Pop_Ic_C").val(); var rw_cs_but_Custom_CSS = jQuery("#rw_cs_but_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : { 'action_but':'rw_csp_but', 'rw_cs_MIB_text':rw_cs_MIB_text, 'rw_cs_MIB_text_FS':rw_cs_MIB_text_FS, 'rw_cs_MIB_text_FF':rw_cs_MIB_text_FF, 'rw_cs_MIB_text_C':rw_cs_MIB_text_C, 'rw_cs_MIB_text_BgC':rw_cs_MIB_text_BgC, 'rw_cs_MIB_text_HC':rw_cs_MIB_text_HC, 'rw_cs_MIB_text_HBgC':rw_cs_MIB_text_HBgC, 'rw_cs_MIB_BW':rw_cs_MIB_BW, 'rw_cs_MIB_BC':rw_cs_MIB_BC, 'rw_cs_MIB_HBC':rw_cs_MIB_HBC, 'rw_cs_MIB_BR':rw_cs_MIB_BR, 'rw_cs_MIB_BSh':rw_cs_MIB_BSh, 'rw_cs_MIB_BShC':rw_cs_MIB_BShC, 'rw_cs_MIB_Anim':rw_cs_MIB_Anim, 'rw_cs_MIB_Pop_Ov_BgC':rw_cs_MIB_Pop_Ov_BgC, 'rw_cs_MIB_Pop_Cont_W':rw_cs_MIB_Pop_Cont_W, 'rw_cs_MIB_Pop_Cont_H':rw_cs_MIB_Pop_Cont_H, 'rw_cs_MIB_Pop_Cont_BW':rw_cs_MIB_Pop_Cont_BW, 'rw_cs_MIB_Pop_Cont_BC':rw_cs_MIB_Pop_Cont_BC, 'rw_cs_MIB_Pop_Cont_BSh':rw_cs_MIB_Pop_Cont_BSh, 'rw_cs_MIB_Pop_Cont_ShC':rw_cs_MIB_Pop_Cont_ShC, 'rw_cs_MIB_Pop_Cont_BgC':rw_cs_MIB_Pop_Cont_BgC, 'rw_cs_MIB_Pop_Ic_Type':rw_cs_MIB_Pop_Ic_Type, 'rw_cs_MIB_Pop_Ic_FS':rw_cs_MIB_Pop_Ic_FS, 'rw_cs_MIB_Pop_Ic_C':rw_cs_MIB_Pop_Ic_C, 'rw_cs_FB_text':rw_cs_FB_text, 'rw_cs_FB_text_FS':rw_cs_FB_text_FS, 'rw_cs_FB_text_FF':rw_cs_FB_text_FF, 'rw_cs_FB_text_C':rw_cs_FB_text_C, 'rw_cs_FB_text_BgC':rw_cs_FB_text_BgC, 'rw_cs_FB_text_HC':rw_cs_FB_text_HC, 'rw_cs_FB_text_HBgC':rw_cs_FB_text_HBgC, 'rw_cs_FB_BW':rw_cs_FB_BW, 'rw_cs_FB_BC':rw_cs_FB_BC, 'rw_cs_FB_HBC':rw_cs_FB_HBC, 'rw_cs_FB_BR':rw_cs_FB_BR, 'rw_cs_FB_BSh':rw_cs_FB_BSh, 'rw_cs_FB_BShC':rw_cs_FB_BShC, 'rw_cs_FB_Anim':rw_cs_FB_Anim, 'rw_cs_FB_Pop_Ov_BgC':rw_cs_FB_Pop_Ov_BgC, 'rw_cs_FB_Pop_Cont_W':rw_cs_FB_Pop_Cont_W, 'rw_cs_FB_Pop_Cont_H':rw_cs_FB_Pop_Cont_H, 'rw_cs_FB_Pop_Cont_BW':rw_cs_FB_Pop_Cont_BW, 'rw_cs_FB_Pop_Cont_BC':rw_cs_FB_Pop_Cont_BC, 'rw_cs_FB_Pop_Cont_BSh':rw_cs_FB_Pop_Cont_BSh, 'rw_cs_FB_Pop_Cont_ShC':rw_cs_FB_Pop_Cont_ShC, 'rw_cs_FB_Pop_Cont_BgC':rw_cs_FB_Pop_Cont_BgC, 'rw_cs_FB_Pop_Ic_Type':rw_cs_FB_Pop_Ic_Type, 'rw_cs_FB_Pop_Ic_FS':rw_cs_FB_Pop_Ic_FS, 'rw_cs_FB_Pop_Ic_C':rw_cs_FB_Pop_Ic_C, 'rw_cs_but_Custom_CSS':rw_cs_but_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Buttons Reset
function RW_CS_Res_Button()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_but':'action_but_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				location.reload();
			},2000)
		}
	});
}
//Contents Ordering Sortable
function rw_cs_ord_Sortable()
{
	var ord_array=[];
	jQuery('#RW_CS_ORdering').sortable({
		update: function( event, ui ){ }
	})
	jQuery("#RW_CS_ORdering .rw_ord").each(function(){
		ord_array.push(jQuery(this).text());
	})
	var txt_ord=ord_array.join(";");
	jQuery("#rw_cs_cont_ordering").val(txt_ord);
}
//Contents Ordering Ajax
function RW_CS_Ord()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_cont_ordering = jQuery("#rw_cs_cont_ordering").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_ord':'rw_csp_ord',
			'rw_cs_cont_ordering':rw_cs_cont_ordering,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Contents Ordering Reset
function RW_CS_Res_Ord()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_ord':'action_ord_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				location.reload();
			},2000)
		}
	});
}
//More Information Ajax
function RW_CS_Info()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var text=tinymce.get('rw_cs_info_text').getContent();
	jQuery("#rw_cs_info_text").text(text);
	var rw_cs_info_text_Show = jQuery("#rw_cs_info_text_Show").val();
	var rw_cs_info_text = jQuery("#rw_cs_info_text").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_info':'rw_csp_info',
			'rw_cs_info_text_Show':rw_cs_info_text_Show,
			'rw_cs_info_text':rw_cs_info_text,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//More Information Reset
function RW_CS_Res_Info()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_info':'action_info_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				location.reload();
			},2000)
		}
	});
}
//Social Icon Add
var sb_array_type, sb_array_url, sb_array_BgC, sb_array_C, sb_array_BC, sb_array_HBgC, sb_array_HC, sb_array_HBC;
var count=0;
function RW_Add_Social(type)
{
	var rw_cs_SB_HidNum = jQuery('#rw_cs_SB_HidNum').val();
	var rw_cs_social_Type = jQuery('#rw_cs_social_Type').val();
	var rw_cs_social_Url = jQuery('#rw_cs_social_Url').val();
	var rw_cs_social_BgC = jQuery('#rw_cs_social_BgC').val();
	var rw_cs_social_C = jQuery('#rw_cs_social_C').val();
	var rw_cs_social_BC = jQuery('#rw_cs_social_BC').val();
	var rw_cs_social_HBgC = jQuery('#rw_cs_social_HBgC').val();
	var rw_cs_social_HC = jQuery('#rw_cs_social_HC').val();
	var rw_cs_social_HBC = jQuery('#rw_cs_social_HBC').val();
	if(rw_cs_social_Type=="") { sb_array_type=[]; } else { sb_array_type=rw_cs_social_Type.split(";"); }
	if(rw_cs_social_Url=="") { sb_array_url=[]; } else { sb_array_url=rw_cs_social_Url.split(";"); }
	if(rw_cs_social_BgC=="") { sb_array_BgC=[]; } else { sb_array_BgC=rw_cs_social_BgC.split(";"); }
	if(rw_cs_social_C=="") { sb_array_C=[]; } else { sb_array_C=rw_cs_social_C.split(";"); }
	if(rw_cs_social_BC=="") { sb_array_BC=[]; } else { sb_array_BC=rw_cs_social_BC.split(";"); }
	if(rw_cs_social_HBgC=="") { sb_array_HBgC=[]; } else { sb_array_HBgC=rw_cs_social_HBgC.split(";"); }
	if(rw_cs_social_HC=="") { sb_array_HC=[]; } else { sb_array_HC=rw_cs_social_HC.split(";"); }
	if(rw_cs_social_HBC=="") { sb_array_HBC=[]; } else { sb_array_HBC=rw_cs_social_HBC.split(";"); }
	var count_checkbox=0;
	if(jQuery(".fadeout").hasClass("div"+type)) { count_checkbox = parseInt(parseInt(jQuery('.'+type).val())+1); } else { count_checkbox = parseInt(jQuery('.'+type).val()); }
	count_checkbox++;
	if(count_checkbox==1)
	{
		jQuery("#accordion1").append('<div class="panel panel-default fadeout div'+type+'" name="'+type+'"><div class="panel-heading RW_Panel_Heading"><h4 class="panel-title"><div class="panel-body rw_SB"><table class="table rw_SB_T"><thead><tr><th><i class="rich_web  rich_web-'+type+' rw_sb_ic_'+type+' rw_sb_ic rw_sb_icc" data-toggle="collapse" data-parent="#accordion1" href="#collapse_ShB'+parseInt(parseInt(rw_cs_SB_HidNum)+1)+'" onclick="rw_cs_sb_edit()"></i></th><th id="rw_cs_th_'+type+'_url">#</th><th><i class="rwIcPencil rich_web  rich_web-pencil rw_sb_ic" data-toggle="collapse" data-parent="#accordion1" href="#collapse_ShB'+parseInt(parseInt(rw_cs_SB_HidNum)+1)+'" onclick="rw_cs_sb_edit()" style="padding:10px;"></i></th></tr></thead></table></div></h4></div><div id="collapse_ShB'+parseInt(parseInt(rw_cs_SB_HidNum)+1)+'" class="panel-collapse collapse rw_sb_collapse"><div class="row" style="padding:10px;"><div class="col-lg-9 col-md-12" style="margin-bottom:20px;"><input type="text" class="form-control RW_inp RW_SB_inp" placeholder="Enter '+type+' url.." id="rw_cs_sb_'+type+'_url"  value="#"></div><div class="col-lg-4 col-md-6" style="margin-bottom:10px;"><label class="RW_Label">Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Background Color for this Icon"></i></label><input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_BgC" name="'+type+'" id="rw_cs_'+type+'_icon_BgC"   value="#ffffff"></div><div class="col-lg-4 col-md-6" style="margin-bottom:10px;"><label class="RW_Label">Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Color for this Icon"></i></label><input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_C" name="'+type+'"  id="rw_cs_'+type+'_icon_C"   value="#6ecae9"></div><div class="col-lg-4 col-md-6" style="margin-bottom:10px;"><label class="RW_Label">Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Border Color for this Icon"></i></label><input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_BC" name="'+type+'" id="rw_cs_'+type+'_icon_BC"   value="#ffffff"></div><div class="col-lg-4 col-md-6" style="margin-bottom:10px;"><label class="RW_Label">Hover Background Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Background Color for this Icon"></i></label><input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_HBgC" name="'+type+'" id="rw_cs_'+type+'_icon_HBgC"   value="#6ecae9"></div><div class="col-lg-4 col-md-6" style="margin-bottom:10px;"><label class="RW_Label">Hover Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Color for this Icon"></i></label><input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_HC" name="'+type+'" id="rw_cs_'+type+'_icon_HC"  value="#ffffff"></div><div class="col-lg-4 col-md-6" style="margin-bottom:10px;"><label class="RW_Label">Hover Border Color :<i class="RW_Help rich_web rich_web-question-circle-o tooltips" data-toggle="tooltip" data-placement="right" title="In this field, you would need to choose Hover Border Color for this Icon"></i></label><input type="text" class="form-control RW_inp RW_marg alpha-color-picker RW_inp_HBC" name="'+type+'" id="rw_cs_'+type+'_icon_HBC"   value="#ffffff"></div><div class="col-md-12" style="text-align:center;margin-top:15px;display:none;" ><input type="button" class="RW_CS_Button RW_CS_SB_Save" onclick="RW_CS_SB_Type_Save(\''+type+'\','+parseInt(parseInt(rw_cs_SB_HidNum)+1)+')" value="Save"></div></div></div></div>');
		sb_array_type.push(type);
		var txt_Type=sb_array_type.join(";");
		jQuery("#rw_cs_social_Type").val(txt_Type);
		sb_array_url.push(jQuery("#rw_cs_sb_"+type+"_url").val());
		var txt_URL=sb_array_url.join(";");
		jQuery("#rw_cs_social_Url").val(txt_URL);
		sb_array_BgC.push(jQuery("#rw_cs_"+type+"_icon_BgC").val());
		var txt_BgC=sb_array_BgC.join(";");
		jQuery("#rw_cs_social_BgC").val(txt_BgC);
		sb_array_C.push(jQuery("#rw_cs_"+type+"_icon_C").val());
		var txt_C=sb_array_C.join(";");
		jQuery("#rw_cs_social_C").val(txt_C);
		sb_array_BC.push(jQuery("#rw_cs_"+type+"_icon_BC").val());
		var txt_BC=sb_array_BC.join(";");
		jQuery("#rw_cs_social_BC").val(txt_BC);
		sb_array_HBgC.push(jQuery("#rw_cs_"+type+"_icon_HBgC").val());
		var txt_HBgC=sb_array_HBgC.join(";");
		jQuery("#rw_cs_social_HBgC").val(txt_HBgC);
		sb_array_HC.push(jQuery("#rw_cs_"+type+"_icon_HC").val());
		var txt_HC=sb_array_C.join(";");
		jQuery("#rw_cs_social_HC").val(txt_HC);
		sb_array_HBC.push(jQuery("#rw_cs_"+type+"_icon_HBC").val());
		var txt_HBC=sb_array_HBC.join(";");
		jQuery("#rw_cs_social_HBC").val(txt_HBC);
		jQuery('#rw_cs_SB_HidNum').val(parseInt(rw_cs_SB_HidNum)+1);
		count=parseInt(jQuery('#rw_cs_SB_HidNum').val());
		jQuery('.'+type).val(count_checkbox);
		setTimeout(function(){
			jQuery(".fadeout").addClass("fadein");
			jQuery(".fadeout").addClass("time");
		},100)
	}
	else
	{
		count_checkbox=0;
		jQuery('.'+type).val(count_checkbox);
		jQuery(".div"+type).removeClass("fadein");
		setTimeout(function(){
			jQuery(".div"+type).remove();
		},400)
		jQuery('#rw_cs_SB_HidNum').val(parseInt(rw_cs_SB_HidNum)-1);
		rw_cs_SB_HidNum=parseInt(jQuery('#rw_cs_SB_HidNum').val());
		var number_type=sb_array_type.indexOf(type);
		sb_array_type.splice(number_type,1);
		var txt_Type=sb_array_type.join(';');
		jQuery("#rw_cs_social_Type").val(txt_Type);
		sb_array_url.splice(number_type,1);
		var txt_Url=sb_array_url.join(';');
		jQuery("#rw_cs_social_Url").val(txt_Url);
		sb_array_BgC.splice(number_type,1);
		var txt_BgC=sb_array_BgC.join(';');
		jQuery("#rw_cs_social_BgC").val(txt_BgC);
		sb_array_C.splice(number_type,1);
		var txt_C=sb_array_C.join(';');
		jQuery("#rw_cs_social_C").val(txt_C);
		sb_array_BC.splice(number_type,1);
		var txt_BC=sb_array_BC.join(';');
		jQuery("#rw_cs_social_BC").val(txt_BC);
		sb_array_HBgC.splice(number_type,1);
		var txt_HBgC=sb_array_HBgC.join(';');
		jQuery("#rw_cs_social_HBgC").val(txt_HBgC);
		sb_array_HC.splice(number_type,1);
		var txt_HC=sb_array_HC.join(';');
		jQuery("#rw_cs_social_HC").val(txt_HC);
		sb_array_HBC.splice(number_type,1);
		var txt_HBC=sb_array_HBC.join(';');
		jQuery("#rw_cs_social_HBC").val(txt_HBC);
		jQuery('#accordion1 .fadeout').each(function(){
			jQuery(this).find('.rw_sb_ic').attr('href','#collapse_ShB'+parseInt(parseInt(jQuery(this).index())+1)+'');
			jQuery(this).find('.rw_sb_collapse').attr('id','collapse_ShB'+parseInt(parseInt(jQuery(this).index())+1)+'');
			jQuery(this).find('.RW_CS_SB_Save').attr('onclick','RW_CS_SB_Type_Save(\''+sb_array_type[parseInt(parseInt(jQuery(this).index()))]+'\','+parseInt(parseInt(jQuery(this).index())+1)+')');
		})
	}
}
//Social Icon Edit
var x=0;
var y=0;
function rw_cs_sb_edit()
{
	count++;
	if(count-parseInt(jQuery('#rw_cs_SB_HidNum').val())==1)
	{
		jQuery('input.alpha-color-picker').alphaColorPicker();
		jQuery('.wp-color-result').attr('title','Select');
		jQuery('.wp-color-result').attr('data-current','Selected'); 
	}
	var cs = jQuery('.range-cs'), range = jQuery('.range-cs__range'), value = jQuery('.range-cs__value');     
	cs.each(function()
	{
		value.each(function()
		{
			var value = jQuery(this).prev().attr('value');
			jQuery(this).html(value);
		});    
		range.on('input', function()
		{
			jQuery(this).next(value).html(this.value);
		});  
	});
}
//Social Icon Type Options Save
function RW_CS_SB_Type_Save(type,number)
{
	jQuery(".rw_sb_ic_"+type).css("border-radius",jQuery("#rw_cs_"+type+"_icon_r").val()+"%");
	jQuery(".rw_sb_ic_"+type).css("background-color",jQuery("#rw_cs_"+type+"_icon_BgC").val());
	jQuery(".rw_sb_ic_"+type).css("color",jQuery("#rw_cs_"+type+"_icon_C").val());
	jQuery(".rw_sb_ic_"+type).css("border-color",jQuery("#rw_cs_"+type+"_icon_BC").val());
	jQuery("#rw_cs_th_"+type+"_url").text(jQuery("#rw_cs_sb_"+type+"_url").val());
}
//Social Icon Types Sortable
function rw_cs_soc_Sortable()
{
	jQuery('#accordion1').sortable({
		update: function( event, ui ){
			jQuery(this).find('.fadeout').each(function(i){
				var name=jQuery(this).attr("name");
				jQuery(this).find('.rw_sb_ic').attr('href','#collapse_ShB'+(i+1));
				jQuery(this).find('.rw_sb_collapse').attr('id','collapse_ShB'+(i+1));
				jQuery(this).find('.RW_CS_SB_Save').attr('onclick','RW_CS_SB_Type_Save(\''+name+'\','+(i+1)+')');
			});
		}
	})
	sb_array_type=[];
	sb_array_url=[];
	sb_array_BgC=[];
	sb_array_C=[];
	sb_array_BC=[];
	sb_array_HBgC=[];
	sb_array_HC=[];
	sb_array_HBC=[];
	jQuery(".fadeout").find('.RW_inp_BgC').each(function(){
		sb_array_BgC.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	jQuery(".fadeout").find('.RW_inp_C').each(function(){
		sb_array_C.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	jQuery(".fadeout").find('.RW_inp_BC').each(function(){
		sb_array_BC.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	jQuery(".fadeout").find('.RW_inp_HBgC').each(function(){
		sb_array_HBgC.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
		jQuery(".rw_sb_ic_"+name).hover(function(){
			jQuery(this).css("background-color",jQuery("#rw_cs_"+name+"_icon_HBgC").val());
			}, function(){
			jQuery(this).css("background-color",jQuery("#rw_cs_"+name+"_icon_BgC").val());
		});
	})
	jQuery(".fadeout").find('.RW_inp_HC').each(function(){
		sb_array_HC.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	jQuery(".fadeout").find('.RW_inp_HBC').each(function(){
		sb_array_HBC.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	jQuery(".fadeout").find('.RW_SB_inp').each(function(){
		sb_array_url.push(jQuery(this).val());
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	jQuery(".fadeout").each(function(){
		sb_array_type.push(jQuery(this).attr("name"));
		var name=jQuery(this).attr("name");
		RW_CS_SB_Type_Save(name,parseInt(parseInt(jQuery(this).index())+1));
	})
	var txt_BgC=sb_array_BgC.join(";");
	jQuery("#rw_cs_social_BgC").val(txt_BgC);
	var txt_C=sb_array_C.join(";");
	jQuery("#rw_cs_social_C").val(txt_C);
	var txt_BC=sb_array_BC.join(";");
	jQuery("#rw_cs_social_BC").val(txt_BC);
	var txt_HBgC=sb_array_HBgC.join(";");
	jQuery("#rw_cs_social_HBgC").val(txt_HBgC);
	var txt_HC=sb_array_HC.join(";");
	jQuery("#rw_cs_social_HC").val(txt_HC);
	var txt_HBC=sb_array_HBC.join(";");
	jQuery("#rw_cs_social_HBC").val(txt_HBC);
	var txt_url=sb_array_url.join(";");
	jQuery("#rw_cs_social_Url").val(txt_url);
	var txt_type=sb_array_type.join(";");
	jQuery("#rw_cs_social_Type").val(txt_type);
}
//Social Ajax
function RW_CS_Soc()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_social_Show = jQuery("#rw_cs_social_Show").val(); var rw_cs_social_Type = jQuery("#rw_cs_social_Type").val(); var rw_cs_social_Url = jQuery("#rw_cs_social_Url").val(); var rw_cs_social_BgC = jQuery("#rw_cs_social_BgC").val(); var rw_cs_social_C = jQuery("#rw_cs_social_C").val(); var rw_cs_social_BC = jQuery("#rw_cs_social_BC").val(); var rw_cs_social_BSh = jQuery("#rw_cs_social_BSh").val(); var rw_cs_social_HBgC = jQuery("#rw_cs_social_HBgC").val(); var rw_cs_social_HC = jQuery("#rw_cs_social_HC").val(); var rw_cs_social_HBC = jQuery("#rw_cs_social_HBC").val(); var rw_cs_social_HBSh = jQuery("#rw_cs_social_HBSh").val(); var rw_cs_social_M = jQuery("#rw_cs_social_M").val(); var rw_cs_social_target = jQuery("#rw_cs_social_target").val(); var rw_cs_social_anim = jQuery("#rw_cs_social_anim").val(); var rw_cs_social_S = jQuery("#rw_cs_social_S").val(); var rw_cs_social_FS = jQuery("#rw_cs_social_FS").val(); var rw_cs_social_BW = jQuery("#rw_cs_social_BW").val(); var rw_cs_social_BR = jQuery("#rw_cs_social_BR").val(); var rw_cs_SB_HidNum = jQuery("#rw_cs_SB_HidNum").val(); var rw_cs_social_Custom_CSS = jQuery("#rw_cs_social_Custom_CSS").val();
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : { 'action_soc':'rw_csp_soc', 'rw_cs_social_Show':rw_cs_social_Show, 'rw_cs_social_Type':rw_cs_social_Type, 'rw_cs_social_Url':rw_cs_social_Url, 'rw_cs_social_BgC':rw_cs_social_BgC, 'rw_cs_social_C':rw_cs_social_C, 'rw_cs_social_BC':rw_cs_social_BC, 'rw_cs_social_BSh':rw_cs_social_BSh, 'rw_cs_social_HBgC':rw_cs_social_HBgC, 'rw_cs_social_HC':rw_cs_social_HC, 'rw_cs_social_HBC':rw_cs_social_HBC, 'rw_cs_social_HBSh':rw_cs_social_HBSh, 'rw_cs_social_M':rw_cs_social_M, 'rw_cs_social_target':rw_cs_social_target, 'rw_cs_social_anim':rw_cs_social_anim, 'rw_cs_social_S':rw_cs_social_S, 'rw_cs_social_FS':rw_cs_social_FS, 'rw_cs_social_BW':rw_cs_social_BW, 'rw_cs_social_BR':rw_cs_social_BR, 'rw_cs_SB_HidNum':rw_cs_SB_HidNum, 'rw_cs_social_Custom_CSS':rw_cs_social_Custom_CSS,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Social Reset
function RW_CS_Res_Soc()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_soc':'action_soc_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				location.reload();
			},2000)
		}
	});
}
function rw_change_soc_sizes(type){
	if(type=="S"){
		jQuery(".rw_sb_icc").css("width",parseInt(jQuery("#rw_cs_social_S").val())+"px");
		jQuery(".rw_sb_icc").css("height",parseInt(jQuery("#rw_cs_social_S").val())+"px");
		jQuery(".rw_sb_icc").css("line-height",parseInt(jQuery("#rw_cs_social_S").val())+"px");
	}else if(type=="FS"){
		jQuery(".rw_sb_icc").css("font-size",parseInt(jQuery("#rw_cs_social_FS").val())+"px");
	}else if(type=="BW"){
		jQuery(".rw_sb_icc").css("border-width",parseInt(jQuery("#rw_cs_social_"+type).val())+"px");
	}else if(type=="BR"){
		jQuery(".rw_sb_icc").css("border-radius",parseInt(jQuery("#rw_cs_social_"+type).val())+"%");
	}
}
//Content Ayax
function RW_CS_Content()
{
	jQuery('#RW_Load_Content_Admin').show();
	jQuery('.RW_Ubdate_Info').show();
	var rw_cs_content_width = jQuery("#rw_cs_content_width").val();
	var rw_cs_content_position = jQuery("#rw_cs_content_position").val();
	var rw_cs_content_padding_top = jQuery("#rw_cs_content_padding_top").val();
	var rw_cs_content_padding_left = jQuery("#rw_cs_content_padding_left").val();
	var rw_cs_content_padding_right = jQuery("#rw_cs_content_padding_right").val();

	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'action_soc':'rw_csp_content',
			'rw_cs_content_width':rw_cs_content_width,
			'rw_cs_content_position':rw_cs_content_position,
			'rw_cs_content_padding_top':rw_cs_content_padding_top,
			'rw_cs_content_padding_left':rw_cs_content_padding_left,
			'rw_cs_content_padding_right':rw_cs_content_padding_right,
		},
		success : function(data){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
//Social Reset
function RW_CS_Res_Content()
{
	jQuery.ajax(
	{
		type: "POST",
		url: location.href,
		data : {
			'reset_action_content':'action_content_reset',
		},
		success : function(data){
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').show();
				jQuery('.RW_Reseted_Info').show();
			},300)
			setTimeout(function(){
				jQuery('#RW_Load_Content_Admin').hide();
				jQuery('.RW_Reseted_Info').hide(500);
				jQuery("#rw_cs_footer_show").val("show");
				location.reload();
			},2000)
		}
	});
}
//Collapse Icons
function RW_IC_Colapse_Func(collaps){
	if(jQuery(".rw_ic_collaps_"+collaps).hasClass("rich_web-chevron-circle-right")){
		jQuery(".rw_ic_collaps").removeClass("rich_web-chevron-circle-down");
		jQuery(".rw_ic_collaps").addClass("rich_web-chevron-circle-right");
		jQuery(".rw_ic_collaps_"+collaps).attr("class","rw_ic_collaps rw_ic_collaps_"+collaps+" rich_web rich_web-chevron-circle-down")
	}else{
		jQuery(".rw_ic_collaps_"+collaps).attr("class","rw_ic_collaps rw_ic_collaps_"+collaps+" rich_web rich_web-chevron-circle-right")
	}
}
//Fav Icon Uploade
function rich_web_cs_Img_Src_Clicked()
{
	var zInt = setInterval(function(){
		var code = jQuery('#rich_web_cs_imgSrc_1').val();
		if(code.indexOf('img')>0){
			var s=code.split('src="'); 
			var src=s[1].split('"');
			jQuery('#rich_web_cs_imgSrc_2').val(src[0]);
			if(jQuery('#rich_web_cs_imgSrc_2').val().length>0){
				jQuery('#rich_web_cs_imgSrc_1').val('');
				clearInterval(zInt);
			}
		}
	},100)
}
//Logo Image Uploade
function rich_web_cs_logo_Img_Src_Clicked()
{
	var zInt = setInterval(function(){
		var code = jQuery('#rich_web_cs_logo_imgSrc_1').val();
		if(code.indexOf('img')>0){
			var s=code.split('src="'); 
			var src=s[1].split('"');
			jQuery('#rich_web_cs_logo_imgSrc_2').val(src[0]);
			if(jQuery('#rich_web_cs_logo_imgSrc_2').val().length>0){
				jQuery('#rich_web_cs_logo_imgSrc_1').val('');
				clearInterval(zInt);
			}
		}
	},100)
}
//Background Image Uploade
function rich_web_cs_bg_Img_Src_Clicked()
{
	var zInt = setInterval(function(){
		var code = jQuery('#rich_web_cs_bg_imgSrc_1').val();
		if(code.indexOf('img')>0){
			var s=code.split('src="'); 
			var src=s[1].split('"');
			jQuery('#rich_web_cs_bg_imgSrc_2').val(src[0]);
			if(jQuery('#rich_web_cs_bg_imgSrc_2').val().length>0){
				jQuery('#rich_web_cs_bg_imgSrc_1').val('');
				clearInterval(zInt);
			}
		}
	},100)
}
//Background Image Slideshow Images Uploade
function rich_web_cs_bgISl_Img_Src_Clicked()
{
	var zInt = setInterval(function(){
		var code = jQuery('#rich_web_cs_bgISl_imgSrc_1').val();
		if(code.indexOf('img')>0){
			var s=code.split('src="'); 
			var src=s[1].split('"');
			jQuery('#rich_web_cs_bgISl_imgSrc_2').val(src[0]);
			if(jQuery('#rich_web_cs_bgISl_imgSrc_2').val().length>0){
				jQuery('#rich_web_cs_bgISl_imgSrc_1').val('');
				clearInterval(zInt);
			}
		}
	},100)
}
//Background Video Uploade
function rich_web_cs_bg_Video_Src_Clicked()
{
	var RWIntervId = setInterval(function(){
		var code = jQuery('#rich_web_cs_bg_vSrs_1').val();
		if(code.indexOf('https://www.youtube.com/')>0)
		{
			var Rich_Web_Codes1=code.split('[embed]');
			if(code.indexOf('list')>0 || code.indexOf('index')>0)
			{
				var Rich_Web_Codes2= Rich_Web_Codes1[1].split("=");
				var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('&');
				jQuery('#rich_web_cs_bg_vSrs_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_cs_bg_vSrs_2').val().length>0){
					jQuery('#rich_web_cs_bg_vSrs_1').val('');
					clearInterval(RWIntervId);
				}
			}
			else if(code.indexOf('embed')>0)
			{
				var Rich_Web_Codes1=code.split('[embed]');
				var Rich_Web_Codes2=Rich_Web_Codes1[1].split('[/embed]');
				if(Rich_Web_Codes2[0].indexOf('watch?')>0)
				{
					var Rich_Web_Codes3=Rich_Web_Codes2[0].split('=');
					var Rich_Web_Codes3_spl=Rich_Web_Codes3[1].split('&');
					jQuery('#rich_web_cs_bg_vSrs_2').val(Rich_Web_Codes3_spl[0]);
					if(jQuery('#rich_web_cs_bg_vSrs_2').val().length>0){
						jQuery('#rich_web_cs_bg_vSrs_1').val('');
						clearInterval(RWIntervId);
					}
				}
				else
				{
					var Rich_Web_Code_Src=Rich_Web_Codes2[0];
					jQuery('#rich_web_cs_bg_vSrs_2').val(Rich_Web_Code_Src);
					if(jQuery('#rich_web_cs_bg_vSrs_2').val().length>0){
						jQuery('#rich_web_cs_bg_vSrs_1').val('');
						clearInterval(RWIntervId);
					}
				}
			}
			else
			{
				var Rich_Web_Codes2= Rich_Web_Codes1[1].split('=');
				var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('">https://');
				jQuery('#rich_web_cs_bg_vSrs_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_cs_bg_vSrs_2').val().length>0){
					jQuery('#rich_web_cs_bg_vSrs_1').val('');
					clearInterval(RWIntervId);
				}
			}
		}
	},100)
}
//Background Video Slideshow Videos Uploade
function rich_web_cs_bgVSl_Src_Clicked()
{
	var RWIntervId = setInterval(function(){
		var code = jQuery('#rich_web_cs_bgVSl_vSrc_1').val();
		if(code.indexOf('https://www.youtube.com/')>0)
		{
			var Rich_Web_Codes1=code.split('[embed]');
			if(code.indexOf('list')>0 || code.indexOf('index')>0)
			{
				var Rich_Web_Codes2= Rich_Web_Codes1[1].split("=");
				var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('&');
				jQuery('#rich_web_cs_bgVSl_vSrc_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_cs_bgVSl_vSrc_2').val().length>0){
					jQuery('#rich_web_cs_bgVSl_vSrc_1').val('');
					clearInterval(RWIntervId);
				}
			}
			else if(code.indexOf('embed')>0)
			{
				var Rich_Web_Codes1=code.split('[embed]');
				var Rich_Web_Codes2=Rich_Web_Codes1[1].split('[/embed]');
				if(Rich_Web_Codes2[0].indexOf('watch?')>0)
				{
					var Rich_Web_Codes3=Rich_Web_Codes2[0].split('=');
					var Rich_Web_Codes3_spl=Rich_Web_Codes3[1].split('&');
					jQuery('#rich_web_cs_bgVSl_vSrc_2').val(Rich_Web_Codes3_spl[0]);
					if(jQuery('#rich_web_cs_bgVSl_vSrc_2').val().length>0){
						jQuery('#rich_web_cs_bgVSl_vSrc_1').val('');
						clearInterval(RWIntervId);
					}
				}
				else
				{
					var Rich_Web_Code_Src=Rich_Web_Codes2[0];
					jQuery('#rich_web_cs_bgVSl_vSrc_2').val(Rich_Web_Code_Src);
					if(jQuery('#rich_web_cs_bgVSl_vSrc_2').val().length>0){
						jQuery('#rich_web_cs_bgVSl_vSrc_1').val('');
						clearInterval(RWIntervId);
					}
				}
			}
			else
			{
				var Rich_Web_Codes2= Rich_Web_Codes1[1].split('=');
				var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('">https://');
				jQuery('#rich_web_cs_bgVSl_vSrc_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_cs_bgVSl_vSrc_2').val().length>0){
					jQuery('#rich_web_cs_bgVSl_vSrc_1').val('');
					clearInterval(RWIntervId);
				}
			}
		}
	},100)
}
// Contact Form
function Rich_Web_CS_Forms_Fields_Clicked(Field_Name)
{
	jQuery('.Rich_Web_CS_Forms_Fields_Content').append('<div class="Rich_Web_CS_Forms_FC" id="Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'"><div class="Rich_Web_CS_Forms_FC_No"><span>'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'</span></div><div class="Rich_Web_CS_Forms_FC_C"><span class="Rich_Web_CS_Forms_FC_C_Span" data-type="minus" onclick="Rich_Web_CS_Forms_FC_C_Span_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')">-</span><span class="Rich_Web_CS_Forms_FC_C_Span" data-type="plus" onclick="Rich_Web_CS_Forms_FC_C_Span_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')">+</span></div><div class="Rich_Web_CS_Forms_FC_Lab"><label>1/1</label><label>'+Field_Name+'</label><input type="text" style="display:none" class="Rich_Web_CS_Forms_FF" id="Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FW" id="Rich_Web_CS_Forms_Field_W_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_W_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value="100%"><input type="text" style="display:none" class="Rich_Web_CS_Forms_FT" id="Rich_Web_CS_Forms_Field_T_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_T_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value="'+Field_Name+'"><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO1" id="Rich_Web_CS_Forms_Field_O1_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O1_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO2" id="Rich_Web_CS_Forms_Field_O2_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O2_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO3" id="Rich_Web_CS_Forms_Field_O3_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O3_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO4" id="Rich_Web_CS_Forms_Field_O4_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O4_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO5" id="Rich_Web_CS_Forms_Field_O5_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O5_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO6" id="Rich_Web_CS_Forms_Field_O6_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O6_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO7" id="Rich_Web_CS_Forms_Field_O7_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O7_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO8" id="Rich_Web_CS_Forms_Field_O8_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O8_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><i class="Rich_Web_CS_Forms_FC_LabEdit rich_web rich_web-pencil" aria-hidden="true"></i><i class="Rich_Web_CS_Forms_FC_LabCopy rich_web rich_web-files-o" aria-hidden="true" onclick="Rich_Web_CS_Forms_FC_LabCopy_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')"></i><i class="Rich_Web_CS_Forms_FC_LabRemove rich_web rich_web-trash" aria-hidden="true" onclick="Rich_Web_CS_Forms_FC_LabRemove_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')"></i></div></div>');
	Rich_Web_CS_Forms_FC_LabEdit_Clicked();
	jQuery('#Rich_Web_CS_Forms_New_Co').val(parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1));
}
function Rich_Web_CS_Forms_Fields_Clicked_Pro(Field_Name)
{
	Rich_Web_CS_Forms_Fields_Clicked(Field_Name);
}
function Rich_Web_CS_Forms_FC_Sortable()
{
	jQuery('#Rich_Web_CS_Forms_Fields_Content').sortable({
		update: function(){
			jQuery(".Rich_Web_CS_Forms_FC").each(function(){
				jQuery(this).find('div[class=Rich_Web_CS_Forms_FC_No]').find('span').html(parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('name', 'Rich_Web_CS_Forms_Field_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('id', 'Rich_Web_CS_Forms_Field_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FW]').attr('name', 'Rich_Web_CS_Forms_Field_W_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FW]').attr('id', 'Rich_Web_CS_Forms_Field_W_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FT]').attr('name', 'Rich_Web_CS_Forms_Field_T_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FT]').attr('id', 'Rich_Web_CS_Forms_Field_T_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').attr('name', 'Rich_Web_CS_Forms_Field_O1_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').attr('id', 'Rich_Web_CS_Forms_Field_O1_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').attr('name', 'Rich_Web_CS_Forms_Field_O2_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').attr('id', 'Rich_Web_CS_Forms_Field_O2_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').attr('name', 'Rich_Web_CS_Forms_Field_O3_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').attr('id', 'Rich_Web_CS_Forms_Field_O3_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').attr('name', 'Rich_Web_CS_Forms_Field_O4_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').attr('id', 'Rich_Web_CS_Forms_Field_O4_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').attr('name', 'Rich_Web_CS_Forms_Field_O5_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').attr('id', 'Rich_Web_CS_Forms_Field_O5_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').attr('name', 'Rich_Web_CS_Forms_Field_O6_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').attr('id', 'Rich_Web_CS_Forms_Field_O6_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').attr('name', 'Rich_Web_CS_Forms_Field_O7_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').attr('id', 'Rich_Web_CS_Forms_Field_O7_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').attr('name', 'Rich_Web_CS_Forms_Field_O8_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').attr('id', 'Rich_Web_CS_Forms_Field_O8_'+(parseInt(parseInt(jQuery(this).index())+1)));
			});
		}
	})
}
function Rich_Web_CS_Forms_FC_C_Span_Clicked(Field_ID)
{
	if(jQuery('#Rich_Web_CS_Forms_Field_'+Field_ID).find('.Rich_Web_CS_Forms_FC_Lab').find('label').html()=='1/1')
	{
		var Width='50%';
		var Width1='1/2';
		var Width2='49%';
	}
	else
	{
		var Width='100%';
		var Width1='1/1';
		var Width2='100%';
	}
	jQuery('#Rich_Web_CS_Forms_Field_'+Field_ID).css('width', Width);
	jQuery('#Rich_Web_CS_Forms_Field_'+Field_ID).find('input[type=text][class=Rich_Web_CS_Forms_FW]').val(Width2);
	jQuery('#Rich_Web_CS_Forms_Field_'+Field_ID).find('.Rich_Web_CS_Forms_FC_Lab').find('label:first-child').html(Width1);
}
function Rich_Web_CS_Forms_FC_LabCopy_Clicked(Field_ID)
{
	var Rich_Web_CS_Forms_Field_T=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FT]').val();
	var Rich_Web_CS_Forms_Field=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FF]').val();

	var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').val();
	var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').val();
	var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').val();
	var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').val();
	var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').val();
	var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').val();
	var Rich_Web_CS_Forms_Field_O7=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').val();
	var Rich_Web_CS_Forms_Field_O8=jQuery('#Rich_Web_CS_Forms_Field_'+num).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').val();

	jQuery('#Rich_Web_CS_Forms_Field_'+num).after('<div class="Rich_Web_CS_Forms_FC" id="Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'"><div class="Rich_Web_CS_Forms_FC_No"><span>'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'</span></div><div class="Rich_Web_CS_Forms_FC_C"><span class="Rich_Web_CS_Forms_FC_C_Span" data-type="minus" onclick="Rich_Web_CS_Forms_FC_C_Span_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')">-</span><span class="Rich_Web_CS_Forms_FC_C_Span" data-type="plus" onclick="Rich_Web_CS_Forms_FC_C_Span_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')">+</span></div><div class="Rich_Web_CS_Forms_FC_Lab"><label>1/1</label><label>'+Rich_Web_CS_Forms_Field_T+'</label><input type="text" style="display:none" class="Rich_Web_CS_Forms_FF" id="Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FW" id="Rich_Web_CS_Forms_Field_W_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_W_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value="100%"><input type="text" style="display:none" class="Rich_Web_CS_Forms_FT" id="Rich_Web_CS_Forms_Field_T_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_T_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value="'+Rich_Web_CS_Forms_Field_T+'"><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO1" id="Rich_Web_CS_Forms_Field_O1_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O1_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO2" id="Rich_Web_CS_Forms_Field_O2_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O2_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO3" id="Rich_Web_CS_Forms_Field_O3_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O3_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO4" id="Rich_Web_CS_Forms_Field_O4_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O4_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO5" id="Rich_Web_CS_Forms_Field_O5_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O5_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO6" id="Rich_Web_CS_Forms_Field_O6_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O6_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO7" id="Rich_Web_CS_Forms_Field_O7_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O7_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><input type="text" style="display:none" class="Rich_Web_CS_Forms_FO8" id="Rich_Web_CS_Forms_Field_O8_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" name="Rich_Web_CS_Forms_Field_O8_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+'" value=""><i class="Rich_Web_CS_Forms_FC_LabEdit rich_web rich_web-pencil" aria-hidden="true"></i><i class="Rich_Web_CS_Forms_FC_LabCopy rich_web rich_web-files-o" aria-hidden="true" onclick="Rich_Web_CS_Forms_FC_LabCopy_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')"></i><i class="Rich_Web_CS_Forms_FC_LabRemove rich_web rich_web-trash" aria-hidden="true" onclick="Rich_Web_CS_Forms_FC_LabRemove_Clicked('+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)+')"></i></div></div>');

	if(jQuery('#Rich_Web_CS_Forms_Field_'+num).find('.Rich_Web_CS_Forms_FC_Lab').find('label').html()=='1/1')
	{
		var Width='100%';
		var Width1='1/1';
		var Width2='100%';
	}
	else
	{
		var Width='50%';
		var Width1='1/2';
		var Width2='49%';
	}
	jQuery('#Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field);
	jQuery('#Rich_Web_CS_Forms_Field_O1_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O1);
	jQuery('#Rich_Web_CS_Forms_Field_O2_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O2);
	jQuery('#Rich_Web_CS_Forms_Field_O3_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O3);
	jQuery('#Rich_Web_CS_Forms_Field_O4_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O4);
	jQuery('#Rich_Web_CS_Forms_Field_O5_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O5);
	jQuery('#Rich_Web_CS_Forms_Field_O6_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O6);
	jQuery('#Rich_Web_CS_Forms_Field_O7_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O7);
	jQuery('#Rich_Web_CS_Forms_Field_O8_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).val(Rich_Web_CS_Forms_Field_O8);

	jQuery('#Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).css('width', Width);
	jQuery('#Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).find('input[type=text][class=Rich_Web_CS_Forms_FW]').val(Width2);
	jQuery('#Rich_Web_CS_Forms_Field_'+parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1)).find('.Rich_Web_CS_Forms_FC_Lab').find('label:first-child').html(Width1);

	Rich_Web_CS_Forms_FC_LabEdit_Clicked();
	jQuery('#Rich_Web_CS_Forms_New_Co').val(parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())+1));
	jQuery(".Rich_Web_CS_Forms_FC").each(function(){
		jQuery(this).find('div[class=Rich_Web_CS_Forms_FC_No]').find('span').html(parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('name', 'Rich_Web_CS_Forms_Field_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('id', 'Rich_Web_CS_Forms_Field_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FW]').attr('name', 'Rich_Web_CS_Forms_Field_W_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FW]').attr('id', 'Rich_Web_CS_Forms_Field_W_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FT]').attr('name', 'Rich_Web_CS_Forms_Field_T_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FT]').attr('id', 'Rich_Web_CS_Forms_Field_T_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').attr('name', 'Rich_Web_CS_Forms_Field_O1_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').attr('id', 'Rich_Web_CS_Forms_Field_O1_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').attr('name', 'Rich_Web_CS_Forms_Field_O2_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').attr('id', 'Rich_Web_CS_Forms_Field_O2_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').attr('name', 'Rich_Web_CS_Forms_Field_O3_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').attr('id', 'Rich_Web_CS_Forms_Field_O3_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').attr('name', 'Rich_Web_CS_Forms_Field_O4_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').attr('id', 'Rich_Web_CS_Forms_Field_O4_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').attr('name', 'Rich_Web_CS_Forms_Field_O5_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').attr('id', 'Rich_Web_CS_Forms_Field_O5_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').attr('name', 'Rich_Web_CS_Forms_Field_O6_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').attr('id', 'Rich_Web_CS_Forms_Field_O6_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').attr('name', 'Rich_Web_CS_Forms_Field_O7_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').attr('id', 'Rich_Web_CS_Forms_Field_O7_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').attr('name', 'Rich_Web_CS_Forms_Field_O8_'+(parseInt(parseInt(jQuery(this).index())+1)));
		jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').attr('id', 'Rich_Web_CS_Forms_Field_O8_'+(parseInt(parseInt(jQuery(this).index())+1)));
	});
}
function Rich_Web_CS_Forms_FC_LabRemove_Clicked(Field_ID)
{
	var RWCSRF = Field_ID;
	jQuery('.Rich_Web_CS_Forms_Fixed_Div').fadeIn();
	jQuery('.Rich_Web_CS_Forms_Absolute_Div').fadeIn();

	jQuery('.Rich_Web_CS_Forms_Relative_No').click(function(){
		jQuery('.Rich_Web_CS_Forms_Fixed_Div').fadeOut();
		jQuery('.Rich_Web_CS_Forms_Absolute_Div').fadeOut();
		RWCSRF = null;
	})
	jQuery('.Rich_Web_CS_Forms_Relative_Yes').click(function(){
		if(RWCSRF != null)
		{
			jQuery('.Rich_Web_CS_Forms_Fixed_Div').fadeOut();
			jQuery('.Rich_Web_CS_Forms_Absolute_Div').fadeOut();
			jQuery('#Rich_Web_CS_Forms_Field_'+RWCSRF).remove();
			jQuery('#Rich_Web_CS_Forms_New_Co').val(parseInt(parseInt(jQuery('#Rich_Web_CS_Forms_New_Co').val())-1));
			jQuery(".Rich_Web_CS_Forms_FC").each(function(){
				jQuery(this).find('div[class=Rich_Web_CS_Forms_FC_No]').find('span').html(parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('name', 'Rich_Web_CS_Forms_Field_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('id', 'Rich_Web_CS_Forms_Field_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FW]').attr('name', 'Rich_Web_CS_Forms_Field_W_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FW]').attr('id', 'Rich_Web_CS_Forms_Field_W_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FT]').attr('name', 'Rich_Web_CS_Forms_Field_T_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FT]').attr('id', 'Rich_Web_CS_Forms_Field_T_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').attr('name', 'Rich_Web_CS_Forms_Field_O1_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO1]').attr('id', 'Rich_Web_CS_Forms_Field_O1_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').attr('name', 'Rich_Web_CS_Forms_Field_O2_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO2]').attr('id', 'Rich_Web_CS_Forms_Field_O2_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').attr('name', 'Rich_Web_CS_Forms_Field_O3_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO3]').attr('id', 'Rich_Web_CS_Forms_Field_O3_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').attr('name', 'Rich_Web_CS_Forms_Field_O4_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO4]').attr('id', 'Rich_Web_CS_Forms_Field_O4_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').attr('name', 'Rich_Web_CS_Forms_Field_O5_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO5]').attr('id', 'Rich_Web_CS_Forms_Field_O5_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').attr('name', 'Rich_Web_CS_Forms_Field_O6_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO6]').attr('id', 'Rich_Web_CS_Forms_Field_O6_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').attr('name', 'Rich_Web_CS_Forms_Field_O7_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO7]').attr('id', 'Rich_Web_CS_Forms_Field_O7_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').attr('name', 'Rich_Web_CS_Forms_Field_O8_'+(parseInt(parseInt(jQuery(this).index())+1)));
				jQuery(this).find('input[type=text][class=Rich_Web_CS_Forms_FO8]').attr('id', 'Rich_Web_CS_Forms_Field_O8_'+(parseInt(parseInt(jQuery(this).index())+1)));
			});
		}
		RWCSRF = null;
	})
}
function Rich_Web_CS_Forms_FC_LabEdit_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_LabEdit').click(function(){
		var Rich_Web_CS_Forms_FC_Label=jQuery(this).parent().find('label:nth-child(2)').html();
		var Rich_Web_CS_Forms_FC_Rel=jQuery(this).parent().find('input[type=text][class=Rich_Web_CS_Forms_FF]').attr('id');
		jQuery('.Rich_Web_CS_Forms_Fields_Content').fadeOut(500);
		jQuery('.RW_CS_Form_But').fadeOut(500);
		setTimeout(function(){
			if(Rich_Web_CS_Forms_FC_Label=='Text Box')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Text_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Text_P]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find('select[name=Rich_Web_CS_Forms_FEditing_Text_LP]').val(Rich_Web_CS_Forms_Field_O3);

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find("input[name=Rich_Web_CS_Forms_FEditing_Text_T]").each(function(){
					if(jQuery(this).val()==Rich_Web_CS_Forms_Field_O4)
					{
						jQuery(this).attr('checked',true);
					}
				})

				if(Rich_Web_CS_Forms_Field_O5=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find("input[name=Rich_Web_CS_Forms_FEditing_Text_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find("input[name=Rich_Web_CS_Forms_FEditing_Text_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find("input[name=Rich_Web_CS_Forms_FEditing_Text_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').find("input[name=Rich_Web_CS_Forms_FEditing_Text_A]").attr("checked",true);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Text').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Textarea')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O7=jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }
				if(Rich_Web_CS_Forms_Field_O4==''){ Rich_Web_CS_Forms_Field_O4=80; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[id=Rich_Web_CS_Forms_FEditing_TA_H]").val(Rich_Web_CS_Forms_Field_O4);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_TA_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_TA_P]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find('select[name=Rich_Web_CS_Forms_FEditing_TA_LP]').val(Rich_Web_CS_Forms_Field_O3);

				if(Rich_Web_CS_Forms_Field_O5=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[name=Rich_Web_CS_Forms_FEditing_TA_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[name=Rich_Web_CS_Forms_FEditing_TA_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[name=Rich_Web_CS_Forms_FEditing_TA_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[name=Rich_Web_CS_Forms_FEditing_TA_A]").attr("checked",true);
				}
				if(Rich_Web_CS_Forms_Field_O7=='vertical')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[name=Rich_Web_CS_Forms_FEditing_TA_ReS]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').find("input[name=Rich_Web_CS_Forms_FEditing_TA_ReS]").attr("checked",false);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Textarea').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Select Menu')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_SM_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_SM_P]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').find('select[name=Rich_Web_CS_Forms_FEditing_SM_LP]').val(Rich_Web_CS_Forms_Field_O3);

				var Rich_Web_CS_Forms_Fields_Editing_Select_OPT=Rich_Web_CS_Forms_Field_O5.split('qwertyh');
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').html('');
				if(Rich_Web_CS_Forms_Fields_Editing_Select_OPT!='')
				{
					for(var i=0;i<Rich_Web_CS_Forms_Fields_Editing_Select_OPT.length;i++)
					{
						jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').append('<div><input type="text" name="" value="'+Rich_Web_CS_Forms_Fields_Editing_Select_OPT[i]+'"><i class="Rich_Web_CS_Forms_FC_EditOption_Del rich_web rich_web-trash" aria-hidden="true"></i></div>');
					}
				}
				
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Select').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Check Box')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O2==''){ Rich_Web_CS_Forms_Field_O2='Left'; }
				if(Rich_Web_CS_Forms_Field_O4==''){ Rich_Web_CS_Forms_Field_O4=1; }
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_CB_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find('select[name=Rich_Web_CS_Forms_FEditing_CB_LP]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find('#Rich_Web_CS_Forms_FEditing_CB_CC').val(Rich_Web_CS_Forms_Field_O4);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find('#Rich_Web_CS_Forms_FEditing_CB_CC_Span').html(Rich_Web_CS_Forms_Field_O4);
				if(Rich_Web_CS_Forms_Field_O3=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find("input[name=Rich_Web_CS_Forms_FEditing_CB_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find("input[name=Rich_Web_CS_Forms_FEditing_CB_A]").attr("checked",true);
				}

				var Rich_Web_CS_Forms_Fields_Editing_Check_OPT=Rich_Web_CS_Forms_Field_O5.split('qwertyh');
				var Rich_Web_CS_Forms_Fields_Editing_Check_CHK=Rich_Web_CS_Forms_Field_O6.split('qwertyh');
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').html('');
				if(Rich_Web_CS_Forms_Fields_Editing_Check_OPT!='')
				{
					for(var i=0;i<Rich_Web_CS_Forms_Fields_Editing_Check_OPT.length;i++)
					{
						jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').append('<div><input type="text" name="" value="'+Rich_Web_CS_Forms_Fields_Editing_Check_OPT[i]+'"><input type="checkbox" class="Rich_Web_CS_Forms_FC_EditChecks_Check" '+Rich_Web_CS_Forms_Fields_Editing_Check_CHK[i]+'><i class="Rich_Web_CS_Forms_FC_EditChecks_Del rich_web rich_web-trash" aria-hidden="true"></i></div>');
					}
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Check').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Radio Box')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O2==''){ Rich_Web_CS_Forms_Field_O2='Left'; }
				if(Rich_Web_CS_Forms_Field_O4==''){ Rich_Web_CS_Forms_Field_O4=1; }
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_RB_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find('select[name=Rich_Web_CS_Forms_FEditing_RB_LP]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find('#Rich_Web_CS_Forms_FEditing_RB_CC').val(Rich_Web_CS_Forms_Field_O4);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find('#Rich_Web_CS_Forms_FEditing_RB_CC_Span').html(Rich_Web_CS_Forms_Field_O4);
				if(Rich_Web_CS_Forms_Field_O3=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find("input[name=Rich_Web_CS_Forms_FEditing_RB_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find("input[name=Rich_Web_CS_Forms_FEditing_RB_A]").attr("checked",true);
				}

				var Rich_Web_CS_Forms_Fields_Editing_Radio_OPT=Rich_Web_CS_Forms_Field_O5.split('qwertyh');
				var Rich_Web_CS_Forms_Fields_Editing_Radio_CHK=Rich_Web_CS_Forms_Field_O6.split('qwertyh');
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').html('');
				if(Rich_Web_CS_Forms_Fields_Editing_Radio_OPT!='')
				{
					for(var i=0;i<Rich_Web_CS_Forms_Fields_Editing_Radio_OPT.length;i++)
					{
						jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').append('<div><input type="text" name="" value="'+Rich_Web_CS_Forms_Fields_Editing_Radio_OPT[i]+'"><input type="checkbox" class="Rich_Web_CS_Forms_FC_EditRadios_Check" '+Rich_Web_CS_Forms_Fields_Editing_Radio_CHK[i]+'><i class="Rich_Web_CS_Forms_FC_EditRadios_Del rich_web rich_web-trash" aria-hidden="true"></i></div>');
					}
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Radio').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='File')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				
				if(Rich_Web_CS_Forms_Field_O2==''){ Rich_Web_CS_Forms_Field_O2='Left'; }
				if(Rich_Web_CS_Forms_Field_O5==''){ Rich_Web_CS_Forms_Field_O5='.jpg, .png, .gif, .xlsx, .pdf, .xml, .xmlx, .xls, .xtx'; }
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_F_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').find('select[name=Rich_Web_CS_Forms_FEditing_F_LP]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_F_FD]').val(Rich_Web_CS_Forms_Field_O4);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_F_AT]').val(Rich_Web_CS_Forms_Field_O5);
				
				if(Rich_Web_CS_Forms_Field_O3=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').find("input[name=Rich_Web_CS_Forms_FEditing_F_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').find("input[name=Rich_Web_CS_Forms_FEditing_F_R]").attr("checked",false);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_File').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Custom Text')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Custom').fadeIn();
				var CustomContentText=jQuery('input#'+Rich_Web_CS_Forms_FC_Rel).val();
				tinymce.get('Rich_Web_CS_Forms_Fields_Editing_Custom_ID').setContent(CustomContentText);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Custom').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Email')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_E_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_E_P]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find('select[name=Rich_Web_CS_Forms_FEditing_E_LP]').val(Rich_Web_CS_Forms_Field_O3);

				if(Rich_Web_CS_Forms_Field_O4=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find("input[name=Rich_Web_CS_Forms_FEditing_E_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find("input[name=Rich_Web_CS_Forms_FEditing_E_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O5=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find("input[name=Rich_Web_CS_Forms_FEditing_E_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').find("input[name=Rich_Web_CS_Forms_FEditing_E_A]").attr("checked",true);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Email').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Button')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').fadeIn();
				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Go to URL'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').find('input[name=Rich_Web_CS_Forms_FEditing_B_BT]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').find('input[name=Rich_Web_CS_Forms_FEditing_B_RBT]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').find('select[name=Rich_Web_CS_Forms_FEditing_B_AAC]').val(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').find('input[name=Rich_Web_CS_Forms_FEditing_B_URL]').val(Rich_Web_CS_Forms_Field_O4);

				if(Rich_Web_CS_Forms_Field_O5=='show')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').find("input[name=Rich_Web_CS_Forms_FEditing_B_SRB]").attr("checked",true);
				}

				Rich_Web_CS_Forms_FC_Edit_AAC_Clicked();
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Button').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Divider')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Divider').fadeIn();
				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O1==''){ Rich_Web_CS_Forms_Field_O1=0; }
				if(Rich_Web_CS_Forms_Field_O2==''){ Rich_Web_CS_Forms_Field_O2='none'; }
				
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Divider').find('input[id=Rich_Web_CS_Forms_FEditing_D_H]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Divider').find('span[id=Rich_Web_CS_Forms_FEditing_D_H_Span]').html(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Divider').find('select[name=Rich_Web_CS_Forms_FEditing_D_S]').val(Rich_Web_CS_Forms_Field_O2);

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Divider').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Space')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Space').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O1==''){ Rich_Web_CS_Forms_Field_O1=0; }
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Space').find('input[id=Rich_Web_CS_Forms_FEditing_S_W]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Space').find('span[id=Rich_Web_CS_Forms_FEditing_S_W_Span]').html(Rich_Web_CS_Forms_Field_O1);

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Space').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Captcha')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Captcha').fadeIn();
				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];
				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O1==''){ Rich_Web_CS_Forms_Field_O1='light'; }
				if(Rich_Web_CS_Forms_Field_O2==''){ Rich_Web_CS_Forms_Field_O2='normal'; }
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='audio'; }
				if(Rich_Web_CS_Forms_Field_O4==''){ Rich_Web_CS_Forms_Field_O4='left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Captcha').find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Theme]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Captcha').find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Size]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Captcha').find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Type]').val(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Captcha').find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Pos]').val(Rich_Web_CS_Forms_Field_O4);

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Captcha').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='DatePicker')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O7=jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_DateP_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_DateP_P]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find('select[name=Rich_Web_CS_Forms_FEditing_DateP_LP]').val(Rich_Web_CS_Forms_Field_O3);

				if(Rich_Web_CS_Forms_Field_O4=='current')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_Cur]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_Cur]").attr("checked",false);
				}

				if(Rich_Web_CS_Forms_Field_O5=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_A]").attr("checked",true);
				}
				if(Rich_Web_CS_Forms_Field_O7=='FromTo')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_FT]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').find("input[name=Rich_Web_CS_Forms_FEditing_DateP_FT]").attr("checked",false);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_DatePicker').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='TimePicker')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O7=jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_TimeP_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find('select[name=Rich_Web_CS_Forms_FEditing_TimeP_LP]').val(Rich_Web_CS_Forms_Field_O3);

				if(Rich_Web_CS_Forms_Field_O4=='current')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_Cur]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_Cur]").attr("checked",false);
				}

				if(Rich_Web_CS_Forms_Field_O5=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_A]").attr("checked",true);
				}
				if(Rich_Web_CS_Forms_Field_O7=='FromTo')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_FT]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_FT]").attr("checked",false);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_TimePicker').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Full Name')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_FullN_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find('select[name=Rich_Web_CS_Forms_FEditing_FullN_LP]').val(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_FullN_P_1]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_FullN_P_2]').val(Rich_Web_CS_Forms_Field_O4);

				if(Rich_Web_CS_Forms_Field_O5=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find("input[name=Rich_Web_CS_Forms_FEditing_FullN_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find("input[name=Rich_Web_CS_Forms_FEditing_FullN_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find("input[name=Rich_Web_CS_Forms_FEditing_FullN_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').find("input[name=Rich_Web_CS_Forms_FEditing_FullN_A]").attr("checked",true);
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Full_Name').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Phone')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Phone_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find('select[name=Rich_Web_CS_Forms_FEditing_Phone_LP]').val(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Phone_P]').val(Rich_Web_CS_Forms_Field_O2);
				
				if(Rich_Web_CS_Forms_Field_O5=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find("input[name=Rich_Web_CS_Forms_FEditing_Phone_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find("input[name=Rich_Web_CS_Forms_FEditing_Phone_R]").attr("checked",false);
				}
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find("input[name=Rich_Web_CS_Forms_FEditing_Phone_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').find("input[name=Rich_Web_CS_Forms_FEditing_Phone_A]").attr("checked",true);
				}
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Phone').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Country')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O5=jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O6=jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3==''){ Rich_Web_CS_Forms_Field_O3='Left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Country_L]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').find('select[name=Rich_Web_CS_Forms_FEditing_Country_LP]').val(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Country_P]').val(Rich_Web_CS_Forms_Field_O2);
				
				if(Rich_Web_CS_Forms_Field_O6=='disabled')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').find("input[name=Rich_Web_CS_Forms_FEditing_Country_A]").attr("checked",false);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').find("input[name=Rich_Web_CS_Forms_FEditing_Country_A]").attr("checked",true);
				}
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Country').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Privacy Policy')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Privacy').fadeIn();
				
				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O2 == ''){ Rich_Web_CS_Forms_Field_O2 = 'Left'; }
				if(Rich_Web_CS_Forms_Field_O4 == ''){ Rich_Web_CS_Forms_Field_O4 = 'left'; }

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Privacy').find('select[name=Rich_Web_CS_Forms_FEditing_Privacy_Pos]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Privacy').find('select[name=Rich_Web_CS_Forms_FEditing_Privacy_FPos]').val(Rich_Web_CS_Forms_Field_O4);

				if(Rich_Web_CS_Forms_Field_O3=='required')
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Privacy').find("input[name=Rich_Web_CS_Forms_FEditing_Privacy_R]").attr("checked",true);
				}
				else
				{
					jQuery('.Rich_Web_CS_Forms_Fields_Editing_Privacy').find("input[name=Rich_Web_CS_Forms_FEditing_Privacy_R]").attr("checked",false);
				}

				tinymce.get('Rich_Web_CS_Forms_Fields_Editing_Privacy_ID').setContent(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Privacy').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
			else if(Rich_Web_CS_Forms_FC_Label=='Google Map')
			{
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').fadeIn();

				var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FC_Rel.split('Rich_Web_CS_Forms_Field_')[1];

				var Rich_Web_CS_Forms_Field_O1=jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O2=jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O3=jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				var Rich_Web_CS_Forms_Field_O4=jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val();
				if(Rich_Web_CS_Forms_Field_O3 == '')
				{
					Rich_Web_CS_Forms_Field_O3 = '1';
				}

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Lat]').val(Rich_Web_CS_Forms_Field_O1);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Long]').val(Rich_Web_CS_Forms_Field_O2);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Zoom]').val(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('span[id=Rich_Web_CS_Forms_FEditing_Map_Zoom_Span]').html(Rich_Web_CS_Forms_Field_O3);
				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('select[id=Rich_Web_CS_Forms_FEditing_Map_Type]').val(Rich_Web_CS_Forms_Field_O4);

				jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').attr('rel', Rich_Web_CS_Forms_FC_Rel);
			}
		}, 500);
		Rich_Web_CS_Forms_FC_EditUndo_Clicked();
		Rich_Web_CS_Forms_FC_EditSave_Clicked();
		Rich_Web_CS_Forms_RangeSlider();
	})
}
function Rich_Web_CS_Forms_FC_EditUndo_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditUndo').click(function(){
		jQuery('.Rich_Web_CS_Forms_Fields_Editing').fadeOut(500);
		setTimeout(function(){
			jQuery('.Rich_Web_CS_Forms_Fields_Content').fadeIn();
			jQuery('.RW_CS_Form_But').fadeIn();
		}, 500);
		if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Text'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Text_T][value='Simple Text']").prop("checked",true);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Text_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Text_A]").prop("checked",true);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Textarea'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_TA_H').val('80');
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_TA_H_Span').html('80');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TA_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TA_A]").prop("checked",true);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TA_ReS]").prop("checked",false);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Select'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').html('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Check'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_CB_A]").prop("checked",true);
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_CB_CC').val(1);
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_CB_CC_Span').html(1);
			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').html('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Radio'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_RB_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_RB_A]").prop("checked",true);
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_RB_CC').val(1);
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_RB_CC_Span').html(1);
			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').html('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_File'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_F_R]").prop("checked",false);
			jQuery(this).parent().parent().find('input[name=Rich_Web_CS_Forms_FEditing_F_AT]').val('.jpg, .png, .gif, .xlsx, .pdf, .xml, .xmlx, .xls, .xtx');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Custom'))
		{
			tinymce.get('Rich_Web_CS_Forms_Fields_Editing_Custom_ID').setContent('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Email'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_E_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_E_A]").prop("checked",true);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Button'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Go to URL');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_B_SRB]").prop("checked",false);
			jQuery(this).parent().parent().find('select').parent().find('label:nth-last-of-type(1)').fadeIn(500);
			jQuery(this).parent().parent().find('select').parent().find('input[type=text]').fadeIn(500);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Divider'))
		{
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_D_H').val(0);
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_D_H_Span').html(0);
			jQuery(this).parent().parent().find('select').val('none');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Space'))
		{
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_S_W').val(0);
			jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_S_W_Span').html(0);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Captcha'))
		{
			jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Theme').val('light');
			jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Size').val('normal');
			jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Type').val('audio');
			jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Pos').val('left');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_DatePicker'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_DateP_Cur]").prop("checked",true);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_DateP_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_DateP_A]").prop("checked",true);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_DateP_FT]").prop("checked",false);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_TimePicker'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TimeP_Cur]").prop("checked",true);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TimeP_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TimeP_A]").prop("checked",true);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_TimeP_FT]").prop("checked",false);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Full_Name'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_FullN_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_FullN_A]").prop("checked",true);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Phone'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Phone_R]").prop("checked",false);
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Phone_A]").prop("checked",true);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Country'))
		{
			jQuery(this).parent().parent().find('input[type=text]').val('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Country_A]").prop("checked",true);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Privacy'))
		{
			tinymce.get('Rich_Web_CS_Forms_Fields_Editing_Privacy_ID').setContent('');
			jQuery(this).parent().parent().find('select').val('Left');
			jQuery("input[name=Rich_Web_CS_Forms_FEditing_Privacy_R]").prop("checked",true);
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Map'))
		{
			jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Lat]').val('');
			jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Long]').val('');
			jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Zoom]').val('1');
			jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('select[id=Rich_Web_CS_Forms_FEditing_Map_Type]').val('ROADMAP');
		}
	})
}
function Rich_Web_CS_Forms_FC_EditSave_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditSave').click(function(){
		jQuery('.Rich_Web_CS_Forms_Fields_Editing').fadeOut(500);
		setTimeout(function(){
			jQuery('.Rich_Web_CS_Forms_Fields_Content').fadeIn();
			jQuery('.RW_CS_Form_But').fadeIn();
		}, 500);
		if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Text'))
		{
			var Rich_Web_CS_Forms_FEditing_Text_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_Text_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_Text_R=''; 
			var Rich_Web_CS_Forms_FEditing_Text_Req=''; 
			var Rich_Web_CS_Forms_FEditing_Text_A=''; 
			var Rich_Web_CS_Forms_FEditing_Text_T='';
			var Rich_Web_CS_Forms_FEditing_Text_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Text_L]').val();
			var Rich_Web_CS_Forms_FEditing_Text_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Text_P]').val();
			var Rich_Web_CS_Forms_FEditing_Text_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Text_LP]').val();
			var Rich_Web_CS_Forms_FEditing_Text_Rel=jQuery(this).parent().parent().attr('rel');

				jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Text_T]").each(function(){
				if(jQuery(this).prop('checked'))
				{
					Rich_Web_CS_Forms_FEditing_Text_T=jQuery(this).val();
				}
			})
				
			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Text_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_Text_R='required';
				Rich_Web_CS_Forms_FEditing_Text_Req='*'
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Text_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_Text_A='disabled';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_Text_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Text_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Text_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Text_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Text_T);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Text_R);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Text_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Textarea'))
		{
			var Rich_Web_CS_Forms_FEditing_TA_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_TA_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_TA_R=''; 
			var Rich_Web_CS_Forms_FEditing_TA_Req=''; 
			var Rich_Web_CS_Forms_FEditing_TA_A=''; 
			var Rich_Web_CS_Forms_FEditing_TA_ReS='none'; 
			var Rich_Web_CS_Forms_FEditing_TA_H=jQuery(this).parent().parent().find("input[id=Rich_Web_CS_Forms_FEditing_TA_H]").val();
			var Rich_Web_CS_Forms_FEditing_TA_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_TA_L]').val();
			var Rich_Web_CS_Forms_FEditing_TA_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_TA_P]').val();
			var Rich_Web_CS_Forms_FEditing_TA_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_TA_LP]').val();
			var Rich_Web_CS_Forms_FEditing_TA_Rel=jQuery(this).parent().parent().attr('rel');

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TA_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TA_R='required';
				Rich_Web_CS_Forms_FEditing_TA_Req='*'
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TA_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TA_A='disabled';
			}
			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TA_ReS]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TA_ReS='vertical';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_TA_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_H);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_R);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TA_ReS);
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Select'))
		{
			var Rich_Web_CS_Forms_FEditing_SM_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_SM_L]').val();
			var Rich_Web_CS_Forms_FEditing_SM_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_SM_P]').val();
			var Rich_Web_CS_Forms_FEditing_SM_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_SM_LP]').val();
			var Rich_Web_CS_Forms_FEditing_SM_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_SM_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_SM_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_SM_Opt=new Array();

			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').find('input[type=text]').each(function(){
				Rich_Web_CS_Forms_FEditing_SM_Opt[Rich_Web_CS_Forms_FEditing_SM_Opt.length]=jQuery(this).val();
			})
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_SM_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_SM_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_SM_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_SM_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_SM_Opt.join('qwertyh'));
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Check'))
		{
			var Rich_Web_CS_Forms_FEditing_CB_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_CB_L]').val();
			var Rich_Web_CS_Forms_FEditing_CB_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_CB_LP]').val();
			var Rich_Web_CS_Forms_FEditing_CB_CC=jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_CB_CC').val();
			var Rich_Web_CS_Forms_FEditing_CB_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_CB_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_CB_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_CB_A=''; 
			var Rich_Web_CS_Forms_FEditing_CB_Names=new Array();

			var Rich_Web_CS_Forms_FEditing_CB_Opt=new Array();
			var Rich_Web_CS_Forms_FEditing_CB_Chd=new Array();

			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_CB_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_CB_A='disabled';
			}

			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').find('div').each(function(){
				Rich_Web_CS_Forms_FEditing_CB_Opt[Rich_Web_CS_Forms_FEditing_CB_Opt.length]=jQuery(this).find('input[type=text]').val();
				Rich_Web_CS_Forms_FEditing_CB_Chd[Rich_Web_CS_Forms_FEditing_CB_Chd.length]=jQuery(this).find('input[type=checkbox][class=Rich_Web_CS_Forms_FC_EditChecks_Check]').attr('checked');
			})
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_CB_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_CB_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_CB_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_CB_A);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_CB_CC);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_CB_Opt.join('qwertyh'));
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_CB_Chd.join('qwertyh'));
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Radio'))
		{
			var Rich_Web_CS_Forms_FEditing_RB_L = jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_RB_L]').val();
			var Rich_Web_CS_Forms_FEditing_RB_LP = jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_RB_LP]').val();
			var Rich_Web_CS_Forms_FEditing_RB_CC = jQuery(this).parent().parent().find('#Rich_Web_CS_Forms_FEditing_RB_CC').val();
			var Rich_Web_CS_Forms_FEditing_RB_Rel = jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_RB_Lab = ''; 
			var Rich_Web_CS_Forms_FEditing_RB_Inp = ''; 
			var Rich_Web_CS_Forms_FEditing_RB_A = ''; 

			var Rich_Web_CS_Forms_FEditing_RB_Opt = new Array();
			var Rich_Web_CS_Forms_FEditing_RB_Chd = new Array();

			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_RB_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_RB_A = 'disabled';
			}

			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').find('div').each(function(){
				Rich_Web_CS_Forms_FEditing_RB_Opt[Rich_Web_CS_Forms_FEditing_RB_Opt.length]=jQuery(this).find('input[type=text]').val();
				Rich_Web_CS_Forms_FEditing_RB_Chd[Rich_Web_CS_Forms_FEditing_RB_Chd.length]=jQuery(this).find('input[type=checkbox][class=Rich_Web_CS_Forms_FC_EditRadios_Check]').attr('checked');
			})
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_RB_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_RB_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_RB_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_RB_A);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_RB_CC);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_RB_Opt.join('qwertyh'));
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_RB_Chd.join('qwertyh'));
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_File'))
		{
			var Rich_Web_CS_Forms_FEditing_F_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_F_L]').val();
			var Rich_Web_CS_Forms_FEditing_F_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_F_LP]').val();
			var Rich_Web_CS_Forms_FEditing_F_FD=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_F_FD]').val();
			var Rich_Web_CS_Forms_FEditing_F_AT=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_F_AT]').val();
			var Rich_Web_CS_Forms_FEditing_F_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_F_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_F_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_F_R=''; 
			var Rich_Web_CS_Forms_FEditing_F_Req='';

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_F_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_F_R='required';
				Rich_Web_CS_Forms_FEditing_F_Req='*';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_F_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_F_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_F_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_F_R);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_F_FD);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_F_AT);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Custom'))
		{
			var Rich_Web_CS_Forms_FEditing_C_Rel=jQuery(this).parent().parent().attr('rel');
			jQuery('input#'+Rich_Web_CS_Forms_FEditing_C_Rel).val(tinyMCE.get('Rich_Web_CS_Forms_Fields_Editing_Custom_ID').getContent());

			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_C_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Email'))
		{
			var Rich_Web_CS_Forms_FEditing_E_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_E_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_E_R=''; 
			var Rich_Web_CS_Forms_FEditing_E_Req=''; 
			var Rich_Web_CS_Forms_FEditing_E_A=''; 

			var Rich_Web_CS_Forms_FEditing_E_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_E_L]').val();
			var Rich_Web_CS_Forms_FEditing_E_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_E_P]').val();
			var Rich_Web_CS_Forms_FEditing_E_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_E_LP]').val();
			var Rich_Web_CS_Forms_FEditing_E_Rel=jQuery(this).parent().parent().attr('rel');

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_E_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_E_R='required';
				Rich_Web_CS_Forms_FEditing_E_Req='*';
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_E_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_E_A='disabled';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_E_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_E_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_E_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_E_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_E_R);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_E_A);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Button'))
		{
			var Rich_Web_CS_Forms_FEditing_B_BT=jQuery(this).parent().parent().find('input[name=Rich_Web_CS_Forms_FEditing_B_BT]').val();
			var Rich_Web_CS_Forms_FEditing_B_RBT=jQuery(this).parent().parent().find('input[name=Rich_Web_CS_Forms_FEditing_B_RBT]').val();
			var Rich_Web_CS_Forms_FC_Edit_AAC=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_B_AAC]').val();
			var Rich_Web_CS_Forms_FEditing_B_Rel=jQuery(this).parent().parent().attr('rel');
			var Rich_Web_CS_Forms_FEditing_B_URL='';
			var Rich_Web_CS_Forms_FEditing_B_SRB='';
			var Rich_Web_CS_Forms_FEditing_B_Inp='';
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_B_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_B_SRB]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_B_SRB='show';
			}

			if(Rich_Web_CS_Forms_FC_Edit_AAC=='Go to URL')
			{
				Rich_Web_CS_Forms_FEditing_B_URL=jQuery(this).parent().parent().find('input[name=Rich_Web_CS_Forms_FEditing_B_URL]').val();
			}
			var Rich_Web_CS_Forms_FEditing_O_ID1=Rich_Web_CS_Forms_FEditing_O_ID.split('_')[0];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_B_BT);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_B_RBT);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FC_Edit_AAC);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_B_URL);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_B_SRB);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Divider'))
		{
			var Rich_Web_CS_Forms_FEditing_D_H=jQuery(this).parent().parent().find('input[id=Rich_Web_CS_Forms_FEditing_D_H]').val();
			var Rich_Web_CS_Forms_FEditing_D_S=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_D_S]').val();
			var Rich_Web_CS_Forms_FEditing_D_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_D_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_D_H);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_D_S);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Space'))
		{
			var Rich_Web_CS_Forms_FEditing_S_W=jQuery(this).parent().parent().find('input[id=Rich_Web_CS_Forms_FEditing_S_W]').val();
			var Rich_Web_CS_Forms_FEditing_S_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_S_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_S_W);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Captcha'))
		{
			var Rich_Web_CS_Forms_FEditing_Captcha_Theme=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Theme]').val();
			var Rich_Web_CS_Forms_FEditing_Captcha_Size=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Size]').val();
			var Rich_Web_CS_Forms_FEditing_Captcha_Type=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Type]').val();
			var Rich_Web_CS_Forms_FEditing_Captcha_Pos=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Captcha_Pos]').val();
			var Rich_Web_CS_Forms_FEditing_Captcha_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_Captcha_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Captcha_Theme);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Captcha_Size);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Captcha_Type);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Captcha_Pos);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_DatePicker'))
		{
			var Rich_Web_CS_Forms_FEditing_DateP_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_DateP_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_DateP_R=''; 
			var Rich_Web_CS_Forms_FEditing_DateP_Req=''; 
			var Rich_Web_CS_Forms_FEditing_DateP_A=''; 
			var Rich_Web_CS_Forms_FEditing_DateP_Cur='';
			var Rich_Web_CS_Forms_FEditing_DateP_FT='';
			var Rich_Web_CS_Forms_FEditing_DateP_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_DateP_L]').val();
			var Rich_Web_CS_Forms_FEditing_DateP_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_DateP_P]').val();
			var Rich_Web_CS_Forms_FEditing_DateP_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_DateP_LP]').val();
			var Rich_Web_CS_Forms_FEditing_DateP_Rel=jQuery(this).parent().parent().attr('rel');

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_DateP_Cur]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_DateP_Cur='current';
			}
			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_DateP_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_DateP_R='required';
				Rich_Web_CS_Forms_FEditing_DateP_Req='*'
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_DateP_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_DateP_A='disabled';
			}
			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_DateP_FT]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_DateP_FT='FromTo';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_DateP_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_Cur);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_R);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_DateP_FT);
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_TimePicker'))
		{
			var Rich_Web_CS_Forms_FEditing_TimeP_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_TimeP_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_TimeP_R=''; 
			var Rich_Web_CS_Forms_FEditing_TimeP_Req=''; 
			var Rich_Web_CS_Forms_FEditing_TimeP_A=''; 
			var Rich_Web_CS_Forms_FEditing_TimeP_Cur='';
			var Rich_Web_CS_Forms_FEditing_TimeP_FT='';
			var Rich_Web_CS_Forms_FEditing_TimeP_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_TimeP_L]').val();
			var Rich_Web_CS_Forms_FEditing_TimeP_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_TimeP_LP]').val();
			var Rich_Web_CS_Forms_FEditing_TimeP_Rel=jQuery(this).parent().parent().attr('rel');

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_Cur]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TimeP_Cur='current';
			}
			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TimeP_R='required';
				Rich_Web_CS_Forms_FEditing_TimeP_Req='*'
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TimeP_A='disabled';
			}
			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_TimeP_FT]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_TimeP_FT='FromTo';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_TimeP_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TimeP_L);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TimeP_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TimeP_Cur);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TimeP_R);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TimeP_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_TimeP_FT);
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Full_Name'))
		{
			var Rich_Web_CS_Forms_FEditing_FullN_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_FullN_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_FullN_R=''; 
			var Rich_Web_CS_Forms_FEditing_FullN_Req=''; 
			var Rich_Web_CS_Forms_FEditing_FullN_A=''; 
			var Rich_Web_CS_Forms_FEditing_FullN_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_FullN_L]').val();
			var Rich_Web_CS_Forms_FEditing_FullN_P_1=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_FullN_P_1]').val();
			var Rich_Web_CS_Forms_FEditing_FullN_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_FullN_LP]').val();
			var Rich_Web_CS_Forms_FEditing_FullN_P_2=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_FullN_P_2]').val();

			var Rich_Web_CS_Forms_FEditing_FullN_Rel=jQuery(this).parent().parent().attr('rel');

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_FullN_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_FullN_R='required';
				Rich_Web_CS_Forms_FEditing_FullN_Req='*'
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_FullN_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_FullN_A='disabled';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_FullN_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_FullN_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_FullN_P_1);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_FullN_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_FullN_P_2);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_FullN_R);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_FullN_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Phone'))
		{
			var Rich_Web_CS_Forms_FEditing_Phone_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_Phone_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_Phone_R=''; 
			var Rich_Web_CS_Forms_FEditing_Phone_Req=''; 
			var Rich_Web_CS_Forms_FEditing_Phone_A=''; 
			var Rich_Web_CS_Forms_FEditing_Phone_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Phone_L]').val();
			var Rich_Web_CS_Forms_FEditing_Phone_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Phone_P]').val();
			var Rich_Web_CS_Forms_FEditing_Phone_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Phone_LP]').val();
			var Rich_Web_CS_Forms_FEditing_Phone_Rel=jQuery(this).parent().parent().attr('rel');

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Phone_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_Phone_R='required';
				Rich_Web_CS_Forms_FEditing_Phone_Req='*'
			}
			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Phone_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_Phone_A='disabled';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_Phone_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Phone_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Phone_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Phone_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Phone_R);
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Phone_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Country'))
		{
			var Rich_Web_CS_Forms_FEditing_Country_Lab=''; 
			var Rich_Web_CS_Forms_FEditing_Country_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_Country_A=''; 
			var Rich_Web_CS_Forms_FEditing_Country_L=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Country_L]').val();
			var Rich_Web_CS_Forms_FEditing_Country_P=jQuery(this).parent().parent().find('input[type=text][name=Rich_Web_CS_Forms_FEditing_Country_P]').val();
			var Rich_Web_CS_Forms_FEditing_Country_LP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Country_LP]').val();
			var Rich_Web_CS_Forms_FEditing_Country_Rel=jQuery(this).parent().parent().attr('rel');

			if(!jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Country_A]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_Country_A='disabled';
			}
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_Country_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Country_L);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Country_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Country_LP);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Country_A);
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Privacy'))
		{
			var Rich_Web_CS_Forms_FEditing_C_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_Privacy_Inp=''; 
			var Rich_Web_CS_Forms_FEditing_Privacy_R=''; 
			var Rich_Web_CS_Forms_FEditing_Privacy_P=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Privacy_Pos]').val();
			var Rich_Web_CS_Forms_FEditing_Privacy_FP=jQuery(this).parent().parent().find('select[name=Rich_Web_CS_Forms_FEditing_Privacy_FPos]').val();
			var Rich_Web_CS_Forms_FEditing_Privacy_Cont=tinyMCE.get('Rich_Web_CS_Forms_Fields_Editing_Privacy_ID').getContent();
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_C_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			if(jQuery(this).parent().parent().find("input[name=Rich_Web_CS_Forms_FEditing_Privacy_R]").prop("checked"))
			{
				Rich_Web_CS_Forms_FEditing_Privacy_R='required';
			}

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Privacy_Cont);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Privacy_P);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Privacy_R);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Privacy_FP);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
		else if(jQuery(this).parent().parent().hasClass('Rich_Web_CS_Forms_Fields_Editing_Map'))
		{
			var Rich_Web_CS_Forms_FEditing_C_Rel=jQuery(this).parent().parent().attr('rel');

			var Rich_Web_CS_Forms_FEditing_Map_Lat = jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Lat]').val();
			var Rich_Web_CS_Forms_FEditing_Map_Long = jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Long]').val();
			var Rich_Web_CS_Forms_FEditing_Map_Zoom = jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('input[id=Rich_Web_CS_Forms_FEditing_Map_Zoom]').val();
			var Rich_Web_CS_Forms_FEditing_Map_Type = jQuery('.Rich_Web_CS_Forms_Fields_Editing_Map').find('select[id=Rich_Web_CS_Forms_FEditing_Map_Type]').val();
			var Rich_Web_CS_Forms_FEditing_O_ID=Rich_Web_CS_Forms_FEditing_C_Rel.split('Rich_Web_CS_Forms_Field_')[1];

			jQuery('#Rich_Web_CS_Forms_Field_O1_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Map_Lat);
			jQuery('#Rich_Web_CS_Forms_Field_O2_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Map_Long);
			jQuery('#Rich_Web_CS_Forms_Field_O3_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Map_Zoom);
			jQuery('#Rich_Web_CS_Forms_Field_O4_'+Rich_Web_CS_Forms_FEditing_O_ID).val(Rich_Web_CS_Forms_FEditing_Map_Type);
			jQuery('#Rich_Web_CS_Forms_Field_O5_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O6_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O7_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
			jQuery('#Rich_Web_CS_Forms_Field_O8_'+Rich_Web_CS_Forms_FEditing_O_ID).val('');
		}
	})
}
function Rich_Web_CS_Forms_RangeSlider()
{
	var slider = jQuery('.Rich_Web_CS_Forms_Range'), range = jQuery('.Rich_Web_CS_Forms_Range__range'), value = jQuery('.Rich_Web_CS_Forms_Range__value');     
	slider.each(function()
	{
		value.each(function()
		{
			var value = jQuery(this).prev().attr('value');
		    jQuery(this).html(value);
		});    
		range.on('input', function()
		{
			jQuery(this).next(value).html(this.value);
		});  
	});
}
function Rich_Web_CS_Forms_FC_EditOption_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditOption').click(function(){
		if(jQuery(this).parent().find(":input[type=text]").val())
		{
			jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').append('<div><input type="text" name="" value="'+jQuery(this).parent().find(":input[type=text]").val()+'"><i class="Rich_Web_CS_Forms_FC_EditOption_Del rich_web rich_web-trash" aria-hidden="true"></i></div>');
			jQuery(this).parent().find(":input[type=text]").val('');
		}
	})
}
function Rich_Web_CS_Forms_FC_EditOption_Del_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditOption_Del').click(function(){
		jQuery(this).parent().remove();
	})
}
function Rich_Web_CS_Forms_FC_EditChecks_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditChecks').click(function(){
		jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').append('<div><input type="text" name="" value="'+jQuery(this).parent().find(":input[type=text]").val()+'"><input type="checkbox" class="Rich_Web_CS_Forms_FC_EditChecks_Check"><i class="Rich_Web_CS_Forms_FC_EditChecks_Del rich_web rich_web-trash" aria-hidden="true"></i></div>');
		jQuery(this).parent().find(":input[type=text]").val('');
	})
}
function Rich_Web_CS_Forms_FC_EditChecks_Del_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditChecks_Del').click(function(){
		jQuery(this).parent().remove();
	})
}
function Rich_Web_CS_Forms_FC_EditRadios_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditRadios').click(function(){
		jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_Fields_Editing_Text_div3').append('<div><input type="text" name="" value="'+jQuery(this).parent().find(":input[type=text]").val()+'"><input type="checkbox" class="Rich_Web_CS_Forms_FC_EditRadios_Check"><i class="Rich_Web_CS_Forms_FC_EditRadios_Del rich_web rich_web-trash" aria-hidden="true"></i></div>');
		jQuery(this).parent().find(":input[type=text]").val('');
	})
}
function Rich_Web_CS_Forms_FC_EditRadios_Del_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditRadios_Del').click(function(){
		jQuery(this).parent().remove();
	})
}
function Rich_Web_CS_Forms_FC_EditRadios_Check_Clicked()
{
	jQuery('.Rich_Web_CS_Forms_FC_EditRadios_Check').click(function(){
		jQuery(this).parent().parent().find('.Rich_Web_CS_Forms_FC_EditRadios_Check').attr('checked',false);
		jQuery(this).attr('checked', true);
	})
}
function Rich_Web_CS_Forms_FC_Edit_AAC_Clicked()
{
	if(jQuery('.Rich_Web_CS_Forms_FC_Edit_AAC').val()=='Go to URL')
	{
		jQuery('.Rich_Web_CS_Forms_FC_Edit_AAC').parent().find('label:nth-last-of-type(1)').fadeIn(500);
		jQuery('.Rich_Web_CS_Forms_FC_Edit_AAC').parent().find('input[type=text]').fadeIn(500);
	}
	else
	{
		jQuery('.Rich_Web_CS_Forms_FC_Edit_AAC').parent().find('label:nth-last-of-type(1)').fadeOut(500);
		jQuery('.Rich_Web_CS_Forms_FC_Edit_AAC').parent().find('input[type=text]').fadeOut(500);
	}
}
function RW_CS_Form()
{
	var fd = new FormData();
	var self=jQuery('#Rich_Web_CCS_Form');
	var postData=self.serialize();

	fd.append('save_form_CS', 'save_form_CS');
	fd.append('postData', postData);

	jQuery.ajax({
		type: 'POST',
		url: location.href,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
			jQuery('.RW_Ubdate_Info').show();
		},
		success: function(response){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
// Forms General Options
function RW_CS_Form_GO()
{
	var Rich_Web_CS_Forms_O_21 = tinymce.get('Rich_Web_CS_Forms_O_21').getContent();
	var Rich_Web_CS_Forms_O_22 = tinymce.get('Rich_Web_CS_Forms_O_22').getContent();
	jQuery('#Rich_Web_CS_Forms_O_21_1').val(Rich_Web_CS_Forms_O_21);
	jQuery('#Rich_Web_CS_Forms_O_22_1').val(Rich_Web_CS_Forms_O_22);
	var fd = new FormData();
	var self=jQuery('#Rich_Web_CCS_Form_GO');
	var postData=self.serialize();

	fd.append('save_form_CS_GO', 'save_form_CS_GO');
	fd.append('postData', postData);

	jQuery.ajax({
		type: 'POST',
		url: location.href,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
			jQuery('.RW_Ubdate_Info').show();
		},
		success: function(response){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
// Forms Theme Options
function RW_CS_Form_TO()
{
	var fd = new FormData();
	var self=jQuery('#Rich_Web_CCS_Form_TO');
	var postData=self.serialize();

	fd.append('save_form_CS_TO', 'save_form_CS_TO');
	fd.append('postData', postData);
	fd.append('nonce', nonce);

	jQuery.ajax({
		type: 'POST',
		url: location.href,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
			jQuery('.RW_Ubdate_Info').show();
		},
		success: function(response){
			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
function Rich_Web_CS_Forms_RangeSlider()
{
	var slider = jQuery('.Rich_Web_CS_Forms_Range'), range = jQuery('.Rich_Web_CS_Forms_Range__range'), value = jQuery('.Rich_Web_CS_Forms_Range__value');     
	slider.each(function()
	{
		value.each(function()
		{
			var value = jQuery(this).prev().attr('value');
		    jQuery(this).html(value);
		});    
		range.on('input', function()
		{
			jQuery(this).next(value).html(this.value);
		});  
	});
}
// Message Manager
function Rich_Web_CS_Forms_Message_Img()
{
	jQuery('.Rich_Web_CS_Forms_Message_Image').click(function(){
		jQuery(this).parent().parent().remove();
		var Rich_Web_CS_Forms_Message_Hid_Email=jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val();
		var Rich_Web_CS_Forms_Message_Del_Email=jQuery(this).parent().find('span').html();
		var Rich_Web_CS_Forms_Message_Hid_Email_Spl=Rich_Web_CS_Forms_Message_Hid_Email.split(',');
		var Rich_Web_CS_Forms_Message_Del_Email_ind = Rich_Web_CS_Forms_Message_Hid_Email_Spl.indexOf(Rich_Web_CS_Forms_Message_Del_Email);
		Rich_Web_CS_Forms_Message_Hid_Email_Spl.splice(Rich_Web_CS_Forms_Message_Del_Email_ind, 1);

		jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val(Rich_Web_CS_Forms_Message_Hid_Email_Spl);
	})
}
function Rich_Web_CS_Forms_Message_Add_Em()
{
	jQuery('.Rich_Web_CS_Forms_Message_Add').click(function(){
		var Rich_Web_CS_Forms_Message_Hid_Src=jQuery('#Rich_Web_CS_Forms_Message_Hid_Src').val();
		jQuery('.Rich_Web_CS_Forms_Content_Table_Message5').append('<tr><td><span>'+jQuery('#Rich_Web_CS_Forms_Message_Add_Email').val()+'</span><img class="Rich_Web_CS_Forms_Message_Image" src="'+Rich_Web_CS_Forms_Message_Hid_Src+'"></td></tr>');
		jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val(jQuery('#Rich_Web_CS_Forms_Message_Hid_Email').val()+','+jQuery('#Rich_Web_CS_Forms_Message_Add_Email').val());
		jQuery('#Rich_Web_CS_Forms_Message_Add_Email').val('');
		Rich_Web_CS_Forms_Message_Img();
	})
}
function RW_CS_Form_MO()
{
	var Rich_Web_CS_Forms_Message_Message = tinymce.get('Rich_Web_CS_Forms_Message_Message').getContent();
	jQuery('#Rich_Web_CS_Forms_Message_Message_1').val(Rich_Web_CS_Forms_O_21);

	var fd = new FormData();
	var self=jQuery('#Rich_Web_CCS_Form_MO');
	var postData=self.serialize();

	fd.append('save_form_CS_MO', 'save_form_CS_MO');
	fd.append('postData', postData);

	jQuery.ajax({
		type: 'POST',
		url: location.href,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
			jQuery('.RW_Ubdate_Info').show();
		},
		success: function(response){
			jQuery('#Rich_Web_CS_Forms_Message_Name').val('');
			jQuery('#Rich_Web_CS_Forms_Message_Email').val('');
			jQuery('#Rich_Web_CS_Forms_Message_Subject').val('');
			jQuery('#Rich_Web_CS_Forms_Message_Message_1').val('');
			tinymce.get('Rich_Web_CS_Forms_Message_Message').setContent('');

			jQuery('#RW_Load_Content_Admin').hide();
			setTimeout(function(){
				jQuery('.RW_Ubdate_Info').hide(500);
			},300)
		}
	});
}
// Submissions Menu
function RW_CS_Form_SO()
{
	jQuery('.Rich_Web_CS_Forms_Content_Table_Submission5_2').html('');

	var fd = new FormData();
	var files_data = jQuery('input[type=file]');
	var self=jQuery('#save_form_CS_SO');
	var postData=self.serialize();

	fd.append('action', 'Rich_Web_CS_Forms_SCHF');
	fd.append('postData', postData);
	var Rich_Web_CS_Forms_AAU = jQuery('#Rich_Web_CS_Forms_AAU').val();
	var Rich_Web_CS_Forms_LFI = jQuery('#Rich_Web_CS_Forms_LFI').val();
	jQuery.ajax({
		type: 'POST',
		url: Rich_Web_CS_Forms_AAU,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
		},
		success: function(response){
			if(response)
			{
				var arrInst=response.split('stdClass Object');
				for(i=1;i<arrInst.length;i++)
				{
					var CSPL=arrInst[i].split('=>');
					CSPL[18]=CSPL[18].split(')')[0].trim();

					if(CSPL[18].split('[')[0].trim() == 'read')
					{
						var RWCSFSNT = '<tr style="font-weight: normal;" class="Rich_Web_CS_Forms_Submission_Tr_'+CSPL[1].split('[')[0].trim()+'"><td>'+CSPL[16].split('[')[0].trim()+'</td><td>'+CSPL[2].split('[')[0].trim()+'</td><td><img src="'+ Rich_Web_CS_Forms_LFI + CSPL[5].split('[')[0].trim()+'.png"></td><td>'+CSPL[6].split('[')[0].trim()+' (' +CSPL[5].split('[')[0].trim()+ ')</td><td>'+CSPL[4].split('[')[0].trim()+'</td><td>'+CSPL[3].split('[')[0].trim()+'</td><td onclick="Rich_Web_CS_Forms_Submission_Message(\''+CSPL[1].split('[')[0].trim()+'\')"><i class="rich_web rich_web-commenting-o" aria-hidden="true"></i></td>';
						if(CSPL[17].split('[')[0].trim() == 'spam')
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #ff0000;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						else
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #2aa800;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Delete(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #006fd8;"><i class="rich_web rich_web-trash" aria-hidden="true"></i></td></tr>';
						jQuery('.Rich_Web_CS_Forms_Content_Table_Submission5_2').append(RWCSFSNT);
					}
					else
					{
						var RWCSFSNT = '<tr style="font-weight: 700;" class="Rich_Web_CS_Forms_Submission_Tr_'+CSPL[1].split('[')[0].trim()+'"><td>'+CSPL[16].split('[')[0].trim()+'</td><td>'+CSPL[2].split('[')[0].trim()+'</td><td><img src="'+Rich_Web_CS_Forms_LFI + CSPL[5].split('[')[0].trim()+'.png"></td><td>'+CSPL[6].split('[')[0].trim()+' (' +CSPL[5].split('[')[0].trim()+ ')</td><td>'+CSPL[4].split('[')[0].trim()+'</td><td>'+CSPL[3].split('[')[0].trim()+'</td><td onclick="Rich_Web_CS_Forms_Submission_Message(\''+CSPL[1].split('[')[0].trim()+'\')"><i class="rich_web rich_web-commenting-o" aria-hidden="true"></i></td>';
						if(CSPL[17].split('[')[0].trim() == 'spam')
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #ff0000;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						else
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #2aa800;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Delete(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #006fd8;"><i class="rich_web rich_web-trash" aria-hidden="true"></i></td></tr>';
						jQuery('.Rich_Web_CS_Forms_Content_Table_Submission5_2').append(RWCSFSNT);
					}
				}
			}
			jQuery('#RW_Load_Content_Admin').hide();
		}
	});
}
function Rich_Web_CS_Forms_Submission_Message(Submission_ID)
{
	var Rich_Web_CS_Forms_Submission_Tr=jQuery('.Rich_Web_CS_Forms_Submission_Tr_'+Submission_ID).css('font-weight');
	if(Rich_Web_CS_Forms_Submission_Tr == '700' || Rich_Web_CS_Forms_Submission_Tr == 'bold')
	{
		jQuery('.Rich_Web_CS_Forms_Submission_Tr_'+Submission_ID).css('font-weight','normal');
	}

	var fd = new FormData();
	var files_data = jQuery('input[type=file]');
	var self=jQuery('#save_form_CS_SO');
	var postData=self.serialize();

	fd.append('action', 'Rich_Web_CS_Forms_Submission_Mess');
	fd.append('Submission_ID', Submission_ID);
	fd.append('postData', postData);
	var Rich_Web_CS_Forms_AAU = jQuery('#Rich_Web_CS_Forms_AAU').val();
	jQuery.ajax({
		type: 'POST',
		url: Rich_Web_CS_Forms_AAU,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
		},
		success: function(response){
			if(response)
			{
				var arrInst=response.split('stdClass Object');
				var rich_web_message_table='<table>';
				for(i=1;i<arrInst.length;i++){
					var CSPL=arrInst[i].split('=>');
					rich_web_message_table += '<tr><td>'+CSPL[3].split('[')[0].trim()+'</td><td>'+CSPL[4].split(')')[0].trim()+'</td></tr>';
				}
				rich_web_message_table+='</table>';
				jQuery('.Rich_Web_CS_Forms_Submission_Div').html(rich_web_message_table);
				jQuery('.Rich_Web_CS_Forms_Submission_Div_Main').fadeIn();
				jQuery('.Rich_Web_CS_Forms_Submission_Div').fadeIn();
			}
			else
			{
				alert('error');
			}
			jQuery('#RW_Load_Content_Admin').hide();
		}
	});
}
function Rich_Web_CS_Forms_Submission_Spam(Submission_ID)
{
	var Rich_Web_CS_Forms_Submission_Tr=jQuery('.Rich_Web_CS_Forms_Submission_Tr_'+Submission_ID+' td:nth-child(8)').css('color');
	if(Rich_Web_CS_Forms_Submission_Tr=='rgb(255, 0, 0)' || Rich_Web_CS_Forms_Submission_Tr=='#ff0000')
	{
		jQuery('.Rich_Web_CS_Forms_Submission_Tr_'+Submission_ID+' td:nth-child(8)').css('color','#2aa800');
	}
	else
	{
		jQuery('.Rich_Web_CS_Forms_Submission_Tr_'+Submission_ID+' td:nth-child(8)').css('color','#ff0000');
		alert(jQuery('#Rich_Web_CS_Forms_Spam').val());
	}

	var fd = new FormData();
	var files_data = jQuery('input[type=file]');
	var self=jQuery('#save_form_CS_SO');
	var postData=self.serialize();

	fd.append('action', 'Rich_Web_CS_Forms_Submission_SNS');
	fd.append('Submission_ID', Submission_ID);
	fd.append('postData', postData);
	var Rich_Web_CS_Forms_AAU = jQuery('#Rich_Web_CS_Forms_AAU').val();
	jQuery.ajax({
		type: 'POST',
		url: Rich_Web_CS_Forms_AAU,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
		},
		success: function(response){
			jQuery('#RW_Load_Content_Admin').hide();
		}
	});
}
function Rich_Web_CS_Forms_Submission_Delete(Submission_ID)
{
	jQuery('.Rich_Web_CS_Forms_Content_Table_Submission5_2').html('');

	var fd = new FormData();
	var files_data = jQuery('input[type=file]');
	var self=jQuery('#save_form_CS_SO');
	var postData=self.serialize();

	fd.append('action', 'Rich_Web_CS_Forms_Submission_Del');
	fd.append('Submission_ID', Submission_ID);
	fd.append('postData', postData);
	var Rich_Web_CS_Forms_AAU = jQuery('#Rich_Web_CS_Forms_AAU').val();
	var Rich_Web_CS_Forms_LFI = jQuery('#Rich_Web_CS_Forms_LFI').val();
	jQuery.ajax({
		type: 'POST',
		url: Rich_Web_CS_Forms_AAU,
		data: fd,
		contentType: false,
		processData: false,
		beforeSend: function(){
			jQuery('#RW_Load_Content_Admin').show();
		},
		success: function(response){
			if(response)
			{
				var arrInst=response.split('stdClass Object');
				for(i=1;i<arrInst.length;i++)
				{
					var CSPL=arrInst[i].split('=>');
					CSPL[18]=CSPL[18].split(')')[0].trim();

					if(CSPL[18].split('[')[0].trim() == 'read')
					{
						var RWCSFSNT = '<tr style="font-weight: normal;" class="Rich_Web_CS_Forms_Submission_Tr_'+CSPL[1].split('[')[0].trim()+'"><td>'+CSPL[16].split('[')[0].trim()+'</td><td>'+CSPL[2].split('[')[0].trim()+'</td><td><img src="'+Rich_Web_CS_Forms_LFI + CSPL[5].split('[')[0].trim()+'.png"></td><td>'+CSPL[6].split('[')[0].trim()+' (' +CSPL[5].split('[')[0].trim()+ ')</td><td>'+CSPL[4].split('[')[0].trim()+'</td><td>'+CSPL[3].split('[')[0].trim()+'</td><td onclick="Rich_Web_CS_Forms_Submission_Message(\''+CSPL[1].split('[')[0].trim()+'\')"><i class="rich_web rich_web-commenting-o" aria-hidden="true"></i></td>';
						if(CSPL[17].split('[')[0].trim() == 'spam')
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #ff0000;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						else
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #2aa800;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Delete(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #006fd8;"><i class="rich_web rich_web-trash" aria-hidden="true"></i></td></tr>';
						jQuery('.Rich_Web_CS_Forms_Content_Table_Submission5_2').append(RWCSFSNT);
					}
					else
					{
						var RWCSFSNT = '<tr style="font-weight: 700;" class="Rich_Web_CS_Forms_Submission_Tr_'+CSPL[1].split('[')[0].trim()+'"><td>'+CSPL[16].split('[')[0].trim()+'</td><td>'+CSPL[2].split('[')[0].trim()+'</td><td><img src="'+Rich_Web_CS_Forms_LFI + CSPL[5].split('[')[0].trim()+'.png"></td><td>'+CSPL[6].split('[')[0].trim()+' (' +CSPL[5].split('[')[0].trim()+ ')</td><td>'+CSPL[4].split('[')[0].trim()+'</td><td>'+CSPL[3].split('[')[0].trim()+'</td><td onclick="Rich_Web_CS_Forms_Submission_Message(\''+CSPL[1].split('[')[0].trim()+'\')"><i class="rich_web rich_web-commenting-o" aria-hidden="true"></i></td>';
						if(CSPL[17].split('[')[0].trim() == 'spam')
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #ff0000;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						else
						{
							RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Spam(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #2aa800;"><i class="rich_web rich_web-exclamation-circle" aria-hidden="true"></i></td>';
						}
						RWCSFSNT += '<td onclick="Rich_Web_CS_Forms_Submission_Delete(\''+CSPL[1].split('[')[0].trim()+'\')" style="color: #006fd8;"><i class="rich_web rich_web-trash" aria-hidden="true"></i></td></tr>';
						jQuery('.Rich_Web_CS_Forms_Content_Table_Submission5_2').append(RWCSFSNT);
					}
				}
			}
			jQuery('#RW_Load_Content_Admin').hide();
		}
	});    
}
function Rich_Web_CS_Forms_Submission_Div_Main_Cl()
{
	jQuery('.Rich_Web_CS_Forms_Submission_Div_Main').fadeOut();
	jQuery('.Rich_Web_CS_Forms_Submission_Div').fadeOut();
	jQuery('.Rich_Web_CS_Forms_Submission_Div').html('');
}