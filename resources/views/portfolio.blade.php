@extends("layouts.app")

@section("content")
    <!-- Page Header -->
    @include("layouts.parts.hero", [
        "title" => "Our Portfolio",
        "subtitle" => "Success Stories from Our Clients"
    ])

    <!-- Filter Section -->
    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="btn-group" role="group">
              <button
                type="button"
                class="btn btn-outline-primary active"
                data-filter="all"
              >
                All
              </button>
              <button
                type="button"
                class="btn btn-outline-primary"
                data-filter="seo"
              >
                SEO
              </button>
              <button
                type="button"
                class="btn btn-outline-primary"
                data-filter="social"
              >
                Social Media
              </button>
              <button
                type="button"
                class="btn btn-outline-primary"
                data-filter="ppc"
              >
                PPC
              </button>
              <button
                type="button"
                class="btn btn-outline-primary"
                data-filter="content"
              >
                Content
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Portfolio Item 1 -->
          <div class="col-md-4 portfolio-item seo">
            <div class="card h-100 shadow">
              <img
                src="https://placehold.co/400x300"
                class="card-img-top"
                alt="Project 1"
              />
              <div class="card-body">
                <h5 class="card-title">E-commerce SEO Success</h5>
                <p class="card-text">
                  Increased organic traffic by 250% for an online retailer.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary">SEO</span>
                  <a href="#" class="btn btn-sm btn-outline-primary"
                    >View Case Study</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item 2 -->
          <div class="col-md-4 portfolio-item social">
            <div class="card h-100 shadow">
              <img
                src="https://placehold.co/400x300"
                class="card-img-top"
                alt="Project 2"
              />
              <div class="card-body">
                <h5 class="card-title">Restaurant Social Campaign</h5>
                <p class="card-text">
                  Generated 500% increase in engagement for local restaurant
                  chain.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-success">Social Media</span>
                  <a href="#" class="btn btn-sm btn-outline-primary"
                    >View Case Study</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item 3 -->
          <div class="col-md-4 portfolio-item ppc">
            <div class="card h-100 shadow">
              <img
                src="https://placehold.co/400x300"
                class="card-img-top"
                alt="Project 3"
              />
              <div class="card-body">
                <h5 class="card-title">SaaS PPC Optimization</h5>
                <p class="card-text">
                  Reduced cost-per-acquisition by 60% for B2B software company.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-warning text-dark">PPC</span>
                  <a href="#" class="btn btn-sm btn-outline-primary"
                    >View Case Study</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item 4 -->
          <div class="col-md-4 portfolio-item content">
            <div class="card h-100 shadow">
              <img
                src="https://placehold.co/400x300"
                class="card-img-top"
                alt="Project 4"
              />
              <div class="card-body">
                <h5 class="card-title">Healthcare Content Strategy</h5>
                <p class="card-text">
                  Built thought leadership for medical practice through content
                  marketing.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-info">Content</span>
                  <a href="#" class="btn btn-sm btn-outline-primary"
                    >View Case Study</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item 5 -->
          <div class="col-md-4 portfolio-item seo social">
            <div class="card h-100 shadow">
              <img
                src="https://placehold.co/400x300"
                class="card-img-top"
                alt="Project 5"
              />
              <div class="card-body">
                <h5 class="card-title">Fashion Brand Transformation</h5>
                <p class="card-text">
                  Complete digital makeover resulting in 400% revenue growth.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <span class="badge bg-primary">SEO</span>
                    <span class="badge bg-success">Social</span>
                  </div>
                  <a href="#" class="btn btn-sm btn-outline-primary"
                    >View Case Study</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item 6 -->
          <div class="col-md-4 portfolio-item ppc content">
            <div class="card h-100 shadow">
              <img
                src="https://placehold.co/400x300"
                class="card-img-top"
                alt="Project 6"
              />
              <div class="card-body">
                <h5 class="card-title">Tech Startup Launch</h5>
                <p class="card-text">
                  Successful product launch campaign reaching 1M+ users.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <span class="badge bg-warning text-dark">PPC</span>
                    <span class="badge bg-info">Content</span>
                  </div>
                  <a href="#" class="btn btn-sm btn-outline-primary"
                    >View Case Study</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Client Testimonials</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-quote display-4 text-primary"></i>
                <p class="mb-3">
                  "MarketPro transformed our online presence. Their SEO strategy
                  increased our traffic by 300% in just 6 months."
                </p>
                <h5>John Davis</h5>
                <p class="text-muted">CEO, TechStart Inc.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-quote display-4 text-primary"></i>
                <p class="mb-3">
                  "The social media campaigns they created were incredible. Our
                  engagement rates have never been higher."
                </p>
                <h5>Maria Garcia</h5>
                <p class="text-muted">Marketing Director, FoodCo</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-quote display-4 text-primary"></i>
                <p class="mb-3">
                  "Their PPC management reduced our costs while increasing
                  conversions. Truly exceptional results."
                </p>
                <h5>Robert Chen</h5>
                <p class="text-muted">Founder, CloudSoft</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection