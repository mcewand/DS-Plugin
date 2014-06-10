<?php
/**
 * Dead Simple Plugin
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * The DS plugin.
 * 
 * @package Dsp 
 */
class DspPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'public_items_show',
        'admin_items_show',
        'public_items_browse_each',
        'admin_items_browse_simple_each',
    );

    protected $_filters = array('admin_navigation_main');
    
    /**
     * Print out a message on the public items show page.
     */
    public function hookPublicItemsShow()
    {
        echo get_view()->dsp(get_current_record('item'));
    }
    
    /**
     * Print out a message on the admin items show page.
     */
    public function hookAdminItemsShow()
    {
        echo get_view()->dsp(get_current_record('item'));
    }
    
    /**
     * Print out a message on the public items browse page.
     */
    public function hookPublicItemsBrowseEach()
    {
        echo get_view()->dsp(get_current_record('item'));
    }
    
    /**
     * Print out a message on the admin items browse page.
     */
    public function hookAdminItemsBrowseSimpleEach()
    {
        echo get_view()->dsp(get_current_record('item'));
    }

    public function filterAdminNavigationMain($navArray)
    {
        $navArray['Dsp'] = array('label'=>__('Dead Simple Plugin'), 'uri'=>url('dsp'));
        return $navArray;
    }

}
