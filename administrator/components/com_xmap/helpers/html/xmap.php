<?php

/**
 * @version     $Id$
 * @copyright   Copyright (C) 2007 - 2009 Joomla! Vargas. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Guillermo Vargas (guille@vargas.co.cr)
 */
// no direct access
defined('_JEXEC') or die;

JTable::addIncludePath(JPATH_COMPONENT . '/tables');

/**
 * @package       Xmap
 * @subpackage    com_xmap
 */
abstract class JHtmlXmap {

    /**
     * @param    string  $name
     * @param    string  $value
     * @param    int     $j
     */
    public static function priorities($name, $value = '0.5', $j) {
        // Array of options
        for ($i = 0.1; $i <= 1; $i+=0.1) {
            $options[] = JHtml::_('select.option', $i, $i);
            ;
        }
        return JHtml::_('select.genericlist', $options, $name, null, 'value', 'text', $value, $name . $j);
    }

    /**
     * @param    string  $name
     * @param    string  $value
     * @param    int     $j
     */
    public static function changefrequency($name, $value = 'weekly', $j) {
        // Array of options
        
        $options[] = JHtml::_('select.option', 'hourly', 'hourly');
        $options[] = JHtml::_('select.option', 'daily', 'daily');
        $options[] = JHtml::_('select.option', 'weekly', 'weekly');
        $options[] = JHtml::_('select.option', 'monthly', 'monthly');
        $options[] = JHtml::_('select.option', 'yearly', 'yearly');
        $options[] = JHtml::_('select.option', 'never', 'never');
        return JHtml::_('select.genericlist', $options, $name, null, 'value', 'text', $value, $name . $j);
    }

}
