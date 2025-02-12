

<div class="client-area pt-50 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-carousel owl-carousel">
                    @foreach($gasStationsLogos as $gasStationsLogo)
                        <div class="single-logo-wrapper">
                            <div class="logo-inner-item">
                                <img src="{{ asset($gasStationsLogo->logo ?? 'frontend/assets/img/client/1.jpg') }}" alt="{{ $gasStationsLogo->name }}" style="width: 150px; height: 61px">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
