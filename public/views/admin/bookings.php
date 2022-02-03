<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/partials/adminHeader'); ?>

        <?php require_once view('admin/partials/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">

                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Bookings
                    </h4>
                </div>

                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto border-collapse bgColor-trans m-0-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri">Client</th>
                                <th class="px-4 py-2 color-pri">Room</th>
                                <th class="px-4 py-2 color-pri">Check In</th>
                                <th class="px-4 py-2 color-pri">Check Out</th>
                                <th class="px-4 py-2 color-pri">days</th>
                                <th class="px-4 py-2 color-pri">Price/day</th>
                                <th class="px-4 py-2 color-pri">total Price</th>
                                <th class="px-4 py-2 color-pri">Payment Code</th>

                            </tr>
                        </thead>

                        <tbody class="txt-h-c">
                            <?php foreach ($bookings as $booking): ?>
                            <tr class="bgColor-1 border-0 shadow">
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->user->fullName ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->room->name ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->check_in ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->check_out ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->days ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->price_day ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->total_price ?> </td>
                                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->payment_code ?> </td>
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
