<?php

namespace Mastashake08\Forge;

class Wordpress
{
    public static function install($id, $siteId, $params)
    {
        echo Forge::getBaseUrl()."/{$id}/sites/{$siteId}/wordpress";

        return ApiRequestor::sendRequest('POST', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/wordpress", $params);
    }

    public static function uninstall($id, $siteId)
    {
        return ApiRequestor::sendRequest('DELETE', Forge::getBaseUrl()."/{$id}/sites/{$siteId}/wordpress");
    }
}
