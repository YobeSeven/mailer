@extends("layouts.index")
@section("content")
    <h1 class="text-danger">Hello home</h1>

    <form action="{{route("mail.store")}}" method="POST">
        @csrf
        <div>
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail" value="{{old("mail")}}" required>
        </div>
        <div>
            <label for="subject">subject</label>
            <input type="text" name="subject" id="subject" value="{{old("subject")}}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"  required>{{old("content")}}</textarea>
        </div>
        <button type="submit">Send email</button>
    </form>
@endsection
