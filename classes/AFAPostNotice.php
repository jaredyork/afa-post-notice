<?php

class AFA_Post_Notice {

	public function __construct($editor) {
		$editor->initialize();
	}

	public function initialize() {
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue_styles') );
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue_scripts') );
	}

	public function enqueue_styles() {
		wp_enqueue_style(
			'afa-post-notice-admin',
			plugins_url( 'afa-post-notice/assets/css/admin.css' ),
			array(),
			'0.1.0'
		);
	}

	public function enqueue_scripts() {
		wp_enqueue_script(
			'afa-post-notice-admin',
			plugins_url( 'afa-post-notice/assets/js/admin.js' ),
			array('jquery'),
			'0.1.0'
		);
	}
}