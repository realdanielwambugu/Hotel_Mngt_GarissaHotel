<?php require_once view('header');  ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">

                <div class="w-11/12 m-0-auto mt-10">
                    <h4 class="fw-400 fs-md color-pri-600 pb-4">
                        Dashboard
                    </h4>
                </div>

                <div class="w-11/12 m-0-auto fx">
                    <div style="background-color:#3C41C5;"
                    class="bgColor-pri w-3/12 h-40">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Total Sales</h4>
                        <h2 class="py-2">Ksh <?= number_format($total_sales)?></h2>
                    </div>
                    </div>
                    <div style="background-color:#503B7C;"
                    class="bgColor-pri w-3/12 h-40 ml-6">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Monthly Sales</h4>
                        <h2 class="py-2">Ksh <?= number_format($monthly_sales)?></h2>
                    </div>
                    </div>
                    <div style="background-color:#6B124D;"
                    class="bgColor-pri w-3/12 h-40 ml-6">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Bookings</h4>
                        <h2 class="py-2"><?= $bookings ?></h2>
                    </div>
                    </div>
                </div>

                <div class="w-11/12 m-0-auto fx mt-5">
                    <div style="background-color:#6B124D;"
                    class="bgColor-pri w-3/12 h-40">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Clients</h4>
                        <h2 class="py-2"><?= $users ?></h2>
                    </div>
                    </div>
                    <div style="background-color:#C53C4C;"
                    class="bgColor-pri w-3/12 h-40 ml-6">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Rooms</h4>
                        <h2 class="py-2"><?= $rooms ?></h2>
                    </div>
                    </div>
                    <div style="background-color:#3CC5BC;"
                    class="bgColor-pri w-3/12 h-40 ml-6">
                    <div class="w-full txt-h-c pt-6">
                        <h4 class="py-2">Facilities</h4>
                        <h2 class="py-2"><?= $facilities ?></h2>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php require_once view('footer'); ?>
