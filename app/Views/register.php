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

                <?php $validation = \Config\Services::validation();?>
                <form action="<?= site_url('/postregister')?>" method="post" enctype="multipart/form-data" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="username flex flex-col mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?= old('username')?>" class="<?= ($validation->hasError('username'))?'border-red-500':'' ?> px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('username')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('username');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="email flex flex-col mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="<?= ($validation->hasError('username'))?'border-red-500':'' ?> px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('email')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('email');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="image flex flex-col mb-3">
                        <label for="image">Profile Picture</label>
                        <input type="file" name="image" id="image" class="<?= ($validation->hasError('username'))?'border-red-500':'' ?> px-2 py-1 bg-white rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                        <?php if ($validation->hasError('image')):?>
                            <small class="text-red-500 font-semibold"><?= $validation->getError('image');?></small>
                        <?php endif;?>
                        </div>
                    </div>
                    <div class="password flex flex-col mb-5">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="<?= ($validation->hasError('username'))?'border-red-500':'' ?> px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('password')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('password');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="pass-confirm flex flex-col mb-5">
                        <label for="pass-confirm">Confirm Password</label>
                        <input type="password" name="pass-confirm" id="pass-confirm" class="<?= ($validation->hasError('username'))?'border-red-500':'' ?> px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('pass-confirm')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('pass-confirm');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="button flex">
                        <button type="submit" class="w-full px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition hover:duration-500 ease-in-out">Submit<i class="ri-arrow-right-line ml-2"></i></button>
                    </div>
                </form>

            </div>
            <div class="content mt-4">
                <div class="register">
                    <h5 class="text-sm text-center">Already have an account? <a href="<?= site_url('login')?>" class="text-blue-500 hover:text-blue-700 font-semibold">Login</a></h5>
                </div>
            </div>
        </article>
    </main>
<?= $this->endSection() ?>