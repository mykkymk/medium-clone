<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('post.store') }}" enctype="multipart/form-data"  method="post">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" class="block mt-1 w-full border-gray-700 dark:bg-gray-900 shadow-sm rounded-md
                                focus:border-indigo-500 focus:ring-indigo-500" type="file" name="image" :value="old('image')" required autofocus />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-700
                                dark:bg-gray-900  rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="">Select a Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Content')" />
                            <x-input-textarea id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required />
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-4">Submit</x-primary-button>
                    </form>
                </div>
            </div>
       </div>

    </div>
</x-app-layout>
