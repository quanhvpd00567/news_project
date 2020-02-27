/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'vi';
	config.uiColor = '#AADC6E';
    config.removeDialogTabs = 'link:target;link:advanced;image:Link;image:advanced';
    config.resize_enabled = false;

    config.resize_maxHeight = '300';
        config.resize_maxWidth = '948';
        config.resize_minHeight = '200';
        config.resize_minWidth= '948';
};
