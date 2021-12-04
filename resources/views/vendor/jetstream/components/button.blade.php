<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-block']) }}>
    {{ $slot }}
</button>
