<x-layout>
    <div class="p-3 flex justify-between">
        <h1 class="text-yellow-300 font-bold text-2xl">Dashboard</h1>
        <a href="/createblog" class="font-bold bg-yellow-300 rounded px-2 py-1">Create Blog</a>
    </div>
    <div class="p-3 flex flex-col gap-3">
        <h1>Nama : {{ $user['name'] }}</h1>
        <h1>Email : {{ $user['email'] }}</h1>
        <form action="/logoutForm" method="post">
            @csrf
            <button type="submit" class="bg-yellow-300 rounded px-2 py-1 font-bold">Logout</button>
        </form>
    </div>
</x-layout>