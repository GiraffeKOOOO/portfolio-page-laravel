<x-layout>
    <x-navbar/>

        <!-- picture and name section -->
        <div class="container text-center">
            <div class="row" id="profile-section">
              <div class="col-3" id="col-profile">
                <img src="{{ URL::to('/media/face.png') }}" class="profile-picture">
              </div>
              <div class="col-6" id="col-title">
                <p class="profile-name">Paskal Stepien</p>
                <p class="profile-title">Junior Software Engineer</p>
                <p class="profile-degree">First Class Graduate with Honours in Software Engineering</p>
              </div>
            </div>
        </div>

        <!-- recent projects -->
        <div class="container text-center">
          <div class="row">
            <div class="col-12 margin-top-70">

              <p id="project-carousel-title">Recent Projects</p>
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="https://github.com/GiraffeKOOOO/GazeSelfCheckout" rel="noopener noreferrer" target="_blank">
                      <img src="https://www.groovypost.com/wp-content/uploads/2012/05/colors-featured.jpg" class="d-block w-100 carousel-image" alt="project_image">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Gaze Self-checkout</h5>
                      <p>The self-checkout application for the Gaze control framework.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="https://github.com/GiraffeKOOOO/jpautomotive" rel="noopener noreferrer" target="_blank">
                      <img src="https://www.groovypost.com/wp-content/uploads/2012/05/colors-featured.jpg" class="d-block w-100 carousel-image" alt="project_image">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>JP Automotive</h5>
                      <p>A business information website for JP automotive.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="https://github.com/GiraffeKOOOO/GiraffeKOOOO.github.io" rel="noopener noreferrer" target="_blank">
                      <img src="https://www.groovypost.com/wp-content/uploads/2012/05/colors-featured.jpg" class="d-block w-100 carousel-image" alt="project_image">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Portfolio page</h5>
                      <p>A simple portfolio page for demonstration of my acamedic acheivements, work experiences and projects.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            </div>
          </div>
      </div>

      <!-- grid panel -->
      <div class="container text-center margin-top-70">
        <div class="row row-cols-2" id="grid-panel">

          <div class="col panel-button">
            <a class="panel-anchor" href="/projects">
              <div class="row" id="panel-button-content">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-journal-code" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                  </svg>
                </div>
                <div class="col-9">
                  <p class="panel-button-name">Projects</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col panel-button">
            <a class="panel-anchor" href="/experience">
              <div class="row" id="panel-button-content">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                </div>
                <div class="col-9">
                  <p class="panel-button-name">Work Experience</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col panel-button">
            <a class="panel-anchor" href="/academia">
              <div class="row" id="panel-button-content">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
                </div>
                <div class="col-9">
                  <p class="panel-button-name">Academia</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col panel-button">
            <a class="panel-anchor" href="/contact">
              <div class="row" id="panel-button-content">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                </div>
                <div class="col-9">
                  <p class="panel-button-name">Contact Me</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col panel-button">
            <a class="panel-anchor" href="/cv">
              <div class="row" id="panel-button-content">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                  </svg>
                </div>
                <div class="col-9">
                  <p class="panel-button-name">CV</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col panel-button" id="panel-button-projects">
            <a class="panel-anchor" href="/about">
              <div class="row" id="panel-button-content">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                </div>
                <div class="col-9">
                  <p class="panel-button-name">About Me</p>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>

</x-layout>
