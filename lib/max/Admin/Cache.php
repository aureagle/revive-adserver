<?php

/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                                |
| =======${RELEASE_MAJOR_MINOR_DOUBLE_UNDERLINE}                                                                |
|                                                                           |
| Copyright (c) 2003-2008 m3 Media Services Ltd                             |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

require_once MAX_PATH . '/lib/max/language/Default.php';

/**
 * A class for determining the available delivery caching modes.
 *
 * @package    Max
 * @author     Andrew Hill <andrew@m3.net>
 * @static
 */
class MAX_Admin_Cache
{

    /**
     * A method for returning an array of the available delivery caching modes.
     *
     * @return array An array of strings representing the available delivery caching modes.
     */
    function AvailableCachingModes()
    {
        Language_Default::load();
        $modes = array();
        $modes['none'] = $GLOBALS['strNone'];
        if (is_writable(MAX_PATH . '/var/cache')) {
            $modes['file'] = $GLOBALS['strCacheFiles'];
        }
        return $modes;
    }
    
}

?>
