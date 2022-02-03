<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">
                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Facilities
                    </h4>
                    <a href="/admin/add_facility">
                        <button id="signin_btn" class="bgColor-pri rounded-full px-5 py-3 color-1
                        mt-5 border-0 fw-500 hover:bgColor-pri-700 outline-0 pointer
                        rounded fs-sm"
                        type="button" name="button">Add new Facility</button>
                    </a>
                </div>

                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto border-collapse bgColor-trans m-0-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri"></th>
                                <th class="px-4 py-2 color-pri">Name</th>
                                <th class="px-4 py-2 color-pri">Capacity</th>
                                <th class="px-4 py-2 color-pri">Price</th>
                                <th class="px-4 py-2 color-pri">Updated</th>
                                <th class="px-4 py-2 color-pri">Created</th>
                            </tr>
                        </thead>

                        <tbody class="txt-h-c">

                            <?php foreach ($facilities as $facility): ?>

                            <tr class="bgColor-1 border-0 shadow">
                                <td class="px-4 py-1 color-2-600 border-0">
                                    <div class="w-10 h-10 rounded-full">
                                        <img class="w-full h-full cover rounded-full"
                                        src="<?= images_path("/facility/{$facility->image}") ?>" alt="hotel">
                                    </div>
                                 </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $facility->name ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $facility->capacity ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> Ksh <?= $facility->price ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $facility->updated_at ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $facility->created_at ?> </td>
                                <td class="px-2 py-1 color-pri">
                                    <a href="/admin/edit_facility/<?= $facility->id ?>" class="no-line">
                                        <button class="bgColor-pri w-auto
                                        fs-sm  py-1  border-0 rounded fw-bold ff-pri
                                        pointer outline-0 color-1" type="button">
                                            Edit
                                        </button>
                                    </a>
                                </td>
                                <td class="px-2 py-1 color-pri">
                                    <a href="/admin/delete_facility/<?= $facility->id ?>" class="no-line">
                                        <button class="bgColor-3 w-auto
                                        fs-sm  py-1  border-0 rounded fw-bold ff-pri
                                        pointer outline-0 color-1" type="button">
                                            delete
                                        </button>
                                    </a>
                                </td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
</body>

<?php require_once view('footer'); ?>
