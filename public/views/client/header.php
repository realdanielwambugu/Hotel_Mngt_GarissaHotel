<div class="w-full h-16 bgColor-sec fixed ">
    <div class="fx fx-i-c h-16">
        <div class="w-3/12 fx fx-j-c fx-i-c bgColor-sec h-16">
            <h3 class="color-pri ff-sec fw-bold fs-md">
                GarissaHotel
            </h3>
        </div>

        <div class="w-8/12 bgColor-sec fx fx-j-btw">
            <div class="w-4/12 fx fx-j-a fx-i-c bgColor-sec h-16">
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line" href="/client/home">
                        Home
                    </a>
                </h5>
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line"  href="/client/rooms">
                        Rooms
                    </a>
                </h5>
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line"  href="client/facilities">
                        Facilities
                    </a>
                </h5>
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line"  href="client/support">
                        Support
                    </a>
                </h5>
            </div>

            <?php if (!auth()->check()): ?>
                <div class="w-2/12 fx fx-j-a fx-i-c bgColor-sec h-16">
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line" href="/signup">
                            Signup
                        </a>
                    </h5>
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line" href="/login">
                            Login
                        </a>
                    </h5>
                </div>
            <?php else: ?>
                <div class="w-2/12 fx fx-j-a fx-i-c bgColor-sec h-16">
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line"
                        href="/client/profile/<?= auth()->id(); ?>">
                            Account
                        </a>
                    </h5>
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line" href="/logout">
                            Logout
                        </a>
                    </h5>
                </div>
            <?php endif; ?>



        </div>
    </div>
</div>
