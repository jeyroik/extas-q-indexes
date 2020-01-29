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
    protected $itemClass = Index::class;
    protected $name = 'quality_indexes';
    protected $pk = Index::FIELD__ID;
    protected $scope = 'extas';
    protected $idAs = Index::FIELD__ID;
}
