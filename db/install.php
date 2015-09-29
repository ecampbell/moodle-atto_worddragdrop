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
 * TinyMCE text editor Microsoft Word file import plugin install script.
 *
 * @package   tinymce_wordimport
 * @copyright 2015 Eoin Campbell
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_tinymce_wordimport_install() {
    $toolbar = get_config('editor_tinymce', 'toolbar');
    $found = false;
    if (strpos($toolbar, 'pasteword')) {
        $toolbar = str_replace('pasteword', 'pasteword,wordimport', $toolbar);
        $found = true;
    }
    else if (strpos($toolbar, ',image')) {
        // Otherwise put it in the other group.
        $toolbar = str_replace(',image', ',image,wordimport', $toolbar);
        $found = true;
    }

    // Update config variable if we managed to insert the icon.
    if ($found) {
        set_config('toolbar', $toolbar, 'editor_tinymce');
    }
}