<?php

use Otus\Helper;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
global $APPLICATION;
$APPLICATION->SetTitle('Демонстраци работы var-dumper');

dump((object)[
    'Dodo PIZZA' => '+79211111223',
    'Dodo PIZZA 2' => '+79211114456'
]
);

$iblockCode = 'clients_s1';
dump([
    'iblockId' => Helper::getiblockIdByCode($iblockCode),
    'iblockCode' => $iblockCode,
]);


require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
