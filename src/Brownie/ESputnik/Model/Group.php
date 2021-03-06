<?php
/**
 * @category    Brownie/ESputnik
 * @author      Brownie <oss.brownie@gmail.com>
 * @license     http://www.gnu.org/copyleft/lesser.html
 */

namespace Brownie\ESputnik\Model;

use Brownie\ESputnik\Model\Base\ArrayList;

/**
 * Group.
 *
 * @method Group    setId($id)          Set id.
 * @method Group    setName($name)      Set name.
 * @method Group    setType($type)      Set type.
 * @method int      getId()             Get id.
 * @method string   getName()           Get name.
 * @method string   getType()           GetType.
 */
class Group extends ArrayList
{

    protected $fields = [
        'id' => null,
        'name' => null,
        'type' => null,
    ];
}
