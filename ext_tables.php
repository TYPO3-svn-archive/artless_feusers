<?php

if (!defined ('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_artlessfeusers_owners' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_feusers/locallang_db.xml:pages.tx_artlessfeusers_owners',
		'config' => array (
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'fe_users',
			'size' => 10,
			'minitems' => 0,
			'maxitems' => 100,
			'wizards' => array(
				'suggest' => array(
					'type' => 'suggest',
				),
			),
		)
	),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages', '--div--;Artless FE Users, tx_artlessfeusers_owners;;;;1-1-1');


t3lib_extMgm::addStaticFile($_EXTKEY,'static/artless_fe_users/', 'Artless FE Users');

?>