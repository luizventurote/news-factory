<?php

Class Template {

	private $html_template;

	function __construct() { 
		$this->html_template = $this->getHeader().$this->getContent().$this->getFooter();
	} 

	public function getTemplate() {

		return $this->html_template;

	}

	private function getHeader() {

		$str = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml"><head>
				
				<title>Vide Bula - Unconventional Denin Deluxe</title>
				<meta content="text/html; charset=iso-8859-1" https-equiv="Content-Type" />
				
			</head>';

		return $str;
	}

	private function getFooter() {

		$str = $this->getStyle().'</body></html>';

		return $str;

	}

	public function getContent() {

		$str = '<h1>Teste</h1>';

		return $str;

	}

	public function getStyle() {

		$str = '<style type="text/css">
		
				* {
					padding: 0;
					margin: 0;
				}

				body {
					color: #000;
					font-family: "Helvetica", "Arial", sans-serif; 
					font-weight: normal; 
					line-height: 1.3;
				}

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

			</style>';

			$str;
	}

	public function saveHTML() {

		$doc = new DOMDocument();
		$doc->loadHTML($this->html_template);
		$doc->saveHTML();

		#Criar o arquivo
		$fp = fopen("teste.html", "w");
		$fw = fwrite($fp, $doc->saveHTML());

	}

}