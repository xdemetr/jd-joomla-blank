<?php
/**
JoomDesign
http://joomdesign.ru
dmitriev@joomdesign.ru
skype: xdemetr
*/

defined('_JEXEC') or die;
require dirname(__FILE__) . '/php/init.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
  <jdoc:include type="head" />
  <!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site spring <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : ' '); echo $centercol;
?>">
	<div class="wrap">
		<div class="content-div">
			
      <header class="main-header">
				<div class="main-header-inner">
          <a href="/" class="logo">logo</a>

          <?php if($this->countModules('search')) : ?>
            <div class="header-block last">
            	<jdoc:include type="modules" name="search" />
            </div>
          <?php endif; ?>

          <?php if($this->countModules('position-1')) : ?>
            <div class="header-block">
            	<jdoc:include type="modules" name="position-1" />	                    	
            </div>
          <?php endif; ?>					
				</div>
			</header>

			<?php if($this->countModules('top-menu')) : ?>
        <nav class="main-navigation" role="navigation">
            <jdoc:include type="modules" name="top-menu" />
        </nav>
      <?php endif; ?>

			<div class="cont-inner <?php echo ($params->get('fluidContainer') ? '-fluid' : '');?>">
				<div class="center-div">
					
          <div class="content-three-col">
						<jdoc:include type="modules" name="breadcrumbs" />
						<jdoc:include type="message" />

						<?php if($this->countModules('content-top')) : ?>
              <div class="content-top-block">
              	<jdoc:include type="modules" name="content-top" style="joomdesignblock" headerLevel="1" />	                    	
              </div>
          	<?php endif; ?>


						<jdoc:include type="component" />
					</div>
				</div>

				<?php if ($this->countModules('left')) : ?>
  				<aside class="sidebar-first">
  					<jdoc:include type="modules" name="left" style="joomdesignblock" headerLevel="1" />
  				</aside>
				<?php endif; ?>

				<?php if ($this->countModules('right')) : ?>
  				<aside class="sidebar-second">
  					<jdoc:include type="modules" name="right" style="joomdesignblock" headerLevel="1" />
  				</aside>
				<?php endif; ?>


			</div>
		</div>
	</div>

	<footer class="main-footer" role="contentinfo">
    
    <?php if($footerTop) { ?>
    <div class="main-footer-inner footer-top <?php echo $footerTopCol;?>">
      <div class="footer-list">
      <?php if($this->countModules('footer1')) { ?>
        <div class="footer-module first">
            <jdoc:include type="modules" name="footer1" style="joomdesignblock" headerLevel="1" /> 
        </div>
      <?php } ?>

      <?php if($this->countModules('footer2')) { ?>
          <div class="footer-module second">
              <jdoc:include type="modules" name="footer2" style="joomdesignblock" headerLevel="1" /> 
          </div>
      <?php } ?>

      <?php if($this->countModules('footer3')) { ?>
        <div class="footer-module third">
            <jdoc:include type="modules" name="footer3" style="joomdesignblock" headerLevel="1" /> 
        </div>
      <?php } ?>

      <?php if($this->countModules('footer4')) { ?>
          <div class="footer-module second">
              <jdoc:include type="modules" name="footer4" style="joomdesignblock" headerLevel="1" /> 
          </div>
      <?php } ?>
        </div>
    </div>
    <?php } ?>

    <?php if($footerBottom) { ?>
    <div class="main-footer-inner footer-bottom <?php echo $footerBottomCol;?>">
      <div class="footer-list">
      <?php if($this->countModules('footer5')) { ?>
        <div class="footer-module first">
            <jdoc:include type="modules" name="footer5" style="joomdesignblock" headerLevel="1" /> 
        </div>
      <?php } ?>

      <?php if($this->countModules('footer6')) { ?>
          <div class="footer-module second">
              <jdoc:include type="modules" name="footer6" style="joomdesignblock" headerLevel="1" /> 
          </div>
      <?php } ?>

      <?php if($this->countModules('footer7')) { ?>
        <div class="footer-module third">
            <jdoc:include type="modules" name="footer7" style="joomdesignblock" headerLevel="1" /> 
        </div>
      <?php } ?>

      <?php if($this->countModules('footer8')) { ?>
          <div class="footer-module second">
              <jdoc:include type="modules" name="footer8" style="joomdesignblock" headerLevel="1" /> 
          </div>
      <?php } ?>
        </div>
    </div>
    <?php } ?>

    
       

       
    
</footer>

<? //echo $footerTopColCount.":".$footerBottomColCount;?>
<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>