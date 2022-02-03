<?php require_once view('header'); ?>

<body>
    <main class="w-full  h-auto bgColor-sec ff-sec">
        <?php require_once view('client/header'); ?>
        <div class="w-full pt-16">
            <div class="w-7/12 m-0-auto h-auto">
                <div class="w-8/12">
                    <h1 class="pt-5 pb-2 px-4 fw-black">
                       <?= app_name() ?>
                    </h>
                </div>

                <div class="w-full h-auto mt-5 pb-8">
                    <div class="w-full h-auto">
                        <h2 class="pb-2 px-4 fw-black">
                            About Us.
                       </h2>
                        <h5 class="px-4 lh-loose ls-wide color-pri-700">
                            <?= $settings->about_us ?>
                        </h5>
                    </div>

                    <div class="w-full h-auto pb-12">
                        <h2 class="pb-2 px-4 fw-black pt-8">
                            Contact Us.
                       </h2>
                       <div class="fx fx-i-c">
                           <div class="w-4/12 fx px-2 py-4">
                               <h3 class="px-4">Call:</h3>
                               <p class="fs-xl fw-400">  <?= $settings->phone ?></p>
                           </div>
                           <div class="w-4/12 fx px-4">
                               <h3 class="px-4">Email:</h3>
                               <p class="fs-xl fw-400"> <?= $settings->email ?></p>
                           </div>
                       </div>
                        <div class="w-4/12 fx px-2 pt-2">
                            <h3 class="px-4">Website:</h3>
                            <p class="fs-xl fw-400">  <?= $settings->website ?></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </main>

    <?php require_once view('client/footer'); ?>

</body>

<?php require_once view('footer'); ?>
