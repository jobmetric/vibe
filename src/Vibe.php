<?php

namespace JobMetric\Vibe;

use Illuminate\Contracts\Foundation\Application;

class Vibe
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Vibe instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
