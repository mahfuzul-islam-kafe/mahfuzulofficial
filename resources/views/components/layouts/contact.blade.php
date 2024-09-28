    <!-- ======= Contact Section =======  -->
    <section id="contact" class="contact ">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>"As a web developer for hire, I'm readily available for any inquiries or discussions regarding your
                    projects or potential collaboration. Whether you're looking for a freelance developer or considering
                    adding a skilled developer to your team, I'm here to help. Don't hesitate to reach out and start the
                    conversation!"</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Barishal</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>mahfuzul1125@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+8801302854516</p>
                        </div>

                        <img src="" frameborder="0"
                            style="border:0; width: 100%; height: 290px;" allowfullscreen></img>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <div class="info">
                          <h3 class="mb-3">Leave A Message Here</h3>
                          <hr>
                          <form action="" class="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group mb-3">
                                  <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group mb-3">
                                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                              </div>
                            </div>
                            <div class="form-group mb-3">
                              <input type="text" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group mb-3">
                              <textarea name="message" class="form-control" rows="10"  placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" >Submit</button>
                            
                        </form>
                        </div>
                   
                    
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
