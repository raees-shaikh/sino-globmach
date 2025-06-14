<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('frontend/images/logo-horizontal.png') }}"
                    style="object-fit: cover;width:206px;height:auto;" width="206px" height="auto" class="logo"
                    alt="">
                {{-- {{ $slot }} --}}
            @endif
        </a>
    </td>
</tr>
