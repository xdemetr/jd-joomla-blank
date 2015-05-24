<?
// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" )
{
  $fullWidth = 1;
}
else
{
  $fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

JHtml::script(Juri::base() . 'templates/joomlablank3/js/idangerous.swiper-2.1.min.js');
JHtml::script(Juri::base() . 'templates/joomlablank3/js/idangerous.swiper.scrollbar-2.1.js');

$doc->addScript('templates/' .$this->template. '/js/script.js');

// Add Stylesheets

$doc->addStyleSheet('templates/'.$this->template.'/css/application.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/custom.css');
JHtml::_('bootstrap.loadCss', false, $this->direction);

$template = 'templates/'.$this->template;

// Add current user information
$user = JFactory::getUser();

// Adjusting content width
$frontPage = '';
if (JURI::current() == JURI::base()){
    $frontPage = 1;
}


$centercol = '';

if($this->countModules('left') && !$this->countModules('right')) $centercol="sidebar-first-div";
if(!$this->countModules('left') && $this->countModules('right')) $centercol="sidebar-second-div";
if(!$this->countModules('left') && !$this->countModules('right')) $centercol="full";


if($this->countModules('footer1') || $this->countModules('footer2') || $this->countModules('footer3') || $this->countModules('footer4')) {
  $footerTop = 1;
}

if($this->countModules('footer5') || $this->countModules('footer6') || $this->countModules('footer7') || $this->countModules('footer8')) {
  $footerBottom = 1;
}

$footerTopColCount = 0;

for ($i=0; $i <= 4; $i++) {
  if($this->countModules("footer$i")) $footerTopColCount +=1;
}

switch ($footerTopColCount) {
  case 1:
    $footerTopCol = 'one-col';
    break;

  case 2:
    $footerTopCol = 'two-cols';
    break;

  case 3:
    $footerTopCol = 'three-cols';

  case 4:
    $footerTopCol = 'four-cols';
  
  default:
    # code...
    break;
}

$footerBottomColCount = 0;

for ($i=5; $i <= 8; $i++) {
  if($this->countModules("footer$i")) $footerBottomColCount +=1;
}

switch ($footerBottomColCount) {
  case 1:
    $footerBottomCol = 'one-col';
    break;

  case 2:
    $footerBottomCol = 'two-cols';
    break;

  case 3:
    $footerBottomCol = 'three-cols';
    break;

  case 4:
    $footerBottomCol = 'four-cols';
    break;
  
  default:
    # code...
    break;
}




$fonts = $this->params->get('googleFontName');
$yellowmenu = $this->params->get('yellow-menu');?>