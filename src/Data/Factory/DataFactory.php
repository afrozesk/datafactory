<?php declare(strict_types=1);

namespace DataFactory\Data\Factory;

use DataFactory\Data\DataInterface;
use DataFactory\Data\DB\Repository\StockRepository as StockDBRepository;
use DataFactory\Data\Redis\Repository\StockRepository as StockRedisRepository;

/**
 * Class DataFactory.
 */
class DataFactory
{
    /**
     * Stock repository.
     *
     * @var StockDBRepository
     */
    private $dbRepository;

    /**
     * Redis repository.
     *
     * @var StockRedisRepository
     */
    private $redisRepository;

    /**
     * Constructor.
     *
     * @param StockDBRepository $dbRepository
     * @param StockRedisRepository $redisRepository
     */
    public function __construct(StockDBRepository $dbRepository, StockRedisRepository $redisRepository)
    {
        $this->dbRepository = $dbRepository;
        $this->redisRepository = $redisRepository;
    }

    /**
     * Get stock.
     *
     * @param int $id
     *
     * @return DataInterface
     */
    public function getStock(int $id): DataInterface
    {
        return $this->redisRepository->getStockById($id) ?: $this->dbRepository->getStockById($id);
    }
}