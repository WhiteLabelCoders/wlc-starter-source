<?php
namespace FH\Views;

use FH\Core\Enqueue;

class Index {
    use Enqueue;


	/**
	 * Integrate with WordPress actions and filters hooks
	 */
	public function hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'global_assets' ) );
		add_action( 'template_redirect', array( $this, 'view_hooks' ) );
	}



	/**
	 * Enqueue global assets
	 */
	public function global_assets() {
		$this->enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap' );
		$this->enqueue_style( 'main', 'main.css' );
		$this->enqueue_script( 'main', 'main.js' );
		wp_localize_script(
			'main',
			'FH',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
			)
		);
	}


	/**
	 * Here you can add hooks only releted with current view.
	 */
	public function view_hooks() {
	}


}