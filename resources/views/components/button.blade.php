<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-600 active:bg-red-500 focus:outline-none focus:bg-red-500 focus:bg-red-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
