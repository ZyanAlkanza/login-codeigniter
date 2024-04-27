<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    <title>Login</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="h-screen flex justify-center items-center overflow-hidden">
        <article class="w-80 p-5 rounded-xl bg-gray-100">
            <div class="title">
                <h1 class="text-center text-xl font-semibold text-blue-500 mb-4">Login</h1>
            </div>
            <div class="content">
                <div class="email flex flex-col mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please enter your email</small>
                    </div>
                </div>
                <div class="password flex flex-col mb-5">
                    <div class="content flex justify-between">
                        <label for="password">Password</label>
                        <a href="" class="text-blue-500 hover:text-blue-700 text-sm font-light ">Forgot Password?</a>
                    </div>
                    <input type="password" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please enter your password</small>
                    </div>
                </div>
                <div class="button flex">
                    <button type="submit" class="w-full px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition hover:duration-500 ease-in-out">Login<i class="ri-arrow-right-line ml-2"></i></button>
                </div>
            </div>
            <div class="content mt-4">
                <div class="register">
                    <h5 class="text-sm text-center">Don't have an account? <a href="" class="text-blue-500 hover:text-blue-700 font-semibold">Register</a></h5>
                </div>
            </div>
        </article>
    </main>
<?= $this->endSection() ?>