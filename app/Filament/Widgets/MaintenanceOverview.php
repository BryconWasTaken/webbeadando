<?php

namespace App\Filament\Widgets;

use App\Models\Maintenance;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class MaintenanceOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Maintenances', Maintenance::query()->count())->label(__('module_names.maintenances.plural_label')),
        ];
    }
}
