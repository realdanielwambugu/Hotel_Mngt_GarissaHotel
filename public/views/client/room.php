<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec"
    style='background-image:url("<?= basePath() ?>/public/assets/images/static/bg7.jpg")'>
        <?php require_once view('client/header'); ?>
        <div class="w-full py-24">
            <div class="w-10/12 m-0-auto h-auto">
                <div class="fx">
                    <div class="w-2/5 shadow rounded-1 bgColor-1">
                        <div class="w-full rounded-1 m-0-auto">
                            <img class="w-full h-full cover rounded-1"
                            src="<?= images_path("/hotels_pic/{$room->image}")?>" alt="hotel">
                        </div>
                        <div class="w-full h-48 txt-h-c pb-2">
                            <h2 class="py-3 color-pri">
                                <?= $room->name ?>
                            </h2>
                            <div class="fw-bold-600 w-7/12 m-0-auto fs-xl fx fx-j-a">
                               <p> <i class="fa fa-bed"></i>
                                   <?= $room->beds ?> Beds
                               </p>
                               <p><i class="fa fa-bath"></i>
                                   <?= $room->baths ?> Baths
                               </p>
                            </div>
                            <div class="w-10/12 m-0-auto color-pri-800">
                                <h2 class="pt-6">
                                    Ksh <?= $room->price ?>/day
                                </h2>
                            </div>

                        </div>
                    </div>

                    <div class="w-2/3">
                        <div id="dates">
                          <form id="book_room" action="/client/invoice" method="post">
                              <input type="hidden" name="room_id" value="<?= $room->id ?>">
                              <input type="hidden" name="user_id" value="<?= auth()->id() ?>">
                            <div class="fx">
                                <div class="w-9/12 fw-600 mb-2  pl-4">
                                    <label for="open" class="block py-2 fs-sm color-pri-600">
                                        Check In
                                    </label>
                                    <div class="py-2">
                                        <input class="hide w-full py-2 px-2 rounded
                                        b-color-sec-300 border-2 focus:b-color-pri
                                        outline-0" type="date" name="check_in" data-input
                                        id="Date">
                                    </div>
                                </div>
                                <div class="w-8/12 fw-600 mb-2">
                                    <label for="open" class="block py-2 fs-sm color-pri-600">
                                        Check Out
                                    </label>
                                    <div class="py-2">
                                        <input class="hide w-full py-2 px-2 rounded
                                        b-color-sec-300 border-2 focus:b-color-pri
                                        outline-0" type="date" name="check_out" data-input
                                        id="Date1">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full fx fx-j-c">
                                <div class="pb-4">
                                    <p id="response" class="w-full pt-4"></p>
                                    <button id="Continue_to_checkout" class="bgColor-pri
                                    rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                                    hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                                    type="button" onclick="(new Ajax).form('book_room')
                                                                    .loader('total_payment')
                                                                    .flush('total_payment')
                                                                    .container('total_payment')
                                                                    .send();">
                                        Continue to checkout
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                          <form class="w-full hide py-16 bgColor-1" id="payment" action="/client/book_room" method="post">
                                 <div id="total_payment" class="txt-h-c">

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once view('client/footer'); ?>

    </main>
    <script type="text/javascript">
    var date = new Date();
    var now = date.getTime();
    $("#Date").flatpickr({
        enableTime: false,
        inline: true,
        minDate: "today"
    });
    $("#Date1").flatpickr({
        enableTime: false,
        inline: true,
        minDate: "today"
    });

    $("#Continue_to_checkout").click(function()
    {
        if ($("#Date").val() && $("#Date1").val())
        {
            if (new Date($("#Date").val()).getTime() < new Date($("#Date1").val()).getTime())
            {
                $("#dates").hide('slow');
                $("#payment").show('slow');
            }
            else
            {
                $("#response").html(`
                    <div class='w-full bgColor-3 color-pri p-2'>
                    Invalid date: Check in date should be less than
                    check out date
                    </div>
                `);
            }
        }
        else
        {
            $("#response").html(
                `<div class='w-full bgColor-3 color-pri p-2'>
                    Booking date is required
                </div>`
            );
        }
    });


    </script>
</body>

<?php require_once view('footer'); ?>
