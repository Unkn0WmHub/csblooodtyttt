<?php if (isset($_SESSION['steamid64'])) { if (isset($_SESSION['user_admin'])) { ?>
<div class="row">
    <div class="col-md-12">
        <div class="card_header">
            <div class="svg_text_header">
                <div class="svg_header">
                    <svg viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path></svg>
                </div>
                <div class="header_text">
                    <div class="flex_header_top"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdmin') ?></div>
                    <div class="flex_header_bottom"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdminDesc') ?></div>
                </div>
            </div>
        </div>
        <div class="grid_control">
            <div class="card">
                <div class="head_lists"><svg viewBox="0 0 576 512"><path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASListAdmin') ?></div>
                <div class="info_card_table_head_admin">
                    <span class="info_card_table_head_item"><svg viewBox="0 0 512 512"><path d="M105.4 67.08C118.2 44.81 141.1 31.08 167.7 31.08H344.3C370 31.08 393.8 44.81 406.6 67.08L494.9 219.1C507.8 242.3 507.8 269.7 494.9 291.1L406.6 444.9C393.8 467.2 370 480.9 344.3 480.9H167.7C141.1 480.9 118.2 467.2 105.4 444.9L17.07 291.1C4.206 269.7 4.206 242.3 17.07 219.1L105.4 67.08zM158.3 279.8L107.1 335.9L153.9 416.9C156.7 421.9 161.1 424.9 167.7 424.9H344.3C350 424.9 355.3 421.9 358.1 416.9L413.4 321.2L340.7 233.8C336.2 228.3 329.4 225.1 322.3 225.1C315.2 225.1 308.4 228.3 303.8 233.8L232.2 320L193.3 279.4C188.7 274.6 182.4 271.9 175.7 272C169.1 272.1 162.8 274.9 158.3 279.8V279.8zM192 199.1C214.1 199.1 232 182.1 232 159.1C232 137.9 214.1 119.1 192 119.1C169.9 119.1 152 137.9 152 159.1C152 182.1 169.9 199.1 192 199.1z"></path></svg></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdmin') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdminAccess') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASExpires') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASComment') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAction') ?></span>
                </div>
                <div class="flex_over_adm scroll">
                    <?php foreach ($AdminSystemInfoAdmin as $admins) : ?>
                        <div class="card_lists_admin">
                            <?php if (!empty($General->arr_general['avatars'])) : ?>
                                <span class="info_card_table_head_item"><img class="admin_avatar" id="<?php $General->arr_general['avatars'] === 1 && print con_steam32to64($admins['steamid']) ?>" <?= $sz_i < '20' ? 'src' : 'data-src' ?>="<?= $General->getAvatar(con_steam32to64($admins['steamid']), 2) ?>" title="" alt=""></span>
                            <?php endif; ?>
                            <span class="info_card_table_head_item"><?= action_text_clear(action_text_trim($admins['name'], 10)) ?></span>
                            <span class="info_card_table_head_item"><?= $admins['flags'] ?>:<?= $admins['immunity'] ?></span>
                            <span class="info_card_table_head_item"><?php echo empty($admins['end']) ? $Translate->get_translate_phrase('_Forever') : $Modules->action_time_exchange($admins['end']) ?></span>
                            <span class="info_card_table_head_item"><?= action_text_clear(action_text_trim($admins['comment'], 10)) ?></span>
                            <div class="flex_del">
                                <a href="<?= $General->arr_general['site'] ?>profiles/<?php print $General->arr_general['only_steam_64'] === 1 ? con_steam32to64($admins['steamid']) : $admins['steamid'] ?>" target="_blank" class="btn_dev" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASProf') ?>" data-tippy-placement="top">
                                    <svg viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                </a>
                                <form method="post">
                                    <input type="hidden" name="admin_steamid" value="<?= $admins['steamid'] ?>">
                                    <button class="btn_del" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdminDel') ?>" data-tippy-placement="top"><svg viewBox="0 0 448 512"><path d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM143 272.1L190.1 319.1L143 367C133.7 376.4 133.7 391.6 143 400.1C152.4 410.3 167.6 410.3 176.1 400.1L223.1 353.9L271 400.1C280.4 410.3 295.6 410.3 304.1 400.1C314.3 391.6 314.3 376.4 304.1 367L257.9 319.1L304.1 272.1C314.3 263.6 314.3 248.4 304.1 239C295.6 229.7 280.4 229.7 271 239L223.1 286.1L176.1 239C167.6 229.7 152.4 229.7 143 239C133.7 248.4 133.7 263.6 143 272.1V272.1z"></path></svg></button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card">
            <div class="head_lists"><svg viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdmin') ?></div>
                <div class="flex_over scroll">
                    <form id="add_admin_as">
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
                                <input type="text" name="steam_admin" placeholder="STEAM_1:1:390... / 7656119803... / [U:1:1234234] / https://steamcommunity.com/profiles/..." style="margin-left: 42px;" required>
                            </div>
                        </div>
                        <?php if($MiniSystem->GetSettings['group_choice'] == 1) : ?>
                            <div class="input-container">
                                <div class="input-form">
                                    <div class="input_text">
                                        <svg viewBox="0 0 640 512"><path d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z"/></svg>
                                        <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdmDroupssss') ?>                
                                    </div>
                                </div>
                                <div class="input_radio_buttons">
                            <?php foreach ($AdminSystemInfoGroups as $groups) : ?>
                                    <div class="radio">
                                        <input class="radio__input" type="radio" name="group_choice_name" id="group_choice<?= $groups['id'] ?>" value="<?= $groups['id'] ?>">
                                        <label for="group_choice<?= $groups['id'] ?>" class="radio__label"><?= $groups['name_group'] ?></label>
                                    </div>
                            <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($MiniSystem->GetSettings['group_choice'] == 0) : ?>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 448 512"><path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASFlags') ?>                                  
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
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASImmun') ?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_AS4islo') ?>" data-tippy-placement="right" style="width: 42px;">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                    </svg>
                                </span>
                                <input type="number" min="1" max="100" name="immunity_admin" placeholder="1-100" style="margin-left: 42px;" required>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASPrivTime') ?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_AS00') ?>" data-tippy-placement="right" style="width: 42px;">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                    </svg>
                                </span>
                                <input type="number" name="end_admin" placeholder="0" style="margin-left: 42px;">
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 512 512"><path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASComment') ?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCommDop') ?>" data-tippy-placement="right" style="width: 42px;">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                    </svg>
                                </span>
                                <input type="text" name="comm_admin" placeholder="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCommDop2') ?>" style="margin-left: 42px;">
                            </div>
                        </div>
                    </div>
                    <input class="btn w100 btn5px" type="submit" value="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdmin') ?>">
                </form>
            </div>
        </div>
        <?php if ($page_max_admin != 1) : ?>
            <div class="pagination">
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num != 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_TotheBegin') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M77.25 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L77.25 256zM269.3 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C399.6 476.9 407.8 480 416 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L269.3 256z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num - 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Back') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <a href="<?= set_url_section(get_url(2), 'num', $page_num) ?>" class="button_pagination current active"><?= $page_num ?></a>
                <?php for ($v = $page_num; $v < min($page_num + 3, $page_max_admin); $v++) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $v + 1) ?>" class="button_pagination current "><?= $v + 1 ?></a>
                <?php } ?>
                <?php if ($page_num != $page_max_admin) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num + 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Forward') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num = $page_max_admin) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_max_admin) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_IntheEnd') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M246.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C15.63 476.9 23.81 480 32 480s16.38-3.125 22.62-9.375l192-192C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375l192-192C451.1 266.1 451.1 245.9 438.6 233.4z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php } else { foreach ($AdminSystemInfoAccess as $admin) { if ($admin['steamid_access'] == $_SESSION['steamid64'] && $admin['add_admin_access'] == 1) { ?>
    <div class="row">
    <div class="col-md-12">
        <div class="card_header">
            <div class="svg_text_header">
                <div class="svg_header">
                    <svg viewBox="0 0 512 512"><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path></svg>
                </div>
                <div class="header_text">
                    <div class="flex_header_top"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdmin') ?></div>
                    <div class="flex_header_bottom"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdminDesc') ?></div>
                </div>
            </div>
        </div>
        <div class="grid_control">
            <div class="card">
                <div class="head_lists"><svg viewBox="0 0 576 512"><path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASListAdmin') ?></div>
                <div class="info_card_table_head_admin">
                    <span class="info_card_table_head_item"><svg viewBox="0 0 512 512"><path d="M105.4 67.08C118.2 44.81 141.1 31.08 167.7 31.08H344.3C370 31.08 393.8 44.81 406.6 67.08L494.9 219.1C507.8 242.3 507.8 269.7 494.9 291.1L406.6 444.9C393.8 467.2 370 480.9 344.3 480.9H167.7C141.1 480.9 118.2 467.2 105.4 444.9L17.07 291.1C4.206 269.7 4.206 242.3 17.07 219.1L105.4 67.08zM158.3 279.8L107.1 335.9L153.9 416.9C156.7 421.9 161.1 424.9 167.7 424.9H344.3C350 424.9 355.3 421.9 358.1 416.9L413.4 321.2L340.7 233.8C336.2 228.3 329.4 225.1 322.3 225.1C315.2 225.1 308.4 228.3 303.8 233.8L232.2 320L193.3 279.4C188.7 274.6 182.4 271.9 175.7 272C169.1 272.1 162.8 274.9 158.3 279.8V279.8zM192 199.1C214.1 199.1 232 182.1 232 159.1C232 137.9 214.1 119.1 192 119.1C169.9 119.1 152 137.9 152 159.1C152 182.1 169.9 199.1 192 199.1z"></path></svg></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdmin') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdminAccess') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASExpires') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASComment') ?></span>
                    <span class="info_card_table_head_item"><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAction') ?></span>
                </div>
                <div class="flex_over_adm scroll">
                    <?php foreach ($AdminSystemInfoAdmin as $admins) : ?>
                        <div class="card_lists_admin">
                            <?php if (!empty($General->arr_general['avatars'])) : ?>
                                <span class="info_card_table_head_item">
                                    <img class="admin_avatar" id="<?php $General->arr_general['avatars'] === 1 && print con_steam32to64($admins['steamid']) ?>" <?= $sz_i < '20' ? 'src' : 'data-src' ?>="<?= $General->getAvatar(con_steam32to64($admins['steamid']), 2) ?>" title="" alt="">
                                </span>
                            <?php endif; ?>
                            <span class="info_card_table_head_item"><?= action_text_clear(action_text_trim($admins['name'], 10)) ?></span>
                            <span class="info_card_table_head_item"><?= $admins['flags'] ?>:<?= $admins['immunity'] ?></span>
                            <span class="info_card_table_head_item"><?php echo empty($admins['end']) ? $Translate->get_translate_phrase('_Forever') : $Modules->action_time_exchange($admins['end']) ?></span>
                            <span class="info_card_table_head_item"><?= action_text_clear(action_text_trim($admins['comment'], 10)) ?></span>
                            <div class="flex_del">
                                <a href="<?= $General->arr_general['site'] ?>profiles/<?php print $General->arr_general['only_steam_64'] === 1 ? con_steam32to64($admins['steamid']) : $admins['steamid'] ?>" target="_blank" class="btn_dev" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASProf') ?>" data-tippy-placement="top">
                                    <svg viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                </a>
                                <?php if ($admins['flags'] !== 'z') : ?>
                                    <form method="post">
                                        <input type="hidden" name="admin_steamid" value="<?= $admins['steamid'] ?>">
                                        <button class="btn_del" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdminDel') ?>" data-tippy-placement="top">
                                            <svg viewBox="0 0 448 512">
                                                <path d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM143 272.1L190.1 319.1L143 367C133.7 376.4 133.7 391.6 143 400.1C152.4 410.3 167.6 410.3 176.1 400.1L223.1 353.9L271 400.1C280.4 410.3 295.6 410.3 304.1 400.1C314.3 391.6 314.3 376.4 304.1 367L257.9 319.1L304.1 272.1C314.3 263.6 314.3 248.4 304.1 239C295.6 229.7 280.4 229.7 271 239L223.1 286.1L176.1 239C167.6 229.7 152.4 229.7 143 239C133.7 248.4 133.7 263.6 143 272.1V272.1z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="card">
            <div class="head_lists"><svg viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg><?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdmin') ?></div>
                <div class="flex_over scroll">
                    <form id="add_admin_as">
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
                                <input type="text" name="steam_admin" placeholder="STEAM_1:1:390... / 7656119803... / [U:1:1234234] / https://steamcommunity.com/profiles/..." style="margin-left: 42px;" required>
                            </div>
                        </div>
                        <?php if($MiniSystem->GetSettings['group_choice'] == 1) : ?>
                            <div class="input-container">
                                <div class="input-form">
                                    <div class="input_text">
                                        <svg viewBox="0 0 640 512"><path d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z"/></svg>
                                        <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAdmDroupssss') ?>                
                                    </div>
                                </div>
                                <div class="input_radio_buttons">
                            <?php foreach ($AdminSystemInfoGroups as $groups) : ?>
                                    <div class="radio">
                                        <input class="radio__input" type="radio" name="group_choice_name" id="group_choice<?= $groups['id'] ?>" value="<?= $groups['id'] ?>">
                                        <label for="group_choice<?= $groups['id'] ?>" class="radio__label"><?= $groups['name_group'] ?></label>
                                    </div>
                            <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($MiniSystem->GetSettings['group_choice'] == 0) : ?>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 448 512"><path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASFlags') ?>                                  
                                </div>
                            </div>
                            <div class="input_radio_buttons">
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
                                    <input class="radio__input" type="checkbox" name="flag_j" value="j" id="flag_j">
                                    <label for="flag_j" class="radio__label">J - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASMute') ?></label>
                                </div>
                                <div class="radio">
                                    <input class="radio__input" type="checkbox" name="flag_k" value="k" id="flag_k">
                                    <label for="flag_k" class="radio__label">K - <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASVoting') ?></label>
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
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                <svg viewBox="0 0 512 512"><path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASImmun') ?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_AS4islo') ?>" data-tippy-placement="right" style="width: 42px;">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                    </svg>
                                </span>
                                <input type="number" min="1" max="100" name="immunity_admin" placeholder="1-100" style="margin-left: 42px;" required>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASPrivTime') ?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_AS00') ?>" data-tippy-placement="right" style="width: 42px;">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                    </svg>
                                </span>
                                <input type="number" name="end_admin" placeholder="0" style="margin-left: 42px;">
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-form">
                                <div class="input_text">
                                    <svg viewBox="0 0 512 512"><path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"/></svg>
                                    <?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASComment') ?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <span data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCommDop') ?>" data-tippy-placement="right" style="width: 42px;">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
                                    </svg>
                                </span>
                                <input type="text" name="comm_admin" placeholder="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASCommDop2') ?>" style="margin-left: 42px;">
                            </div>
                        </div>
                    </div>
                    <input class="btn w100 btn5px" type="submit" value="<?= $Translate->get_translate_module_phrase('module_page_minisystem', '_ASAddAdmin') ?>">
                </form>
            </div>
        </div>
        <?php if ($page_max_admin != 1) : ?>
            <div class="pagination">
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num != 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_TotheBegin') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M77.25 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L77.25 256zM269.3 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C399.6 476.9 407.8 480 416 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L269.3 256z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num - 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Back') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <a href="<?= set_url_section(get_url(2), 'num', $page_num) ?>" class="button_pagination current active"><?= $page_num ?></a>
                <?php for ($v = $page_num; $v < min($page_num + 3, $page_max_admin); $v++) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $v + 1) ?>" class="button_pagination current "><?= $v + 1 ?></a>
                <?php } ?>
                <?php if ($page_num != $page_max_admin) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num + 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Forward') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num = $page_max_admin) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_max_admin) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_IntheEnd') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M246.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C15.63 476.9 23.81 480 32 480s16.38-3.125 22.62-9.375l192-192C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375l192-192C451.1 266.1 451.1 245.9 438.6 233.4z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php } } } } ?>