<?php

namespace Tpcraft\BlessingSkinOauth;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TpcraftExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('tpcraft', __NAMESPACE__.'\Provider');
    }
}
