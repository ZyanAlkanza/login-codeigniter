<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    <title>Register</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="h-screen flex justify-center items-center overflow-hidden">
        <article class="w-80 p-5 rounded-xl bg-gray-100">
            <div class="title">
                <h1 class="text-center text-xl font-semibold text-blue-500 mb-4">Register</h1>
            </div>
            <div class="content">
                <div class="username flex flex-col mb-3">
                    <label for="username">Username</label>
                    <input type="username" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please enter your username</small>
                    </div>
                </div>
                <div class="email flex flex-col mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please enter your email</small>
                    </div>
                </div>
                <div class="image flex flex-col mb-3">
                    <label for="image">Profile Picture</label>
                    <input type="file" class="px-2 py-1 bg-white rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please upload your image</small>
                    </div>
                </div>
                <div class="password flex flex-col mb-5">
                    <label for="password">Password</label>
                    <input type="password" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please enter your password</small>
                    </div>
                </div>
                <div class="pass-confirm flex flex-col mb-5">
                    <label for="pass-confirm">Confirmation Password</label>
                    <input type="password" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500">
                    <div class="message h-4">
                        <small class="text-red-500 font-semibold">Please enter your confirmation password</small>
                    </div>
                </div>
                <div class="button flex">
                    <button type="submit" class="w-full px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition hover:duration-500 ease-in-out">Submit<i class="ri-arrow-right-line ml-2"></i></button>
                </div>
            </div>
            <div class="content mt-4">
                <div class="register">
                    <h5 class="text-sm text-center">Already have an account? <a href="" class="text-blue-500 hover:text-blue-700 font-semibold">Login</a></h5>
                </div>
            </div>
        </article>
    </main>
<?= $this->endSection() ?>