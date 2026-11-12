<x-layout>
    <h1 class="text-center">Post something!</h1>
    <div class="container d-flex align-items-center justify-content-center">
        <form action="{{ route('published') }}" method="POST">
            @csrf
            <label for="title" class="form-label my-2">Title</label>
            <input type="text" class="form-control my-2" id="title" name="title" placeholder="Title">
            <label for="author" class="form-label my-2">Author Name</label>
            <input type="text" class="form-control my-2" id="author" name="author" placeholder="Author Name">
            <div class="form-field">
                <label for="exampleFormControlInput1" class="form-label my-2">Email address</label>
                <input type="email" class="form-control my-2" id="exampleFormControlInput1"
                    placeholder="name@example.com">
                <div class="form-text">
                    We’ll never share your email with anyone else.
                </div>
            </div>
            <div class="form-field">
                <label for="content" class="form-label my-2">Content</label>
                <textarea class="form-control my-2" id="content" name="content" rows="4"></textarea>
            </div>
            <div class="form-field">
                <input type="checkbox" id="fieldValidateCheck" class="check mt-2" required>
                <div class="form-field-content">
                    <label for="fieldValidateCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
            </div>
            <button class="btn-solid theme-primary align-self-start mt-5" type="submit">Submit</button>
        </form>
    </div>
</x-layout>
