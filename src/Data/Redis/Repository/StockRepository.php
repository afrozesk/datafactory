<?php
declare(strict_types=1);

namespace DataFactory\Data\Redis\Repository;

use DataFactory\Data\Redis\Stock;

/**
 * Class StockRepository.
 */
class StockRepository
{
    /**
     * Data storage variable.
     *
     * @var array
     */
    private $data = ['1', 'TATA'];

    /**
     * Get stock by id.
     *
     * @param int $id
     *
     * @return Stock|null
     */
    public function getStockById(int $id): ?Stock
    {

        return (!empty($this->data) && $id === $this->data[0])
            ? new Stock($this->data[0], $this->data[1]) : null;
    }
}