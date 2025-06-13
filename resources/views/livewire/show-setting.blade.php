<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>{{ $setting->title }}</h2>
                <p>{{ $setting->description }}</p>
                @if ($setting->image)
                    <img src="{{ asset('storage/' . $setting->image) }}" class="img-fluid" alt="">
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Contact Information</h3>
                <p>Email: {{ $setting->email }}</p>
                <p>Phone: {{ $setting->phone }}</p>
                <p>Address: {{ $setting->address }}</p>
            </div>
            <div class="col-lg-12">
                <h3>Social Media Links</h3>
                <ul>
                    @if ($setting->fb_url)
                        <li><a href="{{ $setting->fb_url }}" target="_blank">Facebook</a></li>
                    @endif
                    @if ($setting->tw_url)
                        <li><a href="{{ $setting->tw_url }}" target="_blank">Twitter</a></li>
                    @endif
                    @if ($setting->in_url)
                        <li><a href="{{ $setting->in_url }}" target="_blank">Instagram</a></li>
                    @endif
                    @if ($setting->li_url)
                        <li><a href="{{ $setting->li_url }}" target="_blank">LinkedIn</a></li>
                    @endif
                </ul>
</div>
