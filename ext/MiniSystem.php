<?php
namespace app\modules\module_page_minisystem\ext;

class MiniSystem
{
    /**
    * @var array
    */
    public $GetSettings;

    protected $Db, $General, $Translate;

    public function __construct($Db, $General, $Translate)
    {
        $this->Db                          = $Db;
        $this->General                     = $General;
        $this->Translate                   = $Translate;
        $this->GetSettings                 = $this->GetSettings();
    }

    public function GetSettings() {
        $check1 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "groups");
		$check2 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "access_settings");
        $check3 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "settings");
        $check4 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time");
        if ($check1 != 0 OR $check2 != 0 OR $check3 != 0 OR $check4 != 0) {
            return $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT `group_choice`, `time_choice` FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "settings`");
        }
    }

    public function Admin_Add($POST) {

        $steam64 = $this->Steam64_ID($POST['steam_admin']);

        if (!$steam64) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamError')];
        if ($this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT * FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "admins` WHERE `steamid` = :steam_admin;", ['steam_admin' => $steam64])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamErrorA')];
        if ($POST['end_admin'] < 0) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTime0')];

        $end_admin = (float)($POST['end_admin'] ?? 0) * 24 * 60 * 60;
        if ($this->GetSettings['group_choice'] == 0) {
            if ($POST['immunity_admin'] > 100 || $POST['immunity_admin'] < 1) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAImm100')];
            $AdminAddNoGroups = [
                "nickname_admin"    => $this->General->checkName($steam64),
                "steam_admin"       => $steam64,
                "flag_z"            => isset($POST['flag_z']),
                "flag_a"            => isset($POST['flag_a']),
                "flag_b"            => isset($POST['flag_b']),
                "flag_c"            => isset($POST['flag_c']),
                "flag_d"            => isset($POST['flag_d']),
                "flag_e"            => isset($POST['flag_e']),
                "flag_f"            => isset($POST['flag_f']),
                "flag_g"            => isset($POST['flag_g']),
                "flag_h"            => isset($POST['flag_h']),
                "flag_i"            => isset($POST['flag_i']),
                "flag_j"            => isset($POST['flag_j']),
                "flag_k"            => isset($POST['flag_k']),
                "flag_l"            => isset($POST['flag_l']),
                "flag_m"            => isset($POST['flag_m']),
                "flag_n"            => isset($POST['flag_n']),
                "flag_o"            => isset($POST['flag_o']),
                "flag_p"            => isset($POST['flag_p']),
                "flag_q"            => isset($POST['flag_q']),
                "flag_r"            => isset($POST['flag_r']),
                "flag_s"            => isset($POST['flag_s']),
                "flag_t"            => isset($POST['flag_t']),
                "flag_u"            => isset($POST['flag_u']),
                "flag_v"            => isset($POST['flag_v']),
                "flag_w"            => isset($POST['flag_w']),
                "flag_x"            => isset($POST['flag_x']),
                "flag_y"            => isset($POST['flag_y']),
                "immunity_admin"    => $POST['immunity_admin'] ?? 1,
                "end_admin"         => $end_admin ?? 0,
                "comm_admin"        => $POST['comm_admin'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "admins` (`steamid`, `name`, `flags`, `immunity`, `end`, `comment`) VALUES (:steam_admin, :nickname_admin, CONCAT(CASE WHEN :flag_z THEN 'z' ELSE '' END, CASE WHEN :flag_a THEN 'a' ELSE '' END, CASE WHEN :flag_b THEN 'b' ELSE '' END, CASE WHEN :flag_c THEN 'c' ELSE '' END, CASE WHEN :flag_d THEN 'd' ELSE '' END, CASE WHEN :flag_e THEN 'e' ELSE '' END, CASE WHEN :flag_f THEN 'f' ELSE '' END, CASE WHEN :flag_g THEN 'g' ELSE '' END, CASE WHEN :flag_h THEN 'h' ELSE '' END, CASE WHEN :flag_i THEN 'i' ELSE '' END, CASE WHEN :flag_j THEN 'j' ELSE '' END, CASE WHEN :flag_k THEN 'k' ELSE '' END, CASE WHEN :flag_l THEN 'l' ELSE '' END, CASE WHEN :flag_m THEN 'm' ELSE '' END, CASE WHEN :flag_n THEN 'n' ELSE '' END, CASE WHEN :flag_o THEN 'o' ELSE '' END, CASE WHEN :flag_p THEN 'p' ELSE '' END, CASE WHEN :flag_q THEN 'q' ELSE '' END, CASE WHEN :flag_r THEN 'r' ELSE '' END, CASE WHEN :flag_s THEN 's' ELSE '' END, CASE WHEN :flag_t THEN 't' ELSE '' END, CASE WHEN :flag_u THEN 'u' ELSE '' END, CASE WHEN :flag_v THEN 'v' ELSE '' END, CASE WHEN :flag_w THEN 'w' ELSE '' END, CASE WHEN :flag_x THEN 'x' ELSE '' END, CASE WHEN :flag_y THEN 'y' ELSE '' END), :immunity_admin, :end_admin, :comm_admin);", $AdminAddNoGroups);
            } else {
            $id = $POST['group_choice_name'];
            $res = $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT `flags`, `immunity` FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "groups` WHERE `id` = :id" , ['id' => $id]);
            if ($res) {
                $AdminAddGroups = [
                    "nickname_admin"    => $this->General->checkName($steam64),
                    "steam_admin"       => $steam64,
                    "flags"             => $res['flags'],
                    "immunity"          => $res['immunity'],
                    "end_admin"         => $end_admin ?? 0,
                    "comm_admin"        => $POST['comm_admin'],
                ];
            };
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "admins` (`steamid`, `name`, `flags`, `immunity`, `end`, `comment`) VALUES (:steam_admin, :nickname_admin, :flags , :immunity, :end_admin, :comm_admin);", $AdminAddGroups);
            }; 
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAadAdm')];
    }

    public function Admin_Del($admin_steamid) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "admins` WHERE `steamid` = '$admin_steamid' LIMIT 1");
        header("Location: /minisystem/addadmin");
        exit();
    }

    public function Ban_Add($POST) {

        $steam64 = $this->Steam64_ID($POST['steam_player']);

        if (!$steam64) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamError')];
        if (empty($POST['reason_ban'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASPustoDura')];
        if ($POST['duration_ban'] == 0) { $end_ban = time(); } else { $end_ban = time() + $POST['duration_ban']; }
        if ($this->GetSettings['group_choice'] == 0) {
            if ($POST['duration_ban'] < 0) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTime0')];
            $BanAdd = [
                "steam_admin"       => $_SESSION['steamid64'],
                "admin_name"        => $this->General->checkName($_SESSION['steamid64']),
                "nickname_player"   => $this->General->checkName($steam64),
                "steam_player"      => $steam64,
                "created"           => time(),
                "end_ban"           => $end_ban,
                "duration_ban"      => $POST['duration_ban'] ?? 0,
                "reason_ban"        => $POST['reason_ban'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "bans` (`admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason`) VALUES (:steam_admin, :steam_player, :nickname_player, :admin_name, :created, :duration_ban, :end_ban, :reason_ban);", $BanAdd);
        } else {
            $id = $POST['time_choice_name'];
            $res = $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT `duration` FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time` WHERE `id` = :id" , ['id' => $id]);
            $BanAddTime = [
                "steam_admin"       => $_SESSION['steamid64'],
                "admin_name"        => $this->General->checkName($_SESSION['steamid64']),
                "nickname_player"   => $this->General->checkName($steam64),
                "steam_player"      => $steam64,
                "created"           => time(),
                "end_ban"           => $end_ban,
                "duration_ban"      => $res['duration'],
                "reason_ban"        => $POST['reason_ban'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "bans` (`admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason`) VALUES (:steam_admin, :steam_player, :nickname_player, :admin_name, :created, :duration_ban, :end_ban, :reason_ban);", $BanAddTime);
        }
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAadBan')];
    }

    public function Ban_Del($player_steamid) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "bans` WHERE `steamid` = '$player_steamid' LIMIT 1");
        header("Location: /minisystem/addban");
        exit();
    }

    public function Mute_Add($POST) {

        $steam64 = $this->Steam64_ID($POST['steam_player_mute']);

        if (!$steam64) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamError')];
        if (empty($POST['reason_mute'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASPustoDura')];
        if ($POST['duration_mute'] == 0) { $end_mute = time(); } else { $end_mute = time() + $POST['duration_mute']; }
        if ($this->GetSettings['group_choice'] == 0) {
            if ($POST['duration_mute'] < 0) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTime0')];
            $MuteAdd = [
                "steam_admin"       => $_SESSION['steamid64'],
                "admin_name"        => $this->General->checkName($_SESSION['steamid64']),
                "nickname_player"   => $this->General->checkName($steam64),
                "steam_player"      => $steam64,
                "created"           => time(),
                "end_mute"          => $end_mute,
                "duration_mute"     => $POST['duration_mute'] ?? 0,
                "reason_mute"       => $POST['reason_mute'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "mutes` (`admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason`) VALUES (:steam_admin, :steam_player, :nickname_player, :admin_name, :created, :duration_mute, :end_mute, :reason_mute);", $MuteAdd);
        } else {
            $id = $POST['time_choice_name'];
            $res = $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT `duration` FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time` WHERE `id` = :id" , ['id' => $id]);
            $MuteAddTime = [
                "steam_admin"       => $_SESSION['steamid64'],
                "admin_name"        => $this->General->checkName($_SESSION['steamid64']),
                "nickname_player"   => $this->General->checkName($steam64),
                "steam_player"      => $steam64,
                "created"           => time(),
                "end_mute"          => $end_mute,
                "duration_mute"     => $res['duration'],
                "reason_mute"       => $POST['reason_mute'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "mutes` (`admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason`) VALUES (:steam_admin, :steam_player, :nickname_player, :admin_name, :created, :duration_mute, :end_mute, :reason_mute);", $MuteAddTime);
        }
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAadMute')];
    }

    public function Mute_Del($player_steamid_mute) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "mutes` WHERE `steamid` = '$player_steamid_mute' LIMIT 1");
        header("Location: /minisystem/addmute");
        exit();
    }

    public function Gag_Add($POST) {

        $steam64 = $this->Steam64_ID($POST['steam_player_gag']);

        if (!$steam64) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamError')];
        if (empty($POST['reason_gag'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASPustoDura')];
        if ($POST['duration_gag'] == 0) { $end_gag = time(); } else { $end_gag = time() + $POST['duration_gag']; }
        if ($this->GetSettings['group_choice'] == 0) {
            if ($POST['duration_gag'] < 0) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTime0')];
            $GagAdd = [
                "steam_admin"       => $_SESSION['steamid64'],
                "admin_name"        => $this->General->checkName($_SESSION['steamid64']),
                "nickname_player"   => $this->General->checkName($steam64),
                "steam_player"      => $steam64,
                "created"           => time(),
                "end_gag"           => $end_gag,
                "duration_gag"      => $POST['duration_gag'] ?? 0,
                "reason_gag"        => $POST['reason_gag'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "gags` (`admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason`) VALUES (:steam_admin, :steam_player, :nickname_player, :admin_name, :created, :duration_gag, :end_gag, :reason_gag);", $GagAdd);
        } else {
            $id = $POST['time_choice_name'];
            $res = $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT `duration` FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time` WHERE `id` = :id" , ['id' => $id]);
            $GagAddTime = [
                "steam_admin"       => $_SESSION['steamid64'],
                "admin_name"        => $this->General->checkName($_SESSION['steamid64']),
                "nickname_player"   => $this->General->checkName($steam64),
                "steam_player"      => $steam64,
                "created"           => time(),
                "end_gag"           => $end_gag,
                "duration_gag"      => $res['duration'],
                "reason_gag"        => $POST['reason_gag'],
            ];
            $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "gags` (`admin_steamid`, `steamid`, `name`, `admin_name`, `created`, `duration`, `end`, `reason`) VALUES (:steam_admin, :steam_player, :nickname_player, :admin_name, :created, :duration_gag, :end_gag, :reason_gag);", $GagAddTime);
        }
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAadGag')];
    }

    public function Gag_Del($player_steamid_gag) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "gags` WHERE `steamid` = '$player_steamid_gag' LIMIT 1");
        header("Location: /minisystem/addgag");
        exit();
    }

    public function Add_Table() {
        $check1 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "groups");
		$check2 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "access_settings");
        $check3 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "settings");
        $check4 = $this->Db->mysql_table_search('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time");
        if ($check1 == 0 OR $check2 == 0 OR $check3 == 0 OR $check4 == 0) {
            $addtable = array(
                "CREATE TABLE `as_groups` (
                    `id` INT NOT NULL AUTO_INCREMENT,
                    `name_group` VARCHAR(255) NOT NULL,
                    `flags` VARCHAR(26) NOT NULL,
                    `immunity` INT NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

                "CREATE TABLE `as_ready_time` (
                    `id` INT NOT NULL AUTO_INCREMENT,
                    `name_time` VARCHAR(255) NOT NULL,
                    `duration` INT NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
                
                "CREATE TABLE `as_access_settings` (
                    `id` INT NOT NULL AUTO_INCREMENT,
                    `steamid_access` BIGINT(17) NOT NULL,
                    `add_admin_access` INT(1) NOT NULL,
                    `add_vip_access` INT(1) NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

                "CREATE TABLE `as_settings` (
                    `id` int NOT NULL DEFAULT '1',
                    `group_choice` INT(1) NOT NULL,
                    `time_choice` INT(1) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
                
                "INSERT INTO `as_settings` (`id`, `group_choice`, `time_choice`) VALUES (1, 0, 0);",
                
                "ALTER TABLE `as_settings` ADD PRIMARY KEY (`id`);"
            );
            foreach ($addtable as $sql) {
                $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], $sql);
            }
            return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASCreateTable')];
        }
        return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASCreateTableError')];
    }

    public function Add_Access($POST) {

        $steam64 = $this->Steam64_ID($POST['steam_access']);

        if (!$steam64) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamError')];
        if ($this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "SELECT * FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "access_settings` WHERE `steamid_access` = :steamid_access;", ['steamid_access' => $steam64])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASDostupGood')];

        $AccessAdd = [
            "steam_access"       => $steam64,
            "access_admin"       => $POST['access_admin'],
            "access_vip"         => $POST['access_vip'] ?? 0,
        ];        

        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "access_settings` (`steamid_access`, `add_admin_access`, `add_vip_access`) VALUES (:steam_access, :access_admin, :access_vip);", $AccessAdd);
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAccessAdd')];
    }

    public function Access_Del($player_steamid_access) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "access_settings` WHERE `steamid_access` = '$player_steamid_access' LIMIT 1");
        header("Location: /minisystem/settings");
        exit();
    }

    public function Create_Group($POST) {

        if (empty($POST['name_group'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASNameGroup0')];
        if ($POST['immunity_group'] > 100 || $POST['immunity_group'] < 1) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAImm100')];

        $CreateGroup = [
            "name_group"         => $POST['name_group'],
            "flag_z"             => isset($POST['flag_z']),
            "flag_a"             => isset($POST['flag_a']),
            "flag_b"             => isset($POST['flag_b']),
            "flag_c"             => isset($POST['flag_c']),
            "flag_d"             => isset($POST['flag_d']),
            "flag_e"             => isset($POST['flag_e']),
            "flag_f"             => isset($POST['flag_f']),
            "flag_g"             => isset($POST['flag_g']),
            "flag_h"             => isset($POST['flag_h']),
            "flag_i"             => isset($POST['flag_i']),
            "flag_j"             => isset($POST['flag_j']),
            "flag_k"             => isset($POST['flag_k']),
            "flag_l"             => isset($POST['flag_l']),
            "flag_m"             => isset($POST['flag_m']),
            "flag_n"             => isset($POST['flag_n']),
            "flag_o"             => isset($POST['flag_o']),
            "flag_p"             => isset($POST['flag_p']),
            "flag_q"             => isset($POST['flag_q']),
            "flag_r"             => isset($POST['flag_r']),
            "flag_s"             => isset($POST['flag_s']),
            "flag_t"             => isset($POST['flag_t']),
            "flag_u"             => isset($POST['flag_u']),
            "flag_v"             => isset($POST['flag_v']),
            "flag_w"             => isset($POST['flag_w']),
            "flag_x"             => isset($POST['flag_x']),
            "flag_y"             => isset($POST['flag_y']),
            "immunity_group"     => $POST['immunity_group'],
        ];        

        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "groups` (`name_group`, `flags`, `immunity`) VALUES (:name_group, CONCAT(CASE WHEN :flag_z THEN 'z' ELSE '' END, CASE WHEN :flag_a THEN 'a' ELSE '' END, CASE WHEN :flag_b THEN 'b' ELSE '' END, CASE WHEN :flag_c THEN 'c' ELSE '' END, CASE WHEN :flag_d THEN 'd' ELSE '' END, CASE WHEN :flag_e THEN 'e' ELSE '' END, CASE WHEN :flag_f THEN 'f' ELSE '' END, CASE WHEN :flag_g THEN 'g' ELSE '' END, CASE WHEN :flag_h THEN 'h' ELSE '' END, CASE WHEN :flag_i THEN 'i' ELSE '' END, CASE WHEN :flag_j THEN 'j' ELSE '' END, CASE WHEN :flag_k THEN 'k' ELSE '' END, CASE WHEN :flag_l THEN 'l' ELSE '' END, CASE WHEN :flag_m THEN 'm' ELSE '' END, CASE WHEN :flag_n THEN 'n' ELSE '' END, CASE WHEN :flag_o THEN 'o' ELSE '' END, CASE WHEN :flag_p THEN 'p' ELSE '' END, CASE WHEN :flag_q THEN 'q' ELSE '' END, CASE WHEN :flag_r THEN 'r' ELSE '' END, CASE WHEN :flag_s THEN 's' ELSE '' END, CASE WHEN :flag_t THEN 't' ELSE '' END, CASE WHEN :flag_u THEN 'u' ELSE '' END, CASE WHEN :flag_v THEN 'v' ELSE '' END, CASE WHEN :flag_w THEN 'w' ELSE '' END, CASE WHEN :flag_x THEN 'x' ELSE '' END, CASE WHEN :flag_y THEN 'y' ELSE '' END), :immunity_group);", $CreateGroup);
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASAGroupsCreate')];
    }

    public function Save_Settings($POST) {

        $SaveSettings = [
            "group_choice"        => $POST['group_choice'],
            "time_choice"         => $POST['time_choice'],
        ];        

        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "UPDATE `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "settings` SET `group_choice` = :group_choice, `time_choice` = :time_choice;", $SaveSettings);
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASASaveSettings')];
    }

    public function Group_Del($id_group) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "groups` WHERE `id` = '$id_group' LIMIT 1");
        header("Location: /minisystem/settings");
        exit();
    }

    public function Time_Create($POST) {

        if (empty($POST['name_time'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASNAzDura')];
        if ($POST['duration'] < 0) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTime0')];

        $CreateTime = [
            "name_time"          => $POST['name_time'],
            "duration"           => $POST['duration'] ?? 0,
        ];        

        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time` (`name_time`, `duration`) VALUES (:name_time, :duration);", $CreateTime);
        return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTimeGood')];
    }

    public function Time_Del($id_group) {
        $this->Db->query('AdminSystem', $this->Db->db_data['AdminSystem'][0]['USER_ID'], $this->Db->db_data['AdminSystem'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['AdminSystem'][0]['Table'] . "ready_time` WHERE `id` = '$id_group' LIMIT 1");
        header("Location: /minisystem/settings");
        exit();
    }

    public function Add_Vip($POST) {
        if (!empty($this->Db->db_data['Vips'])) {

            $steam3 = $this->Steam3_ID($POST['steam_vip']);

            if (!$steam3) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASSteamError')];
            if (empty($POST['group_vip'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASNameGroup0')];
            if (empty($POST['sid_id'])) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASID0')];
            if ($POST['time_vip'] < 0) return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASTime0')];
            if (!empty($this->Db->query('Vips', $this->Db->db_data['Vips'][0]['USER_ID'], $this->Db->db_data['Vips'][0]['DB_num'], "SELECT * FROM `" . $this->Db->db_data['Vips'][0]['Table'] . "users` WHERE `account_id` = :steam_vip AND `sid` = :sid_id", ['steam_vip' => $steam3, 'sid_id' => $POST['sid_id']]))) { return ['status' => 'error', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASVIPGood')]; }
            if ($POST['time_vip'] == 0 ) { $end_vip = 0; } else { $end_vip = (float)($POST['time_vip'] ?? 0) * 86400 + time(); }

            $AddVIP = [
                "account_id"         => $steam3,
                "name"               => $this->General->checkName(con_steam3to64_int($steam3)),
                "sid"                => $POST['sid_id'],
                "group"              => $POST['group_vip'],
                "expires"            => $end_vip ?? 0,
            ];        

            $this->Db->query('Vips', $this->Db->db_data['Vips'][0]['USER_ID'], $this->Db->db_data['Vips'][0]['DB_num'], "INSERT INTO `" . $this->Db->db_data['Vips'][0]['Table'] . "users` (`account_id`, `name`, `sid`, `group`, `expires`) VALUES (:account_id, :name, :sid, :group, :expires);", $AddVIP);
            return ['status' => 'success', 'text' => $this->Translate->get_translate_module_phrase('module_page_minisystem', '_ASGoodVIP')];
        }
    }

    public function Vip_Del($vip_steamid) {
        if (!empty($this->Db->db_data['Vips'])) {
            $this->Db->query('Vips', $this->Db->db_data['Vips'][0]['USER_ID'], $this->Db->db_data['Vips'][0]['DB_num'], "DELETE FROM `" . $this->Db->db_data['Vips'][0]['Table'] . "users` WHERE `account_id` = '$vip_steamid' LIMIT 1");
            header("Location: /minisystem/addvip");
            exit();
        }
    }


	# Функция для перевода любой формы в steamid64
    public function Steam64_ID($steam64) {
        switch(true):
            case (preg_match('/^(7656119)([0-9]{10})/', $steam64)):
                return $steam64;
                break;
            case (preg_match('/^STEAM_[01]:[01]:[0-9]{2,12}$/', $steam64)):
                return con_steam32to64($steam64);
                break;
            case (preg_match('/^\w{1,}:\/\/(steamcommunity.com)\/(id)\/(\S{1,})/', $steam64)):
                $search_id = rtrim(preg_replace("/^\w{1,}:\/\/(steamcommunity.com)\/(id)\/(\S{1,})/", '$3', $steam64), "/");
                $getsearch = json_decode(file_get_contents("http://api.steampowered.com/ISteamUser/ResolveVanityURL/v0001/?key={$this->General->arr_general['web_key']}&vanityurl={$search_id}"), true)['response']['steamid'];
                return $getsearch;
                break;
            case (preg_match('/^\w{1,}:\/\/(steamcommunity.com)\/(profiles)\/(7656119[0-9]{10})(\/|)/', $steam64)):
                $search_steam = rtrim(preg_replace("/^\w{1,}:\/\/(steamcommunity.com)\/(profiles)\/(7656119[0-9]{10})(\/|)/", '$3', $steam64), "/");
                return $search_steam;
                break;
            case (preg_match('/^\[U:(.*)\:(.*)\]/', $steam64)):
                return con_steam3to64_int(str_replace(Array('[U:1:', '[U:0:', ']'), '', $steam64));
                break;
            default:
                return false;
                break;
        endswitch;
    }

    # Функция для перевода любой формы в steamid3
    public function Steam3_ID($steam3) {
        switch(true):
            case (preg_match('/^\[U:(.*)\:(.*)\]/', $steam3)):
                return str_replace(Array('[U:1:', '[U:0:', ']'), '', $steam3);
                break;
            case (preg_match('/^STEAM_[01]:[01]:[0-9]{2,12}$/', $steam3)):
                return con_steam32to3_int($steam3);
                break;
            case (preg_match('/^\w{1,}:\/\/(steamcommunity.com)\/(id)\/(\S{1,})/', $steam3, $matches)) :
                $search_id = rtrim(preg_replace("/^\w{1,}:\/\/(steamcommunity.com)\/(id)\/(\S{1,})/", '$3', $steam3), "/");
                $getsearch = json_decode(file_get_contents("http://api.steampowered.com/ISteamUser/ResolveVanityURL/v0001/?key={$this->General->arr_general['web_key']}&vanityurl={$search_id}"), true)['response']['steamid'];
                return $getsearch;
                break;
            case (preg_match('/^\w{1,}:\/\/(steamcommunity.com)\/(profiles)\/(7656119[0-9]{10})(\/|)/', $steam3, $matches)) :
                $search_steam = rtrim(preg_replace("/^\w{1,}:\/\/(steamcommunity.com)\/(profiles)\/(7656119[0-9]{10})(\/|)/", '$3', $steam3), "/");
                return $search_steam;
                break;
            case (preg_match('/^(7656119)([0-9]{10})/', $steam3)):
                return con_steam64to3_int($steam3);
                break;
            default:
                return false;
                break;
        endswitch;
    }
}