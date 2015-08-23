<?php

/**
 * A ModelAdmin interface that allows management of {@link SentEmail} records
 * as well as {@link PermamailTemplate} objects
 *
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 * @author Mark Christian Lopez <xmarkclx@gmail.com>
 * 	- Added CSV import
 * @package  silverstripe-permamail
 */
class PermamailAdmin extends ModelAdmin {

	private static $menu_title = 'Email';

	private static $managed_models = array (
		'SentEmail' => array (
			'title' => 'Outbound Emails'
		),
		'PermamailTemplate' => array (
			'title' => 'Email Templates'
		)
	);
	private static $model_importers = array(
		'PermamailTemplate' => 'CsvBulkLoader',
	);

	private static $url_segment = 'email';
}