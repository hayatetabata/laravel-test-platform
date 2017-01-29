<form action="{{url('download')}}" method="post">
{{ csrf_field() }}
    <input type="textbox" value="{{ date("Y/m/d") }}">
    <input type="submit" value="download">
</form>
