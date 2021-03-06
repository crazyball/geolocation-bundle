<?php

/**
* This file is part of the Meup GeoLocation Bundle.
*
* (c) 1001pharmacies <http://github.com/1001pharmacies/geolocation-bundle>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Meup\Bundle\GeoLocationBundle\Factory;

/**
 *
 */
interface FactoryInterface
{
    /**
     * @param Array $args
     *
     * @return Meup\Bundle\GeoLocationBundle\Model\LocationInterface
     */
    public function create(Array $args = array());
}
