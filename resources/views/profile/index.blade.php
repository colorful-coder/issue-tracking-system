<x-app-layout>
    <div class="container mx-auto">
        <h2 class="bg-white px-12 py-4 font-bold">Profile</h2>
        <div class="p-12 clearfix">
            <div class="w-1/4 float-left pr-4">
                <h3 class="font-semibold">Profile Information</h3>
                <p>Update your accuont's profile and email address</p>
            </div>
            <div class="w-3/4 bg-white float-right p-4">
                <form action="" method="">
                     <div>
                        <p class="mb-4">Photo</p>
                        <img id="profile-image" class="rounded-full h-24 w-24 mb-2" src="/images/profile.png" alt="profile image" />
                        <button class="addfiles py-2 px-4 rounded bg-white border border-gray-300">SELECT A NEW PHOTO</button>
                        <input id="profile" type="file" name="files" class="hidden">
                    </div>
                    <div class="mt-6 w-3/4">
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>
                    <div class="mt-6 w-3/4">
                        <label for="email" class="label">Email</label>
                        <input type="text" name="email" value="" class="form-control">
                    </div>
                    <div class="mt-6 text-right">
                        <x-button>Save</x-button>
                    </div>
                </form>
            </div>
        </div>
        <div class="p-12 clearfix">
                <div class="w-1/4 float-left pr-4">
                    <h3 class="font-semibold">Update Password</h3>
                    <p>Ensure your account is using a long,random password to stay secure.</p>
                </div>
                <div class="w-3/4 bg-white float-right p-4">
                    <form action="" method="">
                        <div class="mt-6 w-3/4">
                            <label for="sammry" class="label">Current Password</label>
                            <input type="text" name="" value="" class="form-control">
                        </div>
                        <div class="mt-6 w-3/4">
                            <label for="sammry" class="label">New Password</label>
                            <input type="text" name="" value="" class="form-control">
                        </div>
                        <div class="mt-6 w-3/4">
                            <label for="sammry" class="label">Confirm Password</label>
                            <input type="text" name="" value="" class="form-control">
                        </div>
                        <div class="mt-6 text-right">
                            <x-button>Save</x-button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</x-app-layout>
<style>
    .clearfix::after {
        content: "";
        display: block;
        clear: both;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/profile.js"></script>
