<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec">
        <?php require_once view('client/header'); ?>
        <div class="w-full pt-20">
            <div class="w-full bgColor-pri-100 rounded-1">
                <div class="w-10/12 fx h-auto m-0-auto">
                    <div class="w-1/2 h-48">
                        <h1 class="pt-5 pb-2 px-4 fw-black">
                         Discover a hotel that defines a new dimension of luxury.
                        </h>
                        <h5 class="px-4 lh-loose ls-wide color-pri-700">
                            We are a luxury brand whose incredible family of associates
                            puts the soul in hospitality every day. The needs of our guests,
                            associates and owners are in the forefront of everything we do.
                            Through authenticity and innovation, we create unique memorable experiences.
                        </h5>
                        <h4 class="pt-4 px-4 color-pri-700 ls-wider fs-xs">
                            Proudly opening doors to the true spirit of a destination.
                        </h4>
                        <div class="px-3">
                            <a href="/client/rooms">
                                <button class="bgColor-pri rounded-full px-5 py-3 color-1
                                mt-5 border-0 fw-500 hover:bgColor-pri-700 outline-0 pointer
                                rounded fs-sm" type="button" name="button">
                                Check Available Rooms
                                </button>
                            </a>
                        </div>

                    </div>

                    <div class="w-1/2 bgColor-2 rounded-1">
                        <img class="w-full h-full cover rounded-1"
                        src="<?= images_path("/static/bg7.jpg")?>" alt="hotel">
                    </div>
                </div>
            </div>

           <div class="w-9/12 m-0-auto py-5">
               <div class="w-full m-0-auto fx">
                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <i class="fa fa-building-o py-2 fa-3x"></i>
                           <h3 class="py-2">Private Workspace</h3>
                       </div>
                   </div>

                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <i class="fa fa-building-o py-2 fa-3x"></i>
                           <h3 class="py-2">Outdoor Workspace</h3>
                       </div>
                   </div>

                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <div class="w-16 h-16 m-0-auto">
                               <img class="w-full w-full contain"
                               src="<?= icons_path('swimming-pool-solid.svg') ?>"
                               alt="swimming-pool">
                           </div>
                           <h3 class="py-2">Swimming Pool</h3>
                       </div>
                   </div>

                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <i class="color-pri fa fa-parking py-2 fa-3x"></i>
                           <h3 class="py-2">Parking Area</h3>
                       </div>
                   </div>
               </div>

               <div class="w-full m-0-auto fx">
                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <i class="fa fa-wifi py-2 fa-3x"></i>
                           <h3 class="py-2">Free Wifi</h3>
                       </div>
                   </div>

                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <div class="w-16 h-16 m-0-auto">
                               <img class="w-full w-full contain"
                               src="<?= icons_path('hands-wash-solid.svg') ?>"
                               alt="hands-wash-solidl">
                           </div>
                           <h3 class="py-2">Laundry Service</h3>
                       </div>
                   </div>

                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <div class="w-16 h-16 m-0-auto">
                               <img class="w-full w-full contain"
                               src="<?= icons_path('utensils-solid.svg') ?>"
                               alt="utensils-solid">
                           </div>
                           <h3 class="py-2">Resultant</h3>
                       </div>
                   </div>

                   <div class=" w-3/12 h-40">
                       <div class="w-full txt-h-c pt-6">
                           <div class="w-16 h-16 m-0-auto">
                               <img class="w-full w-full contain"
                               src="<?= icons_path('car-solid.svg') ?>"
                               alt="car-solid">
                           </div>
                           <h3 class="py-2">Safaris</h3>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <?php require_once view('client/footer'); ?>

    </main>

</body>

<?php require_once view('footer'); ?>
