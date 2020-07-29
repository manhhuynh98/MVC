<style>
.page-item{
    list-style: none;
    float: left;
    margin-right: 10px;
    padding: 2px 10px;
    border: 1px solid black;
}
.page-item a{
    text-decoration-line: none;
}
</style>

@foreach ($tin as $item)
    {{$item->id}}<br>
    {{$item->tieude}}<br>
@endforeach

{!!$tin->links()!!}
