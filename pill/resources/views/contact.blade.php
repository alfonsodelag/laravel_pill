@if(session('message'))
        <p>{{session('message')}}</p>
@endif
<form method="POST" action="{{url('message')}}">
    {{ csrf_field() }}
    <label for="title">Title:</label><input type="text" name="title">
    <label for="email">E-mail:</label><input type="email" name="email">
    <label for="user_ID">User ID</label><input type="number" name="user_ID">
    <label for="block_text">Text:</label>
    <textarea name="block_text" rows="4" cols="50"></textarea>
    <input type="submit">
</form>


