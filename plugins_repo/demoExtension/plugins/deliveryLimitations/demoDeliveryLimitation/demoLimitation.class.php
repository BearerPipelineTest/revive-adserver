<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once LIB_PATH . '/Extension/deliveryLimitations/DeliveryLimitations.php';
require_once MAX_PATH . '/lib/max/Plugin/Translation.php';
require_once MAX_PATH . '/lib/max/Delivery/limitations.delivery.php';

/**
 * A Client delivery limitation plugin, for filtering delivery of ads on the
 * basis of the viewer's IP address.
 *
 * Works with:
 * A string that describes a valid IP address, or a range or IP addresses, eg:
 *   10.0.0.*
 *
 * Valid comparison operators:
 * ==, !=
 *
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 */
class Plugins_DeliveryLimitations_DemoDeliveryLimitation_DemoLimitation extends Plugins_DeliveryLimitations
{
    public function __construct()
    {
        $this->aOperations = [
            '==' => $GLOBALS['strEqualTo'],
            '!=' => $GLOBALS['strDifferentFrom']];
        $this->aPatternOps = ['==' => 'LIKE', '!=' => 'NOT LIKE'];
        $this->aStandardOps = ['==' => '=', '!=' => '!='];
    }

    /**
     * Return name of plugin
     *
     * @return string
     */
    public function getName()
    {
        return $this->translate('Demo');
    }
}
