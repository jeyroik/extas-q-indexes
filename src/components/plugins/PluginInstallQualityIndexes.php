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
    protected $selfUID = Index::FIELD__ID;
    protected $selfRepositoryClass = IIndexRepository::class;
    protected $selfSection = 'quality_indexes';
    protected $selfName = 'quality index';
    protected $selfItemClass = Index::class;
}
