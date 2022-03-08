/**
 * Based on editor_plugin_src.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 */

(function() {
	tinymce.create('tinymce.plugins.WordImportPlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mceWordImport', function() {
				// Internal image object like a flash placeholder
				if (ed.dom.getAttrib(ed.selection.getNode(), 'class', '').indexOf('mceItem') != -1)
					return;

				ed.windowManager.open({
					file : url + '/wordimport.htm',
					width : 480 + parseInt(ed.getLang('wordimport.delta_width', 0)),
					height : 385 + parseInt(ed.getLang('wordimport.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			// Register buttons
			ed.addButton('wordimport', {
				title : 'wordimport.wordimport_desc',
				cmd : 'mceWordImport',
                image : url + '/img/wordimport.png'
			});
		},

		getInfo : function() {
			return {
				longname : 'Word import',
				author : 'Eoin Campbell, based on moodleimage by Moodle.com',
				authorurl : 'http://www.moodle2word.net',
                infourl : 'http://www.moodle2word.net',
                version : '1.0.0' // Version of wordimport plugin.
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('wordimport', tinymce.plugins.WordImportPlugin);
})();