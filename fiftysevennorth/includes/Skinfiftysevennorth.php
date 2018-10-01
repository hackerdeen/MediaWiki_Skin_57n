<?php
/**
 * SkinTemplate class for the 57n skin
 *
 * @ingroup Skins
 */
class Skinfiftysevennorth extends SkinTemplate {
	public $skinname = 'fiftysevennorth';
	public $stylename = 'fiftysevennorth';
	public $template = 'fiftysevennorthTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.fiftysevennorth'
		] );
		$out->addModules( [
			'skins.fiftysevennorth.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
