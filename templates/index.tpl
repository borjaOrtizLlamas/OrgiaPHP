<section id="slider_wrapper" class="container">
     <div id="main_flexslider" class="flexslider">
          <ul class="slides">
             {foreach $datos as $indice=>$valor}
             	{if $valor neq "" }
               <li class="item" style="background-image: url({$dato.ruta_imagen})">
                    <div class="container">
                         <div class="carousel-caption">
							<h1 class="inverse"><strong>{$valor.titulo}</strong></h1><br>
                            <p class="lead">{$valor.des}</p>
                         </div>
                    </div>
               </li>
               {/if}
 			  {/foreach}     
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

