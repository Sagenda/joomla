<?php
/**
 * Default class for Sagenda Calendar module
 * 
 * @package    Sagenda.Calendar
 * @subpackage Modules
 * @link       https://www.sagenda.com
 * @license    GNU/GPL, see LICENSE.php
 */

// No direct access
defined('_JEXEC') or die; ?>

<div class="bootstrap-wrapper">
  <a name="sagenda"></a>
  <app-root>Sagenda is loading...</app-root>

  <script>
    window.sagendaIntegration = 'Joomla';
    window.baseUrl = 'https://sagenda.net/api/v3/';
    window.sagendaBearerToken = '<?php echo $sagendaBearerToken ;?>';
    window.sagendaWeekStartsOn = '<?php echo $sagendaWeekStartsOn ;?>';
    window.sagendaLanguageCultureShortName = '<?php echo $locale ;?>';
    window.sagendaDateFormat = '<?php echo $sagendaDateFormat ;?>';  
    window.sagendaTimeFormat = '<?php echo $sagendaTimeFormat ;?>'; 
    window.sagendaAngularPath = '<?php echo $module_path; ?>/angular/';
  </script>

  <script type="text/javascript" src="<?php echo $module_path; ?>/angular/runtime.js"></script>
  <script type="text/javascript" src="<?php echo $module_path; ?>/angular/main.js"></script>
  <script type="text/javascript" src="<?php echo $module_path; ?>/angular/polyfills.js"></script>
</div>
