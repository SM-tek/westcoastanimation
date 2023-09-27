<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
    
    
    
    
    
    
    protected $headers = [
    // ... other headers
    'Content-Security-Policy' => "default-src 'self'; script-src 'self' 'unsafe-inline' cdn.westcoastanimations.com;",
];

}
