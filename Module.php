<?php

/**
 * ckeditor module initialisation
 */
class CkeditorModule implements Knowledgeroot_Module_Interface {
	/**
	 * return ckeditor config path
	 */
	public function getConfigPath() {
		return __DIR__ . '/config/module.ini';
	}
}
