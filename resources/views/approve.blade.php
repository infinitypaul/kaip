<form action="" method="post">
<select name="approve">
    @foreach($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
</select>
    <input type="submit" value="Approve">
</form>