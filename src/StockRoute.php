<?php declare(strict_types=1);

namespace DataFactory;

use DataFactory\Data\DataInterface;
use DataFactory\Data\Factory\DataFactory;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class StockRoute.
 */
class StockRoute
{
    /**
     * Data factory.
     *
     * @var DataFactory
     */
    private $dataFactory;

    /**
     * Constructor.
     *
     * @param DataFactory $dataFactory
     */
    public function __construct(DataFactory $dataFactory)
    {
        $this->dataFactory = $dataFactory;
    }

    /**
     * Get stock information.
     *
     * @param Response $response
     * @param int $id
     *
     * @return Response
     */
    public function getStock(Response $response, int $id): Response
    {
        /** @var DataInterface $stock */
        $stock = $this->dataFactory->getStock($id);

        return $response->withJson($stock)->withStatus(200);
    }
}