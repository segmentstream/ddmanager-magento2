<?php

namespace Driveback\DigitalDataLayer\Model\PageType;

use Magento\Framework\App\RequestInterface;

/**
 * Class Confirmation
 */
class Confirmation implements PageTypeInterface
{
    /**
     * @var RequestInterface
     */
    protected $_request;

    /**
     * Confirmation constructor.
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request)
    {
        $this->_request = $request;
    }

    /**
     * @return string
     */
    public function getTypeCode()
    {
        return 'confirmation';
    }

    /**
     * @return bool
     */
    public function isCurrentPageType()
    {
        return $this->_request->getRouteName() == 'checkout'
        && $this->_request->getControllerName() == 'onepage'
        && $this->_request->getActionName() == 'success';
    }
}
