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
 * Local plugin "Profile field based theme delivery" - Language pack
 *
 * @package   local_profiletheme
 * @copyright 2016 Davo Smith, Synergy Learning UK on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'On this tab, you can add a new rule mapping a custom user profile field\'s value to a theme that will be delivered to a user.';
$string['addrule'] = 'Add rule for custom user profile field ...';
$string['addrules'] = 'Add new rule';
$string['andnextrule'] = 'The next rule must also match, to be allocated this theme.';
$string['delete'] = 'Delete this rule';
$string['iffield'] = 'If {$a}';
$string['match_contains'] = 'Contains';
$string['match_defined'] = 'Is defined';
$string['match_exact'] = 'Matches';
$string['match_notcontains'] = 'Does not contain';
$string['match_notdefined'] = 'Is not defined';
$string['match_notexact'] = 'Does not match';
$string['matchtype'] = 'Match type';
$string['matchvalue'] = 'Match value';
$string['moveto'] = 'Move to position';
$string['nofields'] = 'No custom user profile fields have been defined.<br>You need to <a href="{$a->url}">define custom user profile fields</a> before you can add rules here.';
$string['pluginname'] = 'Profile field based theme delivery';
$string['selectvalue'] = 'the user will get theme';
$string['viewintro'] = 'On this tab, you define the rules mapping custom user profile field values to the theme that will be delivered to a user.<br>The defined rules are processed in the order that they are displayed - the first matching rule will be used.';
$string['viewrules'] = 'View / edit rules';
