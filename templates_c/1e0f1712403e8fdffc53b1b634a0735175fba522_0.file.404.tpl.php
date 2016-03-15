<?php /* Smarty version 3.1.27, created on 2016-02-26 09:28:48
         compiled from "C:\AD_PHP\Apache2.2\htdocs\trabajofinal\templates\404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1865856d00cc0e1aac1_45001745%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0f1712403e8fdffc53b1b634a0735175fba522' => 
    array (
      0 => 'C:\\AD_PHP\\Apache2.2\\htdocs\\trabajofinal\\templates\\404.tpl',
      1 => 1456386322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865856d00cc0e1aac1_45001745',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d00cc0e224d3_49551780',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d00cc0e224d3_49551780')) {
function content_56d00cc0e224d3_49551780 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1865856d00cc0e1aac1_45001745';
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