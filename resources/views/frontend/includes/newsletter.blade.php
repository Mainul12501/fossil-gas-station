<div class="newsletter-section">
    <div class="container">
        <div class="newsletter-content d-flex align-items-center justify-content-between">
            <div class="section-title">
                <h2 class="text-white">Subscribe newsletter <br> For Any Update</h2>
            </div>
            <div class="subscribed-form d-flex">
                <form action="{{ route('newsletters.store') }}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="Enter Your Mail">
                    <input type="submit" value="Subscribe Now">
                </form>
            </div>
        </div>
    </div>
</div>
