<style>
	#RW_Load_Content
	{
		position:fixed;
		top:0px;
		left:0px;
		background-color:<?php echo $rw_cs_loader["rw_cs_loader_BgC"]; ?>;
		z-index:999;
		width:100%;
		height:100%;
	}
	.RW_Loader_Frame
	{
		position:relative;
		top:45%;
		left:50%;
		width:80px;
		height:80px;
		transform:translateY(-50%) translateX(-50%);
		-webkit-transform:translateY(-50%) translateX(-50%);
		-ms-transform:translateY(-50%) translateX(-50%);
		-moz-transform:translateY(-50%) translateX(-50%);
		-o-transform:translateY(-50%) translateX(-50%);
	}
	.RW_Loader_Text
	{
		position:relative;
		text-align:center;
		top:45%;
		font-size:<?php echo $rw_cs_loader["rw_cs_loader_Text_FS"]; ?>px;
		font-family:<?php echo $rw_cs_loader["rw_cs_loader_Text_FF"]; ?>;
		color:<?php echo $rw_cs_loader["rw_cs_loader_Text_C"]; ?>;
		transform:translateY(-100%);
		-webkit-transform:translateY(-100%);
		-ms-transform:translateY(-100%);
		-moz-transform:translateY(-100%);
		-o-transform:translateY(-100%);
	}
	.loader1,.loader2,.loader3,.loader4 { position:absolute; border:5px solid transparent; border-radius:50%; }
	.loader1
	{
		border-top:5px solid <?php echo $rw_cs_loader["rw_cs_loader3_C"]; ?>;
		border-bottom:5px solid <?php echo $rw_cs_loader["rw_cs_loader3_C"]; ?>;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
	}
	.loader2
	{
		border-left:5px solid <?php echo $rw_cs_loader["rw_cs_loader2_C"]; ?>;
		border-right:5px solid <?php echo $rw_cs_loader["rw_cs_loader2_C"]; ?>;
		-webkit-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
		top:50%;
		left:50%;
		transform:translateY(-50%) translateX(-50%);
		-webkit-transform:translateY(-50%) translateX(-50%);
		-ms-transform:translateY(-50%) translateX(-50%);
		-moz-transform:translateY(-50%) translateX(-50%);
		-o-transform:translateY(-50%) translateX(-50%);
	}
	.loader3
	{
		width:60%;
		height:60%;
		border-top:25px solid <?php echo $rw_cs_loader["rw_cs_loader1_C"]; ?>;
		border-bottom:25px solid <?php echo $rw_cs_loader["rw_cs_loader1_C"]; ?>;
		border-right:25px solid <?php echo $rw_cs_loader["rw_cs_loader1_C"]; ?>;
		top:50%;
		left:50%;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-ms-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
		transform:translateY(-50%) translateX(-50%);
		-webkit-transform:translateY(-50%) translateX(-50%);
		-ms-transform:translateY(-50%) translateX(-50%);
		-moz-transform:translateY(-50%) translateX(-50%);
		-o-transform:translateY(-50%) translateX(-50%);
		animation:clockLoadingmin 1s linear 500;
		-webkit-animation:clockLoadingmin 1s linear 500;
		-ms-animation:clockLoadingmin 1s linear 500;
		-moz-animation:clockLoadingmin 1s linear 500;
		-o-animation:clockLoadingmin 1s linear 500;
	}
	.loader1
	{
		width:100%;
		height:100%;
		animation:clockLoading 1s linear 500;
		-webkit-animation:clockLoading 1s linear 500;
		-ms-animation:clockLoading 1s linear 500;
		-moz-animation:clockLoading 1s linear 500;
		-o-animation:clockLoading 1s linear 500;
	}
	.loader2
	{
		width:80%;
		height:80%;
		animation:anticlockLoading 1s linear 500;
		-webkit-animation:anticlockLoading 1s linear 500;
		-ms-animation:anticlockLoading 1s linear 500;
		-moz-animation:anticlockLoading 1s linear 500;
		-o-animation:anticlockLoading 1s linear 500;
	}
	@keyframes clockLoading{
		from{transform:rotate(0deg);-webkit-transform:-webkit-rotate(0deg);-ms-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);}
		to{transform:rotate(360deg);-webkit-transform:-webkit-rotate(360deg);-ms-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);}
	}
	@keyframes anticlockLoading{
		from{transform:translateY(-50%) translateX(-50%) rotate(0deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(0deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg);-o-transform:translateY(-50%) translateX(-50%) rotate(0deg);}
		to{transform:translateY(-50%) translateX(-50%) rotate(-360deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(-360deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(-360deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(-360deg);-o-transform:translateY(-50%) translateX(-50%) rotate(-360deg);}
	}
	@keyframes clockLoadingmin{
		from{transform:translateY(-50%) translateX(-50%) rotate(0deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(0deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg);-o-transform:translateY(-50%) translateX(-50%) rotate(0deg);}
		to{transform:translateY(-50%) translateX(-50%) rotate(360deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(360deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(360deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(360deg);-o-transform:translateY(-50%) translateX(-50%) rotate(360deg);}
	}
	<?php echo $rw_cs_loader["rw_cs_loader_Custom_CSS"]; ?>
</style>
<div id="RW_Load_Content">
	<div class="RW_Loader_Frame">
		<div class="loader1" id="loader1"></div>
		<div class="loader2" id="loader2"></div>
		<div class="loader3" id="loader2"></div>
		<div class="loader4" id="loader2"></div>
	</div>
	<?php if($rw_cs_loader["rw_cs_loader_Text_Show"]=="show"){ ?>
		<div class="RW_Loader_Text">
			<?php echo $rw_cs_loader["rw_cs_loader_Text"]; ?>
		</div>
	<?php } ?>
</div>