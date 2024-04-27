<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    <title>Dashboard</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="h-screen overflow-hidden">
        <nav class="w-full h-[10%] px-10 flex justify-end items-center">
            <a href="" class="px-4 py-2 bg-red-100 hover:bg-red-500 text-red-500 hover:text-white font-semibold rounded transition hover:duration-500 ease-in-out"><i class="ri-logout-box-r-line mr-2"></i>Logout</a>
        </nav>
        <article class="w-full h-[90%] px-60 flex">
            <section class="w-[25%] flex justify-center">
                <img src="<?= base_url()?>assets/img/default-image.png" alt="Image" class="h-1/3">
            </section>
            <section class="w-[75%] p-4">
                <div class="title">
                    <h1 class=" text-blue-500 text-xl font-semibold">Information</h1>
                </div>
                <div class="content mt-4">
                    <label class="font-light">Username</label>
                    <h5 class="font-semibold mb-4">Zyan M. Alkanza</h5>

                    <label class="font-light">Email Address</label>
                    <h5 class="font-semibold">zyan.mujaddid@gmail.com</h5>
                </div>
            </section>
        </article>
    </main>
<?= $this->endSection() ?>