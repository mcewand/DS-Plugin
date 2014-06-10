<?php
/**
 * DS Plugin
 *
 * @copyright Copyright 2007-2012 Roy Rosenzweig Center for History and New Media
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * @package Dsp\View\Helper
 */
class Dsp_View_Helper_Dsp extends Zend_View_Helper_Abstract
{
    public function dsp($items)
    {
        return $this->_getDisplay();
    }

    protected function _getDisplay()
    {
      
        return '<div>Some html</div>';
    }
}
