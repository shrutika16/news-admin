<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add News Category') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="py-10">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden bg-white">
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <form action="{{ route('news_portal.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                                <input
                                    type="text"
                                    class="
                                        shadow
                                        appearance-none
                                        border
                                        rounded
                                        w-full
                                        py-2 px-3
                                        text-gray-700
                                        leading-tight
                                        focus:outline-none
                                        focus:shadow-outline
                                    "
                                    name="title"
                                    id="titleInput"
                                    placeholder="Enter Title"
                                    wire:model="title"
                                >
                                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Slug:</label>
                                <input
                                    type="text"
                                    name="slug"
                                    class="
                                        shadow
                                        appearance-none
                                        border
                                        rounded
                                        w-full
                                        py-2 px-3
                                        text-gray-700
                                        leading-tight
                                        focus:outline-none
                                        focus:shadow-outline
                                    "
                                    id="titleInput"
                                    placeholder="Enter Slug"
                                    wire:model="slug"
                                >
                                @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full sm:ml-3 sm:w-auto">
                                <button type="submit" class="inline-flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            </span>
                            <span class="mt-3 flex w-full sm:mt-0 sm:w-auto">
                                <a href="{{ route('news_portal.index') }}" class="inline-flex bg-white hover:bg-gray-200 border border-gray-300 text-gray-500 font-bold py-2 px-4 rounded">Cancel</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>

@push('scripts')
@endpush
