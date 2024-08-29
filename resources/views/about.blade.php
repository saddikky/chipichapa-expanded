@extends(auth()->check() ? 'user-layout' : 'guest-layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- PHOTO CAROUSEL -->
    <div id="carouselExample" class="carousel slide mb-5 mt-5">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724841202/it-company2_dm9nfb.jpg" class="d-block w-100 carousel-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724841204/it-team_vyvoa1.jpg" class="d-block w-100 carousel-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724841204/it-team2_lnz2lj.jpg" class="d-block w-100 carousel-img" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
    <!-- GET TO KNOW US -->
  <div class="d-flex justify-content-center big-rounded-container-dark">
    <h1><strong>Get to Know Us</strong></h1>
  </div>
  <p style='font-size: 25px; text-align:justify'>
  </p>

  <!-- VISION & MISSION -->
  <div class="mission-vision-container">
    <div class="mission small-rounded-container mb-3">
        <p>
            <b>Our Mission</b><br>
            To empower businesses with innovative IT solutions that drive growth, enhance security, and streamline operations in an increasingly digital world.
        </p>
    </div>
    <div class="vision small-rounded-container mb-3">
        <p>
            <b>Our Vision</b><br>
            To be a global leader in IT services, recognized for our commitment to excellence, innovation, and customer satisfaction.
        </p>
    </div>
</div>

  <!-- SERVICES CARD -->
  <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mb-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839835/software-development_oljyso.jpg" class="card-img-top" alt="Software Development">
      <div class="card-body">
        <h3 class="card-title">Software Development</h3>
        <p class="card-text">Custom software solutions tailored to your business needs, from enterprise applications to mobile apps.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839835/network-security_b9gkzk.jpg" class="card-img-top" alt="Network Security">
      <div class="card-body">
        <h3 class="card-title">Network Security</h3>
        <p class="card-text">Advanced security services to protect your digital assets and ensure compliance with industry standards.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839834/cloud-solutions_yqkutj.jpg" class="card-img-top" alt="Cloud Solutions">
      <div class="card-body">
        <h3 class="card-title">Cloud Solutions</h3>
        <p class="card-text">Scalable cloud infrastructure and services that empower your business with flexibility and efficiency.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839835/data-management_sr3iyz.jpg" class="card-img-top" alt="Data Management">
      <div class="card-body">
        <h3 class="card-title">Data Management</h3>
        <p class="card-text">Comprehensive data management solutions, including database design, implementation, and maintenance.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839836/it-consulting_awvd2k.jpg" class="card-img-top" alt="IT Consulting">
      <div class="card-body">
        <h3 class="card-title">IT Consulting</h3>
        <p class="card-text">Expert guidance to help you leverage technology to achieve your business goals.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839837/system-integration_usqto0.jpg" class="card-img-top" alt="System Integration">
      <div class="card-body">
        <h3 class="card-title">System Integration</h3>
        <p class="card-text">Seamless integration of diverse IT systems to optimize your operations.</p>
      </div>
    </div>
  </div><div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839837/webdev_mcf1zx.jpg" class="card-img-top" alt="Web Dev">
      <div class="card-body">
        <h3 class="card-title">Web Development</h3>
        <p class="card-text">Creating engaging, responsive websites and web applications that enhance your online presence.</p>
      </div>
    </div>
  </div><div class="col">
    <div class="card h-100">
      <img src="https://res.cloudinary.com/dtlclpijx/image/upload/v1724839835/it-support_b1rc2t.jpg" class="card-img-top" alt="IT Support">
      <div class="card-body">
        <h3 class="card-title">IT Support</h3>
        <p class="card-text">24/7 technical support to ensure your IT infrastructure runs smoothly.</p>
      </div>
    </div>
  </div>
</div>



    <div class="small-rounded-container-dark mb-3">
      <h1 class='text-center'>
          Why choose ChipiChapa?
      </h1>
    </div>

    <!-- ACCORDION -->
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Pioneers in IT Consulting in Indonesia
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                   As the <strong>first established</strong> IT consultant in Indonesia, PT ChipiChapa has been at the forefront of the country's digital transformation. With decades of experience, we’ve honed our expertise in providing tailored IT solutions that have helped countless businesses navigate the complexities of the digital landscape. Our deep-rooted understanding of the local market, combined with our global outlook, makes us the go-to partner for companies seeking reliable and innovative IT services.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Award Winning Excellence
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Our commitment to delivering exceptional IT solutions has earned us numerous accolades and industry recognition. As an award-winning company, PT ChipiChapa is recognized for our innovative approaches, quality of service, and our ability to consistently exceed client expectations. These awards are a testament to our dedication to excellence and our ongoing pursuit of perfection in everything we do.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Unwavering Accountability
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                At PT ChipiChapa, accountability is at the core of our business philosophy. We take full responsibility for every project we undertake, ensuring that we deliver on our promises with transparency and integrity. Our clients trust us because we prioritize their needs, maintain open lines of communication, and deliver results that drive their success. Our high standards of accountability mean that you can rely on us to be a steadfast partner in your IT journey.
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection
