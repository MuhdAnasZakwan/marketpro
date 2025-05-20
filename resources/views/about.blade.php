@extends("layouts.app")

@section("content")
    <!-- Page Header -->
    @include("layouts.parts.hero", [
        "title" => "About Us",
        "subtitle" => "Meet the Team Behind MarketPro Agency"
    ])

    <!-- About Section -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 class="mb-4">Our Story</h2>
            <p>
              Founded in 2015, MarketPro Agency has been at the forefront of
              digital marketing innovation. We started with a simple mission: to
              help businesses thrive in the digital age.
            </p>
            <p>
              Over the years, we've grown from a small team of passionate
              marketers to a full-service agency serving clients worldwide. Our
              success is built on our commitment to delivering results, staying
              ahead of industry trends, and treating each client's business as
              our own.
            </p>
            <p>
              Today, we're proud to have helped over 500 businesses transform
              their online presence and achieve sustainable growth.
            </p>
          </div>
          <div class="col-lg-6">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Our Story"
            />
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-lg-2">
            <h2 class="mb-4">Our Mission</h2>
            <p>
              To empower businesses with innovative digital marketing strategies
              that drive real results.
            </p>
            <h3 class="mb-3">Our Values</h3>
            <ul>
              <li>
                <strong>Innovation:</strong> We stay ahead of digital trends
              </li>
              <li>
                <strong>Transparency:</strong> Clear communication and honest
                reporting
              </li>
              <li>
                <strong>Results-Driven:</strong> Your success is our success
              </li>
              <li>
                <strong>Collaboration:</strong> We work as an extension of your
                team
              </li>
              <li>
                <strong>Excellence:</strong> We deliver quality in everything we
                do
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Our Mission"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card text-center border-0">
              <img
                src="https://placehold.co/200x200"
                class="card-img-top rounded-circle mx-auto"
                style="width: 150px"
                alt="Team Member"
              />
              <div class="card-body">
                <h5 class="card-title">Sarah Johnson</h5>
                <p class="text-muted">CEO & Founder</p>
                <div class="social-links">
                  <a href="#" class="text-muted me-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                  <a href="#" class="text-muted"
                    ><i class="bi bi-twitter"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center border-0">
              <img
                src="https://placehold.co/200x200"
                class="card-img-top rounded-circle mx-auto"
                style="width: 150px"
                alt="Team Member"
              />
              <div class="card-body">
                <h5 class="card-title">Mike Wilson</h5>
                <p class="text-muted">Creative Director</p>
                <div class="social-links">
                  <a href="#" class="text-muted me-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                  <a href="#" class="text-muted"
                    ><i class="bi bi-twitter"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center border-0">
              <img
                src="https://placehold.co/200x200"
                class="card-img-top rounded-circle mx-auto"
                style="width: 150px"
                alt="Team Member"
              />
              <div class="card-body">
                <h5 class="card-title">Emily Chen</h5>
                <p class="text-muted">Head of SEO</p>
                <div class="social-links">
                  <a href="#" class="text-muted me-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                  <a href="#" class="text-muted"
                    ><i class="bi bi-twitter"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center border-0">
              <img
                src="https://placehold.co/200x200"
                class="card-img-top rounded-circle mx-auto"
                style="width: 150px"
                alt="Team Member"
              />
              <div class="card-body">
                <h5 class="card-title">David Brown</h5>
                <p class="text-muted">PPC Specialist</p>
                <div class="social-links">
                  <a href="#" class="text-muted me-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                  <a href="#" class="text-muted"
                    ><i class="bi bi-twitter"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Achievements</h2>
        <div class="row text-center">
          <div class="col-md-3">
            <div class="achievement">
              <i class="bi bi-trophy display-4 text-primary"></i>
              <h3 class="mt-3">500+</h3>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="achievement">
              <i class="bi bi-graph-up display-4 text-primary"></i>
              <h3 class="mt-3">150%</h3>
              <p>Average ROI</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="achievement">
              <i class="bi bi-award display-4 text-primary"></i>
              <h3 class="mt-3">25+</h3>
              <p>Industry Awards</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="achievement">
              <i class="bi bi-people display-4 text-primary"></i>
              <h3 class="mt-3">50+</h3>
              <p>Team Members</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
