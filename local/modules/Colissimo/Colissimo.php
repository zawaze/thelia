<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/

namespace Colissimo;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Thelia\Model\Country;
use Thelia\Module\BaseModule;
use Thelia\Module\DeliveryModuleInterface;

class Colissimo extends BaseModule implements DeliveryModuleInterface
{
    protected $request;
    protected $dispatcher;

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setDispatcher(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     *
     * calculate and return delivery price
     *
     * @param Country $country
     * @return mixed
     */
    public function getPostage(Country $country)
    {
        // TODO: Implement getPostage() method.
        return 2;
    }

    public function afterActivation()
    {

    }

    /**
     * YOU HAVE TO IMPLEMENT HERE ABSTRACT METHODD FROM BaseModule Class
     * Like install and destroy
     */
    public function install()
    {
        // TODO: Implement install() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

    public function getCode()
    {
        return 'Colissimo';
    }

}
