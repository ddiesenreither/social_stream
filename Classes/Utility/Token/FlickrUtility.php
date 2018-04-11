<?php
namespace Socialstream\SocialStream\Utility\Token;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * FlickrUtility
 */
class FlickrUtility extends \Socialstream\SocialStream\Utility\Token\TokenUtility
{
    /**
     * __construct
     */
    public function __construct($pid)
    {
        $this->initTSFE($pid,0);
        $this->initSettings();
    }

    public function getAccessUrl()
    {
        return "not in use";
    }
    public function getTokenJavascript($accessUrl,$actualUrl){
        return "should not be called";
    }

    public function retrieveToken($url){
        return $this->settings['flickrappid'];
    }

    public function getValues($tokenString){
        return array("tk" => $tokenString, "exp" => 0);
    }
}