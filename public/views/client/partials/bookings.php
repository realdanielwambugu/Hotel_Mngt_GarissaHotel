<table class="table-auto border-collapse bgColor-trans m-0-auto mt-10">
    <thead>
        <tr>
            <th class="px-4 py-2 color-pri">Room</th>
            <th class="px-4 py-2 color-pri">Check In</th>
            <th class="px-4 py-2 color-pri">Check Out</th>
            <th class="px-4 py-2 color-pri">days</th>
            <th class="px-4 py-2 color-pri">Price/day</th>
            <th class="px-4 py-2 color-pri">total Price</th>
            <th class="px-4 py-2 color-pri">Payment Code</th>
            <th class="px-4 py-2 color-pri">Status</th>
        </tr>
    </thead>
    <tbody class="txt-h-c">
        <?php foreach ($user->booking as $booking): ?>
            <tr class="bgColor-1 border-0 shadow">
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->room->name ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->check_in ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->check_out ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->days ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->price_day ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->total_price ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->payment_code ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $booking->room->status ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
