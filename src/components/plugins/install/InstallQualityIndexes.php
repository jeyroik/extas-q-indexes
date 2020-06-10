<?php
namespace extas\components\plugins\install;

use extas\components\quality\indexes\Index;

/**
 * Class InstallQualityIndexes
 *
 * @package extas\components\plugins\install
 * @author jeyroik@gmail.com
 */
class InstallQualityIndexes extends InstallSection
{
    protected string $selfUID = Index::FIELD__ID;
    protected string $selfRepositoryClass = 'qualityIndexRepository';
    protected string $selfSection = 'quality_indexes';
    protected string $selfName = 'quality index';
    protected string $selfItemClass = Index::class;
}
