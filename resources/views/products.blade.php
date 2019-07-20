
<table class="table table-hover" border=1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Hãng</th>
            <th>Giá</th>
            <th>Mô tả</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $value)
        <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>
        <img src="{{$value->image}}" class="img-responsive" alt="Image">
        </td>
        <td>{{$value->cate_id}}</td>
        <td>{{$value->price}}</td>
        <td>{{$value->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
