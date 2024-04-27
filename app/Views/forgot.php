<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    <title>Forgot Password</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="h-screen flex flex-col justify-center items-center gap-y-4 overflow-hidden">
        <article class="w-80 h-10">
            <?php if(session()->getFlashData('message')): ?>
                <div class="alert h-full bg-green-100 flex justify-center items-center rounded-lg">
                    <small class="text-center text-green-700 font-semibold"><i class="ri-check-line mr-2"></i><?= session()->getFlashData('message') ?></small>
                </div>
            <?php endif; ?>
            <?php if(session()->getFlashData('error')): ?>
                <div class="alert h-full bg-red-100 flex justify-center items-center rounded-lg">
                    <small class="text-center text-red-700 font-semibold"><i class="ri-close-line mr-2"></i><?= session()->getFlashData('error') ?></small>
                </div>
            <?php endif; ?>
        </article>
        <article class="w-80 p-5 rounded-xl bg-gray-100">
            <div class="title">
                <h1 class="text-center text-xl font-semibold text-blue-500 mb-4">Forgot Password</h1>
            </div>
            <div class="content">

                <?php $validation = \Config\Services::validation();?>
                <form action="<?= site_url('/postforgot')?>" method="post" autocomplete="off">
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
                    <div class="button flex">
                        <button type="submit" class="w-full px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition hover:duration-500 ease-in-out">Reset Password<i class="ri-arrow-right-line ml-2"></i></button>
                    </div>
                </form>

            </div>
        </article>
    </main>
<?= $this->endSection() ?>