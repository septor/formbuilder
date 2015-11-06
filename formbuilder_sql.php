CREATE TABLE forms (
	`form_id` int(10) unsigned NOT NULL auto_increment,
	`form_name` varchar(128) NOT NULL default '',
	`form_class` tinyint(3) unsigned NOT NULL default '0',
	`form_once` tinyint(1) unsigned NOT NULL default '0',
	`form_viewclass` tinyint(3) unsigned NOT NULL default '0',
	`form_editclass` tinyint(3) unsigned NOT NULL default '0',
	`form_mailto` varchar(255) NOT NULL default '',
	`form_forum` int(10) unsigned NOT NULL default '0',
	`form_save_results` tinyint(1) unsigned NOT NULL default '0',
	`form_user` text NOT NULL,
	`form_parms` text NOT NULL,
	`form_message` text NOT NULL,
	`form_submit_message` text NOT NULL,
	`form_lastfnum` int(10) unsigned NOT NULL default '0',
	PRIMARY KEY  (`form_id`)
) ENGINE=MyISAM;

CREATE TABLE form_results (
	`results_id` int(10) unsigned NOT NULL auto_increment,
	`results_datestamp` int(10) unsigned NOT NULL default '0',
	`results_form_id` int(10) unsigned NOT NULL default '0',
	`results_results` text,
	PRIMARY KEY  (`results_id`)
) ENGINE=MyISAM;
