@include('conn')

<div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_taital">Our Strongest</h1>
      <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
      <div class="services_section_2">
         <div class="row">
            <?php if (count($services) > 3): ?>
               <div id="servicesCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <?php foreach ($services as $index => $service): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                           <div class="col-md-4">
                              <div>
                                 <img src="<?php echo $service['image_path']; ?>" class="services_img" alt="<?php echo $service['name']; ?>">
                              </div>
                              <div class="btn_main"><a href="#"><?php echo $service['name']; ?></a></div>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  </div>
                  <a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            <?php else: ?>
               <?php foreach ($services as $service): ?>
                  <div class="col-md-4">
                     <div>
                        <img src="<?php echo $service['image_path']; ?>" class="services_img" alt="<?php echo $service['name']; ?>">
                     </div>
                     <div class="btn_main"><a href="#"><?php echo $service['name']; ?></a></div>
                  </div>
               <?php endforeach; ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>