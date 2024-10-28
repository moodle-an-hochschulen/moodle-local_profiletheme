<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local plugin "Profile field based theme delivery" - Main class for matching up users with themes
 *
 * @package   local_profiletheme
 * @copyright 2016 Davo Smith, Synergy Learning UK on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_profiletheme;

use Exception;
use html_writer;
use theme_config;

/**
 * Class profiletheme
 * @package local_profiletheme
 * @copyright 2016 Davo Smith, Synergy Learning UK on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class profiletheme extends profilefields {
    /** @var string the database table to use */
    protected static $tablename = 'local_profiletheme';

    /**
     * Output the complete form for editing profile field mapping rules.
     * @return string
     */
    public function output_form() {
        $out = '';
        $out .= parent::output_form();
        return $out;
    }

    /**
     * Called after the user has logged in, to apply any mappings and set the session theme
     * @param \core\event\base|null $event
     */
    public static function set_theme_from_profile(?\core\event\base $event = null) {
        global $USER, $SESSION;

        if ($event && $event->userid != $USER->id) {
            return; // Only sets the theme for the current user.
        }

        if ($theme = self::get_mapped_value($USER->id)) {
            $SESSION->theme = $theme;
        }
    }

    /**
     * Called after the user has logged in as another user, to apply any mappings and set the session theme
     * @param \core\event\base|null $event
     */
    public static function set_theme_from_profile_loginas(?\core\event\base $event = null) {
        global $USER, $SESSION;

        if ($event && $event->relateduserid != $USER->id) {
            return; // Only sets the theme for the current user.
        }

        if ($theme = self::get_mapped_value($USER->id)) {
            $SESSION->theme = $theme;
        }
    }

    /**
     * Load a list of possible values that fields can be mapped onto.
     * @return string[] $value => $displayname
     */
    protected static function load_possible_values() {
        $themes = [];
        foreach (\core\component::get_plugin_list('theme') as $themename => $unused) {
            try {
                $theme = theme_config::load($themename);
            } catch (Exception $e) {
                continue; // Bad theme - skip it.
            }
            if ($themename !== $theme->name) {
                continue; // Broken theme - skip it.
            }
            if ($theme->hidefromselector) {
                continue; // Hidden theme - skip it.
            }

            $themes[$themename] = get_string('pluginname', 'theme_'.$themename);
        }
        return $themes;
    }
}
