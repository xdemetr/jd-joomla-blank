<?php
if (($this->error->getCode()) == '404') {
	header('Location: /index.php?option=com_content&view=article&id=95');
	exit;
}
?>