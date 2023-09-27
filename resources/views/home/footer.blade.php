  <footer>
      <div class="container-xl">
          <div class="footer-inner">
              <div class="row d-flex align-items-center gy-4">
                  <!-- copyright text -->
                  <div class="col-md-4">
                      <span class="copyright">© 2023 Diaspora Wonosobo by Devandewa</span>
                  </div>

                  @if (Request::segment(1) == 'news')
                      <div class="text-center col-md-4">
                          <ul class="mb-0 social-icons list-unstyled list-inline">
                              <li class="list-inline-item"><a href="{{ $informasi->fb ?? '' }}" target="_blank"><i
                                          class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="{{ $informasi->twitter ?? '' }}" target="_blank"><i
                                          class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="{{ $informasi->ig ?? '' }}" target="_blank"><i
                                          class="fab fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="{{ $informasi->yt ?? '' }}" target="_blank"><i
                                          class="fab fa-youtube"></i></a></li>
                          </ul>
                      </div>
                  @else
                      <div class="text-center col-md-4">
                          <ul class="mb-0 social-icons list-unstyled list-inline">
                              <li class="list-inline-item"><a href="{{ $data->fb ?? '' }}" target="_blank"><i
                                          class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="{{ $data->twitter ?? '' }}" target="_blank"><i
                                          class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="{{ $data->ig ?? '' }}" target="_blank"><i
                                          class="fab fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="{{ $data->yt ?? '' }}" target="_blank"><i
                                          class="fab fa-youtube"></i></a></li>
                          </ul>
                      </div>
                  @endif

                  <!-- go to top button -->
                  <div class="col-md-4">
                      <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back
                          to Top</a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
