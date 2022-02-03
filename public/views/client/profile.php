<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec">
        <?php require_once view('client/header'); ?>
        <div class="w-full pt-16">
            <div class="w-11/12 m-0-auto h-auto">
                <div class="w-4/12 fx fx-j-a m-0-auto ">
                    <button class="bgColor-pri-200
                  px-10 py-3 color-pri mt-5 border-0 fw-500 fw-bold
                    hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                    type="button" onclick="(new Ajax).route('/client/account')
                                                    .loader('container')
                                                    .container('container')
                                                    .send();">
                        Settings
                    </button>

                    <button  class="bgColor-pri-200
                    px-10 py-3 color-pri mt-5 border-0 fw-500 fw-bold
                    hover:bgColor-pri-700 outline-0 pointer rounded fs-s"
                    type="button" onclick="(new Ajax).route('/client/bookings')
                                                    .loader('container')
                                                    .container('container')
                                                    .send();">
                        Bookings
                    </button>
                </div>

                 <div id="container" class="txt-h-c">

                    <?php require_once view('client/partials/account'); ?>

                 </div>

            </div>

        </div>

    </main>

    <?php require_once view('client/footer'); ?>

</body>

<?php require_once view('footer'); ?>
