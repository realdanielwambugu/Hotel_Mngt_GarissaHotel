<div class="color-3 fs-xl">
    <h4>Room already booked between:</h4>
    <p><?= $check_in ?> - <?= $check_out ?></p>
    <p>Please choose another date or another room</p>
    <button id="back_to_date1" class="bgColor-pri
    rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
    hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
    type="button" name="button">
       Back
    </button>

</div>
<script type="text/javascript">
$("#back_to_date1").click(function()
{
    $("#dates").show('slow');
    $("#payment").hide('slow');
});

</script>
