@php
    $clients = App\Models\Client::get();
@endphp
<div class="client-section">
    <div class="container">
        <div class="sec-title mb-4">
            <h1>Our Clients</h1>
        </div>
        <div class="owl-carousel client-carousel">
            @if (count($clients) > 0)
                @foreach ($clients as $client)
                <div class="item">
                    <img src="{{ asset($client->client_image) }}" alt="Client Image" class="w-75">
                </div>
                @endforeach
            @endif
           
            <!-- Add more logos as needed -->
        </div>
    </div>
</div>