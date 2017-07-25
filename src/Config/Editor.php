<?php
/* Copyright (c) 2016 Stefan Hecken <stefan.hecken@concepts-and-training.de>, Extended GPL, see LICENSE */

namespace CaT\ilse\Config;

/**
 * Configuration for TinyMCE.
 *
 * @author Stefan Hecken <stefan.hecken@concepts-and-training.de>
 *
 * @method int enableTinymce()
 * @method \\CaT\\ilse\\Config\\Category repoPageEditor()
 */
class Editor extends Base {
	/**
	 * @inheritdocs
	 */
	public static function fields() {
		return array
			( "enable_tinymce" => array("int", true)
			, "repo_page_editor" =>array("\\CaT\\ilse\\Config\\RepoPageEditor", true)
			);
	}
}