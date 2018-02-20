<?php
/**
 * @author    Tim Kelty
 * @copyright Copyright (c) 2017 Tim Kelty
 * @link      https://github.com/timkelty
 * @package   DefaultText
 * @since     1.0.0
 */

namespace Craft;

Craft::import('plugins.defaulttext.traits.*');

class DefaultTextPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Default Text');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Provides versions of Rich Text and Plain Text with defaults.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/timkelty/craft2-defaulttext/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/timkelty/craft2-defaulttext/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Tim Kelty';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://github.com/timkelty';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
