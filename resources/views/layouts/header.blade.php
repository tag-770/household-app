<header>
    <nav class="w-full pt-2 pb-2">
        <div class="flex justify-between max-w-5xl mx-auto">
            <h1><a href="{{ route('home')}}" class="flex items-center text-neutral-900 hover:opacity-75 text-2xl font-bold" >家計簿アプリ</a></h1>
                <div class="hidden -mx-4 lg:flex lg:items-center">
                    <a href="{{ route('accountcreate') }}" class="block mx-4 mt-2 text-sm text-neutral-900 hover:opacity-75 capitalize  lg:mt-0">家計簿登録</a>
                    <a href="{{ route('accounts') }}" class="block mx-4 mt-2 text-sm text-neutral-900 hover:opacity-75  capitalize lg:mt-0">自分の家計簿</a>
                    <a href="{{ route('logout') }}" class="block mx-4 mt-2 text-sm text-neutral-900 hover:opacity-75  capitalize lg:mt-0">ログアウト</a>
                </div>
        </div>
    </nav>
</header>