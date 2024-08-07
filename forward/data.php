<?php 

# Проверка на мод
empty($Db->db_data['AdminSystem']) && get_iframe( '012','Не найден мод - AdminSystem' );

use app\modules\module_page_minisystem\ext\MiniSystem;

$MiniSystem = new MiniSystem ($Db, $General, $Translate);

#Роут по страницам модуля
$Router->map('GET|POST', 'minisystem/[addadmin|addban|addmute|addgag|settings|addvip:page]/', 'addadmin');
$Map = $Router->match(); 

$page = $Map['params']['page'] ?? 'addadmin';

# Количество информации на страницах
define('PLAYERS_ON_PAGE', '20');

# Нумерология - какая-то хуевая наука для девочек
$page_num = (int)intval(get_section('num', '1'));

$page_num_min = ($page_num - 1) * PLAYERS_ON_PAGE;

# !!!УДОБСТВО
$USER_ID = $Db->db_data['AdminSystem'][0]['USER_ID'];
$DB_num = $Db->db_data['AdminSystem'][0]['DB_num'];
$Table = $Db->db_data['AdminSystem'][0]['Table'];

# Получение информации об админах
$AdminSystemInfoAdmin = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `steamid`, `name`, `flags`, `immunity`, `end`, `comment` FROM `{$Table}admins` LIMIT {$page_num_min}," . PLAYERS_ON_PAGE . "");

# Получение информации о банах
$AdminSystemInfoBan = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason` FROM `{$Table}bans` LIMIT {$page_num_min}," . PLAYERS_ON_PAGE . "");

# Получение информации о мутах
$AdminSystemInfoMute = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason` FROM `{$Table}mutes` LIMIT {$page_num_min}," . PLAYERS_ON_PAGE . "");

# Получение информации о гагах
$AdminSystemInfoGag = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason` FROM `{$Table}gags` LIMIT {$page_num_min}," . PLAYERS_ON_PAGE . "");

$check1 = $Db->mysql_table_search('AdminSystem', $Db->db_data['AdminSystem'][0]['USER_ID'], $Db->db_data['AdminSystem'][0]['DB_num'], "" . $Db->db_data['AdminSystem'][0]['Table'] . "groups");
$check2 = $Db->mysql_table_search('AdminSystem', $Db->db_data['AdminSystem'][0]['USER_ID'], $Db->db_data['AdminSystem'][0]['DB_num'], "" . $Db->db_data['AdminSystem'][0]['Table'] . "access_settings");
$check3 = $Db->mysql_table_search('AdminSystem', $Db->db_data['AdminSystem'][0]['USER_ID'], $Db->db_data['AdminSystem'][0]['DB_num'], "" . $Db->db_data['AdminSystem'][0]['Table'] . "settings");
$check4 = $Db->mysql_table_search('AdminSystem', $Db->db_data['AdminSystem'][0]['USER_ID'], $Db->db_data['AdminSystem'][0]['DB_num'], "" . $Db->db_data['AdminSystem'][0]['Table'] . "ready_time");
if ($check1 != 0 OR $check2 != 0 OR $check3 != 0 OR $check4 != 0) {
# Получение информации о доступе на страницу
$AdminSystemInfoAccess = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `steamid_access`, `add_admin_access`, `add_vip_access` FROM `as_access_settings`");

# Получение информации о группах
$AdminSystemInfoGroups = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `id`, `name_group`, `flags`, `immunity` FROM `{$Table}groups`");

# Получение информации о времени
$AdminSystemInfoReadyTime = $Db->queryAll('AdminSystem', $USER_ID, $DB_num, 
                                                "SELECT `id`, `name_time`, `duration` FROM `{$Table}ready_time`");

}

if (!empty($Db->db_data['Vips'])) {        
    # Получение информации о випах
    $VipsInfoUser = $Db->queryAll('Vips', $Db->db_data['Vips'][0]['USER_ID'], $Db->db_data['Vips'][0]['DB_num'],
                                                    "SELECT `account_id`, `name`, `sid`, `group`, `expires` FROM `" . $Db->db_data['Vips'][0]['Table'] . "users`");
}

# Подсчет кол-ва страниц
$page_max_admin = ceil($Db->queryNum('AdminSystem', $USER_ID, $DB_num, "SELECT COUNT(*) FROM `{$Table}admins`")[0]/PLAYERS_ON_PAGE);
$page_max_ban = ceil($Db->queryNum('AdminSystem', $USER_ID, $DB_num, "SELECT COUNT(*) FROM `{$Table}bans`")[0]/PLAYERS_ON_PAGE);
$page_max_mute = ceil($Db->queryNum('AdminSystem', $USER_ID, $DB_num, "SELECT COUNT(*) FROM `{$Table}mutes`")[0]/PLAYERS_ON_PAGE);
$page_max_gag = ceil($Db->queryNum('AdminSystem', $USER_ID, $DB_num, "SELECT COUNT(*) FROM `{$Table}gags`")[0]/PLAYERS_ON_PAGE);

if (!empty($Db->db_data['Vips'])) {
    $page_max_vip = ceil($Db->queryNum('Vips', $Db->db_data['Vips'][0]['USER_ID'], $Db->db_data['Vips'][0]['DB_num'], "SELECT COUNT(*) FROM `" . $Db->db_data['Vips'][0]['Table'] . "users`")[0]/PLAYERS_ON_PAGE);
}

# POST запросы...
if (isset($_POST['add_admin_as'])) {
    exit(json_encode($MiniSystem->Admin_Add($_POST), true));
} 
else if (isset($_POST['admin_steamid'])) {
    exit($MiniSystem->Admin_Del($_POST['admin_steamid']));
}
else if (isset($_POST['add_ban_as'])) {
    exit(json_encode($MiniSystem->Ban_Add($_POST), true));
}
else if (isset($_POST['player_steamid'])) {
    exit($MiniSystem->Ban_Del($_POST['player_steamid']));
}
else if (isset($_POST['add_mute_as'])) {
    exit(json_encode($MiniSystem->Mute_Add($_POST), true));
}
else if (isset($_POST['player_steamid_mute'])) {
    exit($MiniSystem->Mute_Del($_POST['player_steamid_mute']));
}
else if (isset($_POST['add_gag_as'])) {
    exit(json_encode($MiniSystem->Gag_Add($_POST), true));
}
else if (isset($_POST['player_steamid_gag'])) {
    exit($MiniSystem->Gag_Del($_POST['player_steamid_gag']));
} 
else if (isset($_POST['add_table_as'])) {
    exit(json_encode($MiniSystem->Add_Table(), true));
}
else if (isset($_POST['add_access_as'])) {
    exit(json_encode($MiniSystem->Add_Access($_POST), true));
}
else if (isset($_POST['access_steamid'])) {
    exit($MiniSystem->Access_Del($_POST['access_steamid']));
}
else if (isset($_POST['add_group_ms'])) {
    exit(json_encode($MiniSystem->Create_Group($_POST), true));
}
else if (isset($_POST['add_settings_ms'])) {
    exit(json_encode($MiniSystem->Save_Settings($_POST), true));
}
else if (isset($_POST['name_group_del'])) {
    exit($MiniSystem->Group_Del($_POST['name_group_del']));
}
else if (isset($_POST['add_time_ms'])) {
    exit(json_encode($MiniSystem->Time_Create($_POST), true));
}
else if (isset($_POST['id_time_del'])) {
    exit($MiniSystem->Time_Del($_POST['id_time_del']));
}
if (!empty($Db->db_data['Vips'])) {
    if (isset($_POST['add_vip_ms'])) {
        exit(json_encode($MiniSystem->Add_Vip($_POST), true));
    }
}
if (!empty($Db->db_data['Vips'])) {
    if (isset($_POST['vip_steamid'])) {
        exit($MiniSystem->Vip_Del($_POST['vip_steamid']));
    }
}

# Пускай будет...
//file_put_contents('log.txt', print_r($VipsInfoUser, true));

# Установка заголовка страницы
$Modules->set_page_title( "{$Translate->get_translate_module_phrase('module_page_minisystem','_ASPage')} | {$General->arr_general['short_name']}" );