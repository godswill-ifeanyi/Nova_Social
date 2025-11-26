<div class="p-4 bg-white rounded-xl shadow">
    <div class="flex items-center gap-3">
    <img src="https://i.pravatar.cc/36?img=5" class="w-9 h-9 rounded-full" />
    <div>
        <div class="font-semibold">{{ $post->user->name }}</div>
        <div class="text-xs text-slate-400">{{ $post->created_at->format('Y-m-d h:i') }}</div>
    </div>
    </div>

    <p class="mt-3">{{ $post->content }}</p>

    <img src="https://source.unsplash.com/random/800x500?nature" class="mt-3 rounded-lg" />

    <div class="mt-4 flex items-center gap-6 text-slate-500 text-sm">
    <button class="flex items-center gap-1 hover:text-indigo-600">❤️ 120</button>
    <button class="flex items-center gap-1 hover:text-indigo-600">💬 32</button>
    <button class="flex items-center gap-1 hover:text-indigo-600">↗️ Share</button>
    </div>
</div>