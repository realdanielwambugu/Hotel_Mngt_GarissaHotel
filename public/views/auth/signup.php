<?php require_once view('header'); ?>

<body>
    <main style='background-image:url("<?= basePath() ?>/public/assets/images/static/bg7.jpg")'
    class="w-full ff-pri bgColor-1 h-screen py-5 bg-no-repeat bg-cover color-1-800">
        <form id="signup_form" action="signup" method="post"
          class="w-11/12 lg:w-5/12 m-0-auto bgColor-pri-600 py-10 shadow-around">

            <div class="w-8/12 m-0-auto mb-5 color-1-800">
                <h2 class="py-1"><?= app_name() ?></h2>
                <p class="color-pri-700-600 fw-600">Register your account</p>
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2 color-1-800">
                <label for="fullName" class="block py-2 fs-sm">Full Name</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri-700 outline-0 bgColor-1-800"
                type="text" name="fullName" placeholder="john doe">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2 color-1-800">
                <label for="email" class="block py-2 fs-sm">Email</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri-700 outline-0 bgColor-1-800"
                type="text" name="email" placeholder="johndoe@gmail.com">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2 color-1-800">
                <label for="password" class="block py-2 fs-sm">Password</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri-700 outline-0 bgColor-1-800"
                type="password" name="password" placeholder="12345678">
            </div>

            <div class="fw-600 w-8/12 m-0-auto mb-2 color-1-800">
                <label for="confirmPassword" class="block py-2 fs-sm">
                    Confirm Password
                </label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri-700 outline-0 bgColor-1-800"
                type="password" name="confirmPassword" placeholder="12345678">
            </div>

            <p id="response" class="w-full txt-h-c"></p>

            <div class="w-7/12 m-0-auto">
                <button id="signup_btn" class="w-full bgColor-pri rounded py-3 color-1
                mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                type="button"
                onclick="(new Ajax).form('signup_form')
                                   .loader('signup_btn')
                                   .flush('response')
                                   .send();">
                    Sign Up
                </button>
            </div>

            <div class="w-7/12 m-0-auto fw-bold txt-h-c fs-sm py-4">
                Already have an account?
                <a  class="no-line color-1" href="/signin">
                    Sign In
                </a>
            </div>

        </form>

    </main>
</body>

<?php require_once view('footer'); ?>
