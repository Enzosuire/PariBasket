<?php

namespace ContainerSFtvNVx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.messenger_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:messenger', [], 'List messages you can dispatch using the message buses', false, #[\Closure(name: 'console.command.messenger_debug', class: 'Symfony\\Component\\Messenger\\Command\\DebugCommand')] fn (): \Symfony\Component\Messenger\Command\DebugCommand => ($container->privates['console.command.messenger_debug'] ?? $container->load('getConsole_Command_MessengerDebugService')));
    }
}
