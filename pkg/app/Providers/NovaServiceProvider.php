<?php

namespace App\Providers;

use App\Nova\User;
use App\Nova\Appointment;
use App\Nova\Booking;
use App\Nova\CheckIn;
use App\Nova\CovidTest;
use App\Nova\Dashboards\CovidTestsInsights;
use App\Nova\Dashboards\FinanceDashboard;
use App\Nova\Location;
use App\Nova\Metrics\TestResultsPartition;
use App\Nova\Metrics\TestsPerDay;
use App\Nova\Metrics\TotalTests;
use App\Nova\Metrics\WaitingTimePerTest;
use App\Nova\Patient;
use App\Nova\Service;
use App\Nova\TestCenter;
use App\Nova\TestCenterOpeningHour;
use App\Nova\TestCertificate;
use Illuminate\Support\Facades\Gate;
use Infinety\Filemanager\FilemanagerTool;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return $user->role == 'admin' || $user->email == 'jan.bredow@epeu.dev';
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            TotalTests::make(),
            TestsPerDay::make(),
            TestResultsPartition::make(),
            WaitingTimePerTest::make()
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            FinanceDashboard::make()
        ];
    }

    protected function resources()
    {
        Nova::resources([
            User::class,
            CovidTest::class,
            TestCenter::class,
            Booking::class,
            Service::class,
            Patient::class,
            TestCenterOpeningHour::class,
            CheckIn::class,
            Location::class,
            Appointment::class,
            TestCertificate::class
        ]);
    }
}
