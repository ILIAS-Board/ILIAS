<?php
/*
	+-----------------------------------------------------------------------------+
	| ILIAS open source                                                           |
	+-----------------------------------------------------------------------------+
	| Copyright (c) 1998-2009 ILIAS open source, University of Cologne            |
	|                                                                             |
	| This program is free software; you can redistribute it and/or               |
	| modify it under the terms of the GNU General Public License                 |
	| as published by the Free Software Foundation; either version 2              |
	| of the License, or (at your option) any later version.                      |
	|                                                                             |
	| This program is distributed in the hope that it will be useful,             |
	| but WITHOUT ANY WARRANTY; without even the implied warranty of              |
	| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               |
	| GNU General Public License for more details.                                |
	|                                                                             |
	| You should have received a copy of the GNU General Public License           |
	| along with this program; if not, write to the Free Software                 |
	| Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA. |
	+-----------------------------------------------------------------------------+
*/

/**
 * Database Test-Suite
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 1.0.0
 */
class ilServicesDatabaseSuite extends PHPUnit_Framework_TestSuite {

	/**
	 * @return \ilServicesDatabaseSuite
	 */
	public static function suite() {
		$suite = new self();

		// add each test class of the component
		require_once("./Services/Database/test/ilDatabasePDOInnodbTest.php");
		$suite->addTestSuite("ilDatabasePDOInnodbTest");

		require_once("./Services/Database/test/ilDatabaseMDB2InnodbTest.php");
		$suite->addTestSuite("ilDatabaseMDB2InnodbTest");

		require_once("./Services/Database/test/ilDatabasePDOMyISAMTest.php");
		$suite->addTestSuite("ilDatabasePDOMyISAMTest");
		
		require_once("./Services/Database/test/ilDatabaseMDB2MyISAMTest.php");
		$suite->addTestSuite("ilDatabaseMDB2MyISAMTest");

		return $suite;
	}
}