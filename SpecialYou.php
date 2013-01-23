<?php
class SpecialYou extends SpecialPage {
	function __construct() {
		parent::__construct( 'You' );
	}

	function execute( $par ) {
		global $wgExtensionAssetsPath;

		$request = $this->getRequest();
		$output = $this->getOutput();

		$this->setHeaders();

		# Nothing to see here, not an easter egg
		if ( $request->getText( 'dot' ) == 'jpg' ) {
			$output->addHTML( Html::rawElement( 'p',
				array(
					'style' => 'text-align: center;',
				),
				Html::element( 'img', array(
					'src' => $wgExtensionAssetsPath . '/You/you.jpg',
				) )
			) );
			return true;
		}

		$output->addHTML( Html::element( 'p',
			array(
				'style' => 'font-size: 500%; font-weight: bold; text-align: center;',
			),
			wfMessage( 'you-desc' )
		) );

	}

}
