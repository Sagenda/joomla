<?php

/**
 * Sagenda Calendar Module Entry Point
 *
 * @package    Sagenda.Calendar
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       https://www.sagenda.com
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$module_path = JURI::base() . 'modules/' . $module->module . '/tmpl';

// TOKEN
$sagendaToken = $params->get('sagendaToken', '');
$modSagendaCalendarHelper = new ModSagendaCalendarHelper();
$sagendaBearerToken = $modSagendaCalendarHelper->convertAPITokenToBearerToken($sagendaToken);

$sagendaWeekStartsOn = $params->get('sagendaWeekStartsOn', '');
$sagendaDefaultView = $params->get('sagendaDefaultView', '');
$sagendaRemoveMonthViewButton = $params->get('sagendaRemoveMonthViewButton', 'false');
$sagendaRemoveWeekViewButton = $params->get('sagendaRemoveWeekViewButton', 'false');
$sagendaRemoveDayViewButton = $params->get('sagendaRemoveDayViewButton', 'false');
$sagendaRemoveAgendaViewButton = $params->get('sagendaRemoveAgendaViewButton', 'false');
$sagendaTimeFormat = $params->get('sagendaTimeFormat', '');
$sagendaDateFormat = $params->get('sagendaDateFormat', '');

// LOCALES
$lang = JFactory::getLanguage();
$locale = str_replace("-", "_", $lang->getTag());

$document = JFactory::getDocument();
$document->addStyleSheet($module_path . '/angular/styles.css');

require JModuleHelper::getLayoutPath('mod_sagenda_calendar');

