<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input id="title"
                  name="title"
                  type="text"
                  value="{{ old('title', $post->title) }}"
                  class="w-full mt-1 block"
    />
    <x-input-error :messages="$errors->get('title')" />
</div>
<div>
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body"
                name="body"
                class="w-full mt-1"
    >{{ old('body', $post->body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')" />
</div>
<div>
    <x-input-label for="published_at" :value="__('Published at')" />
    <x-text-input id="published_at"
                  name="published_at"
                  type="date"
                  value="{{ old('published_at', $post->published_at) }}"
                  class="w-full mt-1 block"
    />
    <x-input-error :messages="$errors->get('published_at')" />
</div>
