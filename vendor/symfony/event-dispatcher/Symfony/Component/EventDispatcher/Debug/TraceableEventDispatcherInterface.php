
/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\EventDispatcher\Debug;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface TraceableEventDispatcherInterface extends EventDispatcherInterface
{
    /**
     * Gets the called listeners.     
     *
     * @return array<string, mixed> An array of called listeners, where the key is the event name and the value is an array of listener information.
     * Each listener information is an array with the following keys:
     * - 'priority': The listener priority.
     * - 'callable': The listener callable.
     */
    public function getCalledListeners(): array;

    public function getNotCalledListeners(): array;
}
