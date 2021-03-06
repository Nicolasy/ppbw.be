<!DOCTYPE html> <!-- The new doctype -->
<html>
	
	<?php include("htmlheader.php"); ?>
    
    <body>
    	
    	<section id="page"> <!-- Defining the #page section with the section tag -->
    
		<?php include("pageheader.php"); ?>
                          
				<!-- 3 Boxes -->

				<div id="container">
					
					<a href="quisontlespirates.php">
						<div id="box1">
							<figure class="figurebox"><img class="boximage" src="img/QuiSontLesPirates.jpg" alt="Qui sont les pirates?"/></figure>
						</div>			
						<div id="box1text" class="boxtext" >
							Qui Sont Les Pirates ?
						</div> 			
					</a>
					
					<a href="philosophiepirate.php">
						<div id="box2">
							<figure class="figurebox"><img class="boximage" src="img/Philosophie.jpg" alt="Philosophie Pirate"/></figure>
						</div>
						<div id="box2text" class="boxtext" >
							C'est quoi la philosophie Pirate ?
						</div>
					</a>
					
					<a href="propositionspirates.php">
						<div id="box3">
							<figure class="figurebox"><img class="boximage" src="img/Proposition.jpg" alt="Propositions pour les élections 2012"/></figure>
						</div>		
						<div id="box3text" class="boxtext">
							Et nos propositions pour les élections 2012 ? 
						</div>
					</a> 

				</div>
				<!-- 3 Boxes END-->

			
			<!-- Article Outils start -->
			
			<article id="Outils">
			
				<div class="clear">
					
					<p>Vous gènez pas, jettez un oeuil au <a href="http://www.pirateparty.be/wiki/index.php/Crew_BW">Wiki</a> ou <a href="http://forum.pirateparty.be/forumdisplay.php?fid=22" class="external text" rel="nofollow">sur le forum</a>.</p>
					<div class="twitter"><a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="small">Suivre @pp_bw</a></div>
				</div>
				<?php dernierTweet(); ?> <!-- Derniers Tweet de @pp_bw -->
			</article>
			
			<!-- Article Outils end -->	

			<?php include("footer.php"); ?>
            
		</section> <!-- Closing the #page section -->
    </body>
</html>
