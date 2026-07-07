 		<div class="navBar-zakupki">
    			<div class="godovoy-plan__nav">
					<a href="<? echo home_url('/zakupki/godovoy-plan-zakupok', 'https') ?>" class="godovoy-plan__nav-text"> Annual procurement plan </a>
					<?php wp_nav_menu ( array (
						'theme_location' => 'plan-menu',
						'container' => false,
						'menu_class'      => 'godovoy-plan__nav-gody', 
					)) ?>
				</div>
    
				<div class="godovoy-plan__nav">
					<a href="<? echo home_url('/zakupki/tenders', 'https') ?>" class="godovoy-plan__nav-text"> Purchases </a>
					<?php wp_nav_menu ( array (
						'theme_location' => 'zakupki-menu',
						'container' => false,
						'menu_class'      => 'godovoy-plan__nav-gody', 
					)) ?>
				</div>
    
				<div class="godovoy-plan__nav">
					<a href="<? echo home_url('/zakupki/arkhivy', 'https') ?>" class="godovoy-plan__nav-text"> Archives </a>
					<?php wp_nav_menu ( array (
						'theme_location' => 'arkhivy-menu',
						'container' => false,
						'menu_class'      => 'godovoy-plan__nav-gody', 
					)) ?>
				</div>
			</div>