<?php
namespace extas\components\quality\indexes;

use extas\components\repositories\Repository;
use extas\interfaces\quality\indexes\IIndexRepository;

/**
 * Class IndexRepository
 *
 * @package extas\components\quality\indexes
 * @author jeyroik@gmail.com
 */
class IndexRepository extends Repository implements IIndexRepository
{
    protected string $itemClass = Index::class;
    protected string $name = 'quality_indexes';
    protected string $pk = Index::FIELD__ID;
    protected string $scope = 'extas';
}
