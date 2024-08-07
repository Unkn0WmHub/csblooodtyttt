<?php if (isset($_SESSION['user_admin'])) : ?>
<div class="row">
    <div class="col-md-12">
        <div class="card_header">
            <div class="svg_text_header">
                <div class="svg_header">
                    <svg viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"></path></svg>
                </div>
                <div class="header_text">
                    <div class="flex_header_top"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddSettings') ?></div>
                    <div class="flex_header_bottom"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddSettingsDesc') ?></div>
                </div>
            </div>
            <?php $check1 = $Db->mysql_table_search('AdminSystem', $USER_ID, $DB_num, "{$Table}groups"); $check2 = $Db->mysql_table_search('AdminSystem', $USER_ID, $DB_num, "{$Table}access_settings"); $check3 = $Db->mysql_table_search('AdminSystem', $USER_ID, $DB_num, "{$Table}settings"); $check4 = $Db->mysql_table_search('AdminSystem', $USER_ID, $DB_num, "{$Table}ready_time"); if ($check1 == 0 OR $check2 == 0 OR $check3 == 0 OR $check4 == 0) : ?>
            <form id="add_table_as">
                <button class="button_to_add"><svg viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddTable') ?></button>
            </form>
            <?php endif; ?>
        </div>
        <div class="flex_control">
            <div class="card">
            <div class="head_lists"><svg viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddSettings') ?></div>
                <div class="flex_over scroll">
                    <form id="add_settings_ms">
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASGroupSys') ?>
                                </div>
                            </div>
                            <div class="input_radio_buttons scroll">
                                <div class="radio">
                                    <input class="radio__input" type="radio" name="group_choice" id="group_choice0" value="1" <?php if($MiniSystem->GetSettings['group_choice'] == 1) : ?> checked <?php endif; ?>>
                                    <label for="group_choice0" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASEnabled') ?></label>
                                </div>
                                <div class="radio">
                                    <input class="radio__input" type="radio" name="group_choice" id="group_choice1" value="0" <?php if($MiniSystem->GetSettings['group_choice'] == 0) : ?> checked <?php endif; ?>>
                                    <label for="group_choice1" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASDisabled') ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASSysTime') ?>
                                </div>
                            </div>
                            <div class="input_radio_buttons scroll">
                                <div class="radio">
                                    <input class="radio__input" type="radio" name="time_choice" id="time_choice0" value="1" <?php if($MiniSystem->GetSettings['time_choice'] == 1) : ?> checked <?php endif; ?>>
                                    <label for="time_choice0" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASEnabled') ?></label>
                                </div>
                                <div class="radio">
                                    <input class="radio__input" type="radio" name="time_choice" id="time_choice1" value="0" <?php if($MiniSystem->GetSettings['time_choice'] == 0) : ?> checked <?php endif; ?>>
                                    <label for="time_choice1" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASDisabled') ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn w100 btn5px" type="submit" value="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASSave') ?>">
                </form>
            </div>
            <div class="grid_control">
                <div class="card">
                    <div class="head_lists"><svg viewBox="0 0 576 512"><path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASr8') ?></div>
                    <div class="info_card_table_head_settings_access">
                        <span class="info_card_table_head_item"><svg viewBox="0 0 512 512"><path d="M105.4 67.08C118.2 44.81 141.1 31.08 167.7 31.08H344.3C370 31.08 393.8 44.81 406.6 67.08L494.9 219.1C507.8 242.3 507.8 269.7 494.9 291.1L406.6 444.9C393.8 467.2 370 480.9 344.3 480.9H167.7C141.1 480.9 118.2 467.2 105.4 444.9L17.07 291.1C4.206 269.7 4.206 242.3 17.07 219.1L105.4 67.08zM158.3 279.8L107.1 335.9L153.9 416.9C156.7 421.9 161.1 424.9 167.7 424.9H344.3C350 424.9 355.3 421.9 358.1 416.9L413.4 321.2L340.7 233.8C336.2 228.3 329.4 225.1 322.3 225.1C315.2 225.1 308.4 228.3 303.8 233.8L232.2 320L193.3 279.4C188.7 274.6 182.4 271.9 175.7 272C169.1 272.1 162.8 274.9 158.3 279.8V279.8zM192 199.1C214.1 199.1 232 182.1 232 159.1C232 137.9 214.1 119.1 192 119.1C169.9 119.1 152 137.9 152 159.1C152 182.1 169.9 199.1 192 199.1z"></path></svg></span>
                        <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdmin') ?></span>
                        <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAddAdmin') ?></span>
                        <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAddVip') ?></span>
                        <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAction') ?></span>
                    </div>
                    <div class="flex_over_acc scroll">
                        <?php foreach ($AdminSystemInfoAccess as $access) : ?>
                            <div class="card_lists_settings_access">
                                <?php if (!empty($General->arr_general['avatars'])) : ?>
                                    <span class="info_card_table_head_item"><img class="admin_avatar" id="<?php $General->arr_general['avatars'] === 1 && print con_steam32to64($access['steamid_access']) ?>" <?= $sz_i < '20' ? 'src' : 'data-src' ?>="<?= $General->getAvatar(con_steam32to64($access['steamid_access']), 2) ?>" title="" alt=""></span>
                                <?php endif; ?>
                                <span class="info_card_table_head_item"><?= action_text_clear(action_text_trim($General->checkName($access['steamid_access']), 10)) ?></span>
                                <span class="info_card_table_head_item"><?php if ($access['add_admin_access'] == 1) { echo '<svg class="poxsvg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>'; } else { echo '<svg class="poxsvg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path></svg>'; } ?></span>
                                <span class="info_card_table_head_item"><?php if ($access['add_vip_access'] == 1) { echo '<svg class="poxsvg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>'; } else { echo '<svg class="poxsvg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path></svg>'; } ?></span>
                                <div class="flex_del">
                                    <a href="<?= $General->arr_general['site'] ?>profiles/<?php print $General->arr_general['only_steam_64'] === 1 ? con_steam32to64($access['steamid_access']) : $access['steamid_access'] ?>" target="_blank" class="btn_dev" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASProf') ?>" data-tippy-placement="top">
                                        <svg viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                    </a>
                                    <form method="post">
                                        <input type="hidden" name="access_steamid" value="<?= $access['steamid_access'] ?>">
                                        <button class="btn_del" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASRemoveAccess') ?>" data-tippy-placement="top"><svg viewBox="0 0 448 512"><path d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM143 272.1L190.1 319.1L143 367C133.7 376.4 133.7 391.6 143 400.1C152.4 410.3 167.6 410.3 176.1 400.1L223.1 353.9L271 400.1C280.4 410.3 295.6 410.3 304.1 400.1C314.3 391.6 314.3 376.4 304.1 367L257.9 319.1L304.1 272.1C314.3 263.6 314.3 248.4 304.1 239C295.6 229.7 280.4 229.7 271 239L223.1 286.1L176.1 239C167.6 229.7 152.4 229.7 143 239C133.7 248.4 133.7 263.6 143 272.1V272.1z"></path></svg></button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card">
                <div class="head_lists"><svg viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAccess') ?></div>
                    <div class="flex_over_acc scroll">
                        <form id="add_access_as">
                            <div class="input-container">
                                <div class="input-form">
                                    <div class="input_text">
                                        <svg viewBox="0 0 496 512"><path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.8 52.8 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3 .1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z"/></svg>
                                        STEAMID
                                    </div>
                                </div>
                                <div class="input-wrapper">
                                    <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASGetSteam') ?>" data-tippy-placement="right" style="width: 42px;">
                                        <svg viewBox="0 0 512 512">
                                            <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" name="steam_access" placeholder="STEAM_1:1:390... / 7656119803... / [U:1:1234234] / https://steamcommunity.com/profiles/..." style="margin-left: 42px;" required>
                                </div>
                            </div>
                            <div class="input-container">
                                <div class="input-form">
                                    <div class="input_text">
                                        <svg viewBox="0 0 640 512"><path d="M240 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM192 48a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32 80c17.7 0 32 14.3 32 32h8c13.3 0 24 10.7 24 24v16c0 1.7-.2 3.4-.5 5.1C280.3 229.6 320 286.2 320 352c0 88.4-71.6 160-160 160S0 440.4 0 352c0-65.8 39.7-122.4 96.5-146.9c-.4-1.6-.5-3.3-.5-5.1V184c0-13.3 10.7-24 24-24h8c0-17.7 14.3-32 32-32zm0 320a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm192-96c0-25.9-5.1-50.5-14.4-73.1c16.9-32.9 44.8-59.1 78.9-73.9c-.4-1.6-.5-3.3-.5-5.1V184c0-13.3 10.7-24 24-24h8c0-17.7 14.3-32 32-32s32 14.3 32 32h8c13.3 0 24 10.7 24 24v16c0 1.7-.2 3.4-.5 5.1C600.3 229.6 640 286.2 640 352c0 88.4-71.6 160-160 160c-62 0-115.8-35.3-142.4-86.9c9.3-22.5 14.4-47.2 14.4-73.1zm224 0a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM368 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm80 48a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                        <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAddAddAdmin') ?>           
                                    </div>
                                </div>
                                <div class="input_radio_buttons scroll">
                                    <div class="radio">
                                        <input class="radio__input" type="radio" name="access_admin" id="access_admin0" value="1" checked>
                                        <label for="access_admin0" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASYes') ?></label>
                                    </div>
                                    <div class="radio">
                                        <input class="radio__input" type="radio" name="access_admin" id="access_admin1" value="0">
                                        <label for="access_admin1" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASNo') ?></label>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($Db->db_data['Vips'])) : ?>
                                <div class="input-container">
                                    <div class="input-form">
                                        <div class="input_text">
                                            <svg viewBox="0 0 576 512"><path d="M309 106c11.4-7 19-19.7 19-34c0-22.1-17.9-40-40-40s-40 17.9-40 40c0 14.4 7.6 27 19 34L209.7 220.6c-9.1 18.2-32.7 23.4-48.6 10.7L72 160c5-6.7 8-15 8-24c0-22.1-17.9-40-40-40S0 113.9 0 136s17.9 40 40 40c.2 0 .5 0 .7 0L86.4 427.4c5.5 30.4 32 52.6 63 52.6H426.6c30.9 0 57.4-22.1 63-52.6L535.3 176c.2 0 .5 0 .7 0c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40c0 9 3 17.3 8 24l-89.1 71.3c-15.9 12.7-39.5 7.5-48.6-10.7L309 106z"/></svg>
                                            <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAddAddVip') ?>          
                                        </div>
                                    </div>
                                    <div class="input_radio_buttons scroll">
                                        <div class="radio">
                                            <input class="radio__input" type="radio" name="access_vip" id="access_vip0" value="1" checked>
                                            <label for="access_vip0" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASYes') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="radio" name="access_vip" id="access_vip1" value="0">
                                            <label for="access_vip1" class="radio__label"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASNo') ?></label>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <input class="btn w100 btn5px" type="submit" value="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAccess') ?>">
                    </form>
                </div>
            </div>
            <?php if($MiniSystem->GetSettings['group_choice'] == 1) : ?>
                <div class="grid_control">
                    <div class="card">
                        <div class="head_lists"><svg viewBox="0 0 576 512"><path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASListGroups') ?></div>
                        <div class="info_card_table_head_settings_group">
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASName') ?></span>
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASFlag') ?></span>
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASImmunity') ?></span>
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAction') ?></span>
                        </div>
                        <div class="flex_over_acc scroll">
                            <?php foreach ($AdminSystemInfoGroups as $group) : ?>
                                <div class="card_lists_settings_group">
                                    <span class="info_card_table_head_item"><?= action_text_clear(action_text_trim($group['name_group']), 15) ?></span>
                                    <span class="info_card_table_head_item"><?= $group['flags'] ?></span>
                                    <span class="info_card_table_head_item"><?= $group['immunity'] ?></span>
                                    <form method="post">
                                        <input type="hidden" name="name_group_del" value="<?= $group['id'] ?>">
                                        <button class="btn_del" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASRemoveGr') ?>" data-tippy-placement="top"><svg viewBox="0 0 448 512"><path d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM143 272.1L190.1 319.1L143 367C133.7 376.4 133.7 391.6 143 400.1C152.4 410.3 167.6 410.3 176.1 400.1L223.1 353.9L271 400.1C280.4 410.3 295.6 410.3 304.1 400.1C314.3 391.6 314.3 376.4 304.1 367L257.9 319.1L304.1 272.1C314.3 263.6 314.3 248.4 304.1 239C295.6 229.7 280.4 229.7 271 239L223.1 286.1L176.1 239C167.6 229.7 152.4 229.7 143 239C133.7 248.4 133.7 263.6 143 272.1V272.1z"></path></svg></button>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card">
                    <div class="head_lists"><svg viewBox="0 0 640 512"><path d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCreateGroup') ?></div>
                        <div class="flex_over_acc scroll">
                            <form id="add_group_ms">
                                <div class="input-container">
                                    <div class="input-form">
                                        <div class="input_text">
                                            <svg viewBox="0 0 576 512"><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V428.7c-2.7 1.1-5.4 2-8.2 2.7l-60.1 15c-3 .7-6 1.2-9 1.4c-.9 .1-1.8 .2-2.7 .2H240c-6.1 0-11.6-3.4-14.3-8.8l-8.8-17.7c-1.7-3.4-5.1-5.5-8.8-5.5s-7.2 2.1-8.8 5.5l-8.8 17.7c-2.9 5.9-9.2 9.4-15.7 8.8s-12.1-5.1-13.9-11.3L144 381l-9.8 32.8c-6.1 20.3-24.8 34.2-46 34.2H80c-8.8 0-16-7.2-16-16s7.2-16 16-16h8.2c7.1 0 13.3-4.6 15.3-11.4l14.9-49.5c3.4-11.3 13.8-19.1 25.6-19.1s22.2 7.8 25.6 19.1l11.6 38.6c7.4-6.2 16.8-9.7 26.8-9.7c15.9 0 30.4 9 37.5 23.2l4.4 8.8h8.9c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7L384 203.6V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM549.8 139.7c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM311.9 321c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L512.1 262.7l-71-71L311.9 321z"/></svg>
                                            <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASName') ?>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASNull') ?>" data-tippy-placement="right" style="width: 42px;">
                                            <svg viewBox="0 0 512 512">
                                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                            </svg>
                                        </span>
                                        <input type="text" name="name_group" placeholder="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASNameGr') ?>" style="margin-left: 42px;" required>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <div class="input-form">
                                        <div class="input_text">
                                            <svg viewBox="0 0 448 512"><path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"/></svg>
                                            <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASFlagsGr') ?>                                  
                                        </div>
                                    </div>
                                    <div class="input_radio_buttons">
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_z" value="z" id="flag_z">
                                            <label for="flag_z" class="radio__label">Z - ROOT</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_a" value="a" id="flag_a">
                                            <label for="flag_a" class="radio__label">A - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASSlot') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_b" value="b" id="flag_b">
                                            <label for="flag_b" class="radio__label">B - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdmin') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_c" value="c" id="flag_c">
                                            <label for="flag_c" class="radio__label">C - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASKick') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_d" value="d" id="flag_d">
                                            <label for="flag_d" class="radio__label">D - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASBan') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_e" value="e" id="flag_e">
                                            <label for="flag_e" class="radio__label">E - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASUnban') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_f" value="f" id="flag_f">
                                            <label for="flag_f" class="radio__label">F - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASSlay') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_g" value="g" id="flag_g">
                                            <label for="flag_g" class="radio__label">G - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASMap') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_h" value="h" id="flag_h">
                                            <label for="flag_h" class="radio__label">H - Cvars</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_i" value="i" id="flag_i">
                                            <label for="flag_i" class="radio__label">I - Config</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_j" value="j" id="flag_j">
                                            <label for="flag_j" class="radio__label">J - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASMute') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_k" value="k" id="flag_k">
                                            <label for="flag_k" class="radio__label">K - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASVoting') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_l" value="l" id="flag_l">
                                            <label for="flag_l" class="radio__label">L - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASPW') ?></label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_m" value="m" id="flag_m">
                                            <label for="flag_m" class="radio__label">M - Rcon</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_n" value="n" id="flag_n">
                                            <label for="flag_n" class="radio__label">N - Cheats</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_o" value="o" id="flag_o">
                                            <label for="flag_o" class="radio__label">O - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 1</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_p" value="p" id="flag_p">
                                            <label for="flag_p" class="radio__label">P - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 2</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_m" value="q" id="flag_q">
                                            <label for="flag_q" class="radio__label">Q - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 3</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_r" value="r" id="flag_r">
                                            <label for="flag_r" class="radio__label">R - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 4</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_s" value="s" id="flag_s">
                                            <label for="flag_s" class="radio__label">S - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 5</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_t" value="t" id="flag_t">
                                            <label for="flag_t" class="radio__label">T - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 6</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_u" value="u" id="flag_u">
                                            <label for="flag_u" class="radio__label">U - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 7</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_v" value="v" id="flag_v">
                                            <label for="flag_v" class="radio__label">V - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 8</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_w" value="w" id="flag_w">
                                            <label for="flag_w" class="radio__label">W - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 9</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_x" value="x" id="flag_x">
                                            <label for="flag_x" class="radio__label">X - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 10</label>
                                        </div>
                                        <div class="radio">
                                            <input class="radio__input" type="checkbox" name="flag_y" value="y" id="flag_y">
                                            <label for="flag_y" class="radio__label">Y - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCFlagDop') ?> 11</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <div class="input-form">
                                        <div class="input_text">
                                        <svg viewBox="0 0 512 512"><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"/></svg>
                                            <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASImmGr') ?>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_AS4islo') ?>" data-tippy-placement="right" style="width: 42px;">
                                            <svg viewBox="0 0 512 512">
                                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                            </svg>
                                        </span>
                                        <input type="number" min="1" max="100" name="immunity_group" placeholder="1-100" style="margin-left: 42px;">
                                    </div>
                                </div>
                            </div>
                            <input class="btn w100 btn5px" type="submit" value="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCreateGroup') ?>">
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($MiniSystem->GetSettings['time_choice'] == 1) : ?>
                <div class="grid_control">
                    <div class="card">
                        <div class="head_lists"><svg viewBox="0 0 576 512"><path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASListTtime') ?></div>
                        <div class="info_card_table_head_settings_time">
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASName') ?></span>
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASTimeNakaz') ?></span>
                            <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAction') ?></span>
                        </div>
                        <div class="flex_over_porno scroll">
                            <?php foreach ($AdminSystemInfoReadyTime as $time) : ?>
                                <div class="card_lists_settings_time">
                                    <span class="info_card_table_head_item"><?= $time['name_time'] ?></span>
                                    <span class="info_card_table_head_item"><?= $time['duration'] ?></span>
                                    <form method="post">
                                        <input type="hidden" name="id_time_del" value="<?= $time['id'] ?>">
                                        <button class="btn_del" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASDelZag') ?>" data-tippy-placement="top"><svg viewBox="0 0 448 512"><path d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM143 272.1L190.1 319.1L143 367C133.7 376.4 133.7 391.6 143 400.1C152.4 410.3 167.6 410.3 176.1 400.1L223.1 353.9L271 400.1C280.4 410.3 295.6 410.3 304.1 400.1C314.3 391.6 314.3 376.4 304.1 367L257.9 319.1L304.1 272.1C314.3 263.6 314.3 248.4 304.1 239C295.6 229.7 280.4 229.7 271 239L223.1 286.1L176.1 239C167.6 229.7 152.4 229.7 143 239C133.7 248.4 133.7 263.6 143 272.1V272.1z"></path></svg></button>
                                    </form>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card">
                    <div class="head_lists"><svg viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddNakaz') ?></div>
                        <div class="flex_over_porno scroll">
                            <form id="add_time_ms">
                                <div class="input-container">
                                    <div class="input-form">
                                        <div class="input_text">
                                            <svg viewBox="0 0 576 512"><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V428.7c-2.7 1.1-5.4 2-8.2 2.7l-60.1 15c-3 .7-6 1.2-9 1.4c-.9 .1-1.8 .2-2.7 .2H240c-6.1 0-11.6-3.4-14.3-8.8l-8.8-17.7c-1.7-3.4-5.1-5.5-8.8-5.5s-7.2 2.1-8.8 5.5l-8.8 17.7c-2.9 5.9-9.2 9.4-15.7 8.8s-12.1-5.1-13.9-11.3L144 381l-9.8 32.8c-6.1 20.3-24.8 34.2-46 34.2H80c-8.8 0-16-7.2-16-16s7.2-16 16-16h8.2c7.1 0 13.3-4.6 15.3-11.4l14.9-49.5c3.4-11.3 13.8-19.1 25.6-19.1s22.2 7.8 25.6 19.1l11.6 38.6c7.4-6.2 16.8-9.7 26.8-9.7c15.9 0 30.4 9 37.5 23.2l4.4 8.8h8.9c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7L384 203.6V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM549.8 139.7c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM311.9 321c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L512.1 262.7l-71-71L311.9 321z"/></svg>
                                            <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASNameNakazTime') ?>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASPon') ?>" data-tippy-placement="right" style="width: 42px;">
                                            <svg viewBox="0 0 512 512">
                                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                            </svg>
                                        </span>
                                        <input type="text" name="name_time" placeholder="4 <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_AScas') ?>" style="margin-left: 42px;" required>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <div class="input-form">
                                        <div class="input_text">
                                            <svg viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                            <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASTimeNakaz') ?>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASSecTime') ?>" data-tippy-placement="right" style="width: 42px;">
                                            <svg viewBox="0 0 512 512">
                                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                            </svg>
                                        </span>
                                        <input type="number" name="duration" placeholder="14400" style="margin-left: 42px;">
                                    </div>
                                </div>
                            </div>
                            <input class="btn w100 btn5px" type="submit" value="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddNakaz') ?>">
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>