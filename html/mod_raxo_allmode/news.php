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
?>

	<?php
	$i=1;
foreach ($list as $item) :

if (count($list)==$i) {
	$lastElement = ' last ';
}
?>


	

	<section class="item <?=$i%2==0 ? 'center': ''; echo $lastElement;?>">

			
			<?php if ($item->title) { ?>
				<header>
					<?php if ($item->date) { ?>
				<span class="created"><?php echo $item->date; ?></span>
			<?php } ?>
					<h1><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h1>
				</header>
			<?php } ?>
			

			<?php if ($item->image) { ?>
				<div class="image">
					<?php echo $item->image; ?>
				</div>
			<?php } ?>

			<?php if ($item->text) { ?>
				<div class="text">
					<p><?php echo $item->text; ?></p>					
				</div>
			<?php } ?>

			
			

			
	</section>




<?php
$i++;
endforeach;

?>


	<?
if ($blockname_text && $blockname_link) {
	echo '<h3 class="newsarchive"><a href="'.$blockname_link.'"><span>'.$blockname_text.'</span></a></h3>';
} elseif ($blockname_text) {
	echo '<h3 class="newsarchive"><span>'.$blockname_text.'</span></h3>';
}
?>
