
    <h2 class="p-3 text-center">Our Portofolio</h2>
    <div class="w-100 d-flex justify-content-center mt-5" style="height: 500px;">
        <div class="col-10 d-flex justify-content-center align-items-center">
            <div class="col-2">
                <ul class="nav d-flex flex-column port-nav">
                    <li class=" fs-4 px-3 py-1 activeli">Mobile ui</li>
                    <li class=" fs-4 px-3 py-1">Graphics</li>
                    <li class=" fs-4 px-3 py-1">website</li>
                    <li class=" fs-4 px-3 py-1">Web app</li>
                    <li class=" fs-4 px-3 py-1">Branding</li>
                </ul>
            </div>
            <div class="col-10 d-flex align-items-center">

                <div class="col-1">
                    <button class="btn">
                        <i class="bi bi-arrow-left-circle fs-1 text-primary"></i>
                    </button>
                  </div>

                <div class="col-10 d-flex align-items-center justify-content-center mx-0">
                    <div class="card rounded-0 border-0 shadow bg-white" style="width: 18rem;">
                        <img src="assets/portofolio/por1.jpg" class="card-img-top" alt="..." height="200">
                        <div class="card-body">
                            <div class="card-footer border-0 bg-white">
                                <h5>Traveling <i class="bi bi-arrow-right fs-4 text-primary"></i></h5>
                                <h6 class="fw-lighter">Traveling</h6>
                              </div>
                          </div>
                      </div>

                      <div class="card rounded-0 shadow  border-0 bg-white mx-3" style="width: 18rem;">
                        <img src="assets/portofolio/por2.jpg" class="card-img-top" alt="..."  height="200">
                        <div class="card-body">
                            <div class="card-footer border-0  bg-white">
                               <h5>Social <i class="bi bi-arrow-right fs-4 text-primary"></i></h5>
                               <h6 class="fw-lighter">social </h6>

                              </div>
                          </div>
                      </div>

                </div>
                <div class="col-1 ">
                   <button class="btn"> <i class="bi-arrow-right-circle fs-1 text-primary"></i></button>

                </div>

            </div>

        </div>
    </div>

<script>
    let allli=document.querySelectorAll(".port-nav > li");
    allli.forEach((li)=>{

        li.onclick=function () {
            allli.forEach((li)=>{
                li.classList.remove("activeli");

            })
            li.classList.add("activeli");

        }
    })
    
</script>

