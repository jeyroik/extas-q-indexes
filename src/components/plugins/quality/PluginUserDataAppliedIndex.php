<?php
namespace extas\components\plugins\quality;

use extas\components\plugins\Plugin;
use extas\components\quality\indexes\Index;
use extas\components\SystemContainer;
use extas\interfaces\quality\indexes\IIndexRepository;
use extas\interfaces\quality\users\IUser;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class PluginUserDataAppliedIndex
 *
 * @package extas\components\plugins\quality
 * @author jeyroik@gmail.com
 */
class PluginUserDataAppliedIndex extends Plugin
{
    /**
     * @param IUser $user
     * @param OutputInterface $output
     */
    public function __invoke(IUser $user, OutputInterface $output)
    {
        /**
         * @var $indexRepo IIndexRepository
         */
        $indexRepo = SystemContainer::getItem(IIndexRepository::class);
        $indexValue = $user->getQualificationIndex();
        $index = new Index();
        $index->setIndexMonth(date('Ym'))
            ->setIndexTimestamp(time())
            ->setIndexValue($indexValue)
            ->setUserName($user->getName());

        $existed = $indexRepo->one($index->__toArray());

        if (!$existed) {
            $indexRepo->create($index);
            $output->writeln([
                '<success>Qualification index for user "' . $user->getName() . '" created</success>'
            ]);
        } else {
            $output->writeln([
                '<warning>Qualification index for user "' . $user->getName() . '" already exists</warning>'
            ]);
        }
    }
}
