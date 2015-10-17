<?php

/**
 * The home manager controller for sendex.
 *
 */
class sendexHomeManagerController extends sendexMainController {
	/* @var sendex $sendex */
	public $sendex;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('sendex');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->sendex->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->sendex->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->sendex->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "sendex-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->sendex->config['templatesPath'] . 'home.tpl';
	}
}