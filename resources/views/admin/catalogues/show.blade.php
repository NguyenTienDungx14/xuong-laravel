@extends('admin.layouts.master')

@section('title')
    Xem chi tiết danh sách danh mục sản phẩm: {{ $model->name }}
@endsection

@section('content')
    <table>
        <tr>
            <th>Trường</th>
            <th>Giá trị</th>
        </tr>
        @foreach($model->toArray() as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>
                    @php
                    if ($key == 'cover'){
                        $url = \Illuminate\Support\Facades\Storage::url($value);
                           echo "<img src='$url' alt='' width='50px'>";
                    } elseif (\Illuminate\Support\Str::contains($key,'is_')) {
                        echo $value ? '<span class="badge bg-danger">YES</span>':'<span class="badge bg-warning">NO</span>';
                    } else {
                        echo $value;
                    }
                    @endphp

                </td>
            </tr>
        @endforeach
    </table>
@endsection
