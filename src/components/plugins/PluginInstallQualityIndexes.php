<?php
namespace extas\components\plugins;

use extas\components\quality\indexes\Index;
use extas\interfaces\quality\indexes\IIndexRepository;

/**
 * Class PluginInstallQualityIndexes
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallQualityIndexes extends PluginInstallDefault
{
    protected string $selfUID = Index::FIELD__ID;
    protected string $selfRepositoryClass = IIndexRepository::class;
    protected string $selfSection = 'quality_indexes';
    protected string $selfName = 'quality index';
    protected string $selfItemClass = Index::class;
}
