@if(config('settings.auth_google') || config('settings.auth_microsoft') || config('settings.auth_apple'))
    <div class="row mt-3">
        <div class="col d-flex align-items-center">
            <hr class="my-0 w-100">
        </div>

        <div class="col-auto d-flex align-items-center">
            <div class="text-muted">{{ mb_strtolower(__('Or')) }}</div>
        </div>

        <div class="col d-flex align-items-center">
            <hr class="my-0 w-100">
        </div>
    </div>

    <div class="row mx-n2 mt-2">
        @if(config('settings.auth_google'))
            <div class="col-12 p-2">
                <a href="{{ Socialite::with('google')->stateless()->redirect()->getTargetUrl() }}" class="btn btn-dark d-flex align-items-center justify-content-center" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="width-4 height-4 {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}" viewBox="0 0 21.56 22"><path d="m21.56,11.25c0-.78-.07-1.53-.2-2.25h-10.36v4.26h5.92c-.26,1.37-1.04,2.53-2.21,3.31v2.77h3.57c2.08-1.92,3.28-4.74,3.28-8.09Z" fill="#4285f4" stroke-width="0"/><path d="m11,22c2.97,0,5.46-.98,7.28-2.66l-3.57-2.77c-.98.66-2.23,1.06-3.71,1.06-2.86,0-5.29-1.93-6.16-4.53H1.18v2.84c1.81,3.59,5.52,6.06,9.82,6.06Z" fill="#34a853" stroke-width="0"/><path d="m4.84,13.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09v-2.84H1.18c-.75,1.48-1.18,3.15-1.18,4.93s.43,3.45,1.18,4.93l2.85-2.22s.81-.62.81-.62Z" fill="#fbbc05" stroke-width="0"/><path d="m11,4.38c1.62,0,3.06.56,4.21,1.64l3.15-3.15c-1.91-1.78-4.39-2.87-7.36-2.87C6.7,0,2.99,2.47,1.18,6.07l3.66,2.84c.87-2.6,3.3-4.53,6.16-4.53Z" fill="#ea4335" stroke-width="0"/></svg>

                    {{ __('Continue with :name', ['name' => 'Google']) }}
                </a>
            </div>
        @endif

        @if(config('settings.auth_microsoft'))
            <div class="col-12 p-2">
                <a href="{{ Socialite::with('azure')->stateless()->redirect()->getTargetUrl() }}" class="btn btn-dark d-flex align-items-center justify-content-center" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="width-4 height-4 {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}" viewBox="0 0 19 19"><rect width="9" height="9" fill="#f25022" stroke-width="0"/><rect y="10" width="9" height="9" fill="#00a4ef" stroke-width="0"/><rect x="10" width="9" height="9" fill="#7fba00" stroke-width="0"/><rect x="10" y="10" width="9" height="9" fill="#ffb900" stroke-width="0"/></svg>

                    {{ __('Continue with :name', ['name' => 'Microsoft']) }}
                </a>
            </div>
        @endif

        @if(config('settings.auth_apple'))
            <div class="col-12 p-2">
                <a href="{{ Socialite::with('apple')->stateless()->redirect()->getTargetUrl() }}" class="btn btn-dark d-flex align-items-center justify-content-center" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4 {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}" viewBox="0 0 814.1 999.9"><path d="m788.1,340.9c-5.8,4.5-108.2,62.2-108.2,190.5,0,148.4,130.3,200.9,134.2,202.2-.6,3.2-20.7,71.9-68.7,141.9-42.8,61.6-87.5,123.1-155.5,123.1s-85.5-39.5-164-39.5-103.7,40.8-165.9,40.8-105.6-57-155.5-127C46.7,790.7,0,663,0,541.8,0,347.4,126.4,244.3,250.8,244.3c66.1,0,121.2,43.4,162.7,43.4s101.1-46,176.3-46c28.5,0,130.9,2.6,198.3,99.2h0Zm-234-181.5c31.1-36.9,53.1-88.1,53.1-139.3,0-7.1-.6-14.3-1.9-20.1-50.6,1.9-110.8,33.7-147.1,75.8-28.5,32.4-55.1,83.6-55.1,135.5,0,7.8,1.3,15.6,1.9,18.1,3.2.6,8.4,1.3,13.6,1.3,45.4,0,102.5-30.4,135.5-71.3h0Z"/></svg>

                    {{ __('Continue with :name', ['name' => 'Apple']) }}
                </a>
            </div>
        @endif
    </div>
@endif
