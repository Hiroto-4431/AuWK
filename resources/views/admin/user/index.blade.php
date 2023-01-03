<x-app-layout>
    <div class="px-8">
        <h1 class="font-normal text-4xl text-gray-800 leading-tight py-6">
            Users
        </h1>
    </div>
    
    <div class="border-b border-gray-400">
      <ul class="px-8 flex items-center">
        <li class="mr-4">
            <x-tab-link :href="route('admin.user.index')" :active="request()->routeIs('admin.user.index')" class="block w-full">
                <span class="block">{{ __('一覧') }}</span>
            </x-tab-link>
        </li>
        <li class="mr-4">
            <x-tab-link :href="route('admin.expired-user.index')" :active="request()->routeIs('admin.expired-user.index')" class="block w-full">
                <span class="block">{{ __('削除済み') }}</span>
            </x-tab-link>
        </li>
      </ul>
    </div>

    <div class="block w-full">
        <div class="block py-2">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <x-flash-message status="session('status')" />
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-2">
                  <div class="text-gray-900">
                      <table class="block w-ful">
                          <tbody class="py-4 block w-full">
                              <tr class="block w-ful flex px-8 py-2 border-b-2">
                                  <th class="block w-4/12 text-left">名前</th>
                                  <th class="block w-3/12 text-left">大学</th>
                                  <th class="block w-3/12 text-left">学部</th>
                                  <th class="block w-2/12 text-left">設定</th>
                              </tr>
                              @foreach($users as $user)
                                  <tr class="block w-ful flex items-center px-8 py-2 hover:bg-slate-200 border-b">
                                      <td class="block w-4/12 text-left flex items-center">
                                          @if(isset($user->icon))
                                              <span class="block w-12 h-12 bg-black rounded-full"></span>
                                          @else
                                              <img src="{{ asset("images/icon.png") }}" class="w-12 h-12 rounded-full object-cover">
                                          @endif
                                          <span class="block ml-4">{{ $user->name }}</span>
                                          @if($user->authentication === 1)
                                              <img src="{{ asset("images/badge.png") }}" class="ml-2 w-4 object-cover">
                                          @endif
                                      </td>
                                      <td class="block w-3/12 text-left">
                                          @foreach ($universities as $university)
                                              @if ($user->university_id === $university->id)
                                                  <span class="block">{{ $university->name }}</span>
                                              @endif
                                          @endforeach
                                      </td>
                                      <td class="block w-3/12 text-left">
                                          
                                      </td>
                                      <td class="block w-2/12 text-left flex">
                                          <button onclick="location.href='{{ route('admin.user.show', ['user' => $user->id]) }}'" class="mr-4">
                                              <img src="{{ asset("images/info.png") }}" class="w-6">
                                          </button>
                                          <form id="delete_{{$user->id}}" method="POST" action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" class="mr-4">
                                              @csrf
                                              @method('delete')
                                              <a href="#" data-id="{{ $user->id }}" onclick="deletePost(this)" class="block">
                                                  <img src="{{ asset("images/trash.png") }}" class="w-6">
                                              </a>
                                          </form>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <script>
      function deletePost(e) {
          'use strict';
          if(confirm('本当に削除してもよろしいですか？')) {
              document.getElementById('delete_' + e.dataset.id).submit();
          }
      }
    </script>
</x-app-layout>
