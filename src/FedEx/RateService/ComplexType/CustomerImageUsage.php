<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerImageUsage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerImageUsage
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerImageUsage';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\CustomerImageUsageType|string $type
     * return CustomerImageUsage
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Set Id
     *
     * @param \FedEx\RateService\SimpleType\ImageId|string $id
     * return CustomerImageUsage
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    

    
}