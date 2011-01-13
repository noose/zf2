<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_SignalSlot
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace ZendTest\SignalSlot\TestAsset;

use Zend\SignalSlot\SignalManager,
    Zend\SignalSlot\SignalAggregate;

/**
 * @category   Zend
 * @package    Zend_SignalSlot
 * @subpackage UnitTests
 * @group      Zend_SignalSlot
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class MockAggregate implements SignalAggregate
{
    public function connect(SignalManager $signals)
    {
        $signals->connect('foo.bar', array( $this, 'fooBar' ));
        $signals->connect('foo.baz', array( $this, 'fooBaz' ));
    }

    public function fooBar()
    {
        return __METHOD__;
    }

    public function fooBaz()
    {
        return __METHOD__;
    }
}