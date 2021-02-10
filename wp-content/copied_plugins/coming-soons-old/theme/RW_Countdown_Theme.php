<style>
	.countdown
	{
		position:relative;
		overflow:hidden;
		display:inline-block;
		width:850px;
		max-width:100%;
		transform:scale(0.5,0.5);
		-webkit-transform:scale(0.5,0.5);
		-ms-transform:scale(0.5,0.5);
		-moz-transform:scale(0.5,0.5);
		-o-transform:scale(0.5,0.5);
	}
	.countdownAnim
	{
		transform:scale(1,1) !important;
		-webkit-transform:scale(1,1) !important;
		-ms-transform:scale(1,1) !important;
		-moz-transform:scale(1,1) !important;
		-o-transform:scale(1,1) !important;
		transition:all 0.4s linear !important;
		-webkit-transition:all 0.4s linear !important;
		-ms-transition:all 0.4s linear !important;
		-moz-transition:all 0.4s linear !important;
		-o-transition:all 0.4s linear !important;
	}
	.RW_count_cont { position:relative; text-align:center; }
	.callback, .simple
	{
		font-size: 20px;
		background: #27ae60;
		padding: 0.5em 0.7em;
		color: #ecf0f1;
		margin-bottom: 50px;
		-webkit-transition: background 0.5s ease-out;
		transition: background 0.5s ease-out;
	}
	.callback { cursor: pointer; }
	.ended { background: #c0392b; }
	.countdown { text-align:center; }
	.styled { margin-bottom: 30px; }
	.styled div 
	{
		display: inline-block;
		font-size: <?php echo $rw_cs_countdown['rw_cs_count_type1_Count_FS']; ?>px !important;
		font-family:<?php echo $rw_cs_countdown['rw_cs_count_type1_Count_FF']; ?> !important;
		font-weight: <?php echo $rw_cs_countdown['rw_cs_count_type1_FW']; ?> !important;
		border-color:yellow !important;
		text-align: center;
		margin: 0 1px;
		width: 136px;
		padding: 10px 30px 53px; 
		height: 100px;
		background:rgba(255, 255, 255, 0.0);
		text-shadow: none;
		vertical-align: middle; 
		border-right:1px solid <?php echo $rw_cs_countdown['rw_cs_count_type1_lines_C']; ?> !important;
		text-shadow: <?php echo $rw_cs_countdown['rw_cs_count_type1_Count_TSh']; ?>px <?php echo $rw_cs_countdown['rw_cs_count_type1_Count_TSh']; ?>px rgba(12, 11, 11, 0.56) !important;
	}
	.styled div span
	{
		font-size: <?php echo $rw_cs_countdown['rw_cs_count_type1_text_FS']; ?>px !important;
		font-family:<?php echo $rw_cs_countdown['rw_cs_count_type1_text_FF']; ?> !important;
		text-shadow: <?php echo $rw_cs_countdown['rw_cs_count_type1_text_TSh']; ?>px <?php echo $rw_cs_countdown['rw_cs_count_type1_text_TSh']; ?>px rgba(12, 11, 11, 0.56) !important;
		display: block;
		border-top: 1px solid rgba(255, 255, 255, 0.36);
		text-align: center;
	}
	.styled div:nth-child(4) { border:none !important; }
	.styled div:nth-child(1) { color:<?php echo $rw_cs_countdown['rw_cs_count_type1_DC_C']; ?> !important; }
	.styled div:nth-child(1) span 
	{
		color:<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_C']; ?> !important;
		border-color:<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_BC']; ?> !important;
	}
	.styled div:nth-child(2) { color:<?php echo $rw_cs_countdown['rw_cs_count_type1_HC_C']; ?> !important; }
	.styled div:nth-child(2) span
	{
		color:<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_C']; ?> !important;
		border-color:<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_BC']; ?> !important;
	}
	.styled div:nth-child(3) { color:<?php echo $rw_cs_countdown['rw_cs_count_type1_MC_C']; ?> !important; }
	.styled div:nth-child(3) span
	{
		color:<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_C']; ?> !important;
		border-color:<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_BC']; ?> !important;
	}
	.styled div:nth-child(4) { color:<?php echo $rw_cs_countdown['rw_cs_count_type1_SC_C']; ?> !important; }
	.styled div:nth-child(4) span
	{
		color:<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_C']; ?> !important;
		border-color:<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_BC']; ?> !important;
	}
	.styled div:last-child { border:none !important; }
	#overlay
	{ 
		background: rgba(0, 0, 0, 0.04) url(../images/overlays/06.png) top left repeat;
		background:rgba(0, 0, 0, 0.14);
		position: fixed;
		top: 0px;
		width: 100%;
		bottom: 0px;
		opacity:0.8;
	}
	.ClassyCountdown-minutes span span { color:red !important; }
	/* IE7 inline-block hack */
	*+html .styled div { display: inline; zoom: 1; }
	.styled div:first-child { margin-left: 0; }
	footer { width:100%; height:30px; background:rgba(0, 0, 0, 0.64); position:absolute; bottom:0px; }
	footer span { float:right; margin:10px; }
	.ClassyCountdown-value span
	{
		font-family:<?php echo $rw_cs_countdown['rw_cs_count_type2_text_FF']; ?> !important;
		text-shadow:<?php echo $rw_cs_countdown['rw_cs_count_type2_text_TSh']; ?>px <?php echo $rw_cs_countdown['rw_cs_count_type2_text_TSh']; ?>px <?php echo $rw_cs_countdown['rw_cs_count_type2_text_TSh']; ?>px !important;
	}
	.ClassyCountdown-days .ClassyCountdown-value span { color:<?php echo $rw_cs_countdown['rw_cs_count_type2_DT_C']; ?> !important; }
	.ClassyCountdown-hours .ClassyCountdown-value span { color:<?php echo $rw_cs_countdown['rw_cs_count_type2_HT_C']; ?> !important; }
	.ClassyCountdown-minutes .ClassyCountdown-value span { color:<?php echo $rw_cs_countdown['rw_cs_count_type2_MT_C']; ?> !important; }
	.ClassyCountdown-seconds .ClassyCountdown-value span { color:<?php echo $rw_cs_countdown['rw_cs_count_type2_ST_C']; ?> !important; }
	@media(max-width:768px)
	{
		body { min-width: initial !important; }
		.wrapper { width:100%; }
		.styled div { margin-bottom:10px; }
	}
	@media(max-width:420px)
	{
		h1 { float:initial; text-align: center; margin-left:0px; margin-bottom:0px; }
		.styled div
		{
			margin-bottom:10px;
			font-size: <?php echo $rw_cs_countdown['rw_cs_count_type1_Count_FS']/2; ?>px !important;
			font-weight: normal; 
			text-align: center;
			width:80px; 
			border-radius:80px; 
			height:80px;  
		}
		#Content h2 { margin: 0px 0px 0px 0px; padding: 0px; text-align: center; font-size: 29px; font-weight: 300; }
		.styled { margin-bottom: 30px; }
		#subscribe input[type="button"] { margin-top:10px; }
		#subscribe input { width:80%; }
		footer { position:relative !important; }
	}
	<?php echo $rw_cs_countdown['rw_cs_count_Custom_CSS']; ?>
</style>
<?php if($rw_cs_countdown['rw_cs_cout_show']=="show"){ ?>
	<?php if($rw_cs_countdown['rw_cs_count_anim']=="Yes"){ ?>
		<?php if($rw_cs_countdown['rw_cs_count_type']=="Type 1"){ ?>
		<div class="RW_count_cont">
			<div class="countdown styled"></div> 
		</div>
		<input type="text" style="display:none;" class="rw_cs_count_datepicker" value="<?php echo $rw_cs_countdown['rw_cs_count_datepicker']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_DT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_HT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_MT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_ST_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_T']; ?>">
		<script type="text/javascript" src="<?php echo plugins_url('/js/jquery.countdown.js',__FILE__);?>"></script>
		<script type="text/javascript" src="<?php echo plugins_url('/js/global.js',__FILE__);?>"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<?php }else{ ?>
		<link href="<?php echo plugins_url('/css/jquery.classycountdown.css',__FILE__);?>" rel="stylesheet" type="text/css">
		<div class="RW_count_cont">
			<div class="countdown" id="countdown1"></div>
		</div>
		<input type="text" style="display:none;" class="rw_cs_count_datepicker" value="<?php echo $rw_cs_countdown['rw_cs_count_datepicker']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_resp" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_resp']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_Count_FF" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_Count_FF']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_Count_TSh" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_Count_TSh']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_FW" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_FW']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_DC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_DT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DT_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_DT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_LC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_HC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_HT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HT_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_HT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_LC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_MC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_MT_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MT_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_MT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_LC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_SC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_SC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_ST_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_ST_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_ST_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_ST_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_LC']; ?>">
		<script src="<?php echo plugins_url('/js/jquery.knob.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/jquery.throttle.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/jquery.classycountdown.js',__FILE__);?>"></script>
		<script>
			jQuery(document).ready(function() {
				var rw_cs_count_datepicker=jQuery(".rw_cs_count_datepicker").val();
				var array=rw_cs_count_datepicker.split('/');
				var yearAndTime=array[2];
				var year=yearAndTime.substring(0,5);
				var time=yearAndTime.substring(5,yearAndTime.length);
				var hourArray=time.split(":");
				var hour=hourArray[0];
				var min=hourArray[1];
				var sec=hourArray[2];
				var month=array[1];
				var day=array[0];
				var rw_cs_count_type2_DT_T=jQuery(".rw_cs_count_type2_DT_T").val();
				var rw_cs_count_type2_HT_T=jQuery(".rw_cs_count_type2_HT_T").val();
				var rw_cs_count_type2_MT_T=jQuery(".rw_cs_count_type2_MT_T").val();
				var rw_cs_count_type2_ST_T=jQuery(".rw_cs_count_type2_ST_T").val();
				jQuery('#countdown1').ClassyCountdown({
					theme: "white",
					labelsOptions: {
						lang: {
						days: ''+rw_cs_count_type2_DT_T+'',
						hours: ''+rw_cs_count_type2_HT_T+'',
						minutes: ''+rw_cs_count_type2_MT_T+'',
						seconds: ''+rw_cs_count_type2_ST_T+''
						},
					},
					end: jQuery.now() + (new Date(parseInt(year),parseInt(month)-1,parseInt(day),parseInt(hour),parseInt(min),parseInt(sec))-new Date())/1000
				});    
			});
		</script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<?php } ?>
	<?php }else{ ?>
		<?php if($rw_cs_countdown['rw_cs_count_type']=="Type 1"){ ?>
		<div class="RW_count_cont">
			<div class="countdown countdownAnim styled"></div> 
		</div>
		<input type="text" style="display:none;" class="rw_cs_count_datepicker" value="<?php echo $rw_cs_countdown['rw_cs_count_datepicker']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_DT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_DT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_HT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_HT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_MT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_MT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type1_ST_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type1_ST_T']; ?>">
		<script type="text/javascript" src="<?php echo plugins_url('/js/jquery.countdown.js',__FILE__);?>"></script>
		<script type="text/javascript" src="<?php echo plugins_url('/js/global.js',__FILE__);?>"></script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<?php }else{ ?>
		<link href="<?php echo plugins_url('/css/jquery.classycountdown.css',__FILE__);?>" rel="stylesheet" type="text/css">
		<div class="RW_count_cont">
			<div class="countdown countdownAnim" id="countdown1"></div>
		</div>
		<input type="text" style="display:none;" class="rw_cs_count_datepicker" value="<?php echo $rw_cs_countdown['rw_cs_count_datepicker']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_resp" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_resp']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_Count_FF" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_Count_FF']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_Count_TSh" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_Count_TSh']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_FW" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_FW']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_DC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_DT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_DT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_D_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_D_LC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_HC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_HT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_HT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_H_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_H_LC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_MC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_MT_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_MT_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_M_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_M_LC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_SC_C" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_SC_C']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_ST_T" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_ST_T']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_Tickness" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_Tickness']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_BgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_BgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_FgC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_FgC']; ?>">
		<input type="text" style="display:none;" class="rw_cs_count_type2_S_LC" value="<?php echo $rw_cs_countdown['rw_cs_count_type2_S_LC']; ?>">
		<script src="<?php echo plugins_url('/js/jquery.knob.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/jquery.throttle.js',__FILE__);?>"></script>
		<script src="<?php echo plugins_url('/js/jquery.classycountdown.js',__FILE__);?>"></script>
		<script>
			jQuery(document).ready(function() {
				var rw_cs_count_datepicker=jQuery(".rw_cs_count_datepicker").val();
				var array=rw_cs_count_datepicker.split('/');
				var yearAndTime=array[2];
				var year=yearAndTime.substring(0,5);
				var time=yearAndTime.substring(5,yearAndTime.length);
				var hourArray=time.split(":");
				var hour=hourArray[0];
				var min=hourArray[1];
				var sec=hourArray[2];
				var month=array[1];
				var day=array[0];
				var rw_cs_count_type2_DT_T=jQuery(".rw_cs_count_type2_DT_T").val();
				var rw_cs_count_type2_HT_T=jQuery(".rw_cs_count_type2_HT_T").val();
				var rw_cs_count_type2_MT_T=jQuery(".rw_cs_count_type2_MT_T").val();
				var rw_cs_count_type2_ST_T=jQuery(".rw_cs_count_type2_ST_T").val();
				jQuery('#countdown1').ClassyCountdown({
					theme: "white",
					labelsOptions: {
						lang: {
						days: ''+rw_cs_count_type2_DT_T+'',
						hours: ''+rw_cs_count_type2_HT_T+'',
						minutes: ''+rw_cs_count_type2_MT_T+'',
						seconds: ''+rw_cs_count_type2_ST_T+''
						},
					},
					end: jQuery.now() + (new Date(parseInt(year),parseInt(month)-1,parseInt(day),parseInt(hour),parseInt(min),parseInt(sec))-new Date())/1000
				});    
			});
		</script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<?php } ?>
	<?php } ?>
<?php } ?>
<input type="text" style="display:none;" class="rw_cs_cout_show" value="<?php echo $rw_cs_countdown['rw_cs_cout_show']; ?>">