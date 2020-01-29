<?php
namespace extas\interfaces\quality\indexes;

use extas\interfaces\IHasId;
use extas\interfaces\IItem;

/**
 * Interface IIndex
 *
 * @package extas\interfaces\quality\indexes
 * @author jeyroik@gmail.com
 */
interface IIndex extends IItem, IHasId
{
    const SUBJECT = 'extas.quality.index';

    const FIELD__USER_NAME = 'user_name';
    const FIELD__INDEX_VALUE = 'index_value';
    const FIELD__INDEX_MONTH = 'index_month';
    const FIELD__INDEX_TIMESTAMP = 'index_timestamp';

    /**
     * @return string
     */
    public function getUserName(): string;

    /**
     * @return int
     */
    public function getIndexValue(): int;

    /**
     * @return int
     */
    public function getIndexMonth(): int;

    /**
     * @return int
     */
    public function getIndexTimestamp(): int;

    /**
     * @param string $userName
     *
     * @return IIndex
     */
    public function setUserName(string $userName): IIndex;

    /**
     * @param int $value
     *
     * @return IIndex
     */
    public function setIndexValue(int $value): IIndex;

    /**
     * @param int $month
     *
     * @return IIndex
     */
    public function setIndexMonth(int $month): IIndex;

    /**
     * @param int $timestamp
     *
     * @return IIndex
     */
    public function setIndexTimestamp(int $timestamp): IIndex;
}
