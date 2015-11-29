<?php
/**
 *  File for the CRM_AllTests class
 *
 *  (PHP 5)
 *
 *   @author Walt Haas <walt@dharmatech.org> (801) 534-1262
 *   @copyright Copyright CiviCRM LLC (C) 2009
 *   @license   http://www.fsf.org/licensing/licenses/agpl-3.0.html
 *              GNU Affero General Public License version 3
 *   @version   $Id: AllTests.php 31254 2010-12-15 10:09:29Z eileen $
 *   @package   CiviCRM
 *
 *   This file is part of CiviCRM
 *
 *   CiviCRM is free software; you can redistribute it and/or
 *   modify it under the terms of the GNU Affero General Public License
 *   as published by the Free Software Foundation; either version 3 of
 *   the License, or (at your option) any later version.
 *
 *   CiviCRM is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU Affero General Public License for more details.
 *
 *   You should have received a copy of the GNU Affero General Public
 *   License along with this program.  If not, see
 *   <http://www.gnu.org/licenses/>.
 */

/**
 *  Include parent class definition
 */
require_once 'CiviTest/CiviTestSuite.php';

/**
 *  Class containing all API v3 test suites
 *
 *  @package   CiviCRM
 */
class CRM_AllTests extends CiviTestSuite {
  private static $instance = NULL;

  /**
   * Simple name based constructor
   */ function __construct($theClass = '', $name = '') {
    parent::__construct($theClass, $name);
  }

  /**
   *
   */
  private static function getInstance() {
    if (is_null(self::$instance)) {
      self::$instance = new self;
    }
    return self::$instance;
  }

  /**
   *  Build test suite dynamically
   */
  public static function suite() {
    $inst = self::getInstance();
    return $inst->implSuite(__FILE__);
  }
}
// class CRM_AllTests
