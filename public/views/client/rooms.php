<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec">
        <?php require_once view('client/header'); ?>
        <div class="w-full pt-16">
            <div class="w-10/12 m-0-auto h-auto">
                <div class="w-1/2">
                    <h1 class="pt-5 pb-2 px-4 fw-black">
                        Rooms We Recommend To Our Customers.
                    </h>
                </div>

                <div class="w-full bgColor-sec h-auto mt-5 fx fx-wrap">

                    <?php foreach ($rooms as $room): ?>

                        <a href="client/room/<?= $room->id ?>" class="no-line color-pri-800">
                            <div class="w-64 h-auto bgColor-1 rounded-1 mt-4 ml-4 shadow">
                                <div class="w-full h-40 m-0-auto">
                                    <img class="w-full h-full cover rounded-1"
                                    src="<?= images_path("/hotels_pic/{$room->image}") ?>"
                                    alt="swimming-pool">
                                </div>
                                <div class="w-full h-48 txt-h-c pb-2">
                                    <h2 class="py-3 fs-lg color-pri">
                                        <?= $room->name ?>
                                    </h2>
                                    <div class="fw-bold-800 w-10/12 m-0-auto fx fx-j-a">
                                       <p> <i class="fa fa-bed fs-md px-1"></i>
                                           <?= $room->beds ?> Beds
                                       </p>
                                       <p><i class="fa fa-bath fs-md px-1"></i>
                                           <?= $room->baths ?> Baths
                                       </p>
                                    </div>
                                    <div class="w-10/12 m-0-auto color-pri">
                                        <h3 class="pt-4 fs-md">Ksh <?= $room->price ?>/day</h3>
                                    </div>
                                    <button class="bgColor-pri rounded-full px-5 py-3 color-1
                                    mt-5 border-0 fw-500 hover:bgColor-pri-700 outline-0 pointer
                                    rounded fs-sm" type="button" name="button">
                                    Book now
                                    </button>
                                </div>
                            </div>
                        </a>

                    <?php endforeach; ?>

                </div>
            </div>

        </div>

    </main>

    <?php require_once view('client/footer'); ?>

</body>

<?php require_once view('footer'); ?>
