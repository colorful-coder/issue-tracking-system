<x-app-layout>
    <div class="container mx-auto px-6 py-12">
        <div class="card">

            <div class="card-header flex justify-between">
                <h3 class="font-bold">Report Issue</h3>
                <h3>Project: <a href="" class="link">eCommerce Portal</a></h3>
            </div>

            <div class="card-body">
                <form action="#" method="POST">

                    <!-- Category -->
                    <div>
                        <label for="category" class="label">Category</label>
                        <select class="form-control" id="category">
                            <option value="">-- Select Category --</option>
                            <option value="">Bug</option>
                            <option value="">Customer Feedback</option>
                        </select>
                    </div>

                    <!-- Severity -->
                    <div class="mt-6">
                        <label for="severity" class="label"> Severity </label>

                        <div class="mt-1">
                            <input type="radio" class="form-check-input ml-2" name="severity" id="feature">
                            <label for="feature" class="label"> Feature </label>

                            <input type="radio" class="form-check-input ml-2" name="severity" id="severity">
                            <label for="severity" class="label"> Minor</label>

                            <input type="radio" class="form-check-input ml-2" name="severity" id="major">
                            <label for="major" class="label"> Major </label>

                            <input type="radio" class="form-check-input ml-2" name="severity" id="crash">
                            <label for="crash" class="label"> Crash </label>
                        </div>
                    </div>

                    <!-- Priority -->
                    <div class="mt-6">
                        <label for="priority" class="label"> Priority </label>

                        <div class="mt-1">
                            <input type="radio" class="form-check-input ml-2" name="priority" id="low">
                            <label for="low" class="label"> Low </label>

                            <input type="radio" class="form-check-input ml-2" name="priority" id="normal">
                            <label for="normal" class="label"> Normal </label>

                            <input type="radio" class="form-check-input ml-2" name="priority" id="important">
                            <label for="important" class="label"> Important </label>

                            <input type="radio" class="form-check-input ml-2" name="priority" id="urgent">
                            <label for="urgent" class="label"> Urgent </label>
                        </div>
                    </div>

                    <!-- Assign To -->
                    <div class="mt-6">
                        <label for="assign_to" class="label">Assign To</label>
                        <select class="form-control" id="assign_to" name="assign_to">
                            <option value="">-- Select Developer --</option>
                            <option value="">Mg Mg</option>
                            <option value="">Kyaw Kyaw</option>
                            <option value="">Aung Aung</option>
                        </select>
                    </div>

                    <!-- Issue Summary -->
                    <div class="mt-6">
                        <label for="summary" class="label">Issue Summary</label>
                        <input type="text" name="summary" class="form-control">
                    </div>

                    <!-- Detail -->
                    <div class="mt-6">
                        <label for="detail" class="label">Detail</label>
                        <textarea name="detail" class="form-control" id="detail"></textarea>
                    </div>

                    <!-- Screenshot or Reference -->
                    <div class="mt-6">
                        <label for="image" class="label">Screenshot or Reference</label>
                        <input type="file" name="image" class="ml-6" id="image">
                    </div>

                    <div class="mt-12">
                        <x-button>Submit issue</x-button>
                        <a href="/issue" class="btn btn-secondary ml-4">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
