<?php
/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once "./Services/Badge/interfaces/interface.ilBadgeType.php";

/**
 * Class ilGroupMeritBadge
 * 
 * @author Jörg Lützenkirchen <luetzenkirchen@leifos.com>
 * @version $Id:$
 *
 * @package ModulesCourse
 */
class ilGroupMeritBadge implements ilBadgeType
{
	public function getId()
	{
		return "merit";
	}
	
	public function getCaption()
	{
		global $lng;
		return $lng->txt("badge_crs_merit");
	}
	
	public function isSingleton()
	{
		return true;
	}
	
	public function getValidObjectTypes()
	{
		return array("grp");
	}
	
	public function getConfigGUIInstance()
	{
		// no config
	}
}