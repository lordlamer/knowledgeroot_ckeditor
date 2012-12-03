<?php

/**
 * module bootstrap
 */
class CkeditorBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initCkeditor() {
	// init ckeditor
	$ckeditor = new CkeditorModule_Ckeditor();

	// save ckeditor as default editor
	Knowledgeroot_Registry::set('rte', $ckeditor);
    }
}
