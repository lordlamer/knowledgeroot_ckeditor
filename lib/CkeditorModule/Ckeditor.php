<?php

/**
 * ckeditor class
 */
class CkeditorModule_Ckeditor implements Knowledgeroot_Rte_Interface {
	/**
	 * show editor with content
	 *
	 * @param string $content
	 */
	public function show($content) {
	    $res = "";
	    $res .= '<script src="./module/ckeditor/ckeditor/ckeditor.js"></script>';
	    $res .= '<textarea name="content">'.htmlspecialchars($content).'</textarea>';
	    $res .= "<script>CKEDITOR.replace('content');</script>";

	    return $res;
	}
}