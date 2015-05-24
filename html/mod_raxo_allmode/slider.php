<?php
/**
 * =============================================================
 * RAXO All-mode PRO J3.0 - Template
 * -------------------------------------------------------------
 * @package		RAXO All-mode PRO
 * @subpackage	All-mode List Template
 * @copyright	Copyright (C) 2009-2013 RAXO Group
 * @license		GNU General Public License v2.0
 * 				http://www.gnu.org/licenses/gpl-2.0.html
 * @link		http://raxo.org
 * =============================================================
 */


// no direct access
defined('_JEXEC') or die;

// add CSS
//JHtml::stylesheet('templates/prokuratura/css/news.css');
//JHTML::script('test.js', 'templates/joomlablank3/js/');

?>
<a href="#" class="arrow-pager prev"><</a>
	<a href="#" class="arrow-pager next">></a>
<div class="swiper-container">
	
	<div class="swiper-wrapper">


	<?php

foreach ($list as $item) :

?>


	

	<div class="swiper-slide">

			<div class="image"><?php echo $item->image; ?></div>


			<?php if ($item->title) { ?>
				
				<a class="title" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
				
			<?php } ?>
			

			<?php if ($item->text) { ?>
				<div class="text">
					<p><?php echo $item->text; ?></p>					
				</div>
			<?php } ?>




			

			
	</div>




<?php

endforeach;

?>

	</div>

</div>
<div class="pagination"></div>
