<?php require_once view('header'); ?>

<body>
    <main class="w-full  h-auto bgColor-sec ff-sec">
        <?php require_once view('client/header'); ?>
        <div class="w-full pt-16">
            <div class="w-7/12 m-0-auto h-auto">
                <div class="w-8/12">
                    <h1 class="pt-5 pb-2 px-4 fw-black">
                        We organize the most  popular facilities to
                        our customers.
                    </h>
                </div>

                <div class="w-full h-auto mt-5 fx fx-wrap pb-8">

                    <?php foreach ($facilities as $facility): ?>

                        <div class="w-full fx fx-j-btw h-64 py-4">
                            <div class="w-1/2 h-48">
                                <h2 class="pb-2 px-4 fw-black">
                                    <?= $facility->name ?>
                               </h2>
                                <h5 class="px-4 lh-loose ls-wide color-pri-700">
                                    <?= $facility->description ?>
                                </h5>
                            </div>

                            <div class="w-1/2 bgColor-2 rounded-1">
                                <img class="w-full h-full cover rounded-1"
                                src="<?= images_path("/facility/{$facility->image}")?>" alt="facility">
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </main>

    <?php require_once view('client/footer'); ?>

</body>

<?php require_once view('footer'); ?>
