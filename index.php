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
 * Local plugin "Profile field based theme delivery" - Main entry point
 *
 * @package   local_profiletheme
 * @copyright 2016 Davo Smith, Synergy Learning UK on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use local_profiletheme\profiletheme;

require(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

global $PAGE, $CFG, $OUTPUT;

admin_externalpage_setup('local_profiletheme');

$title = get_string('pluginname', 'local_profiletheme');
$PAGE->set_title($title);
$PAGE->set_heading($title);

$manager = new profiletheme();
$manager->process_form();

echo $OUTPUT->header();
echo $manager->output_form();
echo $OUTPUT->footer();
