	<div id="mainMenu">
		 

		  <ul class="float-left">
			<? if(!empty($navigation['header'])) foreach($navigation['header'] as $nav_link): ?>
			<li><?=anchor($nav_link->url, $nav_link->title, $nav_link->current_link ? 'class="here"' : ''); ?></li>
			<? endforeach; ?>
		  </ul>

	  </div>
