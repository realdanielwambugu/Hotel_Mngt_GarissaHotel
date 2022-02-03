
<div class="w-7/12 fw-600 mb-2 m-0-auto">
    <div class="txt-h-c">
        <input type="hidden" name="room_id" value="<?= $invoice['room_id'] ?>">
        <input type="hidden" name="user_id" value="<?= auth()->id() ?>">
        <input type="hidden" name="check_in" value="<?= $invoice['check_in'] ?>">
        <input type="hidden" name="check_out" value="<?= $invoice['check_out'] ?>">
        <div class="w-full fx fx-j-btw pt-5 color-800">
            <h3>Price/day:</h3>
            <h3 class="color-pri-700">Ksh <?= $invoice['price_day']  ?></h3>
            <input type="hidden" name="price_day" value="<?= $invoice['price_day']  ?>">
        </div>
        <div class="w-full fx fx-j-btw pt-5 color-800">
            <h3>Days:</h3>
            <h3 class="color-pri-700"> <?= $invoice['days']  ?> Days</h3>
            <input type="hidden" name="days" value="<?= $invoice['days']  ?>">
        </div>
        <div class="w-full fx fx-j-btw pt-5 color-800">
            <h3>Total Price:</h3>
            <input type="hidden" name="total_price"
            value="<?= $total_price = $invoice['price_day'] * $invoice['days']  ?>">
            <h3 class="color-pri-700"> Ksh <?= $total_price  ?></h3>
        </div>
    </div>
    <div class="py-4 txt-h-l">
        <label for="payment_code" class="block py-4 fs-sm color-pri-600">Payment Code</label>
        <div class="bgColor-pri-200 py-2 px-2">
            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
            focus:b-color-pri outline-0"
            type="text" name="payment_code" placeholder="eg: Myygxvs5552">
        </div>
    </div>
    <div class="w-full">
       <p id="response2" class="w-full pt-4 txt-h-c"></p>
       <div class="w-full fx fx-j-a">
           <button id="back_to_date" class="bgColor-pri
           rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
           hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
           type="button" name="button">
              Back
           </button>
           <button id="add_room_btn" class="bgColor-pri
           rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
           hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
           type="button" name="button"
           onclick="(new Ajax).form('payment')
                              .loader('add_room_btn')
                              .flush('response2')
                              .send();">
               Checkout now
           </button>
       </div>
    </div>
</div>
<script type="text/javascript">
$("#back_to_date").click(function()
{
    $("#dates").show('slow');
    $("#payment").hide('slow');
});
</script>
