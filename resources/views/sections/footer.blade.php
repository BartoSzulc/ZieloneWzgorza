@php
    $data = get_field('footer', 'option');
    $socials = $data['socials'] ?? null;
@endphp
{{-- @include('sections.modal') --}}
<footer class="relative py-8">
    <div class="container">
        <div class="text-center">
            <a class="w-full flex items-center justify-center" href="{{ home_url() }}">
                <img src="{{ asset('images/logo_black.svg') }}" alt="">
            </a>
        </div>
    </div>
</footer>
<div class="footer-copy text-center py-6 text-B12">
    <p>© {{ date('Y') }} Zielone Wzgórza. All rights reserved.</p>
</div>


