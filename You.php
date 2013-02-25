<?php
/** \file
* \brief Contains setup code for the You extension.
*/

/**
 * You
 *
 * Copyright (C) Ryan Finnie
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/You/You.php" );
EOT;
	exit( 1 );
}

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'You',
	'author' => 'Ryan Finnie',
	'url' => 'https://github.com/rfinnie/mediawiki-you',
	'descriptionmsg' => 'you-desc',
	'version' => '1.0',
);

$dir = dirname( __FILE__ ) . '/';

# Define Special page
$wgAutoloadClasses['SpecialYou'] = $dir . 'SpecialYou.php';
$wgSpecialPages['You'] = 'SpecialYou';
$wgSpecialPageGroups['You'] = 'other';

# Define internationalizations
$wgExtensionMessagesFiles['You'] = $dir . 'You.i18n.php';
$wgExtensionMessagesFiles['YouAlias'] = $dir . 'You.alias.php';
