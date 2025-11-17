<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>NovaSocial — Share Your World</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .glass{background:rgba(255,255,255,.55);backdrop-filter:blur(10px) saturate(130%)}
  </style>
</head>
<body class="bg-gradient-to-b from-indigo-50 via-white to-purple-50 min-h-screen text-slate-800">

<!-- NAVBAR -->
<header class="w-full sticky top-0 bg-white/80 backdrop-blur z-40 shadow-sm">
  <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
    <a class="flex items-center gap-2" href="#">
      <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center text-white font-bold">N</div>
      <span class="font-semibold text-lg hidden sm:block">NovaSocial</span>
    </a>

    <div class="hidden md:flex items-center gap-6 text-sm">
      <a href="#feed" class="hover:text-indigo-600">Feed</a>
      <a href="#explore" class="hover:text-indigo-600">Explore</a>
      <a href="#upload" class="hover:text-indigo-600">Upload</a>
      <a href="#messages" class="hover:text-indigo-600">Messages</a>
    </div>

    <div class="flex items-center gap-3">
      <button class="p-2 rounded-full hover:bg-slate-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11c0-3.07-1.64-5.64-4.5-6.32v-.68a1.5 1.5 0 10-3 0v.68C7.64 5.36 6 7.92 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
      </button>
      <img src="https://i.pravatar.cc/40" class="w-10 h-10 rounded-full cursor-pointer" />
    </div>
  </div>
</header>

<!-- MAIN LAYOUT -->
<main class="max-w-6xl mx-auto px-4 mt-6 grid grid-cols-1 md:grid-cols-4 gap-6">

  <!-- LEFT SIDEBAR -->
  <aside class="hidden md:block col-span-1 space-y-4">
    <div class="p-4 bg-white rounded-xl shadow">
      <h3 class="font-semibold">Menu</h3>
      <ul class="mt-3 text-sm space-y-2">
        <li><a class="block hover:text-indigo-600" href="#">🏠 Home</a></li>
        <li><a class="block hover:text-indigo-600" href="#">👤 Profile</a></li>
        <li><a class="block hover:text-indigo-600" href="#">💬 Messages</a></li>
        <li><a class="block hover:text-indigo-600" href="#">⚙️ Settings</a></li>
      </ul>
    </div>
  </aside>

  <!-- FEED COLUMN -->
  <section class="col-span-1 md:col-span-2 space-y-6">

    <!-- CREATE POST CARD -->
    <div class="p-4 bg-white rounded-xl shadow">
      <h3 class="font-semibold text-lg mb-3">Create a Post</h3>

      <textarea class="w-full p-3 border rounded-lg" rows="3" placeholder="Share what’s on your mind..."></textarea>

      <div class="mt-3 flex items-center justify-between">
        <div class="flex items-center gap-3 text-indigo-600">
          <label class="cursor-pointer flex items-center gap-2">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 16.5V21h4.5l11-11-4.5-4.5L3 16.5z"/><path d="M14.5 6.5L17 9"/></svg>
            <input type="file" class="hidden" />
            <span class="text-sm">Image</span>
          </label>

          <label class="cursor-pointer flex items-center gap-2">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0020 6.829V5.17a1 1 0 00-1.447-.894L15 6"/><path d="M4 4h6v16H4z"/></svg>
            <input type="file" class="hidden" />
            <span class="text-sm">Video</span>
          </label>
        </div>

        <button class="px-5 py-2 bg-indigo-600 text-white rounded-lg shadow">Post</button>
      </div>
    </div>

    <!-- SAMPLE POSTS -->
    <div class="p-4 bg-white rounded-xl shadow">
      <div class="flex items-center gap-3">
        <img src="https://i.pravatar.cc/36?img=5" class="w-9 h-9 rounded-full" />
        <div>
          <div class="font-semibold">Sarah Johnson</div>
          <div class="text-xs text-slate-400">2 hours ago</div>
        </div>
      </div>

      <p class="mt-3">Loving the new NovaSocial redesign! 💜✨</p>

      <img src="https://source.unsplash.com/random/800x500?nature" class="mt-3 rounded-lg" />

      <div class="mt-4 flex items-center gap-6 text-slate-500 text-sm">
        <button class="flex items-center gap-1 hover:text-indigo-600">❤️ 120</button>
        <button class="flex items-center gap-1 hover:text-indigo-600">💬 32</button>
        <button class="flex items-center gap-1 hover:text-indigo-600">↗️ Share</button>
      </div>
    </div>

    <div class="p-4 bg-white rounded-xl shadow">
      <div class="flex items-center gap-3">
        <img src="https://i.pravatar.cc/36?img=8" class="w-9 h-9 rounded-full" />
        <div>
          <div class="font-semibold">Michael Lee</div>
          <div class="text-xs text-slate-400">5 hours ago</div>
        </div>
      </div>

      <p class="mt-3">Just launched my first blog using NovaSocial CMS tools! 🚀🔥</p>
    </div>

  </section>

  <!-- RIGHT SIDEBAR -->
  <aside class="hidden md:block col-span-1 space-y-4">
    <div class="p-4 bg-white rounded-xl shadow">
      <h3 class="font-semibold">Suggested Users</h3>
      <ul class="mt-3 space-y-3 text-sm">
        <li class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img src="https://i.pravatar.cc/32?img=15" class="w-8 h-8 rounded-full" />
            <span>Amanda</span>
          </div>
          <button class="px-3 py-1 text-xs bg-indigo-600 text-white rounded">Follow</button>
        </li>
        <li class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img src="https://i.pravatar.cc/32?img=20" class="w-8 h-8 rounded-full" />
            <span>David</span>
          </div>
          <button class="px-3 py-1 text-xs bg-indigo-600 text-white rounded">Follow</button>
        </li>
      </ul>
    </div>
  </aside>

</main>

</body>
</html>
