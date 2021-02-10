<form action="" method="POST" enctype="multipart/form-data" id="Rich_Web_CS_Forms_Form" >	
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('/css/jquery-ui.css',__FILE__);?>">
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('/css/countrySelect.min.css',__FILE__);?>">
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('/css/intlTelInput.css',__FILE__);?>">
	<script type="text/javascript" src="<?php echo plugins_url('/js/intlTelInput.min.js',__FILE__);?>"></script>
	<script type="text/javascript" src="<?php echo plugins_url('/js/countrySelect.min.js',__FILE__);?>"></script>
	<script type="text/javascript" src="<?php echo plugins_url('/js/contact_form.js',__FILE__);?>"></script>
	<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/datepicker.min.js');?>"></script>
	<header class="Rich_Web_CS_Forms_Header">
		<style type="text/css">
			.Rich_Web_CS_Forms_Header { padding: 0 !important; }
			.Rich_Web_CS_Forms_Body { word-wrap: none !important; }
			.Rich_Web_CS_Forms, .Rich_Web_CS_Forms *
			{
				-webkit-box-sizing: border-box !important;
				-moz-box-sizing: border-box !important;
				box-sizing: border-box !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=text], .Rich_Web_CS_Forms textarea.Rich_Web_CS_Contact_Form, .Rich_Web_CS_Forms select.Rich_Web_CS_Contact_Form , .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=email], .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=number], .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=time], .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=tel]
			{
				margin-bottom: 14px;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_FN { margin-bottom: 14px !important; }
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Input_Error { margin-bottom: 0px !important; }
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Span_Error
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LEC;?>;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LFS-4;?>px;
				font-family: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LFF;?>;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=text]:focus, .Rich_Web_CS_Forms textarea.Rich_Web_CS_Contact_Form:focus, .Rich_Web_CS_Forms select.Rich_Web_CS_Contact_Form:focus, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div:focus, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=email]:focus, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=number]:focus, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=time]:focus, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form[type=tel]:focus, .flag-container .selected-flag:focus, .Rich_Web_CS_Contact_Form_Button:focus, .Rich_Web_CS_Contact_Form_Reset:focus, .Rich_Web_CS_Contact_Form_Media:focus
			{
				outline: none !important;
			}
			.Rich_Web_CS_Forms
			{
				width: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_W;?>%;
				position: relative;
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_Pos=='left'){ ?>
					float: left;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_Pos=='right'){ ?>
					float: right;
				<?php }else{ ?>
					margin-left: <?php echo (100-$Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_W)/2;?>%;
					float: left;
				<?php }?>
				margin-bottom: 20px;
				margin-top: 20px; 
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgT=='color'){ ?>
					background: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC;?>;
				<?php }else if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgT=='transparent'){ ?>
					background: transparent;
				<?php }else{ ?>
					background: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC;?>;
					background: -webkit-linear-gradient(<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC;?>, <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC2;?>);
					background: -o-linear-gradient(<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC;?>, <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC2;?>);
					background: -moz-linear-gradient(<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC;?>, <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC2;?>);
					background: linear-gradient(<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC;?>, <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BgC2;?>);
				<?php }?>
				border: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BW;?>px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BS;?> <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BC;?>;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BR;?>px;
				padding: 15px;
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShShow=='on'){ ?>
					<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShType=='on'){ ?> 
						-webkit-box-shadow: 0px 0px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxSh;?>px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShC;?>;
						-moz-box-shadow: 0px 0px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxSh;?>px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShC;?>;
						box-shadow: 0px 0px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxSh;?>px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShC;?>;
					<?php }else{ ?>
						-webkit-box-shadow: 0 30px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxSh;?>px -18px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShC;?>;
						-moz-box-shadow: 0 30px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxSh;?>px -18px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShC;?>;
						box-shadow: 0 30px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxSh;?>px -18px <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_BoxShC;?>;
					<?php }?>
				<?php }?>
			}
			.Rich_Web_CS_Forms label.Rich_Web_CS_Forms_Label
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LC;?> !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LFS;?>px !important;
				font-family: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LFF;?> !important;
				vertical-align: top !important;
				background: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LBgC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LBR;?>px !important;
				border: 1px solid <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LBC;?> !important; 
				padding: 4px 12px !important;
				line-height: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LFS;?>px !important;
				cursor: default !important;
				float: left !important;
			}
			.Rich_Web_CS_Forms label span
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LRC;?> !important;
			}
			.Rich_Web_CS_Forms input[type=text], .Rich_Web_CS_Forms input[type=number], .Rich_Web_CS_Forms input[type=time], .Rich_Web_CS_Forms input[type=tel]
			{
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBHBg=='on'){ ?>
					background: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBBgC;?> !important;
				<?php }?>
				border: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBBW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBBC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBBR;?>px !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBFS;?>px !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBC;?> !important;
				line-height: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBFS;?>px !important;
				height: inherit !important;
			}
			.Rich_Web_CS_Forms input[type=text]::-webkit-input-placeholder, .Rich_Web_CS_Forms input[type=number]::-webkit-input-placeholder, .Rich_Web_CS_Forms input[type=time]::-webkit-input-placeholder, .Rich_Web_CS_Forms input[type=tel]::-webkit-input-placeholder
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBC;?> !important;
			}
			.Rich_Web_CS_Forms input[type=text]:-moz-placeholder, .Rich_Web_CS_Forms input[type=number]:-moz-placeholder, .Rich_Web_CS_Forms input[type=time]:-moz-placeholder, .Rich_Web_CS_Forms input[type=tel]:-moz-placeholder
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBC;?> !important;
			}
			.Rich_Web_CS_Forms input[type=text]::-moz-placeholder, .Rich_Web_CS_Forms input[type=number]::-moz-placeholder, .Rich_Web_CS_Forms input[type=time]::-moz-placeholder, .Rich_Web_CS_Forms input[type=tel]::-moz-placeholder
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBC;?> !important;
			}
			.Rich_Web_CS_Forms input[type=text]:-ms-input-placeholder, .Rich_Web_CS_Forms input[type=number]:-ms-input-placeholder, .Rich_Web_CS_Forms input[type=time]:-ms-input-placeholder, .Rich_Web_CS_Forms input[type=tel]:-ms-input-placeholder
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TBC;?> !important;
			}
			.Rich_Web_CS_Forms input[type=text] { padding: 4px 12px !important; }
			.Rich_Web_CS_Forms input[type=number] { padding: 4px 0px !important; }
			.Rich_Web_CS_Forms input[type=time] { padding: 0px 0px 0px 10px !important; }
			.Rich_Web_CS_Forms textarea
			{
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAHBg=='on'){ ?>
					background: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TABgC;?> !important;
				<?php }?>
				border: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TABW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TABC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TABR;?>px !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAFS;?>px !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAC;?> !important;
				padding: 10px !important; 
				line-height: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAFS;?>px !important;
			}
			.Rich_Web_CS_Forms textarea::-webkit-input-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAC;?> !important; }
			.Rich_Web_CS_Forms textarea:-moz-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAC;?> !important; }
			.Rich_Web_CS_Forms textarea::-moz-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAC;?> !important; }
			.Rich_Web_CS_Forms textarea:-ms-input-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_TAC;?> !important; }
			.Rich_Web_CS_Forms select
			{
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMHBg=='on'){ ?>
					background: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMBgC;?> !important;
				<?php }?>
				border: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMBW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMBC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMBR;?>px !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMFS;?>px !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMC;?> !important;
				padding: 4px 12px !important;
				line-height: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_SMFS;?>px !important;
				height: inherit !important;
			}
			.Rich_Web_CS_Forms input[type=email]
			{
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBHBg=='on'){ ?>
					background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBBgC;?> !important;
				<?php }?>
				border: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBBW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBBC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBBR;?>px !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBFS;?>px !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBC;?> !important;
				line-height: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBFS;?>px !important;
				height: inherit !important;
				padding: 4px 12px !important;
			}
			.Rich_Web_CS_Forms input[type=email]::-webkit-input-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBC;?> !important; }
			.Rich_Web_CS_Forms input[type=email]:-moz-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBC;?> !important; }
			.Rich_Web_CS_Forms input[type=email]::-moz-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBC;?> !important; }
			.Rich_Web_CS_Forms input[type=email]:-ms-input-placeholder { color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_EBC;?> !important; }
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Divider { border-top-color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_DC;?> !important; }
			.Rich_Web_CS_Forms input[type=checkbox] { display: none; }
			.Rich_Web_CS_Forms input[type=checkbox] + label
			{
				color:<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBHBC;?> !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBHBgC;?>px !important;
				cursor: pointer;
				font-family: 'FontAwesome' !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Check[type=checkbox] + label:before
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBBC;?>;
				content: "\<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBT;?>";
				margin: 0 .25em 0 0 !important;
				padding: 0 !important;
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBS=='Big'){ ?>
					font-size: 32px !important;
				<?php }else if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBS=='Medium'){ ?>
					font-size: 22px !important;
				<?php }else{ ?>
					font-size: 18px !important;
				<?php }?>
				vertical-align: middle;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Privacy[type=checkbox] + label:before {
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBBC;?>;
				content: "\<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBT;?>";
				padding: 0 !important;
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBS=='Big'){ ?>
					font-size: 32px !important;
				<?php }else if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBS=='Medium'){ ?>
					font-size: 22px !important;
				<?php }else{ ?>
					font-size: 18px !important;
				<?php }?>
				vertical-align: middle;
			}
			.Rich_Web_CS_Forms input[type=checkbox]:checked + label:before
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBCBgC;?> !important;
				content: "\<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBBgC;?>";
			}
			.Rich_Web_CS_Forms input[type=checkbox]:checked + label:after { font-weight: bold; }
			.Rich_Web_CS_Forms input[type=radio] { display: none; }
			.Rich_Web_CS_Forms input[type="radio"] + label
			{
				color:<?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_RBHBC;?> !important;
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_RBHBgC;?>px !important;
				cursor: pointer;
				font-family: 'FontAwesome' !important;
			}
			.Rich_Web_CS_Forms input[type="radio"] + label:before
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_RBBC;?>;
				content: "\<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_RBT;?>";
				margin: 0 .25em 0 0 !important;
				padding: 0 !important;
				<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_RBS=='Big'){ ?>
					font-size: 32px !important;
				<?php }else if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_RBS=='Medium'){ ?>
					font-size: 22px !important;
				<?php }else{ ?>
					font-size: 18px !important;
				<?php }?>
				vertical-align: middle;
			}
			.Rich_Web_CS_Forms input[type="radio"]:checked + label:before
			{
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_RBCBgC;?> !important;
				content: "\<?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_RBBgC;?>";
			}
			.Rich_Web_CS_Forms input[type="radio"]:checked + label:after { font-weight: bold; }
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Reset
			{
				background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBBgC;?> !important;
				border: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBBW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBBC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBBR;?>px !important;
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBBA=='right'){ ?>
					float: right;
					margin: 10px 10px;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBBA=='full'){ ?>
					width: 100% !important;
					margin: 10px 0px;
				<?php }else{ ?>
					margin: 10px 10px;
				<?php }?>
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBC;?> !important;
				padding: 8px 15px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Reset span
			{
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBFS;?>px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Reset:hover
			{
				background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBHBgC;?> !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBHC;?> !important;
				cursor: pointer;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Reset_Icon
			{
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBIFS;?>px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Reset_Icon:before
			{
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBIA=='after text'){ ?>
					float: right;
					margin-left: 10px;
				<?php }else{ ?>
					margin-right: 10px;
				<?php }?>
				content: "\<?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_ReBIT;?>";
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Button
			{
				background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBBgC;?> !important;
				border: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBBW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBBC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBBR;?>px !important;
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBBA=='right'){ ?>
					float: right;
					margin: 10px 10px;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBBA=='full'){ ?>
					width: 100% !important;
					margin: 10px 0px;
				<?php }else{ ?>
					margin: 10px 10px;
				<?php }?>
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBC;?> !important;
				padding: 8px 15px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Button span
			{
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBFS;?>px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Button:hover
			{
				background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBHBgC;?> !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBHC;?> !important;
				cursor: pointer;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Button_Icon
			{
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBIFS;?>px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Button_Icon:before
			{
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBIA=='after text'){ ?>
					float: right;
					margin-left: 10px;
				<?php }else{ ?>
					margin-right: 10px;
				<?php }?>
				content: "\<?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_SBIT;?>";
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div
			{
				position: relative;
				overflow: hidden;
				border: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBW;?>px solid <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBC;?> !important;
				border-radius: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBR;?>px !important;
				transition: box-shadow 0.1s linear;
				<?php if($Rich_Web_CS_Forms_Fields_File=='Above Field'){ ?>
					width: 100% !important;
				<?php }else{ ?>
					width: 60% !important;
					float: left !important;
				<?php }?>
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div span
			{
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUFS;?>px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div .Rich_Web_CS_Contact_Form_Media_Icon:before
			{
				content: "\<?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUIT;?>";
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUIA=='after text'){ ?>
					float: right;
					margin-left: 10px;
				<?php }else{ ?>
					margin-right: 10px;
				<?php }?>
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div .Rich_Web_CS_Contact_Form_Media_Icon
			{
				font-size: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUIFS;?>px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div > div{
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBA=='right'){ ?>
					float: right; width: 40%; padding-left: 10px; padding-top: 8px;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBA=='left'){ ?>
					float: left; width: 40%; padding-left: 10px; padding-top: 8px;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBA=='full'){ ?>
					width: 100%;
				<?php }?>
				height: 100%;
				font-size: 14px;
				color: <?php echo $Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_LC;?> !important;
				overflow: hidden;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div input[type=file]
			{
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				opacity: 0;
				cursor: pointer;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div > button
			{
				<?php if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBA=='right'){ ?>
					float: right;
					width: 40%;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBA=='left'){ ?>
					float: left;
					width: 40%;
				<?php }else if($Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBA=='full'){ ?>
					width: 100%;
				<?php }?>
				min-width: 120px;
				height: 100%;
				background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUBgC;?> !important;
				transition: background 0.2s;
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUTC;?> !important;
				overflow: hidden;
				white-space: nowrap;
				text-overflow: ellipsis;
				border: 1px;
				padding: 8px 15px !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div:hover > button
			{
				background: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUHBgC;?> !important;
				color: <?php echo $Rich_Web_CS_Forms_Theme2[0]->Rich_Web_CS_Forms_T_FUHTC;?> !important;
				cursor: pointer;
			}
			.ui-datepicker { z-index: 9999999999999999999 !important; }
			.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Radio_MDiv, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Check_MDiv
			{
				margin: 0px 0px 10px 0px !important;
			}
			.Rich_Web_CS_Contact_Form_Button, .Rich_Web_CS_Contact_Form_Reset, .Rich_Web_CS_Contact_Form_Media
			{
				text-transform: none !important;
				letter-spacing: 0 !important;
			}
			.Rich_Web_CS_Forms em
			{
				font-weight: normal !important;
			}
			.Rich_Web_CS_Forms .Rich_Web_Loading_Span
			{
				background: rgba(241, 241, 241, 0.85);
				position: absolute;
				top: 0;
				left: 0;
				text-align: center;
				width: 100%;
				height: 100%;
				line-height: 1;
			}
			.Rich_Web_CS_Forms .Rich_Web_Loading_Span img#Rich_Web_Loading_Span_Img{
				width: 20px;
				height: 20px;
				margin-top: 10px;
			}
			@media only screen and ( max-width: 500px )
			{
				.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div > div { display: none; }
				.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div > button { width: 100%; }
				.Rich_Web_CS_Forms label.Rich_Web_CS_Forms_Label { width: 100% !important; margin-bottom: 5px; text-align: left !important; } 
				.Rich_Web_CS_Forms input[type=text], .Rich_Web_CS_Forms input[type=time], .Rich_Web_CS_Forms input[type=number], .Rich_Web_CS_Forms textarea, .Rich_Web_CS_Forms input[type=email], .Rich_Web_CS_Forms_Div_Fields, .Rich_Web_CS_Forms, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Media_Div, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Radio_Div, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Radio_MDiv, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Check_Div, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Check_MDiv, .Rich_Web_CS_Forms select
				{
					width: 100% !important;
				}
				.Rich_Web_CS_Forms { margin-left: 0% !important; padding: 5px !important; }
				.Rich_Web_CS_Contact_Form_Button, .Rich_Web_CS_Contact_Form_Reset { width: 100% !important; margin: 10px 0px !important; }
				.Rich_Web_CS_Contact_Form_TimePicker1, .Rich_Web_CS_Contact_Form_DataPicker1, .Rich_Web_CS_Contact_Form_FN
				{
					width: 100% !important;
					margin-left: 0 !important;
					margin-right: 0 !important;
				}
				.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Radio_Div, .Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Check_Div { margin: 5px 0px !important; }
				.Rich_Web_CS_Forms .Rich_Web_CS_Contact_Form_Captcha
				{
					float: none !important;
					transform:scale(0.77);
					-webkit-transform:scale(0.77);
					transform-origin:0 0;
					-webkit-transform-origin:0 0;
				}
			}
			.country-list li:before{ content: " " !important; };
		</style>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				var Rich_Web_CS_Forms_Hidden_7 = jQuery('#Rich_Web_CS_Forms_Hidden_7').val();   // Sender's message was sent successfully
				var Rich_Web_CS_Forms_Hidden_9 = jQuery('#Rich_Web_CS_Forms_Hidden_9').val();   // Submission was referred to as spam
				var Rich_Web_CS_Forms_Hidden_10 = jQuery('#Rich_Web_CS_Forms_Hidden_10').val(); // Captcha is Not Validated
				var Rich_Web_CS_Forms_Hidden_11 = jQuery('#Rich_Web_CS_Forms_Hidden_11').val(); // Required Field Is Empty
				var Rich_Web_CS_Forms_Hidden_12 = jQuery('#Rich_Web_CS_Forms_Hidden_12').val(); // Email address that the sender entered is invalid
				function isValidEmailAddress(emailAddress) {
					var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
					return pattern.test(emailAddress);
				}
				jQuery('.Rich_Web_CS_Contact_Form').each(function(){
					if(jQuery(this).attr('type') == 'text' || jQuery(this).attr('type') == 'number' || jQuery(this).hasClass('richtextarea') || jQuery(this).attr('type') == 'time' || jQuery(this).attr('type') == 'tel' || jQuery(this).attr('type') == 'file')
					{
						if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_DataPicker'))
						{
							jQuery(this).on('change', function(){
								if(jQuery(this).hasClass('required') && jQuery(this).val())
								{
									jQuery('#'+jQuery(this).attr('id')+'_Span').removeClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html('');
									if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_DataPicker1'))
									{
										jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
										jQuery('#'+jQuery(this).attr('id')+'_Span').parent().css('margin-top','-14px');
									}
								}
								else if (jQuery(this).hasClass('required') && !jQuery(this).val())
								{
									jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_11);
									if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_DataPicker1'))
									{
										jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
										jQuery('#'+jQuery(this).attr('id')+'_Span').parent().css('margin-top','-14px');
									}
								}
							})
						}
						else
						{
							jQuery(this).on('blur',function(){
								if(jQuery(this).hasClass('required') && jQuery(this).val())
								{
									jQuery('#'+jQuery(this).attr('id')+'_Span').removeClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html('');
									if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_FN') || jQuery(this).hasClass('Rich_Web_CS_Contact_Form_TimePicker1'))
									{
										jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
										jQuery('#'+jQuery(this).attr('id')+'_Span').parent().css('margin-top','-14px');
									}
									if(jQuery(this).attr('type') == 'tel' || jQuery(this).attr('type') == 'file')
									{
										jQuery('#'+jQuery(this).attr('id')+'_Span').css('margin-top','0px');
									}
								}
								else if (jQuery(this).hasClass('required') && !jQuery(this).val())
								{
									jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_11);
									if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_FN') || jQuery(this).hasClass('Rich_Web_CS_Contact_Form_TimePicker1'))
									{
										jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
										jQuery('#'+jQuery(this).attr('id')+'_Span').parent().css('margin-top','-14px');
									}
									if(jQuery(this).attr('type') == 'tel' || jQuery(this).attr('type') == 'file')
									{
										jQuery('#'+jQuery(this).attr('id')+'_Span').css('margin-top','-14px');
									}
								}
							})
						}
					}
					else if(jQuery(this).attr('type') == 'checkbox' && jQuery(this).hasClass('Rich_Web_CS_Contact_Form_Privacy'))
					{
						jQuery(this).on('change', function(){
							Rich_Web_CS_Forms_Check_Privacy();
						});
					}
					else if(jQuery(this).attr('type') == 'email')
					{
						jQuery(this).on('blur',function(){
							if(jQuery(this).hasClass('required') && jQuery(this).val())
							{
								if(!isValidEmailAddress(jQuery(this).val())){
									jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_12);
								}else{
									jQuery('#'+jQuery(this).attr('id')+'_Span').removeClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html('');
								}
							}
							else if (jQuery(this).hasClass('required') && !jQuery(this).val())
							{
								jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
								jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
								jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_11);
							}
						})
					}
				})
				jQuery( "#Rich_Web_CS_Forms_Form" ).on( "submit", function(e){
					e.preventDefault();
					var errorsAllow='yes';
					jQuery( "#Rich_Web_CS_Forms_Form" ).find('.Rich_Web_CS_Contact_Form').each(function(){
						if(jQuery(this).attr('type') == 'text' || jQuery(this).attr('type') == 'number' || jQuery(this).hasClass('richtextarea') || jQuery(this).attr('type') == 'time' || jQuery(this).attr('type') == 'tel' || jQuery(this).attr('type') == 'file')
						{
							if(jQuery(this).hasClass('required') && jQuery(this).val())
							{
								jQuery('#'+jQuery(this).attr('id')+'_Span').removeClass('Rich_Web_CS_Contact_Form_Span_Error');
								jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
								jQuery('#'+jQuery(this).attr('id')+'_Span').html('');
								if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_FN') || jQuery(this).hasClass('Rich_Web_CS_Contact_Form_DataPicker1') || jQuery(this).hasClass('Rich_Web_CS_Contact_Form_TimePicker1'))
								{
									jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').parent().css('margin-top','0px');
								}
								if(jQuery(this).attr('type') == 'tel' || jQuery(this).attr('type') == 'file')
								{
									jQuery('#'+jQuery(this).attr('id')+'_Span').css('margin-top','0px');
								}
							}
							else if (jQuery(this).hasClass('required') && !jQuery(this).val())
							{
								jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
								jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
								jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_11);
								if(jQuery(this).hasClass('Rich_Web_CS_Contact_Form_FN') || jQuery(this).hasClass('Rich_Web_CS_Contact_Form_DataPicker1') || jQuery(this).hasClass('Rich_Web_CS_Contact_Form_TimePicker1'))
								{
									jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').parent().css('margin-top','-14px');
								}
								if(jQuery(this).attr('type') == 'tel' || jQuery(this).attr('type') == 'file')
								{
									jQuery('#'+jQuery(this).attr('id')+'_Span').css('margin-top','-14px');
								}
								errorsAllow = 'no';
							}
						}
						else if(jQuery(this).attr('type') == 'checkbox' && jQuery(this).hasClass('Rich_Web_CS_Contact_Form_Privacy'))
						{
							var Rich_Web_CS_Forms_Check_Privacy_Ch = Rich_Web_CS_Forms_Check_Privacy();
							if( Rich_Web_CS_Forms_Check_Privacy_Ch == 'nochecked')
							{
								errorsAllow = 'no';
							}
						}
						else if(jQuery(this).attr('type') == 'email')
						{
							if(jQuery(this).hasClass('required') && jQuery(this).val())
							{
								if(!isValidEmailAddress(jQuery(this).val())){
									jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_12);
									errorsAllow = 'no';
								}else{
									jQuery('#'+jQuery(this).attr('id')+'_Span').removeClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#'+jQuery(this).attr('id')).removeClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#'+jQuery(this).attr('id')+'_Span').html('');
								}
							}
							else if (jQuery(this).hasClass('required') && !jQuery(this).val())
							{
								jQuery('#'+jQuery(this).attr('id')+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
								jQuery('#'+jQuery(this).attr('id')).addClass('Rich_Web_CS_Contact_Form_Input_Error');
								jQuery('#'+jQuery(this).attr('id')+'_Span').html(Rich_Web_CS_Forms_Hidden_11);
								errorsAllow = 'no';
							}
						}
					})
					if( errorsAllow == 'yes' )
					{
						var fd = new FormData();
						var files_data = jQuery('input[type=file]');
						var self=jQuery('#Rich_Web_CS_Forms_Form');
						var postData=self.serialize();
						jQuery.each(jQuery(files_data), function(i, obj) {
							jQuery.each(obj.files,function(j,file){
								fd.append(obj.name, file);
							})
						});
						fd.append('action', 'Rich_Web_CS_Forms_Submit');
						fd.append('postData', postData);
						jQuery.ajax({
							type: 'POST',
							url: '<?php echo admin_url("admin-ajax.php"); ?>',
							data: fd,
							contentType: false,
							processData: false,
							beforeSend: function(){
								jQuery('#Rich_Web_CS_Contact_Form_Submit').parent().append('<span class="Rich_Web_Loading_Span"><img id="Rich_Web_Loading_Span_Img" src="<?php echo plugins_url( "/image/loading.gif", __FILE__ ); ?>"></span>');
							},
							success: function(response){
								var response = JSON.parse(response);
								if( response.ReCaptchaError)
								{
									jQuery('#Rich_Web_CS_Contact_Form_Captcha_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
									jQuery('#Rich_Web_CS_Contact_Form_Captcha').addClass('Rich_Web_CS_Contact_Form_Input_Error');
									jQuery('#Rich_Web_CS_Contact_Form_Captcha_Span').html(response.ReCaptchaError);
									jQuery('#Rich_Web_CS_Forms_Form').find('.Rich_Web_Loading_Span').css('display','none');
								}
								else
								{
									if( response.RichSubmit == 'Printing Message' )
									{
										jQuery('#Rich_Web_CS_Contact_Form_Submit').parent().find('.Rich_Web_Loading_Span').empty().append(response.RichSubmitMessage);
										document.getElementById("Rich_Web_CS_Forms_Form").reset();
										jQuery('#Rich_Web_CS_Forms_Form').find('.Rich_Web_CS_Contact_Form_Media_Div div').empty();
									}
									else if( response.RichSubmit == 'Refresh Page' )
									{
										location.reload();
									}
									else if( response.RichSubmit == 'Go to URL' )
									{
										jQuery('#Rich_Web_CS_Forms_Form').find('.Rich_Web_Loading_Span').css('display','none');
										document.getElementById("Rich_Web_CS_Forms_Form").reset();
										window.open(response.RichSubmitURL , "_self");
									}
								}
							}
						});
					}
				})
			})
		</script>
	</header>
	<body class="Rich_Web_CS_Forms_Body">
		<div class="Rich_Web_CS_Forms">
			<?php 
				if(!empty($Rich_Web_CS_Forms_Fields_DateExist)){ ?>
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_DatePicker_Current" value="<?php echo $Rich_Web_CS_Forms_Fields_DateExist[0]->CS_Rich_Web_Forms_Fields_O4;?>">
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_DatePicker_Format" value="<?php echo $Rich_Web_CS_Forms_Theme3[0]->Rich_Web_CS_Forms_T_01;?>">
				<?php } else { ?>
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_DatePicker_Current" value="">
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_DatePicker_Format" value="">
				<?php }
				if(!empty($Rich_Web_CS_Forms_Fields_TimeExist)){ ?>
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_TimePicker_Current" value="<?php echo $Rich_Web_CS_Forms_Fields_TimeExist[0]->CS_Rich_Web_Forms_Fields_O4;?>">
				<?php } else { ?>
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_TimePicker_Current" value="">
				<?php }
				if(!empty($Rich_Web_CS_Forms_Fields_Privacy)){ ?>
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_Privacy_Required" value="<?php echo $Rich_Web_CS_Forms_Fields_Privacy[0]->CS_Rich_Web_Forms_Fields_O3;?>">
				<?php } else { ?>
					<input type="text" style="display: none" class="Rich_Web_CS_Contact_Form_Privacy_Required" value="noprivacy">
				<?php }
				for($k=0;$k<count($Rich_Web_CS_Forms_Fields);$k++)
				{	
					if($Rich_Web_CS_Forms_Fields[$k]->CS_Forms_Fields_Width=='49%')
					{ 
						$Rich_Web_CS_Forms_FieldsWidth = '49%';
						$Rich_Web_CS_Forms_FieldsMargin = '0 1% 0 0';
					}
					else
					{ 
						$Rich_Web_CS_Forms_FieldsWidth = '100%';
						$Rich_Web_CS_Forms_FieldsMargin = '0';
					}
					switch ($Rich_Web_CS_Forms_Fields[$k]->CS_Forms_Fields_Type) {
						case "Text Box":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" style="display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" style="display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" style="display:inline-block; width: 100%;" placeholder="<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" style="display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php }?>
							</div>
						<?php
							break;
						case "Textarea":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<textarea class="Rich_Web_CS_Contact_Form richtextarea <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="resize: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O7;?>; height: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>px; display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>></textarea>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<textarea class="Rich_Web_CS_Contact_Form richtextarea <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="resize: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O7;?>; height: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>px; display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>></textarea>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<textarea class="Rich_Web_CS_Contact_Form richtextarea <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="resize: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O7;?>; height: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>px; display:inline-block; width: 100%;" placeholder="<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>></textarea>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<textarea class="Rich_Web_CS_Contact_Form richtextarea <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="resize: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O7;?>; height: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>px; display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>></textarea>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php }?>
							</div>
						<?php
							break;
						case "Select Menu":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<select class="Rich_Web_CS_Contact_Form" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="width: 60%; display: inline-block;">
										<option disabled selected><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?></option>
										<?php $Rich_Web_CS_Forms_FEditing_SM_Opt = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5);
										for( $x = 0; $x < count($Rich_Web_CS_Forms_FEditing_SM_Opt); $x++ ){ ?>
											<option value="<?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?>"><?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?></option>
										<?php } ?>
									</select>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<select class="Rich_Web_CS_Contact_Form" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="width: 60%; display: inline-block;">
										<option disabled selected><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?></option>
										<?php $Rich_Web_CS_Forms_FEditing_SM_Opt = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5);
										for( $x = 0; $x < count($Rich_Web_CS_Forms_FEditing_SM_Opt); $x++ ){ ?>
											<option value="<?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?>"><?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?></option>
										<?php } ?>
									</select>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<select class="Rich_Web_CS_Contact_Form" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="width: 100%; display: inline-block;">
										<option disabled selected><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?></option>
										<?php $Rich_Web_CS_Forms_FEditing_SM_Opt = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5);
										for( $x = 0; $x < count($Rich_Web_CS_Forms_FEditing_SM_Opt); $x++ ){ ?>
											<option value="<?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?>"><?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?></option>
										<?php } ?>
									</select>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<select class="Rich_Web_CS_Contact_Form" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" style="width: 100%; display: inline-block;">
										<option disabled selected><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?></option>
										<?php $Rich_Web_CS_Forms_FEditing_SM_Opt = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5);
										for( $x = 0; $x < count($Rich_Web_CS_Forms_FEditing_SM_Opt); $x++ ){ ?>
											<option value="<?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?>"><?php echo $Rich_Web_CS_Forms_FEditing_SM_Opt[$x];?></option>
										<?php } ?>
									</select>
								<?php }?>
							</div>
						<?php
							break;
						case "Check Box":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<div class="Rich_Web_CS_Contact_Form_Check_MDiv" style="display: inline-block; width: 60%; position:relative;">
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<div class="Rich_Web_CS_Contact_Form_Check_MDiv" style="display: inline-block; width: 60%; position:relative;">
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<div class="Rich_Web_CS_Contact_Form_Check_MDiv" style="display: inline-block; width: 100%; position:relative;">
								<?php }?>
								<?php $Rich_Web_CS_Forms_FEditing_CB_Opt = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5);
								$Rich_Web_CS_Forms_FEditing_CB_Chd = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6);
								for( $x = 0; $x < count($Rich_Web_CS_Forms_FEditing_CB_Opt); $x++ ){ ?>
									<div class="Rich_Web_CS_Contact_Form_Check_Div" style="position:relative; display: inline-block; width: <?php echo floor(98/$Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4);?>%;">
										<input type="checkbox" class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Check" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_<?php echo $x;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_<?php echo $x;?>" value="<?php echo $Rich_Web_CS_Forms_FEditing_CB_Opt[$x];?>" <?php echo $Rich_Web_CS_Forms_FEditing_CB_Chd[$x];?> <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>>
										<label class="rich_web rich_web-trash" style="display: inline-block; float: none;" for="Rich_Web_CS_Contact_Form_<?php echo $k;?>_<?php echo $x;?>"><?php echo $Rich_Web_CS_Forms_FEditing_CB_Opt[$x];?></label>
									</div>
								<?php } ?>
								</div>
							</div>
						<?php
							break;
						case "Radio Box":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<div class="Rich_Web_CS_Contact_Form_Radio_MDiv" style="display: inline-block; width: 60%; position:relative;">
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<div class="Rich_Web_CS_Contact_Form_Radio_MDiv" style="display: inline-block; width: 60%; position:relative;">
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<div class="Rich_Web_CS_Contact_Form_Radio_MDiv" style="display: inline-block; width: 100%; position:relative;">
								<?php }?>

								<?php $Rich_Web_CS_Forms_FEditing_RB_Opt = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5);
								$Rich_Web_CS_Forms_FEditing_RB_Chd = explode('qwertyh', $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6);
								for( $x = 0; $x < count($Rich_Web_CS_Forms_FEditing_RB_Opt); $x++ ){ ?>
									<div class="Rich_Web_CS_Contact_Form_Radio_Div" style="position:relative; display: inline-block; width: <?php echo floor(98/$Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4);?>%;">
										<input type="radio" class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Radio" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_<?php echo $x;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" value="<?php echo $Rich_Web_CS_Forms_FEditing_RB_Opt[$x];?>" <?php echo $Rich_Web_CS_Forms_FEditing_RB_Chd[$x];?> <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>>
										<label class="rich_web rich_web-trash" style="display: inline-block; float: none;" for="Rich_Web_CS_Contact_Form_<?php echo $k;?>_<?php echo $x;?>"><?php echo $Rich_Web_CS_Forms_FEditing_RB_Opt[$x];?></label>
									</div>
								<?php } ?>
								</div>
							</div>
						<?php
							break;
						case "File":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'required'){ echo '*';}?></span></label>
									<div class="Rich_Web_CS_Contact_Form_Media_Div"><button type="button" class="Rich_Web_CS_Contact_Form_Media"><i class="rich_web Rich_Web_CS_Contact_Form_Media_Icon"><span><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?></span></i></button><div id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_div"></div><input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>" type="file" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" accept="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" multiple="multiple"></div><span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'required'){ echo '*';}?></span></label>
									<div class="Rich_Web_CS_Contact_Form_Media_Div"><button type="button" class="Rich_Web_CS_Contact_Form_Media"><i class="rich_web Rich_Web_CS_Contact_Form_Media_Icon"><span><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?></span></i></button><div id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_div"></div><input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>" type="file" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" accept="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" multiple="multiple"></div><span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'required'){ echo '*';}?></span></label>
									<div class="Rich_Web_CS_Contact_Form_Media_Div"><button type="button" class="Rich_Web_CS_Contact_Form_Media"><i class="rich_web Rich_Web_CS_Contact_Form_Media_Icon"><span><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?></span></i></button><div id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_div"></div><input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>" type="file" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" accept="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" multiple="multiple"></div><span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php }?>
							</div>
						<?php
							break;
						case "Custom Text":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Forms_Fields);?>
							</div>
						<?php
							break;
						case "Email":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" type="email" style="display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" type="email" style="display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" type="email" style="display:inline-block; width: 100%;" placeholder="<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4 == 'required'){ echo '*';}?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>" type="email" style="display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_Email_<?php echo $k;?>_Span"></span>
								<?php }?>
							</div>
						<?php
							break;
						case "Button":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<button class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Button" id="Rich_Web_CS_Contact_Form_Submit" name="Rich_Web_CS_Contact_Form_Submit" type="submit" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?>"><i class="rich_web Rich_Web_CS_Contact_Form_Button_Icon"><span><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?></span></i></button>
								<input type="text" style="display: none;" class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Button_AAC" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>">
								<input type="text" style="display: none;" class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Button_URL" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>">

								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'show'){ ?>
									<button class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Reset" id="Rich_Web_CS_Contact_Form_Reset" name="Rich_Web_CS_Contact_Form_Reset" type="reset" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>"><i class="rich_web Rich_Web_CS_Contact_Form_Reset_Icon"><span><?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?></span></i></button>
								<?php }?>
							</div>
						<?php
							break;
						case "Captcha":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<div style="position: relative; float: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>; width: 100%;">
									<div style="float: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>;margin: 10px;" class="g-recaptcha Rich_Web_CS_Contact_Form_Captcha" id="Rich_Web_CS_Contact_Form_Captcha" name="Rich_Web_CS_Contact_Form_Captcha"></div>
								</div>
								<div>
									<span style="display: block; text-align: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>; padding: 10px;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_Captcha_Span" name="Rich_Web_CS_Contact_Form_Captcha_Span"></span>
								</div>
							</div>
						<?php
							break;
						case "Divider":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<div class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Divider" style="width: 96%; margin-left: 2%; border-top:<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?>px <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>"></div>
							</div>
						<?php
							break;
						case "Space":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<div style="width: 100%; height: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?>px;"></div>
							</div>
						<?php
							break;
						case "DatePicker":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O7 == 'FromTo'){ ?>
									<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 29%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 29%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 60%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 29%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 29%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 60%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 49%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 49%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 100%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 49%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker Rich_Web_CS_Contact_Form_DataPicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 49%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 100%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php }?>
								<?php } else { ?>
									<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="text" style="display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="text" style=" display:inline-block; width: 60%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="text" style="display:inline-block; width: 100%;" placeholder="<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_DataPicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="text" style="display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php }?>
								<?php }?>
							</div>
						<?php
							break;
						case "TimePicker":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O7 == 'FromTo'){ ?>
									<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker Rich_Web_CS_Contact_Form_TimePicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="time" style="display:inline-block; width: 29%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker Rich_Web_CS_Contact_Form_TimePicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="time" style="display:inline-block; width: 29%; margin-left: 1%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 60%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker Rich_Web_CS_Contact_Form_TimePicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="time" style="display:inline-block; width: 29%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker Rich_Web_CS_Contact_Form_TimePicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="time" style="display:inline-block; width: 29%; margin-left: 1%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 60%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>'_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker Rich_Web_CS_Contact_Form_TimePicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="time" style="display:inline-block; width: 49%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker Rich_Web_CS_Contact_Form_TimePicker1 <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="time" style="display:inline-block; width: 49%; margin-left: 1%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 100%; float: right; margin-top: -24px;">
											<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
											<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
										</span>
									<?php }?>
								<?php } else { ?>
									<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="time" style="display:inline-block; width: 60%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="time" style=" display:inline-block; width: 60%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
										<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
										<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_TimePicker <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="time" style="display:inline-block; width: 100%;" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
										<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
									<?php }?>
								<?php }?>
							</div>
						<?php
							break;
						case "Full Name":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 29%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 29%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 60%; float: right; margin-top: -24px;">
										<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
										<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
									</span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 29%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 29%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 60%; float: right; margin-top: -24px;">
										<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
										<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
									</span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 49%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 49%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 100%; float: right; margin-top: -24px;">
										<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
										<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
									</span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1" type="text" style="display:inline-block; width: 49%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_FN <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2" type="text" style="display:inline-block; width: 49%; margin-left: 1%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 100%; float: right; margin-top: -24px;">
										<span style="display: inline-block; width: 50%; margin-left: 1%;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_1_Span"></span>
										<span style="display: inline-block; width: 48%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_2_Span"></span>
									</span>
								<?php }?>
							</div>
						<?php
							break;
						case "Phone":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Phone <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style="display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?><span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Phone <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style=" display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Phone <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style="display:inline-block; width: 100%;" placeholder="<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?> <span><?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5 == 'required'){ echo '*';}?></span></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Phone <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O5;?>" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style="display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php }?>
							</div>
						<?php
							break;
						case "Country":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<?php if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Left'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:left; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Country" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style="display:inline-block; width: 100%;" value="" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="text-align:right; display:inline-block; width: 39%; margin-right: 1%;"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Country" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style=" display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 59%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Placeholder'){ ?>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Country" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style="display:inline-block; width: 100%;" placeholder="<?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php } else if($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3 == 'Above Field'){ ?>
									<label class="Rich_Web_CS_Forms_Label" style="display:inline-block; width: 100%; margin-bottom: 3px; "><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
									<input class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Country" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>" type="tel" style="display:inline-block; width: 100%;" placeholder="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>" <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O6;?>>
									<span style="display: block; width: 99%; float: right;" class="Rich_Web_CS_Contact_Form_Span" id="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span" name="Rich_Web_CS_Contact_Form_<?php echo $k;?>_Span"></span>
								<?php }?>
							</div>
						<?php
							break;
						case "Privacy Policy":
						?>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<input type="checkbox" class="Rich_Web_CS_Contact_Form Rich_Web_CS_Contact_Form_Privacy" id="Rich_Web_CS_Contact_Form_Privacy" name="Rich_Web_CS_Contact_Form_Privacy" value="Rich_Web_CS_Contact_Form_Privacy">
								<label class="rich_web rich_web-trash Rich_Web_CS_Contact_Form_Privacy_Lab" style="display: inline-block; float: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>;" for="Rich_Web_CS_Contact_Form_Privacy"><?php echo html_entity_decode($Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1);?></label>
								<p class="Rich_Web_CS_Contact_Form_Privacy_p" style="text-align: <?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>">
									<span id="Rich_Web_CS_Contact_Form_Privacy_Span"></span>
								</p>
							</div>
						<?php
							break;
						case "Google Map":
						?>
							<script type="text/javascript">
								function Rich_Web_CS_Forms_Map()
								{
									var Rich_Web_CS_Forms_MLat = jQuery('#Rich_Web_CS_Forms_MLat').val();
									var Rich_Web_CS_Forms_MLong = jQuery('#Rich_Web_CS_Forms_MLong').val();
									var Rich_Web_CS_Forms_MZoom = jQuery('#Rich_Web_CS_Forms_MZoom').val();
									var Rich_Web_CS_Forms_MType = jQuery('#Rich_Web_CS_Forms_MType').val();
									
									var mapCanvas = document.getElementById("Rich_Web_CS_Forms_map");
									var myCenter = new google.maps.LatLng(Rich_Web_CS_Forms_MLat, Rich_Web_CS_Forms_MLong); 
									if(Rich_Web_CS_Forms_MType == 'ROADMAP')
									{
										var mapOptions = {center: myCenter, zoom: parseInt(Rich_Web_CS_Forms_MZoom), mapTypeId: google.maps.MapTypeId.ROADMAP, };
									}
									else if(Rich_Web_CS_Forms_MType == 'SATELLITE')
									{
										var mapOptions = {center: myCenter, zoom: parseInt(Rich_Web_CS_Forms_MZoom), mapTypeId: google.maps.MapTypeId.SATELLITE, };
									}
									else if(Rich_Web_CS_Forms_MType == 'HYBRID')
									{
										var mapOptions = {center: myCenter, zoom: parseInt(Rich_Web_CS_Forms_MZoom), mapTypeId: google.maps.MapTypeId.HYBRID, };
									}
									else if(Rich_Web_CS_Forms_MType == 'TERRAIN')
									{
										var mapOptions = {center: myCenter, zoom: parseInt(Rich_Web_CS_Forms_MZoom), mapTypeId: google.maps.MapTypeId.TERRAIN, };
									}
									var map = new google.maps.Map(mapCanvas,mapOptions);
									var marker = new google.maps.Marker({
										position: myCenter,
									});
									marker.setMap(map);
								}
							</script>
							<div class="Rich_Web_CS_Forms_Div_Fields" style="float:left; position: relative; width: <?php echo $Rich_Web_CS_Forms_FieldsWidth; ?>; margin: <?php echo $Rich_Web_CS_Forms_FieldsMargin; ?>">
								<div class="Rich_Web_CS_Forms_map" id="Rich_Web_CS_Forms_map" style="height: <?php if($Rich_Web_CS_Forms_Theme3[0]->Rich_Web_CS_Forms_T_04 == ''){ echo '400'; }else{ echo $Rich_Web_CS_Forms_Theme3[0]->Rich_Web_CS_Forms_T_04; } ?>px; width: <?php if($Rich_Web_CS_Forms_Theme3[0]->Rich_Web_CS_Forms_T_02 == ''){ echo '100'; }else{ echo $Rich_Web_CS_Forms_Theme3[0]->Rich_Web_CS_Forms_T_02; } ?>%;"></div>
							</div>
							
							<input type="text" style="display: none;" id="Rich_Web_CS_Forms_MLat" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?>">
							<input type="text" style="display: none;" id="Rich_Web_CS_Forms_MLong" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>">
							<input type="text" style="display: none;" id="Rich_Web_CS_Forms_MZoom" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>">
							<input type="text" style="display: none;" id="Rich_Web_CS_Forms_MType" value="<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O4;?>">
							<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_8;?>&callback=Rich_Web_CS_Forms_Map"></script>
						<?php
							break;
					}
				}
				$RichWebContactFormsCpatcha = false;
				for($k=0;$k<count($Rich_Web_CS_Forms_Fields);$k++)
				{
					if($Rich_Web_CS_Forms_Fields[$k]->CS_Forms_Fields_Type == 'Captcha')
					{
						$RichWebContactFormsCpatcha = true;
						break;
					}
				}
				if($RichWebContactFormsCpatcha === true)
				{
					?>
						<script src="https://www.google.com/recaptcha/api.js?onload=RichWebonloadCallback&render=explicit" async defer></script>
						<script type="text/javascript">
							var Rich_Web_CS_Forms_TFa = false;
							function RichWebverifyCallback()
							{ 
								Rich_Web_CS_Forms_TFa = true;
							}
							function RichWebcapcha_expired() 
							{
								var Rich_Web_CS_Forms_Hidden_10 = jQuery('#Rich_Web_CS_Forms_Hidden_10').val(); // Captcha is Not Validated
								jQuery('#Rich_Web_CS_Contact_Form_Captcha_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
								jQuery('#Rich_Web_CS_Contact_Form_Captcha').addClass('Rich_Web_CS_Contact_Form_Input_Error');
								jQuery('#Rich_Web_CS_Contact_Form_Captcha_Span').html(Rich_Web_CS_Forms_Hidden_10);
								Rich_Web_CS_Forms_TFa = false;
							}
							function check_if_capcha_is_filled (e) 
							{
								return Rich_Web_CS_Forms_TFa;
							}
							var widgetid1;
							var RichWebonloadCallback = function() {
								widgetid1 = grecaptcha.render('Rich_Web_CS_Contact_Form_Captcha', {
										'sitekey' : '<?php echo $Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_4;?>',
										'theme' : '<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O1;?>',
										'type' : '<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O3;?>',
										'size' : '<?php echo $Rich_Web_CS_Forms_Fields[$k]->CS_Rich_Web_Forms_Fields_O2;?>',
										'callback' : RichWebverifyCallback,
										'expired-callback' : RichWebcapcha_expired ,
									});
								};
						</script>
					<?php
				}
				else
				{
					?>
						<script type="text/javascript">
							function check_if_capcha_is_filled () 
							{
								return true;
							}
						</script>
					<?php
				}
			?>
			<style type="text/css">
				<?php if(!empty($Rich_Web_CS_Forms_Fields_Phone)){ ?>
				.intl-tel-input
				{
					margin-bottom: 14px !important;
					<?php if($Rich_Web_CS_Forms_Fields_Phone[0]->CS_Rich_Web_Forms_Fields_O3 == 'Left' || $Rich_Web_CS_Forms_Fields_Phone[0]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
						width: 60% !important;
					<?php }else{ ?>
						width: 100% !important;
					<?php }?>
				}
				<?php }?>
				<?php if(!empty($Rich_Web_CS_Forms_Fields_Country)){ ?>
				.country-select
				{
					margin-bottom: 14px !important;
					<?php if($Rich_Web_CS_Forms_Fields_Country[0]->CS_Rich_Web_Forms_Fields_O3 == 'Left' || $Rich_Web_CS_Forms_Fields_Country[0]->CS_Rich_Web_Forms_Fields_O3 == 'Right'){ ?>
						width: 60% !important;
					<?php }else{ ?>
						width: 100% !important;
					<?php }?>
				}
				<?php }?>
				<?php if(!empty($Rich_Web_CS_Forms_Fields_Privacy)){ ?>
					.Rich_Web_CS_Contact_Form_Privacy_Lab p { display: inline-block !important; padding: 0px 10px;}	
					<?php if($Rich_Web_CS_Forms_Fields_Privacy[0]->CS_Rich_Web_Forms_Fields_O2 == 'Right'){ ?>
						.Rich_Web_CS_Contact_Form_Privacy_Lab:before 
						{ 
							float: right; 
							<?php if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBS=='Big'){ ?>
								margin-top: 4px;
							<?php }else if($Rich_Web_CS_Forms_Theme1[0]->Rich_Web_CS_Forms_T_CBS=='Medium'){ ?>
								margin-top: 9px;
							<?php }else{ ?>
								margin-top: 11px;
							<?php }?>
						}
					<?php }?>
					<?php if($Rich_Web_CS_Forms_Fields_Privacy[0]->CS_Rich_Web_Forms_Fields_O4 == 'right'){ ?>
						.Rich_Web_CS_Contact_Form_Privacy_p
						{
							padding: 28px 10px 0px 10px;
						}
					<?php } else { ?>
						.Rich_Web_CS_Contact_Form_Privacy_p
						{
							margin: 5px 10px !important; 
						}
						.Rich_Web_CS_Contact_Form_Privacy_p span
						{
							padding-left: 10px;
						}
					<?php }?>
				<?php }?>
				@media only screen and ( max-width: 500px ){
					.country-select, .intl-tel-input
					{
						width: 100% !important;
					}
				}
			</style>
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Hidden_7" name="Rich_Web_CS_Forms_Hidden_7" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_7);?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Hidden_9" name="Rich_Web_CS_Forms_Hidden_9" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_9);?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Hidden_10" name="Rich_Web_CS_Forms_Hidden_10" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_10);?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Hidden_11" name="Rich_Web_CS_Forms_Hidden_11" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_11);?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Hidden_12" name="Rich_Web_CS_Forms_Hidden_12" value="<?php echo html_entity_decode($Rich_Web_CS_Forms_Option[0]->Rich_Web_CS_Forms_O_12);?>">
			<input type="text" style="display: none;" id="Rich_Web_CS_Forms_Submited" name="Rich_Web_CS_Forms_Submited" value="ok">
		</div>
	</body>
</form>