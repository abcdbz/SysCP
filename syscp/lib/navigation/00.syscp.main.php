<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Panel
 * @version    $Id$
 */

return array (
	'customer' => array (
		array (
			'url' => 'customer_index.php',
			'label' => $lng['menue']['main']['main'],
			'elements' => array (
				array (
					'label' => $lng['menue']['main']['username'],
				),
				array (
					'url' => 'customer_index.php?page=change_password',
					'label' => $lng['menue']['main']['changepassword'],
				),
				array (
					'url' => 'customer_index.php?page=change_language',
					'label' => $lng['menue']['main']['changelanguage'],
				),
				array (
					'url' => 'customer_index.php?action=logout',
					'label' => $lng['login']['logout'],
				),
			),
		),
		array (
			'url' => 'customer_email.php',
			'label' => $lng['menue']['email']['email'],
			'elements' => array (
				array (
					'url' => 'customer_email.php?page=emails',
					'label' => $lng['menue']['email']['emails'],
					'required_resources' => 'emails',
				),
				array (
					'url' => 'customer_email.php?page=emails&action=add',
					'label' => $lng['emails']['emails_add'],
					'required_resources' => 'emails',
				),
				array (
					'url' => 'customer_autoresponder.php',
					'label' => $lng['menue']['email']['autoresponder'],
					'required_resources' => 'emails',
					'show_element' => ( $settings['autoresponder']['autoresponder_active'] == true ),
				),
				array (
					'url' => $settings['panel']['webmail_url'],
					'new_window' => true,
					'label' => $lng['menue']['email']['webmail'],
					'required_resources' => 'emails_used',
					'show_element' => ( $settings['panel']['webmail_url'] != '' ),
				),
			),
		),
		array (
			'url' => 'customer_mysql.php',
			'label' => $lng['menue']['mysql']['mysql'],
			'elements' => array (
				array (
					'url' => 'customer_mysql.php?page=mysqls',
					'label' => $lng['menue']['mysql']['databases'],
					'required_resources' => 'mysqls',
				),
				array (
					'url' => $settings['panel']['phpmyadmin_url'],
					'new_window' => true,
					'label' => $lng['menue']['mysql']['phpmyadmin'],
					'required_resources' => 'mysqls_used',
					'show_element' => ( $settings['panel']['phpmyadmin_url'] != '' ),
				),
			),
		),
		array (
			'url' => 'customer_domains.php',
			'label' => $lng['menue']['domains']['domains'],
			'elements' => array (
				array (
					'url' => 'customer_domains.php?page=domains',
					'label' => $lng['menue']['domains']['settings'],
				),
			),
		),
		array (
			'url' => 'customer_ftp.php',
			'label' => $lng['menue']['ftp']['ftp'],
			'elements' => array (
				array (
					'url' => 'customer_ftp.php?page=accounts',
					'label' => $lng['menue']['ftp']['accounts'],
				),
				array (
					'url' => $settings['panel']['webftp_url'],
					'new_window' => true,
					'label' => $lng['menue']['ftp']['webftp'],
					'show_element' => ( $settings['panel']['webftp_url'] != '' ),
				),
			),
		),
		array (
			'url' => 'customer_extras.php',
			'label' => $lng['menue']['extras']['extras'],
			'elements' => array (
				array (
					'url' => 'customer_extras.php?page=htpasswds',
					'label' => $lng['menue']['extras']['directoryprotection'],
				),
				array (
					'url' => 'customer_extras.php?page=htaccess',
					'label' => $lng['menue']['extras']['pathoptions'],
				),
			),
		),
		array (
			'url' => 'customer_traffic.php',
			'label' => $lng['menue']['traffic']['traffic'],
			'elements' => array (
				array (
					'url' => 'customer_traffic.php?page=current',
					'label' => $lng['menue']['traffic']['current'],
				),
			),
		),
	),
	'admin' => array (
		array (
			'url' => 'admin_index.php',
			'label' => $lng['admin']['overview'],
			'elements' => array (
				array (
					'label' => $lng['menue']['main']['username'],
				),
				array (
					'url' => 'admin_index.php?page=change_password',
					'label' => $lng['menue']['main']['changepassword'],
				),
				array (
					'url' => 'admin_index.php?page=change_language',
					'label' => $lng['menue']['main']['changelanguage'],
				),
				array (
					'url' => 'admin_index.php?action=logout',
					'label' => $lng['login']['logout'],
				),
			),
		),
		array (
			'label' => $lng['admin']['resources'],
			'required_resources' => 'customers',
			'elements' => array (
				array (
					'url' => 'admin_customers.php?page=customers',
					'label' => $lng['admin']['customers'],
					'required_resources' => 'customers',
				),
				array (
					'url' => 'admin_domains.php?page=domains',
					'label' => $lng['admin']['domains'],
					'required_resources' => 'domains',
				),
				array (
					'url' => 'admin_admins.php?page=admins',
					'label' => $lng['admin']['admins'],
					'required_resources' => 'change_serversettings',
				),
			),
		),
		array (
			'label' => $lng['admin']['server'],
			'required_resources' => 'change_serversettings',
			'elements' => array (
				array (
					'url' => 'admin_configfiles.php?page=configfiles',
					'label' => $lng['admin']['configfiles']['serverconfiguration'],
					'required_resources' => 'change_serversettings',
				),
				array (
					'url' => 'admin_settings.php?page=settings',
					'label' => $lng['admin']['serversettings'],
					'required_resources' => 'change_serversettings',
				),
				array (
					'url' => 'admin_ipsandports.php?page=ipsandports',
					'label' => $lng['admin']['ipsandports']['ipsandports'],
					'required_resources' => 'change_serversettings',
				),
				array (
					'url' => 'admin_settings.php?page=rebuildconfigs',
					'label' => $lng['admin']['rebuildconf'],
					'required_resources' => 'change_serversettings',
				),
				array (
					'url' => 'admin_settings.php?page=updatecounters',
					'label' => $lng['admin']['updatecounters'],
					'required_resources' => 'change_serversettings',
				),
				array (
					'url' => 'admin_phpsettings.php?page=overview',
					'label' => $lng['menue']['phpsettings']['maintitle'],
					'show_element' => ( $settings['system']['mod_fcgid'] == true ),
				),
			),
		),
		array (
			'label' => $lng['admin']['misc'],
			'elements' => array (
				array (
					'url' => 'admin_templates.php?page=email',
					'label' => $lng['admin']['templates']['email'],
				),
				array (
					'url' => 'admin_logger.php?page=log',
					'label' => $lng['menue']['logger']['logger'],
					'required_resources' => 'change_serversettings',
					'show_element' => ( $settings['logger']['enabled'] == true ),
				),
				array (
					'url' => 'admin_message.php?page=message',
					'label' => $lng['admin']['message'],
				),
			),
		),
	),
);
?>