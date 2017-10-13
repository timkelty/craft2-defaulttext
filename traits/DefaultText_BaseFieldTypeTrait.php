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
        $value = parent::prepValue($value);

        if (!$value) {
            return craft()->templates->renderObjectTemplate($this->settings->defaultValue, $this->element);
        }

        return $value;
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
