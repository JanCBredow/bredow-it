<?php

namespace App\Nova;

use App\Nova\Actions\ChangeTestResult;
use App\Nova\Actions\CreateTestLabel;
use App\Nova\Actions\PrintTestCertificate;
use App\Nova\Actions\RegenerateTestCertificate;
use App\Nova\Actions\ResendResultMail;
use App\Nova\Actions\SubmitRki;
use App\Nova\Filters\RunningTest;
use App\Nova\Metrics\TestResultsPartition;
use App\Nova\Metrics\TestsPerDay;
use App\Nova\Metrics\TotalTests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;

class CovidTest extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CovidTest::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The resource group.
     *
     * @var string
     */
    public static $group = 'Tests';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'state',
    ];

    public static function label()
    {
        return __('Covid-Tests');
    }

    public static function singularLabel()
    {
        return __('Covid-Test');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Badge::make(__('Status'), 'state')->map([
                'POSITIVE' => 'danger',
                'INCONCLUDENT' => 'warning',
                'NEGATIVE' => 'success',
                'UNKNOWN' => 'info'
            ])->labels([
                'POSITIVE' => 'Positiv',
                'INCONCLUDENT' => 'Fehlerhaft',
                'NEGATIVE' => 'Negativ',
                'UNKNOWN' => 'Ergebnis offen'
            ]),
            Badge::make(__('CWA Daten'), 'cwa')->map([
                'full' => 'success',
                'anon' => 'warning',
                'none' => 'danger'
            ])->labels([
                'full' => 'Persönlich',
                'anon' => 'Anonym',
                'none' => 'Keine'
            ])->default(function () {
                return 'none';
            }),
            HasOne::make('TestCertificate')->readonly(),
            BelongsTo::make('Appointment')
                ->required()
                ->showCreateRelationButton()
                ->help(__('Wann wird der test durchgeführt?'))
                ->withoutTrashed(),
            BelongsTo::make('Service')
                ->required()
                ->withMeta([
                    'belongsToId' => \App\Models\Service::first()->id
                ])
                ->help(__('Welche Art von test wird durchgeführt'))
                ->withoutTrashed(),
            BelongsTo::make('Patient')
                ->required()
                ->showCreateRelationButton()
                ->help(__('Wer wird getestet?'))
                ->withoutTrashed(),
            DateTime::make(__('CheckIn'), 'created_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY HH:mm')
                ->pickerDisplayFormat('d.m.Y H:i'),
            DateTime::make(__('Zuletzt geändert'), 'updated_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY HH:mm')
                ->pickerDisplayFormat('d.m.Y H:i')
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            TotalTests::make(),
            TestsPerDay::make(),
            TestResultsPartition::make()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            RunningTest::make()
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            SubmitRki::make()
                ->showOnTableRow()
                ->confirmText('Das Testergebnis wird erneut an die CWA übermittelt.')
                ->confirmButtonText('Übermitteln')
                ->cancelButtonText('Abbrechen'),
            ChangeTestResult::make()
                ->showOnTableRow()
                ->confirmText('Ändere das Ergebnis des Tests. WICHTIG: Diese Operation ist nicht umkehrbar.')
                ->confirmButtonText('Ergebnis ändern')
                ->cancelButtonText('Abbrechen'),
            CreateTestLabel::make()
                ->showOnTableRow()
                ->confirmText('Erstelle ein Label für einen PCR Test')
                ->confirmButtonText('Label erstellen')
                ->cancelButtonText('Abbrechen'),
            PrintTestCertificate::make()
                ->showOnTableRow()
                ->confirmButtonText('Herunterladen')
                ->cancelButtonText('Abbrechen'),
            ResendResultMail::make()
                ->showOnTableRow()
                ->confirmText('Beim setzen des Ergebnisses wird dem Patienten automatisch eine E-Mail gesendet. Sind Sie sich sicher, dass sie diese E-Mail erneut versenden wollen?')
                ->confirmButtonText('Email versenden')
                ->cancelButtonText('Abbrechen'),
            RegenerateTestCertificate::make()
                ->showOnTableRow()
                ->confirmText('Mit dieser Funktion können Sie ein neues Testzertifikat ausstellen. Das alte Zertifikat wird gelöscht und ein neues angelegt.')
                ->confirmButtonText('Neues Zertifkat ausstellen')
                ->cancelButtonText('Abbrechen')
        ];
    }
}
