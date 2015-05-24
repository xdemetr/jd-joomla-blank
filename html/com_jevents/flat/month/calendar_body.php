
<?php 
defined('_JEXEC') or die('Restricted access');

$cfg	 = JEVConfig::getInstance();

if ($cfg->get("tooltiptype",'overlib')=='overlib'){
	JEVHelper::loadOverlib();
}

$view =  $this->getViewName();
echo $this->loadTemplate('cell' );
$eventCellClass = "EventCalendarCell_".$view;

// previous and following month names and links
$followingMonth = $this->datamodel->getFollowingMonth($this->data);
$precedingMonth = $this->datamodel->getPrecedingMonth($this->data);

//echo "<div id='cal_title'>".$this->data['fieldsetText']."</div>\n";
    ?>


<!---->

<?php if ($precedingMonth) {
    echo "<a class='event-button button-prev' href='".$precedingMonth["link"]."' title='".$precedingMonth['name']."' >"?>
    <?php //echo $precedingMonth['name']."</a>";
} ?>
        
    <?php //echo $this->data['fieldsetText']; ?>
        <?php if ($followingMonth) {
            echo "<a class='event-button button-next' href='".$followingMonth["link"]."' title='".$followingMonth['name']."' >"?>
        <?php //echo $followingMonth['name'];?>
        
        <?php echo "</a>"; }?>

       
<!---->

        <table width="100%" align="center" border="0" cellspacing="1" cellpadding="0" class="cal_table">
            <tr valign="top">
            	<?php foreach ($this->data["daynames"] as $dayname) { ?>
                    <td width="14%" align="center" class="cal_td_daysnames">
                        <?php 
                        echo $dayname;?>
                    </td>
                    <?php
                } ?>
            </tr>
            <?php
            $datacount = count($this->data["dates"]);
            $dn=0;
            for ($w=0;$w<6 && $dn<$datacount;$w++){
            ?>
			<tr valign="top" style="height:80px;">
                <?php
                //echo "<td width='2%' class='cal_td_weeklink'>";
                //list($week,$link) = each($this->data['weeks']);
                //echo "<a href='".$link."'>$week</a></td>\n";
                for ($d=0;$d<7 && $dn<$datacount;$d++){
                	$currentDay = $this->data["dates"][$dn];
                	switch ($currentDay["monthType"]){
                		case "prior":
                		case "following":
                		?>
                    <td width="14%" class="cal_td_daysoutofmonth" valign="top">
                        <div class="cell">
                        <?php echo $currentDay["d"]; ?>
                        </div>
                    </td>
                    	<?php
                    	break;
                		case "current":
                			$cellclass = $currentDay["today"]?'class="cal_td_today"':(count($currentDay["events"])>0?'class="cal_td_dayshasevents"':'class="cal_td_daysnoevents"');
                			//$cellclass = $currentDay["today"]?'class="cal_td_today"':'class="cal_td_daysnoevents"';

						?>
                    <td <?php echo $cellclass;?> width="14%" valign="top" style="height:80px;"><div class="cell">
                     <?php   $this->_datecellAddEvent($this->year, $this->month, $currentDay["d"]);?>
                    	<a class="cal_daylink" href="<?php echo $currentDay["link"]; ?>" title="<?php echo JText::_('JEV_CLICK_TOSWITCH_DAY'); ?>"><?php echo $currentDay['d']; ?></a>
                        <?php

                        if (count($currentDay["events"])>0){
                        	foreach ($currentDay["events"] as $key=>$val){
                        		if( $currentDay['countDisplay'] < $cfg->get('com_calMaxDisplay',5)) {
                        			echo '<div style="border:0;width:100%;">';
                        		} else {
                        			// float small icons left
                        			echo '<div style="border:0;float:left;">';
                        		}
                        		echo "\n";
                        		$ecc = new $eventCellClass($val,$this->datamodel, $this);
                        		echo $ecc->calendarCell($currentDay,$this->year,$this->month,$key);
                        		echo '</div>' . "\n";
                        		$currentDay['countDisplay']++;
                        	}
                        }
                        echo "</div></td>\n";
                        break;
                	}
                	$dn++;
                }
                echo "</tr>\n";
            }
            echo "</table>\n";
            $this->eventsLegend();

