<?php
namespace Craft;

class DefaultText_PlainTextFieldType extends PlainTextFieldType
{
    use DefaultText_BaseFieldTypeTrait;

    protected function getDefaultValueSettingsHtml()
    {
        return craft()->templates->render('defaulttext/_settings', [
            'settings' => $this->settings,
            'multiline' => $this->settings->multiline,
            'initialRows' => $this->settings->initialRows,
        ]);
    }
}
