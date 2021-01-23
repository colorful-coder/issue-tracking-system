<x-app-layout>
    <div class="container mx-auto px-6 py-12">
        <div class="mx-auto w-1/2">
            <div class="card">

                <div class="card-header">
                    <h3 class="font-bold">Create Project</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('project.store') }}" method="POST">

                        @csrf

                        <!-- name -->
                        <div class="mt-6">
                            <label for="summary" class="label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') ring-1 ring-red-500 @enderror">
                            @error('name')
                                <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-12">
                            <x-button>Create</x-button>
                            <a href="{{ route('project.index') }}" class="btn btn-secondary ml-4">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
