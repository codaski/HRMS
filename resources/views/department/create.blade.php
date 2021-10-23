<x-master>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Department') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('department.store') }}">
                @csrf

                <!-- Name -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="mt-1 block w-full border-gray-200 border" type="name" name="name" value="{{ $department->name }}" />
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>


                    <!-- Slug -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="slug" value="{{ __('Slug') }}" />
                        <x-jet-input id="slug" class="mt-1 block w-full border-gray-200 border" type="slug" name="slug" value="department('slug')" />
                        <x-jet-input-error for="slug" class="mt-2" />
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <x-jet-button class="ml-4">
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
