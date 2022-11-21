<?php declare(strict_types=1);

namespace DataFactory\Data\DB;

use DataFactory\Data\DataInterface;

/**
 * Class Stock.
 */
class Stock implements DataInterface
{
    /**
     * Stock id.
     *
     * @var int
     */
    public $id;

    /**
     * Stock name.
     *
     * @var string
     */
    public $name;

    /**
     * Constructor.
     *
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
