<?php
namespace Craft;

class DefaultText_RichTextFieldType extends RichTextFieldType
{
    use DefaultText_BaseFieldTypeTrait;

    protected static $_redactorLang = 'en';
    protected function getDefaultValueSettingsHtml()
    {
        return craft()->templates->render('defaulttext/_settings', [
            'settings' => $this->settings,
            'multiline' => true,
        ]);
    }
}
