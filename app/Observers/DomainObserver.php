<?php

namespace App\Observers;

use App\Models\Domain;

class DomainObserver
{
    /**
     * Handle the Domain "deleting" event.
     *
     * @param  \App\Models\Domain  $domain
     * @return void
     */
    public function deleting(Domain $domain)
    {
        // Delete all the related links
        foreach ($domain->links as $link) {
            $link->delete();
        }
    }
}
