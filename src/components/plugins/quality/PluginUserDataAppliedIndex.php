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

        $existed = $indexRepo->one([
            Index::FIELD__USER_NAME => $index->getUserName(),
            Index::FIELD__INDEX_MONTH => $index->getIndexMonth()
        ]);

        if (!$existed) {
            $indexRepo->create($index);
            $output->writeln([
                '<info>Qualification index for user "' . $user->getName() . '" created</info>'
            ]);
        } else {
            $output->writeln([
                '<comment>Qualification index for user "' . $user->getName() . '" already exists</comment>'
            ]);
        }
    }
}
