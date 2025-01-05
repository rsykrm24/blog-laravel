<form action="/registerForm" class="flex flex-col gap-3 py-3" method="post">
  @csrf
  <input type="text" name="name" id="email" class="border-2 border-yellow-300 outline-0 px-2 py-1 rounded" placeholder="Name" required>
  <input type="email" name="email" id="email" class="border-2 border-yellow-300 outline-0 px-2 py-1 rounded" placeholder="Email" required>
  <input type="password" name="password" id="password" class="border-2 border-yellow-300 outline-0 px-2 py-1 rounded" placeholder="Password" required>
  <button type="submit" class="bg-yellow-300 rounded font-bold py-1">Register</button>
</form>