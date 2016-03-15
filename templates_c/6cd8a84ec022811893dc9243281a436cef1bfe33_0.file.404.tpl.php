<?php /* Smarty version 3.1.27, created on 2016-02-28 01:42:52
         compiled from "C:\xampp\htdocs\templates\404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3048756d2428c0c3cc4_60515693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd8a84ec022811893dc9243281a436cef1bfe33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\404.tpl',
      1 => 1456386322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3048756d2428c0c3cc4_60515693',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d2428c0fa7d7_29335306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d2428c0fa7d7_29335306')) {
function content_56d2428c0fa7d7_29335306 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3048756d2428c0c3cc4_60515693';
?>
<div class="full_page_photo" style="background-image: url(images/404.jpg);">
     <div class="container">
          <section class="call_to_action">
               <h3 class="animated bounceInDown">OMG! <strong>error 404</strong></h3>
               <h4 class="animated bounceInUp">we are really sorry but the page you requested cannot be found.</h4>
          </section>
     </div>
</div>
<div class="main">

          <section class="hgroup"><div class="container">
               <h1>Page not found</h1>
               <ul class="breadcrumb pull-right">
                    <li class="active">Something went wrong!</li>
               </ul>
          </div></section>
          
          <section class="call_to_action four-o-four"><div class="container">
           <i class="fa fa-ambulance"></i>
               <h3>error 404 is nothing to really worry about...</h3>
               <h4>you may have mis-typed the URL, please check your spelling and try again.</h4>
          </div></section>

<?php }
}
?>