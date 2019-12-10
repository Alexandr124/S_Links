<?php
namespace Vaimo\SocialLinks\Block\Widget;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class SocialsWidget extends Template implements BlockInterface
{
    protected $_template = "widget/socials_widget.phtml";

    const PATH__INSTA = 'vaimo_social_links/socials/instagram';
    const PATH__FB = 'vaimo_social_links/socials/facebook';
    const PATH__TELEGRAM = 'vaimo_social_links/socials/telegram';

    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig, Template\Context $context, array $data = [])
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getScoupeConfigInsta()
    {
        return $this->scopeConfig->getValue($this::PATH__INSTA);
    }

    public function getScoupeConfigFB()
    {
        return $this->scopeConfig->getValue($this::PATH__FB);
    }

    public function getScoupeConfigTelegram()
    {
        return $this->scopeConfig->getValue($this::PATH__TELEGRAM);
    }

}