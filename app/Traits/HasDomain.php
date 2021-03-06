<?php

namespace App\Traits;

use App\Models\Domain;

trait HasDomain
{
    /**
     * A business may belong to a domain.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
