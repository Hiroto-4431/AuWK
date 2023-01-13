<x-guest-layout>
    <form method="POST" action="{{ route('user.register') }}">
        @csrf

        <p class="font-medium text-2xl text-gray-700 mb-4">新規登録</p>
        <p class="font-medium text-sm text-gray-700">※以下はすべて必須項目です</p>
        
        <!-- 大学 -->
        <div class="mt-4">
            <x-input-label for="university" :value="__('大学')" />
            <select name="university" id="university" class="block w-full font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1" autofocus required>
                <option value="" disabled selected>選択してください</option>
                @foreach($universities as $university)
                    <option value="{{ $university->id }}" data-domain="{{ $university->domain }}" @if(old('university') === "$university->id") selected @endif>{{ $university->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('university')" class="mt-2" />
        </div>
        <script type="module">
            $("#university").change(function() {
                // 大学メールドメイン
                const UniversityDomain = $("#university option:selected").data("domain");
                $("#university_email_domain").html(UniversityDomain);
            });
        </script>

        <!-- 学部 -->
        {{-- <div class="mt-4">
            <x-input-label for="department" :value="__('学部')" />
            <select name="department" id="department" class="block w-full font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1" required>
                <option value="" disabled selected>選択してください</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" @if(old('department') === "$department->id") selected @endif>{{ $department->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('university')" class="mt-2" />
        </div> --}}

        <!-- 名前 -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('名前')" />
            <p class="font-medium text-xs text-gray-700">※原則非公開です。詳細は <a href="#" class="border-b border-gray-400">こちら</a> からご確認ください。</p>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" placeholder="山田太郎" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- 表示名 -->
        <div class="mt-4">
            <x-input-label for="display_name" :value="__('表示名')" />
            <p class="font-medium text-xs text-gray-700">※他のユーザーに表示される名前です。</p>
            <x-text-input id="display_name" class="block mt-1 w-full" type="text" name="display_name" :value="old('display_name')" required autocomplete="display_name" placeholder="たろちゃん" />
            <x-input-error :messages="$errors->get('display_name')" class="mt-2" />
        </div>

        <!-- メールアドレス -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required placeholder="taro@exsample.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- 誕生日 -->
        {{-- <div class="mt-4">
            <x-input-label for="birthday" :value="__('誕生日')" />
            <select name="birthday_year" id="birthday_year" class="inline font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1" required>
                <option value="" disabled selected>---</option>
                @for ($i = 1980; $i <= date('Y'); $i++)
                    <option value="{{$i}}"  @if(old('birthday_year') === "$i") selected @endif>{{$i}}</option>
                @endfor
            </select>
            <p class="inline font-medium text-sm text-gray-700 mr-1">年</p>
            <select name="birthday_month" id="birthday_month" class="inline font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="" disabled selected>---</option>
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{$i}}"  @if(old('birthday_month') === "$i") selected @endif>{{$i}}</option>
                @endfor
            </select>
            <p class="inline font-medium text-sm text-gray-700 mr-1">月</p>
            <select name="birthday_date" id="birthday_date" class="inline font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="" disabled selected>---</option>
                @for ($i = 1; $i <= 31; $i++)
                    <option value="{{$i}}"  @if(old('birthday_date') === "$i") selected @endif>{{$i}}</option>
                @endfor
            </select>
            <p class="inline font-medium text-sm text-gray-700">日</p>
            <x-input-error :messages="$errors->get('birthday_year')" class="mt-2" />
            <x-input-error :messages="$errors->get('birthday_month')" class="mt-2" />
            <x-input-error :messages="$errors->get('birthday_date')" class="mt-2" />
        </div> --}}

        <!-- 性別 -->
        {{-- <div class="mt-4">
            <x-input-label for="gender" :value="__('性別')" />
            <select name="gender" id="gender" class="block w-full font-medium text-base text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1" required>
                <option value="" disabled selected>選択してください</option>
                <option value="1" @if(old('gender') === "1") selected @endif>男性</option>
                <option value="2" @if(old('gender') === "2") selected @endif>女性</option>
                <option value="9" @if(old('gender') === "9") selected @endif>その他</option>
                <option value="0" @if(old('gender') === "0") selected @endif>回答しない</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div> --}}

        <!-- パスワード -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード（8桁以上）')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- パスワード[確認用] -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード[確認用]')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('user.login') }}">
                {{ __('すでに会員の方') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('同意して会員登録する') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
