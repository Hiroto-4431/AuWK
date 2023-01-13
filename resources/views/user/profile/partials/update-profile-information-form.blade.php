<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('アカウント設定') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('user.verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('user.profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        {{-- アイコン --}}
        {{-- <div class="mt-2">
            <x-input-label for="icon" :value="__('プロフィール画像')" />
            @if(isset($user->icon))
                <div class="block w-24 h-24 bg-black rounded-full my-2"></div>
            @else
                <img src="{{ asset("images/icon.png") }}" class="w-24 h-24 rounded-full object-cover my-2">
            @endif
            <input type="file" id="icon" name="icon" accept="image/png, image/jpeg, image/jpg, image/svg" autofocus>
        </div> --}}
        
        {{-- 名前 --}}
        <div class="mt-2">
            <x-input-label for="name" :value="__('名前')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        {{-- 表示名 --}}
        <div class="mt-2">
            <x-input-label for="display_name" :value="__('表示名')" />
            <x-text-input id="display_name" name="display_name" type="text" class="mt-1 block w-full" :value="old('display_name', $user->display_name)" required autofocus autocomplete="display_name" />
            <x-input-error class="mt-2" :messages="$errors->get('display_name')" />
        </div>

        {{-- 大学 --}}
        <div class="mt-2">
            <x-input-label for="universirty" :value="__('大学')" />
            {{-- <select name="university" id="university" required autofocus class="block w-full font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1">
                @foreach($universities as $university)
                    <option value="$university->id" @if($user->university_id === $university->id) selected @endif @if(old('university') === "$university->id") selected @endif>{{ $university->name }}</option>
                @endforeach
            </select> --}}
            <p>
                @foreach($universities as $university)
                    @if($user->university_id === $university->id)
                        <p class="">{{ $university->name }}</p>
                    @endif
                @endforeach
            </p>
            <x-input-error class="mt-2" :messages="$errors->get('university')" />
        </div>


        {{-- メールアドレス --}}
        <div class="mt-2">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- 大学メールアドレス --}}
        {{-- <div class="mt-2">
            <x-input-label for="university_email" :value="__('大学メールアドレス')" />
            <x-text-input id="university_email" name="university_email" type="email" class="mt-1 block w-full" :value="old('email', $user->university_email)" required autocomplete="university_email" />
            <x-input-error class="mt-2" :messages="$errors->get('university_email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div> --}}

        {{-- 誕生日 --}}
        {{-- <div>
            <x-input-label for="birthday" :value="__('誕生日')" />
            <select name="birthday_year" id="birthday_year" class="block w-full font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1">
                 <option value="">年</option>
            </select>
            <p>年</p>
            <x-input-error class="mt-2" :messages="$errors->get('university')" />
        </div> --}}

        {{-- 性別 --}}
        <div class="mt-2">
            <x-input-label for="gender" :value="__('性別')" />
            <select name="gender" id="gender" class="block w-full font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1">
                @if(!isset($user->gender))
                    <option value="" disabled selected>選択してください</option>
                @endif
                <option value="1" @if($user->gender === 1) selected @endif @if(old('gender') === "1") selected @endif>男性</option>
                <option value="2" @if($user->gender === 2) selected @endif @if(old('gender') === "2") selected @endif>女性</option>
                <option value="9" @if($user->gender === 9) selected @endif @if(old('gender') === "9") selected @endif>その他</option>
                <option value="0" @if($user->gender === 0) selected @endif @if(old('gender') === "0") selected @endif>回答しない</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('university')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('更新する') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
