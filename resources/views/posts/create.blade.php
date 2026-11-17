<x-layout>
    <h1 class="text-center">Post something!</h1>
    <div class="container d-flex align-items-center justify-content-center">
        <form action="{{ route('published') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title" class="form-label my-2">Title</label>
            <input type="text" class="form-control my-2 @error('title') is-invalid @enderror" id="title"
                name="title" placeholder="Title" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="author" class="form-label my-2">Author Name</label>
            <input type="text" class="form-control my-2 @error('author') is-invalid @enderror" id="author"
                name="author" placeholder="Author Name" value="{{ old('author') }}">
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-field">
                <label for="exampleFormControlInput1" class="form-label my-2">Email address</label>
                <input type="email" name="email" class="form-control my-2" id="exampleFormControlInput1"
                    placeholder="name@example.com" value="{{ old('email') }}">
                <div class="form-text">
                    We’ll never share your email with anyone else.
                </div>
            </div>

            <div class="form-field">
                <label for="img" class="form-label">Large file input example</label>
                <input class="form-control form-control-lg my-2" id="img" name="img" type="file">
            </div>

            <div class="form-field">
                <label for="content" class="form-label my-2">Content</label>
                <textarea class="form-control my-2 @error('content') is-invalid @enderror" id="content" name="content" rows="4">{{ old('content') }}</textarea>
            </div>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-field">
                <input type="checkbox" id="checkbox" name="checkbox" class="check mt-2">
                <div class="form-field-content">
                    <label for="checkbox" class="@error('checkbox') is-invalid @enderror">Agree to terms and
                        conditions</label>
                </div>
                @error('checkbox')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn-solid theme-primary align-self-start mt-5" type="submit">Submit</button>
        </form>
    </div>
</x-layout>
