@extends("layouts.app")

@section("content")
    <!-- Page Header -->
    @include("layouts.parts.hero", [
        "title" => "Contact Us",
        "subtitle" => "Let's Start Your Digital Marketing Journey"
    ])

    <!-- Contact Section -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="mb-4">Get in Touch</h2>
            <form>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    required
                  />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    required
                  />
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" />
              </div>
              <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <input type="text" class="form-control" id="company" />
              </div>
              <div class="mb-3">
                <label for="service" class="form-label"
                  >Service Interested In</label
                >
                <select class="form-select" id="service">
                  <option selected>Choose a service...</option>
                  <option value="seo">SEO Optimization</option>
                  <option value="social">Social Media Marketing</option>
                  <option value="ppc">PPC Advertising</option>
                  <option value="content">Content Marketing</option>
                  <option value="all">Full Digital Marketing Package</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea
                  class="form-control"
                  id="message"
                  rows="5"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">
                Send Message
              </button>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="contact-info">
              <h3 class="mb-4">Contact Information</h3>

              <div class="mb-3">
                <h5>
                  <i class="bi bi-geo-alt-fill text-primary me-2"></i>Address
                </h5>
                <p>
                  123 Market Street<br />Suite 500<br />San Francisco, CA 94103
                </p>
              </div>

              <div class="mb-3">
                <h5>
                  <i class="bi bi-telephone-fill text-primary me-2"></i>Phone
                </h5>
                <p>(555) 123-4567</p>
              </div>

              <div class="mb-3">
                <h5>
                  <i class="bi bi-envelope-fill text-primary me-2"></i>Email
                </h5>
                <p>hello@marketproagency.com</p>
              </div>

              <div class="mb-4">
                <h5>
                  <i class="bi bi-clock-fill text-primary me-2"></i>Business
                  Hours
                </h5>
                <p>
                  Monday - Friday: 9:00 AM - 6:00 PM<br />
                  Saturday: 10:00 AM - 4:00 PM<br />
                  Sunday: Closed
                </p>
              </div>

              <div class="social-links">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="btn btn-outline-primary btn-sm me-2"
                  ><i class="bi bi-facebook"></i
                ></a>
                <a href="#" class="btn btn-outline-primary btn-sm me-2"
                  ><i class="bi bi-twitter"></i
                ></a>
                <a href="#" class="btn btn-outline-primary btn-sm me-2"
                  ><i class="bi bi-linkedin"></i
                ></a>
                <a href="#" class="btn btn-outline-primary btn-sm"
                  ><i class="bi bi-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-4">Find Us</h2>
        <div class="row">
          <div class="col-12">
            <div class="map-placeholder bg-secondary" style="height: 400px">
              <img
                src="https://placehold.co/1200x400"
                class="img-fluid w-100 h-100"
                alt="Map"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    @include("layouts.parts.cta", [
        "title" => "Ready to Start Your Project?",
        "subtitle" => "Schedule a free consultation with our marketing experts.",
        "button" => "Book a Meeting"
    ])
@endsection