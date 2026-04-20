<?php

namespace Otus;

use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;

class Helper
{
    public static function getiblockIdByCode(?string $code): ?int
    {
        if (!loader::includeModule('iblock')){
            return null;
        }
        return IblockTable::getList([
            'filter' => [
                'CODE' => $code,
            ],
            'select' => [
                'ID', 
            ],
           'cache' => [
                'ttl' => 3600000,
           ],

        ])->fetch()['ID'];
    }
}