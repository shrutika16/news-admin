@push('styles')
<!--  Flatpicker Styles  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit News') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="py-10">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden bg-white">
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <form action="{{ route('news.update',  $news->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
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
                                    value="{{ $news->title }}"
                                >
                                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Img Src:</label>
                                <input
                                    type="text"
                                    name="img_src"
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
                                    placeholder="Enter Img Src"
                                    wire:model="img_src"
                                    value="{{ $news->img_src }}"
                                >
                                @error('img_src') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">News Url:</label>
                                <input
                                    type="text"
                                    name="news_url"
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
                                    value="{{ $news->news_url }}"
                                    id="titleInput"
                                    placeholder="Enter News Url"
                                    wire:model="news_url"
                                >
                                @error('news_url') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Short Desc:</label>
                                <input
                                    type="text"
                                    name="short_desc"
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
                                    placeholder="Enter Short Desc"
                                    wire:model="short_desc"
                                    value="{{ $news->short_desc }}"
                                >
                                @error('short_desc') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                                <textarea
                                    row="4"
                                    name="long_desc"
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
                                    placeholder="Enter Description"
                                    wire:model="long_desc"
                                >
                                {{ $news->long_desc }}
                                </textarea>
                                @error('long_desc') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Date Time:</label>
                                <input
                                    type="text"
                                    name="date_time"
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
                                    placeholder="Enter Date Time"
                                    wire:model="date_time"
                                    value="{{ $news->date_time }}"
                                >
                                @error('date_time') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                                <select
                                    class="
                                        form-control
                                        shadow
                                        appearance-none
                                        border
                                        rounded
                                        w-full
                                        py-2 px-3
                                        text-gray-700
                                        leading-tight
                                        focus:outline-none
                                        focus:shadow-outline" name="category">
                                    <option value="">Choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{  ($category->id == $news->category_id) ? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">News Portal:</label>
                                <select
                                    class="
                                        form-control
                                        shadow
                                        appearance-none
                                        border
                                        rounded
                                        w-full
                                        py-2 px-3
                                        text-gray-700
                                        leading-tight
                                        focus:outline-none
                                        focus:shadow-outline"
                                    name="news_portal"
                                >
                                    <option value="">Choose News Portal</option>
                                    @foreach ($newsPortals as $newsPortal)
                                        <option value="{{ $newsPortal->id }}" {{  ($newsPortal->id == $news->news_portal_id) ? 'selected' : '' }} >{{ $newsPortal->title }}</option>
                                    @endforeach
                                </select>
                                @error('news_portal') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0  pb-4">
                                <label for="titleInput" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <select
                                    class="
                                        form-control
                                        shadow
                                        appearance-none
                                        border
                                        rounded
                                        w-full
                                        py-2 px-3
                                        text-gray-700
                                        leading-tight
                                        focus:outline-none
                                        focus:shadow-outline"
                                    name="status"
                                >
                                    <option value="">Choose Status</option>
                                    <option value="1" {{  ($news->is_active == '1') ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{  ($news->is_active == '0') ? 'selected' : '' }}>In-Active</option>

                                </select>
                                @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full sm:ml-3 sm:w-auto">
                                <button type="submit" class="inline-flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            </span>
                            <span class="mt-3 flex w-full sm:mt-0 sm:w-auto">
                                <a href="{{ route('news.index') }}" class="inline-flex bg-white hover:bg-gray-200 border border-gray-300 text-gray-500 font-bold py-2 px-4 rounded">Cancel</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>

@push('scripts')
<script>
    $("#basicDate").flatpickr({
        enableTime: true,
        dateFormat: "F, d Y H:i"
    });

</script>
@endpush
