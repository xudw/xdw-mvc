<?php
namespace Application\Models;

class OrderModel extends Model implements ModelInterface
{
    protected $table = 'orders';

    public function getSomeValue()
    {
        $data = $this->select(517239059478742019);

        return $data;
    }
}