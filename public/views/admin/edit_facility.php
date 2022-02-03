<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <form id="edit_facility" class="w-10/12" action="admin/edit_facility"
               method="post">
               <input type="hidden" name="id" value="<?= $facility->id ?>">
                <div class="w-11/12 m-0-auto mt-10 txt-h-c">
                    <h4 class="fw-400 fs-md color-pri-600 pb-4">
                        Edit facility
                    </h4>
                </div>
                <div class="w-8/12 fx fx-j-a m-0-auto">
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="Name" class="block py-2 fs-sm color-pri-600">Name</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="name" value="<?= $facility->name; ?>">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="capacity" class="block py-2 fs-sm color-pri-600">Capacity</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="number" name="capacity" value="<?= $facility->capacity; ?>">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="capacity" class="block py-2 fs-sm color-pri-600">Description</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <textarea id="description" class="w-full" name="description" rows="5"
                               ><?= $facility->description; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="open" class="block py-2 fs-sm color-pri-600">Opened</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0 " value="<?= $facility->open; ?>"
                                type="text" name="open" data-input
                                id="Date">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="Opened" class="block py-2 fs-sm color-pri-600">Closed</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0 " value="<?= $facility->close; ?>"
                                type="text" name="close" id="Date1">
                            </div>
                        </div>
                        <div class="fw-600 mb-2">
                            <label for="Closed" class="block py-2 fs-sm color-pri-600">Price</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="number" name="price" value="<?= $facility->price; ?>">
                            </div>
                        </div>
                        <div class="w-full fx fx-j-c">
                            <div class="">
                                <p id="response" class="w-full pt-4"></p>
                                <button id="edit_facility_btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                                hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('edit_facility')
                                                   .loader('edit_facility_btn')
                                                   .flush('response')
                                                   .send();">
                                    update facility
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>
    <script type="text/javascript">
    var date = new Date();
    var now = date.getTime();

    $("#Date").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#Date1").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    </script>
</body>
<?php require_once view('footer'); ?>
