<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\Revenue;
use Laravel\Nova\Dashboard;

class FinanceDashboard extends Dashboard
{

    public static function label()
    {
        return __('Finanzen');
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            Revenue::make()
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'finance-dashboard';
    }
}
