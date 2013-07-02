<?php 
/**
 * Bframework Application start file
 *
 * @package   Bframework
 * @subpackage my application 
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2012 BUDDYEXPRESS.
 * @ApplicationCopyright < Your Copyrights� >
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @ApplicationLicense < Your License >
 * @link      http://www.buddyexpress.net
 */

require_once(dirname(dirname(__FILE__)).'/bframework/buddyexpress.php'); 

/* My Custom Functions Goes Here */

function mycustomfunction(){
}
/* My Custom Functions END */

bframework_resgister_css('css.php');
/* This is default index page, you can change the contents in template/index.php */
bframework_page_handler(array('handler' => 'index', 'file' => bframework_get_approot_path().'pages/index.php'));

?>
