<?php
namespace extas\components\quality\indexes;

use extas\components\Item;
use extas\components\THasId;
use extas\interfaces\quality\indexes\IIndex;

/**
 * Class Index
 *
 * @package extas\components\quality\indexes
 * @author jeyroik@gmail.com
 */
class Index extends Item implements IIndex
{
    use THasId;

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->config[static::FIELD__USER_NAME] ?? '';
    }

    /**
     * @return int
     */
    public function getIndexValue(): int
    {
        return $this->config[static::FIELD__INDEX_VALUE] ?? 0;
    }

    /**
     * @return int
     */
    public function getIndexMonth(): int
    {
        return $this->config[static::FIELD__INDEX_MONTH] ?? 0;
    }

    /**
     * @return int
     */
    public function getIndexTimestamp(): int
    {
        return $this->config[static::FIELD__INDEX_TIMESTAMP] ?? 0;
    }

    /**
     * @param string $userName
     *
     * @return IIndex
     */
    public function setUserName(string $userName): IIndex
    {
        $this->config[static::FIELD__USER_NAME] = $userName;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return IIndex
     */
    public function setIndexValue(int $value): IIndex
    {
        $this->config[static::FIELD__INDEX_VALUE] = $value;

        return $this;
    }

    /**
     * @param int $month
     *
     * @return IIndex
     */
    public function setIndexMonth(int $month): IIndex
    {
        $this->config[static::FIELD__INDEX_MONTH] = $month;

        return $this;
    }

    /**
     * @param int $timestamp
     *
     * @return IIndex
     */
    public function setIndexTimestamp(int $timestamp): IIndex
    {
        $this->config[static::FIELD__INDEX_TIMESTAMP] = $timestamp;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
