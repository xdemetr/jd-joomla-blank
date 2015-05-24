<?php

// No direct access.
defined('_JEXEC') or die;


function modChrome_joomdesignblock($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	
	if (!empty ($module->content)) { ?>
	<section class="module-block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
		<?php if ($module->showtitle) { ?>
		<header class="mod-title">
			<h<?php echo $headerLevel; ?>>
				<?php echo $module->title; ?>
			</h<?php echo $headerLevel; ?>>
		</header>
		<?php }; ?>
		<div class="mod-content <?php if (!$module->showtitle) { ?> whead <?php }?> ">
			<?php echo $module->content; ?>
		</div>
	</section>

	<?php if(htmlspecialchars($params->get('moduleclass_sfx')) == 'front-block about')
	echo "<div class='clr'></div>" ?>
<?php };
}


function modChrome_joomdesignblockbuttons($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	
	if (!empty ($module->content)) { ?>
	<section class="moduleblock <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
		<?php if ($module->showtitle) { ?>
		<header class="mod-title">
			<h<?php echo $headerLevel; ?>>
				<?php echo $module->title; ?>
			</h<?php echo $headerLevel; ?>>
		</header>
		<?php }; ?>
		<div class="modcontent <?php if (!$module->showtitle) { ?> whead <?php }?> ">
			<?php echo $module->content; ?>
		</div>
	</section>
<?php };
}

/**
 * beezHide chrome.
 *
 * @since	1.6
 */
function modChrome_beezHide($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	$state=isset($attribs['state']) ? (int) $attribs['state'] :0;

	if (!empty ($module->content)) { ?>

<div
	class="moduletable_js <?php echo htmlspecialchars($params->get('moduleclass_sfx'));?>"><?php if ($module->showtitle) : ?>
<h<?php echo $headerLevel; ?> class="js_heading"><span class="backh"> <span
	class="backh1"><?php echo $module->title; ?> <a href="#"
	title="<?php echo JText::_('TPL_BEEZ2_CLICK'); ?>"
	onclick="auf('module_<?php echo $module->id; ?>'); return false"
	class="opencloselink" id="link_<?php echo $module->id?>"> <span
	class="no"><img src="templates/beez_20/images/plus.png"
	alt="<?php if ($state == 1) { echo JText::_('TPL_BEEZ2_ALTOPEN');} else {echo JText::_('TPL_BEEZ2_ALTCLOSE');} ?>" />
</span></a></span></span></h<?php echo $headerLevel; ?>> <?php endif; ?>
<div class="module_content <?php if ($state==1){echo "open";} ?>"
	id="module_<?php echo $module->id; ?>" tabindex="-1"><?php echo $module->content; ?></div>
</div>
	<?php }
}


