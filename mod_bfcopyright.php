<?php
/**
 * @package      Joomla.Site
 * @subpackage   mod_bfcopyright
 * @copyright    Copyright 2020 Jonathan Brain. All rights reserved.
 * @license      GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

echo JText::sprintf('MOD_BFCOPYRIGHT_NOTICE',	date('Y'),
	htmlspecialchars(JFactory::getApplication()->get('sitename'), ENT_QUOTES, 'UTF-8')
);
