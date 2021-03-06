<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => '',
	"database" => 'Example',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');

FulltextSearchable::enable();
SSViewer::set_theme('global');