<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザー詳細') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 p-8">
                    <div class="flex items-center">
                        @if(isset($user->icon))
                            <span class="block w-24 h-24 bg-black rounded-full"></span>
                        @else
                            <img src="{{ asset("images/icon.png") }}" class="w-24 h-24 rounded-full object-cover">
                        @endif
                        <p class="block ml-8 text-2xl">{{ $user->name }}</p>
                        @if($user->authentication === 1)
                            <img src="{{ asset("images/badge.png") }}" class="ml-2 w-6 object-cover">
                        @endif
                    </div>
                    <div class="mt-8 w-11/12 mx-auto">
                      <p class="text-xl">■ 基本情報</p>
                      {{-- <ul>
                        <li>
                            <div>大学：</div>
                            <div>青山</div>
                        </li>
                        <li>
                            <div>学部：</div>
                            <div></div>
                        </li>
                      </ul> --}}
                      <table>
                          <tbody>
                              <tr>
                                  <th class="text-left">大学</th>
                                  <td class="block ml-8"></td>
                              </tr>
                              <tr>
                                  <th class="text-left">学部</th>
                                  <td class="block ml-8"></td>
                              </tr>
                              <tr>
                                  <th class="text-left">メールアドレス</th>
                                  <td class="block ml-8">{{ $user->email }}</td>
                              </tr>
                              <tr>
                                  <th class="text-left">大学メールアドレス</th>
                                  <td class="block ml-8">{{ $user->university_email }}</td>
                              </tr>
                              <tr>
                                  <th class="text-left">誕生日</th>
                                  <td class="block ml-8">{{ $user->birthday }}</td>
                              </tr>
                              <tr>
                                  <th class="text-left">性別</th>
                                  <td class="block ml-8">
                                    @if( $user->gender === 0)
                                        <span>回答しない</span>
                                    @elseif( $user->gender === 1)
                                        <span>男性</span>
                                    @elseif( $user->gender === 2)
                                        <span>女性</span>
                                    @elseif( $user->gender === 9)
                                        <span>その他</span>
                                    @else
                                        <span>---</span>
                                    @endif
                                </td>
                              </tr>
                              <tr>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
