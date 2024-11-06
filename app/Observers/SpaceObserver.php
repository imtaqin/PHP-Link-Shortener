<?php

namespace App\Observers;

use App\Models\Space;

class SpaceObserver
{
    /**
     * Handle the Space "deleting" event.
     *
     * @param  \App\Models\Space  $space
     * @return void
     */
    public function deleting(Space $space)
    {
        // Delete all the related links
        foreach ($space->links as $link) {
            $link->delete();
        }
    }
}
