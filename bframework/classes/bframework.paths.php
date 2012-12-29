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
 
/**
* bframework paths register a new class
* @version: 0.1
*/ 
class bframework_path{
/*
* Fetch a engine directory
* @uses bframework_get_engine_path();
*/ 
static function bframework_get_engine_path(){
global $Bframework;
if(isset($Bframework->engine) && !empty($Bframework->engine)){
return $Bframework->engine;
   }   
}
/*
* Fetch a libs directory
* @uses bframework_get_libs_path();
*/ 
function bframework_get_libs_path(){
global $Bframework;
if(isset($Bframework->libs) && !empty($Bframework->libs)){
return $Bframework->libs;
   }   
}
/*
* Fetch a base directory
* @uses bframework_get_base_path();
*/ 
function bframework_get_base_path(){
global $Bframework;
if(isset($Bframework->root_path) && !empty($Bframework->root_path)){
return $Bframework->root_path;
   }   
}
/*
* Fetch a classes directory
* @uses bframework_get_classes_path();
*/ 
function bframework_get_classes_path(){
global $Bframework;
if(isset($Bframework->classes) && !empty($Bframework->classes)){
return $Bframework->classes;
   }   
}
/*
* Fetch a actions directory
* @uses bframework_get_actions_path();
*/
function bframework_get_actions_path(){
global $Bframework;
if(isset($Bframework->actions) && !empty($Bframework->actions)){
return $Bframework->actions;
   }   
}
/*
* Fetch a vendors directory
* @uses bframework_get_vendors_path();
*/
function bframework_get_vendors_path(){
global $Bframework;
if(isset($Bframework->vendors) && !empty($Bframework->vendors)){
return $Bframework->vendors;
   }   
}
/*
* Fetch a meda directory
* @uses bframework_get_media_path();
*/
function bframework_get_media_path(){
global $Bframework;
if(isset($Bframework->media) && !empty($Bframework->media)){
return $Bframework->media;
    }    
}
/*
* Fetch a languages directory
* @uses bframework_get_languages_path();
*/
function bframework_get_languages_path(){
global $Bframework;
if(isset($Bframework->languages) && !empty($Bframework->languages)){
return $Bframework->languages;
    }    
}
/*
* Fetch a application base directory
* @uses bframework_get_languages_path();
*/
function bframework_get_approot_path(){
global $Bframework;
if(isset($Bframework->app_root_path) && !empty($Bframework->app_root_path)){
return $Bframework->app_root_path;
    }    
}
/*
* Fetch a application languages directory
* @uses bframework_get_app_languages_path();
*/
function bframework_get_app_languages_path(){
global $Bframework;
if(isset($Bframework->app_languages) && !empty($Bframework->app_root_path)){
return $Bframework->app_languages;
    }    
   }
}
?>