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
 * TinyMCE Word file import plugin version details.
 *
 * @package   tinymce_wordimport
 * @copyright 2022 Eoin Campbell
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// The current plugin version (Date: YYYYMMDDXX).
$plugin->version   = 2022030914;
// Required Moodle version.
$plugin->requires  = 2020060900;
// Full name of the plugin (used for diagnostics).
$plugin->component = 'tinymce_wordimport';
$plugin->maturity  = MATURITY_ALPHA;
$plugin->release   = '0.1.4 (Build 20220309)'; // Human readable version information.
$plugin->dependencies = array('booktool_wordimport' => 2021083100);
