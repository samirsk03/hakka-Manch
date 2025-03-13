<?php
function TitleMetaFun($title)
{
$comp_result=select("tbl_company_details","*","fld_company_id=1","LIMIT 1");
$row_comp=fetch($comp_result);

?>
<title><?php echo $title;?> <?php echo $row_comp['fld_meta_title'];?></title>

<meta content="<?php echo $row_comp['fld_meta_keyword'];?>" name="Keywords" />

<meta NAME="Description" CONTENT="<?php echo $row_comp['fld_meta_description'];?>" />

<meta content="<?php echo $row_comp['fld_website_name'];?>" name="Author" />

<meta content="index,follow" name="robots" />
<meta content="en-us" http-equiv="Content-Language" />
<meta name="Distribution" content="Global" />
<meta content="PHP" name="CODE_LANGUAGE" />
<meta content="JavaScript" name="vs_defaultClientScript" />
<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema" />
<link rel="shortcut icon" href="images/favicon.ico" />

<?php }
?>