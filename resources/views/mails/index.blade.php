
<h1>Xin chào: {{$user}}</h1>

<table>
    <tr>
        <td>Họ và tên</td>
        <td>{{$contact->full_name}}</td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td>{{$contact->address}}</td>
    </tr>
    <tr>
        <td>Công ty</td>
        <td>{{$contact->company}}</td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td>{{$contact->content}}</td>
    </tr>
</table>
