<?php
namespace Craft;

trait DefaultText_BaseFieldTypeTrait
{
    public function getName()
    {
        return parent::getName() . Craft::t(' (with default value)');
    }

    public function getSettingsHtml()
    {
        return $this->getDefaultValueSettingsHtml() . parent::getSettingsHtml();
    }

    public function prepValue($value)
    {
        if (!$value && craft()->request->isSiteRequest()) {
            $value = craft()->templates->renderObjectTemplate($this->settings->defaultValue, $this->element);
        }

        return parent::prepValue($value);
    }

    protected function defineSettings()
    {
        $settings = parent::defineSettings();
        $settings['defaultValue'] = [AttributeType::String];

        return $settings;
    }

    protected function getDefaultValueSettingsHtml()
    {
    }
}
