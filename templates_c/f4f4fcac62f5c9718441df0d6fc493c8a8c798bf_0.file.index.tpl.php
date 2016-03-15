<?php /* Smarty version 3.1.27, created on 2016-02-26 09:13:30
         compiled from "C:\AD_PHP\Apache2.2\htdocs\trabajofinal\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2148956d0092a6c03e4_35907538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f4fcac62f5c9718441df0d6fc493c8a8c798bf' => 
    array (
      0 => 'C:\\AD_PHP\\Apache2.2\\htdocs\\trabajofinal\\templates\\index.tpl',
      1 => 1456386324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148956d0092a6c03e4_35907538',
  'variables' => 
  array (
    'datos' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d0092a6ec651_80395502',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d0092a6ec651_80395502')) {
function content_56d0092a6ec651_80395502 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2148956d0092a6c03e4_35907538';
?>
<section id="slider_wrapper" class="container">
     <div id="main_flexslider" class="flexslider">
          <ul class="slides">
             <?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['valor']->_loop = false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['valor']->value) {
$_smarty_tpl->tpl_vars['valor']->_loop = true;
$foreach_valor_Sav = $_smarty_tpl->tpl_vars['valor'];
?>
             	<?php if ($_smarty_tpl->tpl_vars['valor']->value != '') {?>
               <li class="item" style="background-image: url(images/s1.jpg)">
                    <div class="container">
                         <div class="carousel-caption">
							<h1 class="inverse"><strong><?php echo $_smarty_tpl->tpl_vars['valor']->value['titulo'];?>
</strong></h1><br>
                              <p class="lead"><?php echo $_smarty_tpl->tpl_vars['valor']->value['des'];?>
</p>
                         </div>
                    </div>
               </li>
               <?php }?>
 			  <?php
$_smarty_tpl->tpl_vars['valor'] = $foreach_valor_Sav;
}
?>     
          </ul>
     </div>
</section>
<div class="main">

          <section class="features_teasers_wrapper"><div class="container">
               <div class="row">
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/responsive.png">
                         <h3>Clean, Responsive Design</h3>
                         <p>A multipurpose but mainly<strong> business oriented</strong> design, built to serve as a foundation for your web projects. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/git.png">
                         <h3>Based on Twitter Bootstrap</h3>
                         <p>The front-end development framework with a <strong>steep learning curve</strong>. It changes the way you develop sites. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/less.png">
                         <h3>Makes real use of </h3>
                         <p><strong>start</strong> comes with a style.less file that tries to use all the power of <strong> and bootstrap combined</strong>. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem.</p>
                    </div>
               </div>
          </div></section>
          
          <section class="portfolio_teasers_wrapper"><div class="container">
               <h2 class="section_header">Recent Work or Projects from Portfolio</h2>
               <div class="portfolio_strict row">
                    <div class="col-sm-3 col-md-3"><div class="portfolio_item">
                         <div class="portfolio_photo" style="background-image:url(images/portfolio/a1.jpg)"> <a href="portfolio_item.html"> 
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>artists</p>
                         </div>
                    </div></div>
                    <div class="col-sm-3 col-md-3"><div class="portfolio_item">
                         <div class="portfolio_photo" style="background-image:url(images/portfolio/t5.jpg)"> <a href="portfolio_item.html"> 
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>travel</p>
                         </div>
                    </div></div>
                    <div class="col-sm-3 col-md-3"><div class="portfolio_item">
                         <div class="portfolio_photo" style="background-image:url(images/portfolio/p3.jpg)"> <a href="portfolio_item.html"> 
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>people</p>
                         </div>
                    </div></div>
                    <div class="col-sm-3 col-md-3"><div class="portfolio_item">
                         <div class="portfolio_photo" style="background-image:url(images/portfolio/t4.jpg)"> <a href="portfolio_item.html"> 
                              <p>Description of the project dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum...</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              <p>poetic</p>
                         </div>
                    </div></div>
               </div>
          </div></section>

<?php }
}
?>