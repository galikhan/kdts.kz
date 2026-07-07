 		<div class="navBar-zakupki">
    			<div class="godovoy-plan__nav">
					<a href="<? echo home_url('/satyp-alul/zhyldyk-satyp-alu-zhospary', 'https') ?>" class="godovoy-plan__nav-text"> Сатып алудың жылдық жоспары </a>
					<?php wp_nav_menu ( array (
						'theme_location' => 'plan-menu',
						'container' => false,
						'menu_class'      => 'godovoy-plan__nav-gody', 
					)) ?>
				</div>
    
				<div class="godovoy-plan__nav">
					<a href="<? echo home_url('satyp-alul/tender', 'https') ?>" class="godovoy-plan__nav-text"> Сатып алуар </a>
					<?php wp_nav_menu ( array (
						'theme_location' => 'zakupki-menu',
						'container' => false,
						'menu_class'      => 'godovoy-plan__nav-gody', 
					)) ?>
				</div>
    
				<div class="godovoy-plan__nav">
					<a href="<? echo home_url('satyp-alul/muragat', 'https') ?>" class="godovoy-plan__nav-text"> Мұрағат </a>
					<?php wp_nav_menu ( array (
						'theme_location' => 'arkhivy-menu',
						'container' => false,
						'menu_class'      => 'godovoy-plan__nav-gody', 
					)) ?>
				</div>
			</div>