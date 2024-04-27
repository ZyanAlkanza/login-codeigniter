<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    <title>Reset Password</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="h-screen flex flex-col justify-center items-center gap-y-4 overflow-hidden">
        <article class="w-80 h-14">
            <?php if(session()->getFlashData('message')): ?>
                <div class="alert py-2 bg-green-100 flex justify-center items-center rounded-lg">
                    <i class="ri-check-line mr-2 text-green-700"></i>
                    <small class="text-left text-green-700 font-semibold"><?= session()->getFlashData('message') ?></small>
                </div>
            <?php endif; ?>
            <?php if(session()->getFlashData('error')): ?>
                <div class="alert py-2 bg-red-100 flex justify-center items-center rounded-lg">
                    <i class="ri-close-line mr-2 text-red-700"></i>
                    <small class="text-left text-red-700 font-semibold"><?= session()->getFlashData('error') ?></small>
                </div>
            <?php endif; ?>
        </article>
        <article class="w-80 p-5 rounded-xl bg-gray-100">
            <div class="title">
                <h1 class="text-center text-xl font-semibold text-blue-500 mb-4">Reset Password</h1>
            </div>
            <div class="content">

                <?php $validation = \Config\Services::validation();?>
                <form action="<?= site_url('/postreset')?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="email flex flex-col mb-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('email')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('email');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="token flex flex-col mb-5">
                        <label for="token">Unique Code</label>
                        <input type="text" name="token" id="token" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('token')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('token');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="password flex flex-col mb-5">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
                        <div class="message h-4">
                            <?php if ($validation->hasError('password')):?>
                                <small class="text-red-500 font-semibold"><?= $validation->getError('password');?></small>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="pass-confirm flex flex-col mb-5">
                        <label for="pass-confirm">Password Confirm</label>
                        <input type="password" name="pass-confirm" id="pass-confirm" class="px-2 py-1 rounded focus:outline-none border-2 focus:border-2 border-white focus:border-blue-500" required>
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
        </article>
    </main>
<?= $this->endSection() ?>