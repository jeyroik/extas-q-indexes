<?php
namespace extas\components\plugins\uninstall;

use extas\components\quality\indexes\Index;

/**
 * Class UninstallQualityIndexes
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik@gmail.com
 */
class UninstallQualityIndexes extends UninstallSection
{
    protected string $selfUID = Index::FIELD__ID;
    protected string $selfRepositoryClass = 'qualityIndexRepository';
    protected string $selfSection = 'quality_indexes';
    protected string $selfName = 'quality index';
    protected string $selfItemClass = Index::class;
}
