<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_login
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Login\Administrator\Dispatcher;

defined('_JEXEC') or die;

/**
 * Dispatcher class for com_login
 *
 * @since  4.0.0
 */
class Dispatcher extends \Joomla\CMS\Dispatcher\Dispatcher
{
	/**
	 * Dispatch a controller task.
	 *
	 * @return  void
	 *
	 * @since   4.0.0
	 */
	public function dispatch()
	{
		// Only accept two values login and logout for `task`
		$task = $this->input->get('task');

		if ($task != 'login' && $task != 'logout')
		{
			$this->input->set('task', '');
		}

		parent::dispatch();
	}

	/**
	 * com_login does not require check permission, so we override checkAccess method and have it empty
	 *
	 * @return  void
	 */
	protected function checkAccess()
	{
	}
}
