<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php echo $rw_cs_seo['rw_cs_seo_desc']; ?>">
<meta name="keywords" content="<?php echo $rw_cs_seo["rw_cs_seo_keywords"]; ?>">
<meta name="robots" content="<?php echo $rw_cs_seo["rw_cs_seo_robot_follow"]; ?>">
<link rel="canonical" content="<?php echo $rw_cs_seo["rw_cs_seo_canonical_url"]; ?>">
<?php if($rw_cs_fic['rw_cs_fic_show']=='show') { ?>
	<link rel="icon" href="<?php echo $rw_cs_fic['rw_cs_fic_img']; ?>">
<?php } ?>
<title><?php echo $rw_cs_seo['rw_cs_seo_title']; ?></title>
<?php
	$output ="";
	$output .= "<!-- JS -->\n";
	$include_url = includes_url();
	$last = $include_url[strlen( $include_url )-1];
	if ( $last != '/' ) {
		$include_url = $include_url . '/';
	}
	echo $output .= '<script src="'.$include_url.'js/jquery/jquery.js"></script>'."\n"; 
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('/css/styles.css',__FILE__);?>">
<link rel="stylesheet" media="screen" href="<?php echo plugins_url('/css/style.css',__FILE__);?>">
<?php echo $rw_cs_seo['rw_cs_seo_google_analitics']; ?>