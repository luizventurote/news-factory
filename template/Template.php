<?php

Class Template {

	public $html_template;
	public $process_page 	= "process.php";
	public $img_page 		= array();
	public $img_url 		= URL_IMG;

	function __construct($images_template = null) {

		// Prepara o array de imagens
		if($images_template != null) {
			foreach($images_template as $key) {
				foreach($key as $value_key => $value) {
					$this->img_page[$value_key] = $value;
				}
			}
		} 
		
		$this->html_template = $this->getHeader().$this->getContent().$this->getFooter();

		$string = trim(preg_replace('/\s\s+/', ' ', $this->html_template));

		$this->html_template = trim($string);

	} 

	public function getTemplate() {

		return $this->html_template;

	}

	private function getHeader() {}

	private function getFooter() {}

	public function getContent() {}

	public function getStyle() {

		$str = '
			<style type="text/css">

				table {
					border-collapse: collapse;
			        border-spacing: 0;
					width:100%;
					height: auto;
					margin:0px;padding:0px;
				}

				td {
					vertical-align:middle;
					text-align:left;
					padding:0px;
				}

				img {
					border: 0;
				}

				.table-main {
					margin: auto;
					width: 570px;
				}

				.table-inside tr td {
					text-align: center;
					padding-bottom: 14px;
				}

				.table-inside tr td:first-child {
					text-align: left;
				}

				.table-inside tr td:last-child {
					text-align: right;
				}

				.text-min {
					font-size: 0.7em;
				}

			</style>
		';

		return $str;

	}

	private function getForm() {}

	public function getImage($image_key) {

		if( !empty($this->img_page)) {

			if (array_key_exists($image_key, $this->img_page)) {
			    return $this->img_page[$image_key];
			} else {
				return null;
			}
			
		} else {
			return null;
		}
		
	}

}