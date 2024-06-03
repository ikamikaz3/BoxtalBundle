<?php

declare(strict_types=1);

namespace Motherbrain\BoxtalBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('motherbrain_boxtal');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('client')
                    ->children()
                        ->scalarNode('username')->end()
                        ->scalarNode('password')->end()
                    ->end()
                ->end() // client
            ->end()
        ;

        return $treeBuilder;
    }
}
