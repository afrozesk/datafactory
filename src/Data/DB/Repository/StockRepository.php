<?php
declare(strict_types=1);

namespace DataFactory\Data\DB\Repository;

use DataFactory\Data\DB\Stock;

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
    private $data = [
        ['1', 'TATA'],
        ['2', 'REL'],
        ['3', 'INFO'],
    ];

    /**
     * Get stock by id.
     *
     * @param int $id
     *
     * @return Stock
     */
    public function getStockById(int $id): Stock
    {
        return new Stock($this->data[$id][0], $this->data[$id][1]);
    }
}