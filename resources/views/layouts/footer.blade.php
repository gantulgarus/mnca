<!-- Footer Section -->
<footer class="footer-with-bg text-white pt-5 pb-4" style="background-color: #343a40;">
    <div class="container">
        <div class="row">
            <!-- Location Map -->
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">{{ __('footer.location') }}</h5>
                <div class="ratio ratio-16x9">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=106.905941%2C47.919780%2C106.910941%2C47.923780&amp;layer=mapnik&amp;marker=47.921780%2C106.908441"
                        style="border:1px solid #ccc;" allowfullscreen loading="lazy"
                        title="{{ __('footer.location') }} Map">
                    </iframe>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">{{ __('footer.contact_us') }}</h5>
                <p><i class="fa fa-map-marker-alt me-2"></i> {{ __('footer.address_line1') }}<br>
                    {{ __('footer.address_line2') }}</p>

                <p><strong>{{ __('footer.mnca_office') }}</strong> {{ __('footer.office_room') }}</p>
                <p><i class="fa fa-phone me-2"></i> {{ __('footer.phone') }}</p>
                <p><i class="fa fa-envelope me-2"></i> {{ __('footer.email') }}</p>

                <p><strong>{{ __('footer.permit_department') }}</strong> {{ __('footer.permit_room') }}</p>
                <p><i class="fa fa-envelope me-2"></i> {{ __('footer.permit_email') }}</p>
            </div>

            <!-- Feedback -->
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">{{ __('footer.feedback') }}</h5>
                <form id="feedbackForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('footer.name') }}</label>
                        <input type="text" class="form-control" id="name"
                            placeholder="{{ __('footer.name_placeholder') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('footer.email_label') }}</label>
                        <input type="email" class="form-control" id="email"
                            placeholder="{{ __('footer.email_placeholder') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ __('footer.message') }}</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="{{ __('footer.message_placeholder') }}"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('footer.send') }}</button>
                </form>
            </div>
        </div>

        <hr class="bg-light" />
        <div class="text-center">
            &copy; 2025 {{ __('footer.copyright') }}
        </div>
    </div>
</footer>
