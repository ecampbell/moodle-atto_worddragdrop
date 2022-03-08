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
 * Strings for Word file import plugin.
 *
 * @package   tinymce_wordimport
 * @copyright 2022 Eoin Campbell
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Import Word file';
$string['pluginname2'] = 'Microsoft Word File Import (TinyMCE)'.
$string['privacy:metadata']      = 'The Microsoft Word file import plugin for TinyMCE does not store personal data.';
$string['uploading'] = 'Uploading, please wait...';
$string['wordimport:wordfile'] = 'Find or upload a Word file...';

// Strings used in JavaScript.
$string['transformationfailed'] = 'XSLT transformation failed (<b>{$a}</b>)';
$string['fileuploadfailed'] = 'File upload failed';
$string['fileconversionfailed'] = 'File conversion failed';

// Strings used in settings.
$string['settings'] = 'Microsoft Word File Import (TinyMCE) settings';
$string['heading1stylelevel'] = 'Heading element level for Heading 1 style';
$string['heading1stylelevel_desc'] = 'HTML heading element level to which the Word "Heading 1" style should be mapped';

$string['wordimport:wordimport_desc'] = 'Import a Word file';
$string['wordimport:import'] = 'Import';
$string['wordimport_dlg:browsewordfile'] = 'Find or upload a Word file';
$string['wordimport_dlg:dialog_title'] = 'Import Word file';
$string['wordimport_dlg:src'] = 'Word file';
