<?php

namespace App\Listeners\Update\V21;

use App\Abstracts\Listeners\Update as Listener;
use App\Events\Install\UpdateFinished as Event;
use Illuminate\Support\Facades\Artisan;

class Version2126 extends Listener
{
    const ALIAS = 'core';

    const VERSION = '2.1.26';

    /**
     * Handle the event.
     *
     * @param  $event
     *
     * @return void
     */
    public function handle(Event $event)
    {
        if ($this->skipThisUpdate($event)) {
            return;
        }

        Artisan::call('migrate', ['--force' => true]);

        $country_code = array_search(setting('company.country'), trans('countries'));

        if ($country_code) {
            setting()->set('company.country', $country_code);
            setting()->save();
        }
    }
}