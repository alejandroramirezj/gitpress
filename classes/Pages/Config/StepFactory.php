<?php
namespace Gitpress\Pages\Config;

class StepFactory {

	/**
	 * @return Step
	 */
	public static function get_page() {
		if ( $_GET['step'] === 'clone-step') {
			return new CloneRepositoryStep();
		}
		return new RepositoryCheckStep();
	}


}