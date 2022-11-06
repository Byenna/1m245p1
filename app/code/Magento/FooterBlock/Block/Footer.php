<?php
namespace Magento\FooterBlock\Block;

use Magento\Framework\View\Element\Template;
use Magento\Cms\Block\Block as cmsBlock;
use Magento\Framework\App\Request\Http as request;

class Footer extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */

    public $cms;
     
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, cmsBlock $cmsblock, request $request) {
            $this->cmsblock = $cmsblock;
            $this->_request = $request;
            parent::__construct($context);
        }
        
        public function getCmsBlock() 
        {
            $cmsblock = "Testing if function is working";

            // if ($this->_request->getFullActionName() === 'cms_index_index') {
            //     $cmsblock['route'] = 'home';
            //     $cmsblock['block'] = $this->cmsblock->setBlockId('footer_offer_more')->toHtml();
            // }

            return $cmsblock;
        }
    
}
