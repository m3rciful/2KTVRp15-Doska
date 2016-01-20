<?php
class RenderTemplate
{
	function render_template($path, array $args)
	{
		extract($args);
		ob_start();
		require $path;
		$html = ob_get_clean();
		return $html;
	}
}
?>