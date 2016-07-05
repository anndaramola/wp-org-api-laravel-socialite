<?php

namespace SocialiteProviders\WordpressApi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WordpressApiExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'wordpress-api', __NAMESPACE__.'\Provider', __NAMESPACE__.'\Server'
        );
    }
}
