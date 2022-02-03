<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <form id="edit_room" class="w-10/12" action="admin/edit_room"
               method="post">
                <div class="w-11/12 m-0-auto mt-10 txt-h-c">
                    <h4 class="fw-400 fs-md color-pri-600 pb-4">
                        Edit Room
                    </h4>
                </div>
                <input type="hidden" name="id" value="<?= $room->id ?>">
                <div class="w-8/12 fx fx-j-a m-0-auto">
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="Name" class="block py-2 fs-sm color-pri-600">Name</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="name" value="<?= $room->name ?>">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="beds" class="block py-2 fs-sm color-pri-600">Beds</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="number" name="beds" value="<?= $room->beds ?>">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="baths" class="block py-2 fs-sm color-pri-600">Baths</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="number" name="baths" value="<?= $room->baths ?>">
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="baths" class="block py-2 fs-sm color-pri-600">Status</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="status" value="<?= $room->status ?>">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="price" class="block py-2 fs-sm color-pri-600">Price/day</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="number" name="price" value="<?= $room->price ?>0">
                            </div>
                        </div>
                        <div class="w-full fx fx-j-c">
                            <div class="">
                                <p id="response" class="w-full pt-4"></p>
                                <button id="edit_room_btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                                hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('edit_room')
                                                   .loader('edit_room_btn')
                                                   .flush('response')
                                                   .send();">
                                    Update Room
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>
</body>
<?php require_once view('footer'); ?>
