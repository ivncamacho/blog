<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{__('Edit post')}}</h1>
    <a href="{{ route('posts.index') }}">{{__('Back')}}<br/></a>
    <form method="POST" action="{{ route('posts.update'), $post}}">
        @csrf
        <label>
            {{__('Title')}}<br/>
            <input type="text" name="title" value="{{old('title', $post->title)}}" >
            @error('title')
            <br />
            <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br />
        <label>
            {{__('Body')}}<br/>
            <textarea name="body">{{old('body',$post->body)}}</textarea>
            @error('body')
            <br />
            <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br />
        <button type="submit">{{__('Enviar')}}<br/></button>
        <br />
    </form>

</x-layout>
