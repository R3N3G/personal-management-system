<?php

namespace App\Services\Settings;

use App\Controller\Utils\Repositories;
use App\Entity\Setting;

/**
 * This class is responsible for fetching settings json from DB
 * Class SettingsLoader
 * @package App\Services\Files
 */
class SettingsLoader {

    const SETTING_NAME_DASHBOARD = 'dashboard';
    const SETTING_NAME_FINANCES  = 'finances';

    /**
     * @var Repositories $repositories
     */
    private $repositories;

    /**
     * DatabaseExporter constructor.
     * @param Repositories $repositories
     * @throws \Exception
     */
    public function __construct(Repositories $repositories) {
        $this->repositories = $repositories;
    }

    /**
     * @return Setting|null
     */
    public function getSettingsForDashboard(): ?Setting {
        $setting = $this->repositories->settingRepository->getSettingsForDashboard();
        return $setting;
    }

    /**
     * @return Setting|null
     */
    public function getSettingsForFinances(): ?Setting {
        $setting = $this->repositories->settingRepository->getSettingsForFinances();
        return $setting;
    }

}