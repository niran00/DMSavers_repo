<style>
	.RW_Logo { position:relative; display:inline-block; cursor:pointer; z-index:99; outline:none !important; color:<?php echo $rw_cs_logo['rw_cs_logo_text_C']; ?> !important; }
	h1,h2,h3,h4,h5,h6,p { margin:0px; padding:0px; }
	.logoHeader { margin-top:<?php echo $rw_cs_logo['rw_cs_logo_MT']; ?>px; margin-bottom:<?php echo $rw_cs_logo['rw_cs_logo_MB']; ?>px; text-align:center; line-height:1; }
	.RW_Logo img { margin:0px; padding:0px; max-width:100%; }
	.wrapper { margin:0px 0px 20px 0px; }
	<?php if($rw_cs_logo['rw_cs_logo_Image_ST']=="Custom"){ ?>
		.RW_Logo img { max-width:<?php echo $rw_cs_logo['rw_cs_logo_Image_MW']; ?>px; max-height:<?php echo $rw_cs_logo['rw_cs_logo_Image_MH']; ?>px; }
	<?php } ?>
	.rw_logo_text
	{
		text-align:center;
		margin-top:<?php echo $rw_cs_logo['rw_cs_logo_MT']; ?>px;
		margin-bottom:<?php echo $rw_cs_logo['rw_cs_logo_MB']; ?>px;
		font-size:<?php echo $rw_cs_logo['rw_cs_logo_text_FS']; ?>px;
		font-family:<?php echo $rw_cs_logo['rw_cs_logo_text_FF']; ?>;
		letter-spacing: -2px;
		font-weight: 700;
		text-shadow: 2px 2px rgba(12, 11, 11, 0.56);
		line-height:1;
	}
	@media(max-width:<?php echo $rw_cs_logo['rw_cs_logo_Image_MW']; ?>px) { .RW_Logo img { max-width:100%; } }
	<?php echo $rw_cs_logo['rw_cs_logo_Link_Custom_CSS']; ?>
</style>
<?php if($rw_cs_logo['rw_cs_logo_show']=="show"){ ?>
	<?php if($rw_cs_logo['rw_cs_logo_type']=="Image"){ ?>
	<h1 class="logoHeader" >
	<?php if($rw_cs_logo['rw_cs_logo_Link_Show']=="show"){ ?>
		<a href="<?php echo $rw_cs_logo['rw_cs_logo_Link_Url']; ?>" target="<?php echo $rw_cs_logo['rw_cs_logo_Link_Target']; ?>" class="RW_Logo">
			<img src="<?php echo $rw_cs_logo['rw_cs_logo_Image']; ?>" />
		</a>
	<?php }else{ ?>
		<span class="RW_Logo" style="cursor:default;">
			<img src="<?php echo $rw_cs_logo['rw_cs_logo_Image']; ?>" />
		</span>
	<?php } ?>
	</h1>
	<?php }else{ ?>
		<?php if($rw_cs_logo['rw_cs_logo_Link_Show']=="show"){ ?>
			<<?php echo $rw_cs_logo['rw_cs_logo_text_HTML']; ?> class="rw_logo_text" >
				<a href="<?php echo $rw_cs_logo['rw_cs_logo_Link_Url']; ?>" target="<?php echo $rw_cs_logo['rw_cs_logo_Link_Target']; ?>" class="RW_Logo"><?php echo $rw_cs_logo['rw_cs_logo_text']; ?></a>
			</<?php echo $rw_cs_logo['rw_cs_logo_text_HTML']; ?>>
		<?php }else{ ?>
			<<?php echo $rw_cs_logo['rw_cs_logo_text_HTML']; ?> class="rw_logo_text" >
				<a href="#" class="RW_Logo"><?php echo $rw_cs_logo['rw_cs_logo_text']; ?></a>
			</<?php echo $rw_cs_logo['rw_cs_logo_text_HTML']; ?>>
		<?php } ?>
	<?php } ?>
<?php } ?>