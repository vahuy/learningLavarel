<h1>Laravel Form</h1>

<form action="/aftersubmit" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Post title</label>
    <input id="title" type="text"class="@error('title') is-invalid @enderror"/>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit">
</form>

<h2>End form demo</h2>