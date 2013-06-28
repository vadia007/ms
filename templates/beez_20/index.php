<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');



JHtml::_('behavior.framework', true);

// get params
$color				= $this->params->get('templatecolor');
$logo				= $this->params->get('logo');
$navposition		= $this->params->get('navposition');
$app				= JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams		= $app->getTemplate(true)->params;


$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/template.css', $type = 'text/css');




$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/hide.js', 'text/javascript');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />


</head>

<body>

<div id="main">

    <h1 id="logo">

        <?php if ($logo): ?>
        <a href="<?php echo $this->baseurl;?>">
        <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" />
        </a>
        <?php endif;?>
        <?php if (!$logo ): ?>
        <?php echo htmlspecialchars($templateparams->get('sitetitle'));?>
        <?php endif; ?>
    </h1>
    <div id="menu">
        <jdoc:include type="modules" name="menu" />
    </div>
    <div id="visual">
        <jdoc:include type="modules" name="header_img" />
    </div>
    <div id="content">
        <div id="left">
            <div class="blue">
                <jdoc:include type="modules" name="left_menu" />
            </div>
        </div>
        <div id="right">
            <?php if(JURI::base() != JURI::current()){?>
            <jdoc:include type="modules" name="bread" />
                <?php }?>
            <jdoc:include type="message" />
            <jdoc:include type="component" />


        </div>
    </div>

</div>
</body>
</html>
