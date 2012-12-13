<?php

/**
 * ckeditor class
 */
class Ckeditor extends Knowledgeroot_Rte_Abstract {
	/**
	 * show editor with content
	 *
	 * @param string $content
	 */
	public function show($content = null) {
	    if($content != null)
		$this->content = (string) $content;

	    $res = "";
	    $res .= '<script src="./module/ckeditor/ckeditor/ckeditor.js"></script>';
	    $res .= '<textarea name="' . $this->name . '">'.htmlspecialchars($this->content).'</textarea>';
	    $res .= "<script>CKEDITOR.replace('" . $this->name . "');</script>";

	    return $res;
	}
}