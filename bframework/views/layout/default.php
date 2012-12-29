<?php
/**
 * Buddyexpress Framework Core
 *
 * @package   Bframework
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2012 BUDDYEXPRESS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://bserver.buddyexpress.net
 * @Contributors http://www.buddyexpress.net/bframework/contributors.b
 */
/*
* BFramework default page
*/ 
$css = bframework_css_link('all');
if (empty($page['title'])) {
$title = bframework_get_app('name');
} else {
$title = bframework_get_app('name') . " : " . $page['title'];
}
header("Content-type: text/html; charset=UTF-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo bframework_meta(array('attr' => array('http-equiv' => "Content-Type", 'content' => "text/html; charset=utf-8"))); ?>

<?php echo bframework_meta(array('attr' => array('name' => "BframeworkVersion", 'content' => bframework_get_version()))); ?>

<?php echo bframework_meta(array('attr' => array('name' => "BframeworkRelease", 'content' => bframework_get_release()))); ?>

<?php echo bframework_meta(array('attr' => array('name' => "ApplicationVersion", 'content' => bframework_get_app_version()))); ?>

<?php echo bframework_meta(array('attr' => array('name' => "ApplicationRelease", 'content' => bframework_get_app_release()))); ?>

<title><?php echo $title; ?></title>
<?php echo bframework_inc_css($css);?>
<?php echo $page['head']; ?>
</head>
<body> 
 <div>
         <?php echo $page['header'];?>
		 </div>
		 <div>
		 <?php echo $page['body'];?>
		 </div>
		 
         <div>
	   <?php echo $page['footer'];?>
		 </div>
</body>

</html>