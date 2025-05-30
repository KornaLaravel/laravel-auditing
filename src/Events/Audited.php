<?php

namespace OwenIt\Auditing\Events;

use OwenIt\Auditing\Contracts\Audit;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Contracts\AuditDriver;

class Audited
{
    /**
     * Create a new Audited event instance.
     */
    public function __construct(
        public Auditable $model,
        public AuditDriver $driver,
        public ?Audit $audit = null
    ) {
        //
    }
}
